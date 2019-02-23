<?php	
	//INICIO A SESSÃO
	session_start();
	include("checar.php");
	date_default_timezone_set('America/Sao_Paulo');
	setlocale (LC_ALL, 'ptb');
	
	
	//Conexao com Banco	
	include_once("conexao/conexao.php");
	
	$curso = '';	
	$curso .= $_POST['IDcurso'];
	$QTDaula = '';	
	$QTDaula .= $_POST['QTDaula'];
	$html = '';	
	$html .= $_SESSION['Nome'] ;	
	$data = strftime(" %d de %B de %Y");
		
	
	//referenciar o DomPDF com namespace
	use Dompdf\Dompdf;

	// include autoloader
	require_once("dompdf/autoload.inc.php");

	//Criando a Instancia
	$dompdf = new DOMPDF();
	// Modo Paisagem
	$dompdf->set_paper("legal", "landscape");

	// Carrega seu HTML
	$dompdf->load_html('
			<style>
				body {				
				background-image: url("imagens/Fundo.png");
				} 
				div {
				margin-top: 210;
				margin-bottom: 120px;
				margin-right: 180px;
				margin-left: 160px;
				}
			</style>
			<div>
			<p style="text-align: center; font-size: 25px; font-family: Georgia ">Certificamos que <strong>'.$html.'</strong>
			 participou das atividades promovidas pela oficina '.$curso.' , durante o segundo semestre de 2018 , 
			 com uma carga horaria total de '.$QTDaula.' horas</p>
			<br>
			<p style="text-align: center; font-size: 25px; font-family: Georgia ">Jundiaí , '.$data.'</p>
			<br>
			<br>
			</div>
		');

	//Renderizar o html
	$dompdf->render();

	//Exibir a página
	$dompdf->stream(
		"Certificado.pdf", 
		array(
			"Attachment" => false //Para realizar o download somente alterar para true
		)
	);
?>