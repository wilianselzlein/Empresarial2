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
	
	public function financeiro($id = null, $bLayout = false) {
		if (! $bLayout) {
			$this->layout = false;
		}
		$this->set('_Layout', $bLayout);
		$options = array(
			//'fields' => array('Noticia.titulo', 'Noticia.resumo'),
			'conditions' => array('Financeirocentrocusto.finccregistro' => $id)
			//'order' => array('Noticia.created' => 'DESC'),
			//'limit' => 100
		);
		$this->paginate = $options;
		// Roda a consulta, já trazendo os resultados paginados
		$financeirocentrocustos = $this->paginate('Financeirocentrocusto');
		// Envia os dados pra view
		$this->set('financeirocentrocustos', $financeirocentrocustos);
	}
}
