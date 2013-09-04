<?php
App::uses('AppController', 'Controller');
/**
 * Planoconta Controller
 *
 * @property Planocontum $Planocontum
 */
class PlanocontaController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Planocontum->recursive = 0;
		$this->set('planoconta', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Planocontum->exists($id)) {
			throw new NotFoundException(__('Invalid planocontum'));
		}
		$options = array('conditions' => array('Planocontum.' . $this->Planocontum->primaryKey => $id));
		$this->set('planocontum', $this->Planocontum->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Planocontum->create();
			if ($this->Planocontum->save($this->request->data)) {
				$this->Session->setFlash(__('Plano de Conta salvo.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Plano de Conta nao pode ser salvo. Tente novamente.'));
			}
		}
		$empresa = $this->Planocontum->Empresa->find('list');
		$this->set(compact('empresa'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Planocontum->exists($id)) {
			throw new NotFoundException(__('Invalid planocontum'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Planocontum->save($this->request->data)) {
				$this->Session->setFlash(__('Plano de Conta foi salvo.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Plano de Conta nao pode ser salvo. Tente novamente.'));
			}
		} else {
			$options = array('conditions' => array('Planocontum.' . $this->Planocontum->primaryKey => $id));
			$this->request->data = $this->Planocontum->find('first', $options);
		}
		$empresa = $this->Planocontum->Empresa->find('list');
		$this->set(compact('empresa'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Planocontum->id = $id;
		if (!$this->Planocontum->exists()) {
			throw new NotFoundException(__('Invalid planocontum'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Planocontum->delete()) {
			$this->Session->setFlash(__('Plano de Conta deletado'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Plano de Conta nao deletado'));
		$this->redirect(array('action' => 'index'));
	}
}
