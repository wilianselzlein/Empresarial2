<?php
App::uses('AppController', 'Controller');
/**
 * Centrocustos Controller
 *
 * @property Centrocusto $Centrocusto
 */
class CentrocustosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Centrocusto->recursive = 0;
		$this->set('centrocustos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Centrocusto->exists($id)) {
			throw new NotFoundException(__('Invalid centrocusto'));
		}
		$options = array('conditions' => array('Centrocusto.' . $this->Centrocusto->primaryKey => $id));
		$this->set('centrocusto', $this->Centrocusto->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Centrocusto->create();
			$this->request->data['Centrocusto']['cencusempresa'] = $this->request->data['Centrocusto']['empresa'];
			if ($this->Centrocusto->save($this->request->data)) {
				$this->Session->setFlash(__('The centrocusto has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The centrocusto could not be saved. Please, try again.'));
			}
		}
		$empresa = $this->Centrocusto->Empresa->find('list', array('fields' => array('Empresa.empcodigo', 'Empresa.empnome')));
		$this->set(compact('empresa'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Centrocusto->exists($id)) {
			throw new NotFoundException(__('Invalid centrocusto'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			$this->request->data['Centrocusto']['cencusempresa'] = $this->request->data['Centrocusto']['empresa'];
			if ($this->Centrocusto->save($this->request->data)) {
				$this->Session->setFlash(__('The centrocusto has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The centrocusto could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Centrocusto.' . $this->Centrocusto->primaryKey => $id));
			$this->request->data = $this->Centrocusto->find('first', $options);
		}
		$empresa = $this->Centrocusto->Empresa->find('list', array('fields' => array('empresa.empcodigo', 'empresa.empnome')));
		$this->set(compact('empresa'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Centrocusto->id = $id;
		if (!$this->Centrocusto->exists()) {
			throw new NotFoundException(__('Invalid centrocusto'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Centrocusto->delete()) {
			$this->Session->setFlash(__('Centrocusto deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Centrocusto was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
