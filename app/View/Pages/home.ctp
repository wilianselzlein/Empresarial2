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
                text: 'No dia'
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
                    ['Pagar',<?php echo $this->Menu->GrafPerc('2'); ?>],
                    {
                        name: 'Receber',
                        y: <?php echo $this->Menu->GrafPerc('1'); ?>,
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
                    ['Pagar', <?php echo $this->Menu->GrafPerc('2', 7); ?>],
                    {
                        name: 'Receber',
                        y: <?php echo $this->Menu->GrafPerc('1', 7); ?>,
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
                    ['Pagar', <?php echo $this->Menu->GrafPerc('2', 30); ?>],
                    {
                        name: 'Receber',
                        y: <?php echo $this->Menu->GrafPerc('1', 30); ?>,
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
                categories: [<?php echo $this->Menu->GrafAnual(''); ?>]
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
                data: [<?php echo $this->Menu->GrafAnual('1'); ?>]
    
            }, {
                name: 'Recebidos',
                data: [<?php echo $this->Menu->GrafAnual('1', '02'); ?>]
    
            }, {
                name: 'Pagar',
                data: [<?php echo $this->Menu->GrafAnual('2'); ?>]
    
            }, {
                name: 'Pagos',
                data: [<?php echo $this->Menu->GrafAnual('2', '02'); ?>]
    
            }]
        });
    });
    //Contas a Receber
    $(function () {
        $('#chart6').highcharts({
            chart: {
                type: 'line',
                marginRight: 130,
                marginBottom: 50
            },
            title: {
                text: 'Contas a Receber',
                x: -20 //center
            },
            subtitle: {
                text: 'Títulos abertos e recebidos',
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
                name: 'Abertos',
                data: [<?php echo $this->Menu->GrafAnual('1', '00'); ?>]
            }, {
                name: 'Fechados',
                data: [<?php echo $this->Menu->GrafAnual('1', '02'); ?>]
            }]
        });
    });
    $(function () {
        $('#chart7').highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false
            },
            title: {
                text: 'No dia'
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
                    ['Abertos',<?php echo $this->Menu->GrafPerc('1', 0, '00'); ?>],
                    {
                        name: 'Recebidos',
                        y: <?php echo $this->Menu->GrafPerc('1', 0, '02'); ?>,
                        sliced: true,
                        selected: true
                    }
                ]
            }]
        });
    });
    $(function () {
        $('#chart8').highcharts({
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
                    ['Abertos', <?php echo $this->Menu->GrafPerc('1', 7, '00'); ?>],
                    {
                        name: 'Recebidos',
                        y: <?php echo $this->Menu->GrafPerc('1', 7, '02'); ?>,
                        sliced: true,
                        selected: true
                    }
                ]
            }]
        });
    });
    $(function () {
        $('#chart9').highcharts({
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
                    ['Abertos', <?php echo $this->Menu->GrafPerc('1', 30, '00'); ?>],
                    {
                        name: 'Recebidos',
                        y: <?php echo $this->Menu->GrafPerc('1', 30, '02'); ?>,
                        sliced: true,
                        selected: true
                    }
                ]
            }]
        });
    });
    $(function () {
        $('#chart10').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: 'Contas a Receber'
            },
            subtitle: {
                text: 'Por Grupo Financeiro'
            },
            xAxis: {
                categories: [<?php echo $this->Menu->GrafGrupoFin('1', '', false); ?>]
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
                name: 'Grupos Financeiros',
                data: [<?php echo $this->Menu->GrafGrupoFin('1'); ?>]
    
            }]
        });
    });
    //Contas a Pagar
    $(function () {
        $('#chart11').highcharts({
            chart: {
                type: 'line',
                marginRight: 130,
                marginBottom: 50
            },
            title: {
                text: 'Contas a Pagar',
                x: -20 //center
            },
            subtitle: {
                text: 'Títulos abertos e pagos',
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
                name: 'Abertos',
                data: [<?php echo $this->Menu->GrafAnual('2', '00'); ?>]
            }, {
                name: 'Fechados',
                data: [<?php echo $this->Menu->GrafAnual('2', '02'); ?>]
            }]
        });
    });
    $(function () {
        $('#chart12').highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false
            },
            title: {
                text: 'No dia'
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
                    ['Abertos',<?php echo $this->Menu->GrafPerc('2', 0, '00'); ?>],
                    {
                        name: 'Pagos',
                        y: <?php echo $this->Menu->GrafPerc('2', 0, '02'); ?>,
                        sliced: true,
                        selected: true
                    }
                ]
            }]
        });
    });
    $(function () {
        $('#chart13').highcharts({
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
                    ['Abertos', <?php echo $this->Menu->GrafPerc('2', 7, '00'); ?>],
                    {
                        name: 'Pagos',
                        y: <?php echo $this->Menu->GrafPerc('2', 7, '02'); ?>,
                        sliced: true,
                        selected: true
                    }
                ]
            }]
        });
    });
    $(function () {
        $('#chart14').highcharts({
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
                    ['Abertos', <?php echo $this->Menu->GrafPerc('2', 30, '00'); ?>],
                    {
                        name: 'Pagos',
                        y: <?php echo $this->Menu->GrafPerc('2', 30, '02'); ?>,
                        sliced: true,
                        selected: true
                    }
                ]
            }]
        });
    });
    $(function () {
        $('#chart15').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: 'Contas a Receber'
            },
            subtitle: {
                text: 'Por Grupo Financeiro'
            },
            xAxis: {
                categories: [<?php echo $this->Menu->GrafGrupoFin('2', '', false); ?>]
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
                name: 'Grupos Financeiros',
                data: [<?php echo $this->Menu->GrafGrupoFin('2'); ?>]
    
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
    <?php
	if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') 
		$cam = '/empresarial2';
	else
		$cam = '/Empresarial2/app/webroot';?>
    <script src="<?php echo $cam; ?>/js/aba.js" type="text/javascript"></script>
    <link href="<?php echo $cam; ?>/css/aba.css" type="text/css" rel="stylesheet">
    <script src="<?php echo $cam; ?>/js/highcharts/highcharts.js"></script>
    <script src="<?php echo $cam; ?>/js/highcharts/modules/exporting.js"></script>
    <div id="divFora">
	    <div id="divDentro1"> 
		<div align="center">
		</div>
	    </div>
	    <div id="divDentro2">
		<div align="center">
		    <table>
			<tr>
			    <td colspan="3"> 
				<div id="chart1" style="width: 60%; height: 150px; margin: 10 auto"></div>
			    </td>   
			</tr>
			<tr>
			    <td colspan="3"> 
				<div id="chart5" style="width: 60%; height: 250px; margin: 10 auto"></div>
			    </td>
			</tr>
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
	    <div id="divDentro3">
		<div align="center">
		    <table>
			<tr>
			    <td colspan="3"> 
				<div id="chart6" style="width: 60%; height: 150px; margin: 10 auto"></div>
			    </td>   
			</tr>
			<tr>
			    <td colspan="3"> 
				<div id="chart10" style="width: 60%; height: 250px; margin: 10 auto"></div>
			    </td>
			</tr>
			<tr>
			    <td>
				<div id="chart7" style="width: 250px; height: 250px; margin: 10 auto"></div>	    
			    </td>
			    <td>
				<div id="chart8" style="width: 250px; height: 250px; margin: 10 auto"></div>
			    </td>
			    <td>
				<div id="chart9" style="width: 250px; height: 250px; margin: 10 auto"></div>
			    </td>				
			</tr>
		    </table>
		</div>
	    </div>
	    <div id="divDentro4">
		<div align="center">
		    <table>
			<tr>
			    <td colspan="3"> 
				<div id="chart11" style="width: 60%; height: 150px; margin: 10 auto"></div>
			    </td>   
			</tr>
			<tr>
			    <td colspan="3"> 
				<div id="chart15" style="width: 60%; height: 250px; margin: 10 auto"></div>
			    </td>
			</tr>
			<tr>
			    <td>
				<div id="chart12" style="width: 250px; height: 250px; margin: 10 auto"></div>	    
			    </td>
			    <td>
				<div id="chart13" style="width: 250px; height: 250px; margin: 10 auto"></div>
			    </td>
			    <td>
				<div id="chart14" style="width: 250px; height: 250px; margin: 10 auto"></div>
			    </td>				
			</tr>
		    </table>
		</div>
	    </div>
	    <div id="divDentro5">

	    </div>
    </div>
    <br/>
    <script>
	    var aba = new JTabControl("divFora",500,300);   
	    aba.addTab("divDentro1", " <b><u> Gráficos: </u></b>");
	    aba.addTab("divDentro2", "  Financeiro ");
	    aba.addTab("divDentro3", "  Receber ");
	    aba.addTab("divDentro4", "  Pagar ");
	    //aba.addTab("divDentro5", " <b><u> Fechar </u></b>");
    </script>
     
<?php 
    /*echo $this->Menu->GrafAnual('') . "</br>";
    echo $this->Menu->GrafAnual('1', '02') . "</br>";
    echo $this->Menu->GrafAnual('2', '02') . "</br>";
    echo $this->Menu->GrafPerc('1') . "</br>";
    echo $this->Menu->GrafPerc('2') . "</br>";
    echo $this->Menu->GrafPerc('1', 7) . "</br>";
    echo $this->Menu->GrafPerc('2', 7) . "</br>";
    echo $this->Menu->GrafPerc('1', 30) . "</br>";
    echo $this->Menu->GrafPerc('2', 30) . "</br>";
    echo $this->Menu->GrafGrupoFin('1') . "</br>";
    echo $this->Menu->GrafGrupoFin('1', '00') . "</br>";
    echo $this->Menu->GrafGrupoFin('1', '02') . "</br>"; 
    debug($this->Menu->GrafGrupoFin('1')) . "</br>";*/
?>
</div>
