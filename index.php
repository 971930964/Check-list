<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">



<title>CHECK-LIST INICIAL</title>


  <style type="text/css">
    
body {
width:100%; margin: 0 auto; min-width:300px; max-width:600px;
}



div.number {
 line-height: 2;
}


.maius{
text-transform: uppercase;
}




.formulario{
    width: 100%;
    padding: 2px;
    font-size: 13;
    font-family: Arial;
    padding-left: 5px;

}

.formulario p{
    width: 100%;
    font-size: 1.5em;
    font-family: Arial;
    padding-left: 5px;

}


.formulario2{
    display: inline-block;
    padding: 2px;
    font-size: 13;
    font-family: Arial;
    padding-left: 5px;
    margin-left: 5px;
}






.field_{
    width: 100%;
    margin: 8px 0;
    padding-left: 5px;

}



.field{
    width: 70%;
    margin: 8px 0;
    padding-left: 5px;

}
.field label, 
.field span{
    font-size: 13;
    display: block;
    width: 100%;
}
.radiobox label{
    width: auto;
    display: inline-block;
}
input[type=text],

textarea{
    width: 100%;
    height: 30px;
    line-height: 30px;
    border: 1px solid #777;
    outline: none;
    padding-left: 5px;

}
input#nao{
    margin-left: 10px;
}
textarea{
    line-height: 20px;
    width: 95%;
    padding: 10px;
    height: 120px;
    resize: none;
    padding-left: 5px;
}
input[type=submit]{
    display: block;
    background-color: #00df91;
    height: 35px;
    border: 2px solid #000;
    outline: 0;
    cursor: pointer;
    width: 100px;
    margin: 0 auto;
    text-align: center;

}



  </style>



</head>




<body topmargin="0" leftmargin="5" rightmargin="5" width="100%">


<form action="enviar-email.php" class="formulario" method="post">



<table width="100%" border="0" cellpadding="0" valign="top">
<tr>
<td align="left">
<input type="image" src="estapar.jpg" width="100" height="50"></td>
<td align="center"><font face="arial" size="5">CHECK-LIST<br><font size="3">Antes da Jornada de Trabalho</font></font>
</td>

</tr>
</table>

<br>
 

        
        <div class="field">
            <label for="motorista">MOTORISTA:</label>
            <input type="text" id="motorista" name="motorista" class="maius" required>
        </div>
        
        <div class="field">
            <label for="placa">PLACA VEICULO:</label>
            <input type="text" id="placa" name="placa" class="maius" required>
        </div>

        <div class="field">
            <label for="km_inicial">KM INICIAL:</label>
            <input type="text" id="km_inicial" name="km_inicial" class="maius" required>
        </div>        

        <div class="field">
            <label for="viatura">VIATURA:</label>
            <input type="text" id="viatura" name="viatura" class="maius" required>
        </div>

        <div class="field">
            <label for="data">DATA:</label>
            <input type="date" id="date" name="date" required>
        </div>
<br>





<table leftmargin="10" width="100%" border="1" bordercolor="777777">
<tr>
<td width="100%" colspan="2">
<div class="formulario2">
<b>LEGENDA</b>&nbsp;&nbsp;  OK = Em boas condicoes / R = Reparo
</div><br>&nbsp;
</td>
</tr>
<tr>
<td width="auto">
<div class="formulario2">Luzes do painel de instrumentos</div><br>&nbsp;</td>
	<td width="auto"><input type="radio" name="luzes" id="ok" value="ok" checked><label for="ok">OK</label>
	<input type="radio" name="luzes" id="R" value="R"><label for="R">R</label><br>&nbsp;
</td>
</tr>

<tr>
<td width="auto">
<div class="formulario2">Lampadas de seta dianteira</div><br>&nbsp;</td>
	<td width="auto"><input type="radio" name="seta_diant" id="ok" value="ok" checked><label for="ok">OK</label>
	<input type="radio" name="seta_diant" id="R" value="R"><label for="R">R</label><br>&nbsp;
</td>
</tr>

<tr>
<td width="auto">
<div class="formulario2">Lampadas de seta traseira</div><br>&nbsp;</td>
	<td width="auto"><input type="radio" name="seta_tras" id="ok" value="ok" checked><label for="ok">OK</label>
	<input type="radio" name="seta_tras" id="R" value="R"><label for="R">R</label><br>&nbsp;
</td>
</tr>

<tr>
<td width="auto">
<div class="formulario2">Lampadas de freio</div><br>&nbsp;</td>
	<td width="auto"><input type="radio" name="freio" id="ok" value="ok" checked><label for="ok">OK</label>
	<input type="radio" name="freio" id="R" value="R"><label for="R">R</label><br>&nbsp;
</td>
</tr>

<tr>
<td width="auto">
<div class="formulario2">Lampadas de re</div><br>&nbsp;</td>
	<td width="auto"><input type="radio" name="re" id="ok" value="ok" checked><label for="ok">OK</label>
	<input type="radio" name="re" id="R" value="R"><label for="R">R</label><br>&nbsp;
</td>
</tr>

<tr>
<td width="auto">
<div class="formulario2">Lanternas e farois</div><br>&nbsp;</td>
	<td width="auto"><input type="radio" name="lant_farol" id="ok" value="ok" checked><label for="ok">OK</label>
	<input type="radio" name="lant_farol" id="R" value="R"><label for="R">R</label><br>&nbsp;
</td>
</tr>

<tr>
<td width="auto">
<div class="formulario2">Buzina</div><br>&nbsp;</td>
	<td width="auto"><input type="radio" name="buzina" id="ok" value="ok" checked><label for="ok">OK</label>
	<input type="radio" name="buzina" id="R" value="R"><label for="R">R</label><br>&nbsp;
</td>
</tr>

<tr>
<td width="auto">
<div class="formulario2">Cinto de seguranca fixacao e travamento</div><br>&nbsp;</td>
	<td width="auto"><input type="radio" name="cinto" id="ok" value="ok" checked><label for="ok">OK</label>
	<input type="radio" name="cinto" id="R" value="R"><label for="R">R</label><br>&nbsp;
</td>
</tr>

<tr>
<td width="auto">
<div class="formulario2">Calibragem dos pneus e estepe</div><br>&nbsp;</td>
	<td width="auto"><input type="radio" name="pneus" id="ok" value="ok" checked><label for="ok">OK</label>
	<input type="radio" name="pneus" id="R" value="R"><label for="R">R</label><br>&nbsp;
</td>
</tr>

<tr>
<td width="auto">
<div class="formulario2">Chave de roda e triangulo</div><br>&nbsp;</td>
	<td width="auto"><input type="radio" name="ch_triang" id="ok" value="ok" checked><label for="ok">OK</label>
	<input type="radio" name="ch_triang" id="R" value="R"><label for="R">R</label><br>&nbsp;
</td>
</tr>

<tr>
<td width="auto">
<div class="formulario2">Sistema de cameras</div><br>&nbsp;</td>
	<td width="auto"><input type="radio" name="cameras" id="ok" value="ok" checked><label for="ok">OK</label>
	<input type="radio" name="cameras" id="R" value="R"><label for="R">R</label><br>&nbsp;
</td>
</tr>



</table>

<br>

<table leftmargin="10" width="100%" border="1" bordercolor="777777">
<tr>
<td width="auto">
<div class="formulario2">Habilitacao</div><br>&nbsp;</td>
	<td width="auto"><input type="radio" name="habilit" id="ok" value="ok" checked><label for="ok">OK</label>
	<input type="radio" name="habilit" id="R" value="R"><label for="R">R</label><br>&nbsp;
</td>
</tr>

<tr>
<td width="auto">
<div class="formulario2">Documento veiculo</div><br>&nbsp;</td>
	<td width="auto"><input type="radio" name="doc_veic" id="ok" value="ok" checked><label for="ok">OK</label>
	<input type="radio" name="doc_veic" id="R" value="R"><label for="R">R</label><br>&nbsp;
</td>
</tr>

<tr>
<td width="auto">
<div class="formulario2">Uniforme completo</div><br>&nbsp;</td>
	<td width="auto"><input type="radio" name="uniforme" id="ok" value="ok" checked><label for="ok">OK</label>
	<input type="radio" name="uniforme" id="R" value="R"><label for="R">R</label><br>&nbsp;
</td>
</tr>

<tr>
<td width="auto">
<div class="formulario2">Cracha de identificacao</div><br>&nbsp;</td>
	<td width="auto"><input type="radio" name="cracha" id="ok" value="ok" checked><label for="ok">OK</label>
	<input type="radio" name="cracha" id="R" value="R"><label for="R">R</label><br>&nbsp;
</td>
</tr>
</table>

<br>
<div class="formulario2"><b>EQUIPAMENTOS</b></div>
<br>



<table leftmargin="10" width="100%" border="1" bordercolor="777777">
<tr>
<td width="auto">
<div class="formulario2">Tablet e Cabo</div><br>&nbsp;</td>
	<td width="auto"><input type="radio" name="tablet" id="ok" value="ok" checked><label for="ok">OK</label>
	<input type="radio" name="tablet" id="R" value="R"><label for="R">R</label><br>&nbsp;
</td>
</tr>

<tr>
<td width="auto">
<div class="formulario2">PDA e Cabo</div><br>&nbsp;</td>
	<td width="auto"><input type="radio" name="pda" id="ok" value="ok" checked><label for="ok">OK</label>
	<input type="radio" name="pda" id="R" value="R"><label for="R">R</label><br>&nbsp;
</td>
</tr>

<tr>
<td width="auto">
<div class="formulario2">Cartao Combustivel</div><br>&nbsp;</td>
	<td width="auto"><input type="radio" name="cartao_comb" id="ok" value="ok" checked><label for="ok">OK</label>
	<input type="radio" name="cartao_comb" id="R" value="R"><label for="R">R</label><br>&nbsp;
</td>
</tr>

<tr>
<td width="auto">
<div class="formulario2">Suporte PDA</div><br>&nbsp;</td>
	<td width="auto"><input type="radio" name="sup_pda" id="ok" value="ok" checked><label for="ok">OK</label>
	<input type="radio" name="sup_pda" id="R" value="R"><label for="R">R</label><br>&nbsp;
</td>
</tr>

<tr>
<td width="auto">
<div class="formulario2">Suporte Tablet</div><br>&nbsp;</td>
	<td width="auto"><input type="radio" name="sup_tab" id="ok" value="ok" checked><label for="ok">OK</label>
	<input type="radio" name="sup_tab" id="R" value="R"><label for="R">R</label><br>&nbsp;
</td>
</tr>

<tr>
<td width="auto">
<div class="formulario2">Protetor Salivar</div><br>&nbsp;</td>
	<td width="auto"><input type="radio" name="protetor" id="ok" value="ok" checked><label for="ok">OK</label>
	<input type="radio" name="protetor" id="R" value="R"><label for="R">R</label><br>&nbsp;
</td>
</tr>

<tr>
<td width="auto">
<div class="formulario2">Carregador Veicular</div><br>&nbsp;</td>
	<td width="auto"><input type="radio" name="carreg_veic" id="ok" value="ok" checked><label for="ok">OK</label>
	<input type="radio" name="carreg_veic" id="R" value="R"><label for="R">R</label><br>&nbsp;
</td>
</tr>

</table>

<br>


<input type="image" src="marc_inicial.jpg" width="250" height="200">
<br>

        <div class="field">
            <label for="combustivel"><b>QTDE. GASOLINA/ETANOL:</b></label>
            <input type="number" name="combustivel" min="1" max="13" required>
	</div>

<br>


<input type="image" src="gnv.jpg" width="250" height="170">
<br>

        <div class="field">
            <label for="gnv"><b>QTDE. GNV:</b></label>
            <input type="number" name="gnv" min="1" max="4">
	</div>


<br>




        <div class="field_">
            <label for="obs">OBSERVACOES:</label>
            <textarea name="obs" id="obs"></textarea>
        </div>

<br>

        <div class="field">
            <label for="assinatura">ASSINATURA: (Nome completo)</label>
            <input type="text" id="assinatura" name="assinatura" class="maius" required>
        </div>


        <div class="field">
            <label for="senha">SENHA: ( 3 primeiros digitos do CPF)</label>
            <input type="text" id="senha" name="senha" class="maius" required>
        </div>



<br>


        <input type="submit" name="acao" value="ENVIAR">



<br>





</form>


<?php
    if (isset($_POST["acao"])){
    echo "<script>alert('Formulário Foi enviado pelo método POST')</script>";
    }
?>





</body>
</html>