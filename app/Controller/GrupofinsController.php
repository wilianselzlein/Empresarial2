<?php
App::uses('AppController', 'Controller');
/**
 * Grupofins Controller
 *
 * @property Grupofin $Grupofin
 */
class GrupofinsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
                $this->Filter->addFilters(
			array('filter1' => array('OR' => array(
				'Grupofin.grufincodigo' => array('operator' => 'LIKE'),
				'Grupofin.grufinnome' => array('operator' => 'LIKE')
				)
                            )
			)
		);
		$this->Filter->setPaginate('order', 'Grupofin.grufinnome ASC'); // optional
		$this->Filter->setPaginate('limit', 10); // optional
		$this->Filter->setPaginate('conditions', $this->Filter->getConditions());

		$this->Grupofin->recursive = 0;
		$this->set('grupofins', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Grupofin->exists($id)) {
			throw new NotFoundException(__('Invalid grupofin'));
		}
		$options = array('conditions' => array('Grupofin.' . $this->Grupofin->primaryKey => $id));
		$this->set('grupofin', $this->Grupofin->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Grupofin->create();
			if ($this->Grupofin->save($this->request->data)) {
				$this->Session->setFlash(__('Grupo Fin. foi salvo.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Grupo Fin. nao pode ser salvo. Tente novamente.'));
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
		if (!$this->Grupofin->exists($id)) {
			throw new NotFoundException(__('Invalid grupofin'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Grupofin->save($this->request->data)) {
				$this->Session->setFlash(__('Grupo Fin. foi salvo.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Grupo Fin. nao pode ser salvo. Tente novamente.'));
			}
		} else {
			$options = array('conditions' => array('Grupofin.' . $this->Grupofin->primaryKey => $id));
			$this->request->data = $this->Grupofin->find('first', $options);
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
		$this->Grupofin->id = $id;
		if (!$this->Grupofin->exists()) {
			throw new NotFoundException(__('Invalid grupofin'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Grupofin->delete()) {
			$this->Session->setFlash(__('Grupo Fin. deletado'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Grupo Fin. nao deletado'));
		$this->redirect(array('action' => 'index'));
	}
}
