<?php
App::uses('AppController', 'Controller');
/**
 * Caixalctos Controller
 *
 * @property Caixalcto $Caixalcto
 */
class CaixalctosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Caixalcto->recursive = 0;
		$this->set('caixalctos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Caixalcto->exists($id)) {
			throw new NotFoundException(__('Invalid caixalcto'));
		}
		$options = array('conditions' => array('Caixalcto.' . $this->Caixalcto->primaryKey => $id));
		$this->set('caixalcto', $this->Caixalcto->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Caixalcto->create();
			if ($this->Caixalcto->save($this->request->data)) {
				$this->Session->setFlash(__('Lançamento salvo.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Lançamento não pode ser salvo. Tente novamente.'));
			}
		}
		$formapgtos = $this->Caixalcto->Formapgto->find('list');
		$this->set(compact('formapgtos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Caixalcto->exists($id)) {
			throw new NotFoundException(__('Invalid caixalcto'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Caixalcto->save($this->request->data)) {
				$this->Session->setFlash(__('Lançamento salvo.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Lançamento não pode ser salvo. Tente novamente.'));
			}
		} else {
			$options = array('conditions' => array('Caixalcto.' . $this->Caixalcto->primaryKey => $id));
			$this->request->data = $this->Caixalcto->find('first', $options);
		}
		$formapgtos = $this->Caixalcto->Formapgto->find('list');
		$this->set(compact('formapgtos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Caixalcto->id = $id;
		if (!$this->Caixalcto->exists()) {
			throw new NotFoundException(__('Invalido Lançamento'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Caixalcto->delete()) {
			$this->Session->setFlash(__('Lançamento deletado'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Lançamento não deletado'));
		$this->redirect(array('action' => 'index'));
	}
}
