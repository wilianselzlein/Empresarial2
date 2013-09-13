<?php
App::uses('AppController', 'Controller');
/**
 * Financeiros Controller
 *
 * @property Financeiro $Financeiro
 */
class FinanceirosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
                $this->Filter->addFilters(
			array('filter1' => array('OR' => array(
				'Financeiro.finregistro' => array('operator' => 'LIKE'),
				'Financeiro.fintipo' => array('operator' => 'LIKE'),
				'Financeiro.finempresa' => array('operator' => 'LIKE'),
				'Financeiro.finold' => array('operator' => 'LIKE'),
				'Financeiro.fincliente' => array('operator' => 'LIKE'),
				'Financeiro.findcto1' => array('operator' => 'LIKE'),
				'Financeiro.findcto2' => array('operator' => 'LIKE'),
				'Financeiro.finparcela' => array('operator' => 'LIKE'),
				'Financeiro.finemissao' => array('operator' => 'LIKE'),
				'Financeiro.finvcto' => array('operator' => 'LIKE'),
				'Financeiro.finprevvcto' => array('operator' => 'LIKE'),
				'Financeiro.finvalor' => array('operator' => 'LIKE'),
				'Financeiro.findesccomercial' => array('operator' => 'LIKE'),
				'Financeiro.fintipocob' => array('operator' => 'LIKE'),
				'Financeiro.finsubgrupofin' => array('operator' => 'LIKE'),
				'Financeiro.finconta' => array('operator' => 'LIKE'),
				'Financeiro.finnossonum' => array('operator' => 'LIKE'),
				'Financeiro.finsituacao' => array('operator' => 'LIKE'),
				'Financeiro.finvalorpago' => array('operator' => 'LIKE'),
				'Financeiro.findesconto' => array('operator' => 'LIKE'),
				'Financeiro.finacrescimo' => array('operator' => 'LIKE'),
				'Financeiro.fintaxa' => array('operator' => 'LIKE'),
				'Financeiro.finliquido' => array('operator' => 'LIKE'),
				'Financeiro.finobs' => array('operator' => 'LIKE'),
				'Financeiro.finfaturamento' => array('operator' => 'LIKE'),
				'Financeiro.findataprotesto' => array('operator' => 'LIKE'),
				'Empresa.empcodigo' => array('operator' => 'LIKE'),
				'Empresa.empnome' => array('operator' => 'LIKE'),
				'Cliente.clirazao' => array('operator' => 'LIKE'),
				'Cliente.clifantasia' => array('operator' => 'LIKE'),
				'Tipocob.tipcobnome' => array('operator' => 'LIKE'),
				'Subgrupofin.subgfnome' => array('operator' => 'LIKE')
				)
                            ),
			    'filter2' => array(
				    'Financeiro.fincliente' => array(
					    'select' => $this->Filter->select('Cliente:', $this->Financeiro->Cliente->find('list'))
				    )
			    ),
			    'filter3' => array(
				    'Financeiro.finsubgrupofin' => array(
					    'select' => $this->Filter->select('Subgrupo Fin.:', $this->Financeiro->Subgrupofin->find('list'))
				    )
			    ),
			    'filter4' => array(
				    'Financeiro.finvcto' => array(
					'operator' => 'between',
				        'between' => array( 'text' => __(' e ', true), 'date' => true))
			    ),
			    'filter5' => array(
				    'Financeiro.finemissao' => array(
					'operator' => 'between',
					'between' => array('text' => __(' e ', true), 'date' => true))
			    )
			)
		);
		$this->Filter->setPaginate('order', 'Empresa.empnome ASC'); // optional
		$this->Filter->setPaginate('limit', 10); // optional
		$this->Filter->setPaginate('conditions', $this->Filter->getConditions());
                
		$this->Financeiro->recursive = 0;
		$this->set('financeiros', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Financeiro->exists($id)) {
			throw new NotFoundException(__('Invalid financeiro'));
		}
		$options = array('conditions' => array('Financeiro.' . $this->Financeiro->primaryKey => $id));
		$this->set('financeiro', $this->Financeiro->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Financeiro->create();
			//debug($this->request->data); die;
			//if ($this->request->data['Financeiro']['findcto2'] > 0)
			    $this->request->data['Financeiro']['finold'] = '1';
			//else
			//    $this->request->data['Financeiro']['finold'] = '2';
			
			$this->request->data['Financeiro']['finsituacao'] = '1';
			if ($this->Financeiro->save($this->request->data)) {
				$id = $this->Financeiro->getLastInsertId(); 
				if (isset($this->request->data['CentroCusto'])) {
				    foreach($this->request->data['CentroCusto'] as $financeirocentrocusto) {
					    //$ret = $this->query("INSERT INTO Notes (user_id,date_added,date_modified,details)  VALUES (1,'2008-01-01 17:22','2008-01-01','Test');"); 
					    $financeirocentrocusto['finccregistro']=$id;
					    //$financeirocentrocusto['finccpercentual']=0.00;
					    $this->Financeiro->FinanceiroCentroCusto->create();
					    $this->Financeiro->FinanceiroCentroCusto->save($financeirocentrocusto);
				    }
				}
				if (isset($this->request->data['PlanoConta'])) {
				    foreach($this->request->data['PlanoConta'] as $financeiroplanocontum) {
					    $financeiroplanocontum['finpcregistro']=$id;
					    //$financeiroplanocontum['finpcpercentual']=0.00;
					    $this->Financeiro->FinanceiroPlanoConta->create();
					    $this->Financeiro->FinanceiroPlanoConta->save($financeiroplanocontum);
				    }
				}
				$this->Session->setFlash(__('Documento ' . $this->request->data['Financeiro']['findcto1'] . ' salvo. Id ' . $id));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Documento nao pode ser salvo. Tente novamente.'));
			}
		}
		$empresas = $this->Financeiro->Empresa->find('list');
		$clientes = $this->Financeiro->Cliente->find('list', array('conditions' => array('Cliente.clisituacao' => 'A')));
		$tipocobs = $this->Financeiro->Tipocob->find('list', array('conditions' => array('Tipocob.tipcobsituacao' => 'A')));
		$subgrupofins = $this->Financeiro->Subgrupofin->find('list');
		$centrocustos = $this->Financeiro->FinanceiroCentroCusto->CentroCusto->find('list');
		$planocontas = $this->Financeiro->FinanceiroPlanoConta->PlanoConta->find('list');
		$this->set(compact('empresas', 'clientes', 'tipocobs', 'subgrupofins', 'centrocustos', 'planocontas'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Financeiro->exists($id)) {
			throw new NotFoundException(__('Invalid financeiro'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
                    //debug($this->request->data); die;
			if ($this->Financeiro->save($this->request->data)) {
			    	if (isset($this->request->data['PlanoConta'])) {
				    foreach($this->request->data['PlanoConta'] as $financeiroplanocontum) {
					    $financeiroplanocontum['finpcregistro']=$id;
					    //$financeiroplanocontum['finpcpercentual']=0.00;
					    if ($financeiroplanocontum['finpcid'] == 0)
						$this->Financeiro->FinanceiroPlanoConta->create();
					    $this->Financeiro->FinanceiroPlanoConta->save($financeiroplanocontum);
				    }
				}
				if (isset($this->request->data['CentroCusto'])) {
				    foreach($this->request->data['CentroCusto'] as $financeirocentrocusto) {
					    $financeirocentrocusto['finccregistro']=$id;
					    //$financeirocentrocusto['finccpercentual']=0.00;
					    if ($financeirocentrocusto['finccid'] == 0)
					        $this->Financeiro->FinanceiroCentroCusto->create();
					    $this->Financeiro->FinanceiroCentroCusto->save($financeirocentrocusto);
				    }
				}
				$this->Session->setFlash(__('Documento salvo.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Documento nao pode ser salvo. Tente novamente.'));
			}
		} else {
			$options = array('conditions' => array('Financeiro.' . $this->Financeiro->primaryKey => $id));
			$this->request->data = $this->Financeiro->find('first', $options);
		}
		$empresas = $this->Financeiro->Empresa->find('list');
		$clientes = $this->Financeiro->Cliente->find('list', array('conditions' => array('Cliente.clisituacao' => 'A')));
		$tipocobs = $this->Financeiro->Tipocob->find('list', array('conditions' => array('Tipocob.tipcobsituacao' => 'A')));
		$subgrupofins = $this->Financeiro->Subgrupofin->find('list');
		$centrocustos = $this->Financeiro->FinanceiroCentroCusto->CentroCusto->find('list');
		$planocontas = $this->Financeiro->FinanceiroPlanoConta->PlanoConta->find('list');
                $financeirocentrocustos = $this->Financeiro->FinanceiroCentroCusto->find('all', array('conditions' => array('FinanceiroCentroCusto.finccregistro' => $id)));
                $financeiroplanocontas = $this->Financeiro->FinanceiroPlanoConta->find('all', array('conditions' => array('FinanceiroPlanoConta.finpcregistro' => $id)));
		$this->set(compact('empresas', 'clientes', 'tipocobs', 'subgrupofins', 'centrocustos', 'planocontas', 'financeirocentrocustos', 'financeiroplanocontas'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Financeiro->id = $id;
		if (!$this->Financeiro->exists()) {
			throw new NotFoundException(__('Invalid financeiro'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Financeiro->delete()) {
			$this->Session->setFlash(__('Documento deletado'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Documento nao deletado'));
		$this->redirect(array('action' => 'index'));
	}
}
