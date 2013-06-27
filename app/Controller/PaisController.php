<?php
App::uses('AppController', 'Controller');
/**
 * Pais Controller
 *
 * @property Pai $Pai
 */
class PaisController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Pai->recursive = 0;
		$this->set('pais', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Pai->exists($id)) {
			throw new NotFoundException(__('Invalid pai'));
		}
		$options = array('conditions' => array('Pai.' . $this->Pai->primaryKey => $id));
		$this->set('pai', $this->Pai->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Pai->create();
			if ($this->Pai->save($this->request->data)) {
				$this->Session->setFlash(__('The pai has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pai could not be saved. Please, try again.'));
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
		if (!$this->Pai->exists($id)) {
			throw new NotFoundException(__('Invalid pai'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Pai->save($this->request->data)) {
				$this->Session->setFlash(__('The pai has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pai could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Pai.' . $this->Pai->primaryKey => $id));
			$this->request->data = $this->Pai->find('first', $options);
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
		$this->Pai->id = $id;
		if (!$this->Pai->exists()) {
			throw new NotFoundException(__('Invalid pai'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Pai->delete()) {
			$this->Session->setFlash(__('Pai deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Pai was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
