<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Pages
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

if (!Configure::read('debug')):
	throw new NotFoundException();
endif;
App::uses('Debugger', 'Utility');
?>
<div class="actions">
	<h4><?php echo __('Parâmetros'); ?></h4>
	<ul>
		<li><?php echo $this->Html->link(__('Empresa'), array('controller' => 'empresas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Usuários'), array('controller' => 'users', 'action' => 'index')); ?> </li>
	</ul>
	<br/>
	<h4><?php echo __('Cidades'); ?></h4>
	<ul>
		<li><?php echo $this->Html->link(__('Estados'), array('controller' => 'estados', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Paises'), array('controller' => 'pais', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Cidades'), array('controller' => 'cidades', 'action' => 'index')); ?> </li>
	</ul>
	<br/>
	<h4><?php echo __('Clientes'); ?></h4>
	<ul>
		<li><?php echo $this->Html->link(__('Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Grupos de Clientes'), array('controller' => 'grupoclientes', 'action' => 'index')); ?> </li>
	</ul>
        <br/>
	<h4><?php echo __('Financeiro'); ?></h4>
	<ul>
		<li><?php echo $this->Html->link(__('Financeiro'), array('controller' => 'financeiros', 'action' => 'index')); ?> </li>	
		<li><?php echo $this->Html->link(__('Bancos'), array('controller' => 'bancos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Centros de Custo'), array('controller' => 'centrocustos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Planos de Conta'), array('controller' => 'planoconta', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Tipos de Cobrança'), array('controller' => 'tipocobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Grupos Financeiros'), array('controller' => 'grupofins', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Subgrupos Financeiros'), array('controller' => 'subgrupofins', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Formas de Pgto'), array('controller' => 'formapgtos', 'action' => 'index')); ?> </li>
	</ul>
</div>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript">
    $(function () {
        $('#chart1').highcharts({
            chart: {
                type: 'line',
                marginRight: 130,
                marginBottom: 50
            },
            title: {
                text: 'Gerencial',
                x: -20 //center
            },
            subtitle: {
                text: 'Comparativo Receber e Pagar',
                x: -20
            },
            xAxis: {
                categories: [<?php echo $this->Menu->GrafAnual(''); ?>]
            },
            yAxis: {
                title: {
                    text: 'Valor em R$'
                },
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#808080'
                }]
            },
            tooltip: {
                valueSuffix: 'R$'
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'top',
                x: -10,
                y: 100,
                borderWidth: 0
            },
            series: [{
                name: 'Receber',
                data: [<?php echo $this->Menu->GrafAnual('1'); ?>]
            }, {
                name: 'Pagar',
                data: [<?php echo $this->Menu->GrafAnual('2'); ?>]
            }]
        });
    });
    $(function () {
        $('#chart2').highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false
            },
            title: {
                text: 'Na semana'
            },
            tooltip: {
        	    pointFormat: '{series.name}: <b>{point.percentage}%</b>',
            	percentageDecimals: 1
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        color: '#000000',
                        connectorColor: '#000000',
                        formatter: function() {
                            return '<b>'+ this.point.name +'</b>: '+ this.percentage +' %';
                        }
                    }
                }
            },
            series: [{
                type: 'pie',
                name: 'Percentual',
                data: [
                    ['Pagar', 25.0],
                    {
                        name: 'Receber',
                        y: 75,
                        sliced: true,
                        selected: true
                    }
                ]
            }]
        });
    });
    $(function () {
        $('#chart3').highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false
            },
            title: {
                text: 'No mês'
            },
            tooltip: {
        	    pointFormat: '{series.name}: <b>{point.percentage}%</b>',
            	percentageDecimals: 1
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        color: '#000000',
                        connectorColor: '#000000',
                        formatter: function() {
                            return '<b>'+ this.point.name +'</b>: '+ this.percentage +' %';
                        }
                    }
                }
            },
            series: [{
                type: 'pie',
                name: 'Percentual',
                data: [
                    ['Pagar', 15.0],
                    {
                        name: 'Receber',
                        y: 85,
                        sliced: true,
                        selected: true
                    }
                ]
            }]
        });
    });
    $(function () {
        $('#chart4').highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false
            },
            title: {
                text: 'No ano'
            },
            tooltip: {
        	    pointFormat: '{series.name}: <b>{point.percentage}%</b>',
            	percentageDecimals: 1
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        color: '#000000',
                        connectorColor: '#000000',
                        formatter: function() {
                            return '<b>'+ this.point.name +'</b>: '+ this.percentage +' %';
                        }
                    }
                }
            },
            series: [{
                type: 'pie',
                name: 'Percentual',
                data: [
                    ['Pagar', 5.0],
                    {
                        name: 'Receber',
                        y: 95,
                        sliced: true,
                        selected: true
                    }
                ]
            }]
        });
    });
    $(function () {
        $('#chart5').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: 'Gerencial'
            },
            subtitle: {
                text: 'Total de Receber e Recebidos junto com Total a Pagar e Pagos'
            },
            xAxis: {
                categories: [
                    'Jan',
                    'Feb',
                    'Mar',
                    'Apr',
                    'May',
                    'Jun',
                    'Jul',
                    'Aug',
                    'Sep',
                    'Oct',
                    'Nov',
                    'Dec'
                ]
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Valores em R$'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>R$ {point.y:.1f}</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Receber',
                data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]
    
            }, {
                name: 'Recebidos',
                data: [83.6, 78.8, 98.5, 93.4, 106.0, 84.5, 105.0, 104.3, 91.2, 83.5, 106.6, 92.3]
    
            }, {
                name: 'Pagar',
                data: [48.9, 38.8, 39.3, 41.4, 47.0, 48.3, 59.0, 59.6, 52.4, 65.2, 59.3, 51.2]
    
            }, {
                name: 'Pagos',
                data: [42.4, 33.2, 34.5, 39.7, 52.6, 75.5, 57.4, 60.4, 47.6, 39.1, 46.8, 51.1]
    
            }]
        });
    });
    
</script>
		
<div class="form">
    <?php $valor = $this->Session->read('Auth.User');  //Retorna o array com o id, nome do usuário e password. ?>
    <span class="notice success">Bem vindo(a) <?php echo $valor['username']; ?>! Você está logado no sistema. </span>

    <h3><?php echo 'Registros cadastrados'; ?></h3>
    <p><?php echo 'Registros cadastrados em cada programa:'; ?></p>
    <ul>
	<li><strong><?php echo ClassRegistry::init('Cliente')->find('count'); ?></strong>&nbsp;Cliente(s);</li>
	<li><strong><?php echo ClassRegistry::init('Financeiro')->find('count'); ?></strong>&nbsp;Documentos(s);</li>
	<li><strong><?php echo ClassRegistry::init('Financeiro')->find('count', array('conditions' => array('Financeiro.fintipo' => '1'))); ?></strong>&nbsp;Conta(s) a receber;</li>
	<li><strong><?php echo ClassRegistry::init('Financeiro')->find('count', array('conditions' => array('Financeiro.fintipo' => '2'))); ?></strong>&nbsp;Conta(s) a pagar;</li>    
    </ul>
    <br/>
    <?php $cam = '/empresarial2'; //no linux se usa em branco ?>
    <script src="<?php echo $cam; ?>/js/aba.js" type="text/javascript"></script>
    <link href="<?php echo $cam; ?>/css/aba.css" type="text/css" rel="stylesheet">
    <script src="<?php echo $cam; ?>/js/highcharts/highcharts.js"></script>
    <script src="<?php echo $cam; ?>/js/highcharts/modules/exporting.js"></script>
    <div id="divFora">
	    <div id="divDentro1"> 
		    <div align="center">
			<div id="chart1" style="min-width: 250px; height: 150px; margin: 10 auto"></div>
			<div id="chart5" style="min-width: 250px; height: 250px; margin: 10 auto"></div>
			<table>
			    <tr>
				<td>
				    <div id="chart2" style="width: 250px; height: 250px; margin: 10 auto"></div>	    
				</td>
				<td>
				    <div id="chart3" style="width: 250px; height: 250px; margin: 10 auto"></div>
				</td>
				<td>
				    <div id="chart4" style="width: 250px; height: 250px; margin: 10 auto"></div>
				</td>				
			    </tr>
			</table>
		    </div>
	    </div>
	    <div id="divDentro2">
		    <br/>
		    <div align="center">
			    Contas a Receber
		    </div>
	    </div>
	    <div id="divDentro3">
		    <br/>
		    <div align="center">
			    Contas a Pagar
		    </div>
	    </div>
	    <div id="divDentro4">
		    <br/>
		    Diversos
	    </div>
	    <div id="divDentro5">
		    Clientes
	    </div>
    </div>
    <br/>
    <script>
	    var aba = new JTabControl("divFora",500,300);   
	    aba.addTab("divDentro1", " <b><u> Gerencial </u></b>");
	    aba.addTab("divDentro2", " <b><u> Receber </u></b>");
	    aba.addTab("divDentro3", " <b><u> Pagar </u></b>");
	    aba.addTab("divDentro4", " <b><u> Diversos </u></b>");
	    aba.addTab("divDentro5", " <b><u> Clientes </u></b>");
    </script>
    
    <?php echo $this->Menu->GrafAnual('1'); ?>
    <?php echo $this->Menu->GrafAnual('1', false); ?>
    
</div>