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
 *
 * @return void
 */
	public function index() {
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
			$this->request->data['Cliente']['cligrupo'] = $this->request->data['Cliente']['grupos'];
			$this->request->data['Cliente']['clitipcob'] = $this->request->data['Cliente']['tipocobs'];
			$this->request->data['Cliente']['cliformapgto'] = $this->request->data['Cliente']['formapgtos'];
			$this->request->data['Cliente']['clinaturalidade'] = $this->request->data['Cliente']['Naturalidades'];
			$this->request->data['Cliente']['clicidade'] = $this->request->data['Cliente']['cidades'];
			if ($this->Cliente->save($this->request->data)) {
				$this->Session->setFlash(__('The cliente has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cliente could not be saved. Please, try again.'));
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
		        $this->request->data['Cliente']['cligrupo'] = $this->request->data['Cliente']['grupo'];
			$this->request->data['Cliente']['clitipcob'] = $this->request->data['Cliente']['tipocobs'];
			$this->request->data['Cliente']['cliformapgto'] = $this->request->data['Cliente']['formapgtos'];
			$this->request->data['Cliente']['clinaturalidade'] = $this->request->data['Cliente']['Naturalidades'];
			$this->request->data['Cliente']['clicidade'] = $this->request->data['Cliente']['cidades'];
			if ($this->Cliente->save($this->request->data)) {
				$this->Session->setFlash(__('The cliente has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cliente could not be saved. Please, try again.'));
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
			$this->Session->setFlash(__('Cliente deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Cliente was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
