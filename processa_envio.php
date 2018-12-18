<?php 
	
	require "./lib/PHPMailer/Exception.php";
	require "./lib/PHPMailer/OAuth.php";
	require "./lib/PHPMailer/PHPMailer.php";
	require "./lib/PHPMailer/POP3.php";
	require "./lib/PHPMailer/SMTP.php";

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;


	class Mensagem {
		private $nome = null;
		private $email = null;
		private $telefone = null;
		private $cidade = null;
		private $estado = null;
		private $social = null;
		private $produto = null;
		private $mensagem = null;
		public $status = null;
		
		public function __get($atributo){
			return $this->$atributo;
		}

		public function __set($atributo, $valor){
			$this->$atributo = $valor;
		}

		public function mensagemValida(){
			if (empty($this->nome) || empty($this->email) || empty($this->telefone) || empty($this->cidade) || empty($this->estado) || empty($this->social) || empty($this->produto) || empty($this->mensagem)) {
					return false;
			}
			return true;
		}
	}

	$mensagem = new Mensagem();

	$mensagem->__set('nome', $_POST['nome']);
	$mensagem->__set('email', $_POST['email']);
	$mensagem->__set('telefone', $_POST['telefone']);
	$mensagem->__set('cidade', $_POST['cidade']);
	$mensagem->__set('estado', $_POST['estado']);
	$mensagem->__set('social', $_POST['social']);
	$mensagem->__set('produto', $_POST['produto']);
	$mensagem->__set('mensagem', $_POST['mensagem']);

	if (!$mensagem->mensagemValida()) {
		echo "Preencha todos os campos";
	}

	$mail = new PHPMailer(true);
		try {
    	//Server settings
    	$mail->SMTPDebug = false;                                 // Enable verbose debug output
    	$mail->isSMTP();                                      // Set mailer to use SMTP
    	$mail->Host = 'smtp.sophosne.com.br';  // Specify main and backup SMTP servers
    	$mail->SMTPAuth = true;                               // Enable SMTP authentication
    	$mail->Username = 'suporte2@sophosne.com.br';                 // SMTP username
    	$mail->Password = '91491580';                           // SMTP password
    	$mail->SMTPSecure = '';                            // Enable TLS encryption, `ssl` also accepted
    	$mail->Port = 587;                                    // TCP port to connect to

    	//Recipients
    	$mail->setFrom('suporte2@sophosne.com.br', 'Site UniplusNE');
    	$mail->addAddress('suporte2@sophosne.com.br', '');     // Add a recipient
    	//$mail->addAddress('ellen@example.com');               // Name is optional
    	//$mail->addReplyTo('info@example.com', 'Information');
    	//$mail->addCC('cc@example.com');
    	//$mail->addBCC('bcc@example.com');

    	//Attachments
    	//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    	//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    	//Content
    	$mail->isHTML(true);  
    	$mail->CharSet  = 'utf-8';                                // Set email format to HTML
    	$mail->Subject = $mensagem->__get('nome');
    	$mail->Body    = '<strong>Contato: </strong>' . $mensagem->__get('nome') . '<br>' . '<strong>E-mail: </strong>' . $mensagem->__get('email') . '<br>' . '<strong>Telefone: </strong>' . $mensagem->__get('telefone') . ' <strong>' . $mensagem->__get('cidade') . ' ' . $mensagem->__get('estado') . '</strong>' . '<br>' . '<Strong>Como nos conheceu: </strong>' . $mensagem->__get('social') . '<br>' . '<strong>Interesse em: </strong>' . $mensagem->__get('produto') . '<br>' . '<strong>Mensagem: </strong>' . $mensagem->__get('mensagem') ;
    	$mail->AltBody = 'É necessário utilizar um cliente que suporte HTML para ter acesso total ao conteúdo dessa mensagem!!!';

    	$mail->send();
    	$mensagem->status['codigo_status'] = 1;

	} catch (Exception $e) {
		$mensagem->status['codigo_status'] = 2;
	}

?>

<?php 	include "inc/header.php";
		include "inc/menu.php";
?>

	<div class="tituloPagina">
	  	<div class="container">
	      <div class="row">
	        <div class="col-sm-6">
	          <div>
	            <h1>Entre em Contato Conosco</h1>
	          </div>
	        </div>
	        <div class="col-sm-6">
	          <ul>
	            <li>
	              Contato
	            </li>
	            <li class="active">
	              <a href="index.php">Início</a>
	            </li>
	          </ul>
	        </div>
	      </div>
	    </div>
	</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php if($mensagem->status['codigo_status'] == 1) { ?>
						<div class="text-center">
							<h1 class="display-4 text-success text-align">Sucesso</h1>
							<p> Email eviado com Sucesso!! <br> em breve nosso comercial entrará em contato com você:)</p>
							<a href="index.php" class="btn btn-success btn-lg mt-5 text-white">Ok</a>
						</div>
					<?php } ?>
					<?php if($mensagem->status['codigo_status'] == 2) { ?>
						<div class="container">
							<h1 class="display-4 text-danger">Ops!</h1>
							<p> Ops, Houve um problema contacte um suporte!</p>
							<a href="index.php" class="btn btn-success btn-lg mt-5 text-white">Ok</a>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
<?php 
	include"inc/footer.php";
?>