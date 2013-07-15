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
			debug($this->request->data); 
			if ($this->Financeiro->save($this->request->data)) {
				$id = $this->Financeiro->getLastInsertId(); 
				if (isset($this->request->data['CentroCusto'])) {
				    foreach($this->request->data['CentroCusto'] as $financeirocentrocusto) {
					    //$ret = $this->query("INSERT INTO Notes (user_id,date_added,date_modified,details)  VALUES (1,'2008-01-01 17:22','2008-01-01','Test');"); 
					    $financeirocentrocusto['finccregistro']=$id;
					    $financeirocentrocusto['finccpercentual']=0.00;
					    $this->Financeiro->FinanceiroCentroCusto->create();
					    $this->Financeiro->FinanceiroCentroCusto->save($financeirocentrocusto);
				    }
				}
				if (isset($this->request->data['PlanoConta'])) {
				    foreach($this->request->data['PlanoConta'] as $financeiroplanocontum) {
					    $financeiroplanocontum['finpcregistro']=$id;
					    $financeiroplanocontum['finpcpercentual']=0.00;
					    $this->Financeiro->FinanceiroPlanoConta->create();
					    $this->Financeiro->FinanceiroPlanoConta->save($financeiroplanocontum);
				    }
				}
				$this->Session->setFlash(__('Documento  ' . $this->request->data['Financeiro']['findcto1'] . ' salvo. Id ' . $id));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The financeiro could not be saved. Please, try again.'));
			}
		}
		$empresas = $this->Financeiro->Empresa->find('list');
		$clientes = $this->Financeiro->Cliente->find('list');
		$tipocobs = $this->Financeiro->Tipocob->find('list');
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
			if ($this->Financeiro->save($this->request->data)) {
				$this->Session->setFlash(__('The financeiro has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The financeiro could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Financeiro.' . $this->Financeiro->primaryKey => $id));
			$this->request->data = $this->Financeiro->find('first', $options);
		}
		$empresas = $this->Financeiro->Empresa->find('list');
		$clientes = $this->Financeiro->Cliente->find('list');
		$tipocobs = $this->Financeiro->Tipocob->find('list');
		$subgrupofins = $this->Financeiro->Subgrupofin->find('list');
		$this->set(compact('empresas', 'clientes', 'tipocobs', 'subgrupofins'));
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
			$this->Session->setFlash(__('Financeiro deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Financeiro was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
