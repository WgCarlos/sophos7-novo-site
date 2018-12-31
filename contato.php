<?php 
	include "inc/header.php";
	include "inc/menu.php";
?>
<div class="tituloPagina">
  <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div>
            <h1>Contato</h1>
          </div>
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
            <input name="nome" type="text" class="form-control" id="formGroupExampleInput" placeholder="">
            <label for="exampleFormControlInput1">Email address</label>
            <input name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="" >
            <label for="formGroupExampleInput">Telefone</label>
            <input name="telefone" type="text" class="form-control" id="formGroupExampleInput" placeholder="">
            <label for="formGroupExampleInput">Cidade</label>
            <input name="cidade" type="text" class="form-control" id="formGroupExampleInput" placeholder="">
            <label for="formGroupExampleInput">Estado</label>
            <input name="estado" type="text" class="form-control" id="formGroupExampleInput" placeholder="">
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
          <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
        </form>
      </div>
      <div class="offset-sm-1 col-sm-5">
        <div class="contatoCard">
          <div class="card" style="width: 23rem;">
            <div class="card-body">
              <h5 style="color: #007bff"><strong>Horário de Atendimento:</strong></h5>
              <p class="card-text">Dia de semana: 8:00 - 18:00 <br> Sábado: 08:00 - 12:00</p>
              <h5 style="color: #007bff" class="card-title"><strong>Telefones:</strong></h5>
              <p class="card-text">Administrativo: (81) 3226-7643 <br> Comercial Recife: (81) 3034-6284 <br> Suporte Recife: (81) 3031-3291</p>
              <h5 style="color: #007bff" class="card-title"><strong>E-mails:</strong></h5>
              <p class="card-title">vendas@sophosne.com.br <br> relacionamento@sophos7.com </p>
            </div>
          </div>
        </div>
      <div class="contatoCard">
        <div class="card" style="width: 23rem;">
          <div class="card-body">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15802.092517476667!2d-34.929551!3d-8.047998000000002!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x42c9e9756ea211ec!2sSophos+Projetos!5e0!3m2!1spt-BR!2sbr!4v1545848385712" width="325" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
        </div>
      </div>
    </div>  
  </div>    
</div>
<?php 
	include"inc/footer.php";
?>