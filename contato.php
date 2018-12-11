<?php 
	include "inc/header.php";
	include "inc/menu.php";
?>
<div class="container">
	<div class="contato">
		<div class="row">
			<div class="col-md-6">
				<form>
  					<div class="form-group">
    					<label for="exampleFormControlInput1">Nome</label>
    					<input type="name" class="form-control" id="exampleFormControlInput1" placeholder="João Da Silva">
  					</div>
  					<div class="form-group">
    					<label for="exampleFormControlInput1">E-mail</label>
    					<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  					</div>
  					<div class="form-group">
    					<label for="exampleFormControlInput1">Telefone</label>
    					<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="xx xxxxx-xxxx">
  					</div>
  					<div class="form-group">
    					<label for="exampleFormControlTextarea1">Deixe uma mensagem</label>
    					<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  					</div>
            <button type="submit" class="btn btn-primary">Enviar</button>
				</form>
			</div>
			<div class="col-md-6">
				<div class="contatoCard">
					<div class="card" style="width: 18rem;">
  						<div class="card-body">
    						<h5 class="card-title">Sophos7</h5>
    						<h6 class="card-subtitle mb-2 text-muted">Gestão Inteligente</h6>
    						<p class="card-text">Rua Desembargardor Virgílio de Sá Pereira 615.</p>
    						<p class="card-text">Cordeiro, Recife - PE. <br>
                  50721-040
                </p>
  						</div>
					</div>
				</div>	
			</div>	
		</div>		
	</div>
</div>
<div class="container">
  <div class="mapa">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.5231284507486!2d-34.931739785624735!3d-8.04799809420502!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ab18d8895df5b5%3A0x42c9e9756ea211ec!2sSophos+Projetos!5e0!3m2!1spt-BR!2sbr!4v1544559808750" width="600" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
</div>
<?php 
	include"inc/footer.php";
?>