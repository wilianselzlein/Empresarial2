<?php
App::uses('AppController', 'Controller');
/**
 * Estados Controller
 *
 * @property Estado $Estado
 */
class EstadosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Estado->recursive = 0;
		$this->set('estados', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Estado->exists($id)) {
			throw new NotFoundException(__('Invalid estado'));
		}
		$options = array('conditions' => array('Estado.' . $this->Estado->primaryKey => $id));
		$this->set('estado', $this->Estado->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Estado->create();
			if ($this->Estado->save($this->request->data)) {
				$this->Session->setFlash(__('Estado foi salvo.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O estado nao pode ser salvo. Tente novamente.'));
			}
		}
		$pais = $this->Estado->Pais->find('list', array('fields' => array('Pais.paicodigo', 'Pais.painome')));
		$this->set(compact('pais'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Estado->exists($id)) {
			throw new NotFoundException(__('Invalid estado'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Estado->save($this->request->data)) {
				$this->Session->setFlash(__('O estado foi salvo.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O estado nao pode ser salvo. Tente novamente.'));
			}
		} else {
			$options = array('conditions' => array('Estado.' . $this->Estado->primaryKey => $id));
			$this->request->data = $this->Estado->find('first', $options);
		}
		$pais = $this->Estado->Pais->find('list', array('fields' => array('Pais.paicodigo', 'Pais.painome')));
		$this->set(compact('pais'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Estado->id = $id;
		if (!$this->Estado->exists()) {
			throw new NotFoundException(__('Invalid estado'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Estado->delete()) {
			$this->Session->setFlash(__('Estado deletado'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Estado nao deletado'));
		$this->redirect(array('action' => 'index'));
	}
}
