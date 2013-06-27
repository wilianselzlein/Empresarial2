<?php
App::uses('AppController', 'Controller');
/**
 * Grupofins Controller
 *
 * @property Grupofin $Grupofin
 */
class GrupofinsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Grupofin->recursive = 0;
		$this->set('grupofins', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Grupofin->exists($id)) {
			throw new NotFoundException(__('Invalid grupofin'));
		}
		$options = array('conditions' => array('Grupofin.' . $this->Grupofin->primaryKey => $id));
		$this->set('grupofin', $this->Grupofin->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Grupofin->create();
			if ($this->Grupofin->save($this->request->data)) {
				$this->Session->setFlash(__('The grupofin has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The grupofin could not be saved. Please, try again.'));
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
		if (!$this->Grupofin->exists($id)) {
			throw new NotFoundException(__('Invalid grupofin'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Grupofin->save($this->request->data)) {
				$this->Session->setFlash(__('The grupofin has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The grupofin could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Grupofin.' . $this->Grupofin->primaryKey => $id));
			$this->request->data = $this->Grupofin->find('first', $options);
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
		$this->Grupofin->id = $id;
		if (!$this->Grupofin->exists()) {
			throw new NotFoundException(__('Invalid grupofin'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Grupofin->delete()) {
			$this->Session->setFlash(__('Grupofin deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Grupofin was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
