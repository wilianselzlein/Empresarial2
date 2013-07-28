<?php
App::uses('AppController', 'Controller');
/**
 * Bancos Controller
 *
 * @property Banco $Banco
 */
class BancosController extends AppController {

	function edit2() {
		if (!empty($this->request->data)) {
			$this->request->data[$this->request->data['id']] = $this->request->data['value'];
			if ($this->Banco->save($this->request->data)) {
				$thisId=$this->Banco->id;
				$this->header("Content-Type: application/json");
				echo $this->request->data['value'];
				exit;
			} else {
				return 'Fail';
			}
		}
		$this->Autorender = FALSE;
		exit;
	}
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Banco->recursive = 0;
		$this->set('bancos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Banco->exists($id)) {
			throw new NotFoundException(__('Invalid banco'));
		}
		$options = array('conditions' => array('Banco.' . $this->Banco->primaryKey => $id));
		$this->set('banco', $this->Banco->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Banco->create();
			if ($this->Banco->save($this->request->data)) {
				$this->Session->setFlash(__('The banco has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The banco could not be saved. Please, try again.'));
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
		if (!$this->Banco->exists($id)) {
			throw new NotFoundException(__('Invalid banco'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Banco->save($this->request->data)) {
				$this->Session->setFlash(__('The banco has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The banco could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Banco.' . $this->Banco->primaryKey => $id));
			$this->request->data = $this->Banco->find('first', $options);
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
		$this->Banco->id = $id;
		if (!$this->Banco->exists()) {
			throw new NotFoundException(__('Invalid banco'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Banco->delete()) {
			$this->Session->setFlash(__('Banco deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Banco was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
