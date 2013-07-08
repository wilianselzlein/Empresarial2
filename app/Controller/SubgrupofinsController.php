<?php
App::uses('AppController', 'Controller');
/**
 * Subgrupofins Controller
 *
 * @property Subgrupofin $Subgrupofin
 */
class SubgrupofinsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Subgrupofin->recursive = 0;
		$this->set('subgrupofins', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Subgrupofin->exists($id)) {
			throw new NotFoundException(__('Invalid subgrupofin'));
		}
		$options = array('conditions' => array('Subgrupofin.' . $this->Subgrupofin->primaryKey => $id));
		$this->set('subgrupofin', $this->Subgrupofin->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Subgrupofin->create();
			if ($this->Subgrupofin->save($this->request->data)) {
				$this->Session->setFlash(__('The subgrupofin has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The subgrupofin could not be saved. Please, try again.'));
			}
		}
		$grupofins = $this->Subgrupofin->Grupofin->find('list');
		$this->set(compact('grupofins'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Subgrupofin->exists($id)) {
			throw new NotFoundException(__('Invalid subgrupofin'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Subgrupofin->save($this->request->data)) {
				$this->Session->setFlash(__('The subgrupofin has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The subgrupofin could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Subgrupofin.' . $this->Subgrupofin->primaryKey => $id));
			$this->request->data = $this->Subgrupofin->find('first', $options);
		}
		$grupofins = $this->Subgrupofin->Grupofin->find('list');
		$this->set(compact('grupofins'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Subgrupofin->id = $id;
		if (!$this->Subgrupofin->exists()) {
			throw new NotFoundException(__('Invalid subgrupofin'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Subgrupofin->delete()) {
			$this->Session->setFlash(__('Subgrupofin deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Subgrupofin was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
