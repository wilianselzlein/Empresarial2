<?php
App::uses('AppController', 'Controller');
/**
 * Financeiroplanoconta Controller
 *
 * @property Financeiroplanocontum $Financeiroplanocontum
 */
class FinanceiroplanocontasController extends AppController {

	public function financeiro($id = null, $bLayout = false) {
		if (! $bLayout) {
			$this->layout = false;
		}
		$this->set('_Layout', $bLayout);
		$options = array(
			//'fields' => array('Noticia.titulo', 'Noticia.resumo'),
			'conditions' => array('Financeiroplanoconta.finpcregistro' => $id)
			//'order' => array('Noticia.created' => 'DESC'),
			//'limit' => 100
		);
		$this->paginate = $options;
		// Roda a consulta, já trazendo os resultados paginados
		$financeiroplanocontas = $this->paginate('Financeiroplanoconta');
		// Envia os dados pra view
		$this->set('financeiroplanocontas', $financeiroplanocontas);
	}

}
