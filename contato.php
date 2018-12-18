<?php 
	include "inc/header.php";
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
  <div class="contato">
    <div class="row">
      <div class="col-sm-6">
        <form action="processa_envio.php" method="post">
          <div class="form-group">
            <label for="formGroupExampleInput">Nome</label>
            <input name="nome" type="text" class="form-control" id="formGroupExampleInput" placeholder="João Da Silva">
            <label for="exampleFormControlInput1">Email address</label>
            <input name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" >
            <label for="formGroupExampleInput">Telefone</label>
            <input name="telefone" type="text" class="form-control" id="formGroupExampleInput" placeholder="(xx) 00000-0000">
            <label for="formGroupExampleInput">Cidade</label>
            <input name="cidade" type="text" class="form-control" id="formGroupExampleInput" placeholder="Recife">
            <label for="formGroupExampleInput">Estado</label>
            <input name="estado" type="text" class="form-control" id="formGroupExampleInput" placeholder="PE">
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Como nos Conheceu</label>
            <select name="social" class="form-control" id="exampleFormControlSelect1">
              <option>Facebook</option>
              <option>Instagram</option>
              <option>Evento</option>
              <option>Indicações</option>
              <option>Outros</option>
            </select>
            <label for="exampleFormControlSelect1">Algum Produto de Interesse?</label>
            <select name="produto" class="form-control" id="exampleFormControlSelect1">
              <option>Prestadores de Serviço</option>
              <option>Supermercados</option>
              <option>Lojas de Varejo</option>
              <option>Bares e Restaurantes</option>
              <option>Outros Segmentos</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Mensagem</label>
            <textarea name="mensagem" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
      </div>
      <div class="col-sm-6">
        <div class="contatoCard">
              <h5>Horário de Atendimento</h5>
              <p class="card-text">Seg à Sex - 8h às 18h <br> Sáb - 8h às 12h</p>
              <h5 class="card-title">Telefones:</h5>
              <p class="card-text">Administrativo: (81) 3226-7643 <br> Comercial Recife: (81) 3034-6284 <br> Suporte Recife: (81) 3031-3291</p>
              <h5 class="card-title">E-mails:</h5>
              <p class="card-title">vendas@sophosne.com.br <br> relacionamento@sophosne.com.br </p>
        </div>
        <div class="mapa">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.5231284507486!2d-34.931739785624735!3d-8.04799809420502!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ab18d8895df5b5%3A0x42c9e9756ea211ec!2sSophos+Projetos!5e0!3m2!1spt-BR!2sbr!4v1544559808750" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>
    </div>  
  </div>    
</div>
<?php 
	include"inc/footer.php";
?>