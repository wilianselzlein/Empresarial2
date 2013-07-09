<?php
App::uses('AppController', 'Controller');
/**
 * Financeirocentrocustos Controller
 *
 * @property Financeirocentrocusto $Financeirocentrocusto
 */
class FinanceirocentrocustosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Financeirocentrocusto->recursive = 0;
		$this->set('financeirocentrocustos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Financeirocentrocusto->exists($id)) {
			throw new NotFoundException(__('Invalid financeirocentrocusto'));
		}
		$options = array('conditions' => array('Financeirocentrocusto.' . $this->Financeirocentrocusto->primaryKey => $id));
		$this->set('financeirocentrocusto', $this->Financeirocentrocusto->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Financeirocentrocusto->create();
			if ($this->Financeirocentrocusto->save($this->request->data)) {
				$this->Session->setFlash(__('The financeirocentrocusto has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The financeirocentrocusto could not be saved. Please, try again.'));
			}
		}
		$centroCustos = $this->Financeirocentrocusto->CentroCusto->find('list');
		$this->set(compact('centroCustos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Financeirocentrocusto->exists($id)) {
			throw new NotFoundException(__('Invalid financeirocentrocusto'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Financeirocentrocusto->save($this->request->data)) {
				$this->Session->setFlash(__('The financeirocentrocusto has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The financeirocentrocusto could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Financeirocentrocusto.' . $this->Financeirocentrocusto->primaryKey => $id));
			$this->request->data = $this->Financeirocentrocusto->find('first', $options);
		}
		$centroCustos = $this->Financeirocentrocusto->CentroCusto->find('list');
		$this->set(compact('centroCustos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Financeirocentrocusto->id = $id;
		if (!$this->Financeirocentrocusto->exists()) {
			throw new NotFoundException(__('Invalid financeirocentrocusto'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Financeirocentrocusto->delete()) {
			$this->Session->setFlash(__('Financeirocentrocusto deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Financeirocentrocusto was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
