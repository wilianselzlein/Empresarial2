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

}
