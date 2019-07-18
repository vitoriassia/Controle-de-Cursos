<?php
	//INICIO A SESSÃO
	session_start();
	include("checar.php");
	date_default_timezone_set('America/Sao_Paulo');
	setlocale (LC_ALL, 'ptb');

	//Conexao com Banco
	include_once("conexao/conexao.php");

	$curso = '';
	$curso .= $_POST['IdCurso'];
	$QTDaula = '';
	$QTDaula .= $_POST['QtdAula'];
	$html = '';
	$html .= $_SESSION['Nome'] ;
	$data = strftime(" %d de %B de %Y");
	$month = strftime("%m");
	$year = strftime("%Y");
	$semestre = "";

	if($month <= 6){
        $semestre = "primeiro";
    }else{
        $semestre = "segundo";
    }

	//referenciar o DomPDF com namespace
    require_once 'dompdf/lib/html5lib/Parser.php';
    require_once 'dompdf/lib/php-font-lib/src/FontLib/Autoloader.php';
    require_once 'dompdf/lib/php-svg-lib/src/autoload.php';
    require_once 'dompdf/src/Autoloader.php';
    Dompdf\Autoloader::register();
    use Dompdf\Dompdf;

	//Criando a Instancia
	$dompdf = new Dompdf();
	// Carrega seu HTML
    $dompdf->loadHtml('
			<style>
				body {				
				background-image: url("imagens/Fundo.png");
				} 
				div {
				margin-top: 310px;
				margin-bottom: 120px;
				margin-right: 180px;
				margin-left: 160px;
				}
			</style>
			<div>
			<p style="text-align: center; font-size: 25px; font-family: Georgia ">Certificamos que <strong>'.$html.'</strong>
			 participou das atividades promovidas pela oficina '.$curso.' , durante o '.$semestre.' semestre de '.$year.' , 
			 com uma carga horaria total de '.$QTDaula.' horas</p>
			<br>
			<p style="text-align: center; font-size: 25px; font-family: Georgia ">Jundiaí , '.$data.'</p>
			<br>
			<br>
			</div>
		');
        // Modo Paisagem
        $dompdf->setPaper("legal", "landscape");
	//Renderizar o html
	$dompdf->render();

	//Exibir a página
	$dompdf->stream(
		"Certificado.pdf",
		array(
			"Attachment" => false //Para realizar o download somente alterar para true
		)
	);