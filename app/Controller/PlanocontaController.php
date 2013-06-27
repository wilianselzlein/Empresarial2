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
				$this->Session->setFlash(__('The planocontum has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The planocontum could not be saved. Please, try again.'));
			}
		}
		$empresas = $this->Planocontum->Empresa->find('list');
		$this->set(compact('empresas'));
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
				$this->Session->setFlash(__('The planocontum has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The planocontum could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Planocontum.' . $this->Planocontum->primaryKey => $id));
			$this->request->data = $this->Planocontum->find('first', $options);
		}
		$empresas = $this->Planocontum->Empresa->find('list');
		$this->set(compact('empresas'));
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
			$this->Session->setFlash(__('Planocontum deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Planocontum was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
