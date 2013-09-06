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
		$this->Filter->addFilters(
			array('filter1' => array('OR' => array(
				'Centrocusto.cencuscodigo' => array('operator' => 'LIKE'),
                                'Centrocusto.cencusanalitico' => array('operator' => 'LIKE'),
                                'Centrocusto.cencusnome' => array('operator' => 'LIKE')
				)
			)
			)
		);
		$this->Filter->setPaginate('order', 'Centrocusto.cencusnome ASC'); // optional
		$this->Filter->setPaginate('limit', 10); // optional
		$this->Filter->setPaginate('conditions', $this->Filter->getConditions());

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
			throw new NotFoundException(__('Invalid centro de custo'));
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
			if ($this->Centrocusto->save($this->request->data)) {
				$this->Session->setFlash(__('O Centro Custo foi salvo.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O Centro de Custo nao pode ser salvo. Tente novamente.'));
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
			throw new NotFoundException(__('Invalid centro de custo'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Centrocusto->save($this->request->data)) {
				$this->Session->setFlash(__('O Centro de Custo foi salvo.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O Centro de Custo nao pode ser salvo. Tente novamente.'));
			}
		} else {
			$options = array('conditions' => array('Centrocusto.' . $this->Centrocusto->primaryKey => $id));
			$this->request->data = $this->Centrocusto->find('first', $options);
		}
		$empresa = $this->Centrocusto->Empresa->find('list', array('fields' => array('Empresa.empcodigo', 'Empresa.empnome')));
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
			$this->Session->setFlash(__('Centro de Custo deletado'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Centrocusto nao deletado'));
		$this->redirect(array('action' => 'index'));
	}
}
