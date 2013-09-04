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
