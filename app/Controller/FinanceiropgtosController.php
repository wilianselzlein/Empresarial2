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
                $this->Filter->addFilters(
			array('filter1' => array('OR' => array(
				'Financeiropgto.finpgregistro' => array('operator' => 'LIKE'),
				'Financeiropgto.finpgpgto' => array('operator' => 'LIKE'),
				'Financeiropgto.finpgtipo' => array('operator' => 'LIKE'),
				'Financeiropgto.finpgdata' => array('operator' => 'LIKE'),
				'Financeiropgto.finpgvalorpago' => array('operator' => 'LIKE'),
				'Financeiropgto.finpgdesconto' => array('operator' => 'LIKE'),
				'Financeiropgto.finpgacrescimo' => array('operator' => 'LIKE'),
				'Financeiropgto.finpgtaxa' => array('operator' => 'LIKE'),
				'Financeiropgto.finpgliquido' => array('operator' => 'LIKE'),
				'Financeiropgto.finpgobs' => array('operator' => 'LIKE'),
				'Tipocob.tipcobnome' => array('operator' => 'LIKE')
				)
                            ),
			    'filter2' => array(
				    'Financeiropgto.finpgtipocob' => array(
					    'select' => $this->Filter->select('Tipo Cob.:', $this->Financeiropgto->Tipocob->find('list'))
				    )
			    ),
			    'filter3' => array(
				    'Financeiropgto.finpgdata' => array(
					'operator' => 'between',
				        'between' => array( 'text' => __(' e ', true), 'date' => true))
			    ),
			    'filter4' => array(
				    'Financeiropgto.finpgtipo' => array(
                                        'select' => $this->Filter->select('Tipo:', array('P' => 'Parcial', 'Q' => 'Quitação')))
                            )
                        )
		);
		$this->Filter->setPaginate('order', 'Financeiropgto.finpgregistro ASC'); // optional
		$this->Filter->setPaginate('limit', 10); // optional
		$this->Filter->setPaginate('conditions', $this->Filter->getConditions());

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
	public function add($id = null) {
		if ($this->request->is('post')) {
			$this->Financeiropgto->create();
			if ($this->Financeiropgto->save($this->request->data)) {
				$this->Session->setFlash(__('Pagamento salvo.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Pagamento não pode ser salvo. Tente novamente.'));
			}
		}
                $pgto = null;
                if ($id <> null)
                    $pgto = $this->Financeiropgto->find('first', array('fields' => 'coalesce(max(Financeiropgto.finpgpgto),0) + 1',
                        'conditions' => array('Financeiropgto.finpgregistro =' => $id)));
		$tipocobs = $this->Financeiropgto->Tipocob->find('list');
		$this->set(compact('tipocobs', 'id', 'pgto'));
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
