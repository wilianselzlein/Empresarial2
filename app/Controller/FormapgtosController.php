<?php
App::uses('AppController', 'Controller');
/**
 * Formapgtos Controller
 *
 * @property Formapgto $Formapgto
 */
class FormapgtosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Formapgto->recursive = 0;
		$this->set('formapgtos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Formapgto->exists($id)) {
			throw new NotFoundException(__('Invalid formapgto'));
		}
		$options = array('conditions' => array('Formapgto.' . $this->Formapgto->primaryKey => $id));
		$this->set('formapgto', $this->Formapgto->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Formapgto->create();
			if ($this->Formapgto->save($this->request->data)) {
				$this->Session->setFlash(__('The formapgto has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The formapgto could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Formapgto->exists($id)) {
			throw new NotFoundException(__('Invalid formapgto'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Formapgto->save($this->request->data)) {
				$this->Session->setFlash(__('The formapgto has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The formapgto could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Formapgto.' . $this->Formapgto->primaryKey => $id));
			$this->request->data = $this->Formapgto->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Formapgto->id = $id;
		if (!$this->Formapgto->exists()) {
			throw new NotFoundException(__('Invalid formapgto'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Formapgto->delete()) {
			$this->Session->setFlash(__('Formapgto deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Formapgto was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
