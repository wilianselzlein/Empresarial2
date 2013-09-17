<?php
App::uses('AppController', 'Controller');
/**
 * Financeiropgtos Controller
 *
 * @property Financeiropgto $Financeiropgto
 */
class FinanceiropgtosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Financeiropgto->recursive = 0;
		$this->set('financeiropgtos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Financeiropgto->exists($id)) {
			throw new NotFoundException(__('Pagamento Invalido'));
		}
		$options = array('conditions' => array('Financeiropgto.' . $this->Financeiropgto->primaryKey => $id));
		$this->set('financeiropgto', $this->Financeiropgto->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Financeiropgto->create();
			if ($this->Financeiropgto->save($this->request->data)) {
				$this->Session->setFlash(__('Pagamento salvo.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Pagamento não pode ser salvo. Tente novamente.'));
			}
		}
		$tipocobs = $this->Financeiropgto->Tipocob->find('list');
		$this->set(compact('tipocobs'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Financeiropgto->exists($id)) {
			throw new NotFoundException(__('Invalid financeiropgto'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Financeiropgto->save($this->request->data)) {
				$this->Session->setFlash(__('Pagamento salvo.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Pagamento não pode ser salvo. Tente novamente.'));
			}
		} else {
			$options = array('conditions' => array('Financeiropgto.' . $this->Financeiropgto->primaryKey => $id));
			$this->request->data = $this->Financeiropgto->find('first', $options);
		}
		$tipocobs = $this->Financeiropgto->Tipocob->find('list');
		$this->set(compact('tipocobs'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Financeiropgto->id = $id;
		if (!$this->Financeiropgto->exists()) {
			throw new NotFoundException(__('Invalid financeiropgto'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Financeiropgto->delete()) {
			$this->Session->setFlash(__('Pagamento deletado'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Pagamento não deletado'));
		$this->redirect(array('action' => 'index'));
	}
}
