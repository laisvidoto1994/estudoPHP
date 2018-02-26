<html>
	<header>
		<!-- Titulo da Pagina -->
		<title> Cadastro Teste </title>
	</header>
	<body>
		<!-- formulario que será salva via POST, no arquivo Cadastrando.php -->
		<form name="cadastroform" method="post" action="cadastrando.php">
		
			<!-- campos de texto -->
			Nome:      <input type = "text"     name = "nome"/>      <br/><br/>
			Sobrenome: <input type = "text"     name = "sobrenome"/> <br/><br/>
			Pais:      <input type = "text"     name = "pais"/>      <br/><br/>
			Estado:    <input type = "text"     name = "estado"/>    <br/><br/>
			Cidade:    <input type = "text"     name = "cidade"/>    <br/><br/>
			E-mail:    <input type = "text"     name = "email"/>     <br/><br/>
			Senha:     <input type = "password" name = "senha"/>     <br/><br/>
			<!-- declaração de Botão  -->
			<input type = "submit" name = "cadastrar"/>
		</form>
	</body>
</html>

