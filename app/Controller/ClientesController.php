<?php
App::uses('AppController', 'Controller');
/**
 * Clientes Controller
 *
 * @property Cliente $Cliente
 */
class ClientesController extends AppController {

/**
 * index method
 *s
 * @return void
 */
	public function index() {
		$this->Filter->addFilters(
			array('filter1' => array('OR' => array(
				'Cliente.clicodigo' => array('operator' => 'LIKE'),
				'Cliente.clipessoa' => array('operator' => 'LIKE'),
				'Cliente.clirazao' => array('operator' => 'LIKE'),
				'Cliente.clifantasia' => array('operator' => 'LIKE'),
				'Cliente.cliendereco' => array('operator' => 'LIKE'),
				'Cliente.clibairro' => array('operator' => 'LIKE'),
				'Cliente.clicomplemento' => array('operator' => 'LIKE'),
				'Cliente.clinumero' => array('operator' => 'LIKE'),
				'Cliente.clicidade' => array('operator' => 'LIKE'),
				'Cliente.clicep' => array('operator' => 'LIKE'),
				'Cliente.clicxpostal' => array('operator' => 'LIKE'),
				'Cliente.clifone' => array('operator' => 'LIKE'),
				'Cliente.clifax' => array('operator' => 'LIKE'),
				'Cliente.clicelular' => array('operator' => 'LIKE'),
				'Cliente.cliemail' => array('operator' => 'LIKE'),
				'Cliente.cliemailalt' => array('operator' => 'LIKE'),
				'Cliente.clihomepage' => array('operator' => 'LIKE'),
				'Cliente.clicontatofin' => array('operator' => 'LIKE'),
				'Cliente.clicnpj' => array('operator' => 'LIKE'),
				'Cliente.clicpf' => array('operator' => 'LIKE'),
				'Cliente.cliie' => array('operator' => 'LIKE'),
				'Cliente.cligrupo' => array('operator' => 'LIKE'),
				'Cliente.clisituacao' => array('operator' => 'LIKE'),
				'Cliente.clidatanasc' => array('operator' => 'LIKE'),
				'Cliente.clinaturalidade' => array('operator' => 'LIKE'),
				'Cliente.clipai' => array('operator' => 'LIKE'),
				'Cliente.climae ' => array('operator' => 'LIKE'),
				'Cliente.clirg ' => array('operator' => 'LIKE'),
				'Cliente.cliorgaoexprg' => array('operator' => 'LIKE'),
				'Cliente.clidataexprg' => array('operator' => 'LIKE'),
				'Cliente.cliformapgto' => array('operator' => 'LIKE'),
				'Cliente.clidiafatura' => array('operator' => 'LIKE'),
				'Cliente.cliim' => array('operator' => 'LIKE'),
				'Cidade.cidnome' => array('operator' => 'LIKE'),
				'Grupocliente.gruclinome' => array('operator' => 'LIKE'),
				'Formapgto.fornome' => array('operator' => 'LIKE'),
				'Tipocob.tipcobnome' => array('operator' => 'LIKE'),
				'Naturalidade.cidnome' => array('operator' => 'LIKE')
				)
			    ),
			    'filter2' => array(
				    'Cliente.clisituacao' => array(
					    'select' => $this->Filter->select('Situação:', array('A' => 'Ativos', 'I' => 'Inativos'))
				    )
			    ),
			    'filter3' => array(
				    'Cliente.cligrupo' => array(
					    'select' => $this->Filter->select('Grupos:', $this->Cliente->Grupocliente->find('list'))
				    )
			    )
			)
		);
		$this->Filter->setPaginate('order', 'Cliente.clirazao ASC'); // optional
		$this->Filter->setPaginate('limit', 10); // optional
		$this->Filter->setPaginate('conditions', $this->Filter->getConditions());

		$this->Cliente->recursive = 0;
		$this->set('clientes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Cliente->exists($id)) {
			throw new NotFoundException(__('Invalid cliente'));
		}
		$options = array('conditions' => array('Cliente.' . $this->Cliente->primaryKey => $id));
		$this->set('cliente', $this->Cliente->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Cliente->create();
			if ($this->Cliente->save($this->request->data)) {
				$this->Session->setFlash(__('O cliente foi salvo.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O cliente nao pode ser salvo. Tente novamente.'));
			}
		}
		$grupos = $this->Cliente->Grupocliente->find('list');
		$cidades = $this->Cliente->Cidade->find('list');
		$naturalidades = $this->Cliente->Naturalidade->find('list');
		$formapgtos = $this->Cliente->Formapgto->find('list');
		$tipocobs = $this->Cliente->Tipocob->find('list');
		$this->set(compact('cidades', 'naturalidades', 'grupos', 'formapgtos', 'tipocobs'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Cliente->exists($id)) {
			throw new NotFoundException(__('Invalid cliente'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Cliente->save($this->request->data)) {
				$this->Session->setFlash(__('O cliente foi salvo.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O cliente nao pode ser salvo. Tente novamente.'));
			}
		} else {
			$options = array('conditions' => array('Cliente.' . $this->Cliente->primaryKey => $id));
			$this->request->data = $this->Cliente->find('first', $options);
		}
		$grupos = $this->Cliente->Grupocliente->find('list');
		$cidades = $this->Cliente->Cidade->find('list');
		$naturalidades = $this->Cliente->Naturalidade->find('list');
		$formapgtos = $this->Cliente->Formapgto->find('list');
		$tipocobs = $this->Cliente->Tipocob->find('list');
		$this->set(compact('cidades', 'naturalidades', 'grupos', 'formapgtos', 'tipocobs'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Cliente->id = $id;
		if (!$this->Cliente->exists()) {
			throw new NotFoundException(__('Invalid cliente'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Cliente->delete()) {
			$this->Session->setFlash(__('Cliente deletado'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Cliente nao deletado'));
		$this->redirect(array('action' => 'index'));
	}
}
