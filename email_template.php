<?php
	
	$to = "reinaldocmen@gmail.com"; 
    $from = "info@reinaldocostamendes.com"; 
    $subject = "Contato atravez do formulario!"; 
		     $message = '
<html> 
<style>
body{
	text-align:center;
	padding:10px;
	max-width:100%;
}
.main{
	width:600px;
	max-width:100%;
	padding:20px;
	display:inline-table;
	background:#a9e2f3;
}
#conteudo_email{
	text-align:left;
	display:inline-table;
	width:100%;
	padding:20px;
}
a{
	border-radius:10px;
	padding:5px;
	background:aqua;
	color:#fff;
	font-weight:bolder;
}
h1{
	border-bottom:4px solid #CCC;
		text-align:left;
}
</style>
  <body> 
  <div class="main">
   <h1 style="border-bottom:6px solid #CCC; padding:12px;
		text-align:left;">Contato atravez do formulario:</h1>
  <img style="width:100%;height:auto;float:left;margin-bottom:20px;" src="https://reinaldocostamendes.com/img/analitics.jpg"/>
  <div style="width:100%; background:#CCC;color:#000;">
 	
		</div>
	
  <div id="conteudo_email">
   <div style="width:100%;color:#000;">
		<p>Nome: '.@$name.'</p>
		<p>Email: '.@$email.'</p>
		<p>Telefone: '.@$phone.'</p>
		</div>
   <br><br>'.@$message.'.<br><br> Com os melhores cumprimentos,<br>Reinaldo Mendes<br><br>
	 <a style="	border-radius:10px;
	padding:12px;
	background:#fed136;
	font-weight:bolder;
	color:#fff;
	font-weight:bolder;" href="https://reinaldocostamendes.com/">www.reinaldocostamendes.com</a><br><br>
	 info@reinaldocostamendes.com
	 </div>
	 </div>
  </body> 
</html>';
echo $message;
?>