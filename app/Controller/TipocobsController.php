<?php
App::uses('AppController', 'Controller');
/**
 * Tipocobs Controller
 *
 * @property Tipocob $Tipocob
 */
class TipocobsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Tipocob->recursive = 0;
		$this->set('tipocobs', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Tipocob->exists($id)) {
			throw new NotFoundException(__('Invalid Tipo de Cob.'));
		}
		$options = array('conditions' => array('Tipocob.' . $this->Tipocob->primaryKey => $id));
		$this->set('tipocob', $this->Tipocob->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Tipocob->create();
			if ($this->Tipocob->save($this->request->data)) {
				$this->Session->setFlash(__('Tipo de Cob. salvo.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Tipo de Cob. nao pode ser salvo. Tente novamente.'));
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
		if (!$this->Tipocob->exists($id)) {
			throw new NotFoundException(__('Invalid tipocob'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Tipocob->save($this->request->data)) {
				$this->Session->setFlash(__('Tipo de Cob. salvo.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Tipo de Cob. nao pode ser salvo. Tente novamente.'));
			}
		} else {
			$options = array('conditions' => array('Tipocob.' . $this->Tipocob->primaryKey => $id));
			$this->request->data = $this->Tipocob->find('first', $options);
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
		$this->Tipocob->id = $id;
		if (!$this->Tipocob->exists()) {
			throw new NotFoundException(__('Invalid tipocob'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Tipocob->delete()) {
			$this->Session->setFlash(__('Tipo de Cob. deletado'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Tipo de Cob. nao deletado'));
		$this->redirect(array('action' => 'index'));
	}
}
