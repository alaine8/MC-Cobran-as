<?php
	include 'head.php';
?>
	<main>
		<div class="container">
	<main class="container pag-contato">
		<p style="margin-top: 100px; margin-bottom: 40px; text-transform: uppercase;">Para entrar em contato conosco, preencha o formulario abaixo: </p>

		<div class="form-contato">
			<form action="#" method="post">
				<div class="form-group">
					<label for="nome" style="color: #464646;">Nome:</label>
					<input type="text" class="form-control" id="nome-contato" aria-describedby="coloqueNome" placeholder="Digite seu nome">

					<label for="empresa"  style="color: #464646;">Empresa:</label>
					<input type="text" class="form-control" id="empresa-contato" aria-describedby="empresaNome" placeholder="Nome da sua empresa">

					<label for="email" style="color: #464646;">E-mail:</label>
					<input type="email" class="form-control" id="email-contato" aria-describedby="coloqueEmail" placeholder="Digite seu E-mail">

					<label for="assunto"  style="color: #464646;">Assunto: </label>
					<input type="text" class="form-control" id="assunto-contato" aria-describedby="assunto" placeholder="Assunto">

					<label for="mensagem"  style="color: #464646;">Mensagem:</label>
					<textarea name="mensagem-contato" id="mensagem-contato" cols="30" rows="10" class="form-control" placeholder="Digite sua mensagem" aria-describedby="suamensagem"></textarea>

					<button type="submit" class="btn btn-primary" value="Enviar" style="margin-top: 20px;">Enviar</button>
	
				</div>
			</form>
		</div>

	</main>

	<?php
	include 'footer.php';
?>
	</div>
	</div>


	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>

</html>