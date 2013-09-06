<?php
App::uses('AppController', 'Controller');
/**
 * Cidades Controller
 *
 * @property Cidade $Cidade
 */
class CidadesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Filter->addFilters(
			array('filter1' => array('OR' => array(
				'Cidade.cidcodigo' => array('operator' => 'LIKE'),
				'Cidade.cidnome' => array('operator' => 'LIKE'),
				'Estado.estsigla'   => array('operator' => 'LIKE'),
				'Estado.estnome'   => array('operator' => 'LIKE')
				)
			)
			)
		);
		$this->Filter->setPaginate('order', 'Cidade.cidnome ASC'); // optional
		$this->Filter->setPaginate('limit', 10); // optional
		$this->Filter->setPaginate('conditions', $this->Filter->getConditions());

		$this->Cidade->recursive = 0;
		$this->set('cidades', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Cidade->exists($id)) {
			throw new NotFoundException(__('Invalid cidade'));
		}
		$options = array('conditions' => array('Cidade.' . $this->Cidade->primaryKey => $id));
		$this->set('cidade', $this->Cidade->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Cidade->create();
			if ($this->Cidade->save($this->request->data)) {
				$this->Session->setFlash(__('A cidade foi salva.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('A cidade nao pode ser salva. Tente novamente.'));
			}
		}
		$estados = $this->Cidade->Estado->find('list');
		$this->set(compact('estados'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Cidade->exists($id)) {
			throw new NotFoundException(__('Invalid cidade'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Cidade->save($this->request->data)) {
				$this->Session->setFlash(__('A cidade foi salvo.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('A cidade nao pode ser salva. Tente novamente.'));
			}
		} else {
			$options = array('conditions' => array('Cidade.' . $this->Cidade->primaryKey => $id));
			$this->request->data = $this->Cidade->find('first', $options);
		}
		$estados = $this->Cidade->Estado->find('list');
		$this->set(compact('estados'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Cidade->id = $id;
		if (!$this->Cidade->exists()) {
			throw new NotFoundException(__('Invalid cidade'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Cidade->delete()) {
			$this->Session->setFlash(__('Cidade deletada'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Cidade nao deletada'));
		$this->redirect(array('action' => 'index'));
	}
}
