<?php
echo $this->html->script("jquery", array('inline'=>false));
echo $this->html->script("jquery.maskedinput", array('inline'=>false));
//echo $this->html->script("jquery.meio.mask.js", array('inline'=>false));
echo $this->html->scriptBlock('
    $(document).ready(function(){
        $("#cpf").mask("999.999.999-99");
	$("#cpf1").mask("999.999.999-99");
        $("#cnpj").mask("99.999.999/9999-99");
        $("#cep").mask("99999-999");
        $("#data").mask("99/99/9999");
	$("#data1").mask("99/99/9999");
	$("#data2").mask("99/99/9999");
	$("#data3").mask("99/99/9999");
	$("#data4").mask("99/99/9999");
	$("#analitico").mask("99.999.999");
    });', array('inline'=>false));
?>