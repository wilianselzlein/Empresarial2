<?php
App::uses('AppController', 'Controller');
/**
 * Grupoclientes Controller
 *
 * @property Grupocliente $Grupocliente
 */
class GrupoclientesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
                $this->Filter->addFilters(
			array('filter1' => array('OR' => array(
				'Grupocliente.gruclicodigo' => array('operator' => 'LIKE'),
				'Grupocliente.gruclinome' => array('operator' => 'LIKE')
				)
                            )
			)
		);
		$this->Filter->setPaginate('order', 'Grupocliente.gruclinome ASC'); // optional
		$this->Filter->setPaginate('limit', 10); // optional
		$this->Filter->setPaginate('conditions', $this->Filter->getConditions());

		$this->Grupocliente->recursive = 0;
		$this->set('grupoclientes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Grupocliente->exists($id)) {
			throw new NotFoundException(__('Invalid grupocliente'));
		}
		$options = array('conditions' => array('Grupocliente.' . $this->Grupocliente->primaryKey => $id));
		$this->set('grupocliente', $this->Grupocliente->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Grupocliente->create();
			if ($this->Grupocliente->save($this->request->data)) {
				$this->Session->setFlash(__('Grupo de Cliente foi salvo.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Grupo de Cliente nao pode ser salvo. Tente novamente.'));
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
		if (!$this->Grupocliente->exists($id)) {
			throw new NotFoundException(__('Invalid grupocliente'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Grupocliente->save($this->request->data)) {
				$this->Session->setFlash(__('Grupo de Cliente foi salvo.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Grupo de Cliente nao pode ser salvo. Tente novamente.'));
			}
		} else {
			$options = array('conditions' => array('Grupocliente.' . $this->Grupocliente->primaryKey => $id));
			$this->request->data = $this->Grupocliente->find('first', $options);
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
		$this->Grupocliente->id = $id;
		if (!$this->Grupocliente->exists()) {
			throw new NotFoundException(__('Invalid grupocliente'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Grupocliente->delete()) {
			$this->Session->setFlash(__('Grupo de Cliente deletado'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Grupo de Cliente nao deletado'));
		$this->redirect(array('action' => 'index'));
	}
}
