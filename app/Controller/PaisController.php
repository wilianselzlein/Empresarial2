<?php
App::uses('AppController', 'Controller');
/**
 * Pais Controller
 *
 * @property Pai $Pai
 */
class PaisController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
                $this->Filter->addFilters(
			array('filter1' => array('OR' => array(
				'Pai.paicodigo' => array('operator' => 'LIKE'),
				'Pai.painome' => array('operator' => 'LIKE')
				)
                            )
			)
		);
		$this->Filter->setPaginate('order', 'Pai.painome ASC'); // optional
		$this->Filter->setPaginate('limit', 10); // optional
		$this->Filter->setPaginate('conditions', $this->Filter->getConditions());

		$this->Pai->recursive = 0;
		$this->set('pais', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Pai->exists($id)) {
			throw new NotFoundException(__('Invalid pais'));
		}
		$options = array('conditions' => array('Pai.' . $this->Pai->primaryKey => $id));
		$this->set('pai', $this->Pai->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Pai->create();
			if ($this->Pai->save($this->request->data)) {
				$this->Session->setFlash(__('Pais salvo.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Pais nao pode ser salvo. Tente novamente.'));
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
		if (!$this->Pai->exists($id)) {
			throw new NotFoundException(__('Invalid pai'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Pai->save($this->request->data)) {
				$this->Session->setFlash(__('Pais foi salvo.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Pais nao pode ser salvo. Tente novamente.'));
			}
		} else {
			$options = array('conditions' => array('Pai.' . $this->Pai->primaryKey => $id));
			$this->request->data = $this->Pai->find('first', $options);
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
		$this->Pai->id = $id;
		if (!$this->Pai->exists()) {
			throw new NotFoundException(__('Invalid pai'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Pai->delete()) {
			$this->Session->setFlash(__('Pais deletado'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Pais nao deletado'));
		$this->redirect(array('action' => 'index'));
	}
}
