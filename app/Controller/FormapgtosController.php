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
                $this->Filter->addFilters(
			array('filter1' => array('OR' => array(
				'Formapgto.forcodigo' => array('operator' => 'LIKE'),
				'Formapgto.fornome' => array('operator' => 'LIKE'),
				'Formapgto.fortipo' => array('operator' => 'LIKE'),
				'Formapgto.formesdia' => array('operator' => 'LIKE'),
				'Formapgto.forprazofixo' => array('operator' => 'LIKE'),
				'Formapgto.forsigla' => array('operator' => 'LIKE'),
				'Formapgto.forsituacao' => array('operator' => 'LIKE'),
				'Formapgto.forcontabil' => array('operator' => 'LIKE')
				)
			)
			)
		);
		$this->Filter->setPaginate('order', 'Formapgto.fornome ASC'); // optional
		$this->Filter->setPaginate('limit', 10); // optional
		$this->Filter->setPaginate('conditions', $this->Filter->getConditions());
                
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
				$this->Session->setFlash(__('Forma de Pgto salva.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Forma de Pgto nao pode ser salva. Tente novamente.'));
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
				$this->Session->setFlash(__('Forma de Pgto salva.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('FOrma de Pgto nao pode ser salva. Tente novamente.'));
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
			$this->Session->setFlash(__('Forma de Pgto deletada'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Forma de Pgto nao deletada'));
		$this->redirect(array('action' => 'index'));
	}
}
