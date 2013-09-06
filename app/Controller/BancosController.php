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
		$this->Filter->addFilters(
			array('filter1' => array('OR' => array(
				'Banco.bancodigo' => array('operator' => 'LIKE'),
				'Banco.bannome' => array('operator' => 'LIKE')
				)
			)
			)
		);
		$this->Filter->setPaginate('order', 'Banco.bannome ASC'); // optional
		$this->Filter->setPaginate('limit', 10); // optional
		$this->Filter->setPaginate('conditions', $this->Filter->getConditions());

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
				$this->Session->setFlash(__('O banco foi salvo.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O banco nao pode ser salvo. Tente novamente.'));
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
				$this->Session->setFlash(__('O banco foi salvo.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O banco no pode ser salvo. Tente novamente.'));
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
			$this->Session->setFlash(__('Banco deletado'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Banco nao deletado'));
		$this->redirect(array('action' => 'index'));
	}
}
