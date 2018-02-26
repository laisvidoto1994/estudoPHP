<html>
	<head>
	<!-- Titulo da Pagina -->
		<title> Cadastrando...</title>
	</head>
	<body>
		
		<?php
		/** 
		 * informações para conecção do banco de dados MySql 
		 */
			$host    = "localhost";
			$user    = "root";
			$pass    = "";
			$banco   = "cadastro";
			$conexao = mysql_connect($host,$user,$pass) or die(mysql_error());
			mysql_select_db($banco) or die(mysql_error);
		?>

		<?php
		
		/** 
		 *  declaração de variaveis para compor á query do MySql
		 */
			$nome      = $_POST['nome'];
			$sobrenome = $_POST['sobrenome'];
			$pais      = $_POST['pais'];
			$estado    = $_POST['estado'];
			$cidade    = $_POST['cidade'];
			$email     = $_POST['email'];
			$senha     = $_POST['senha'];
			
			/** 
			 * query sql para inserir dados na tabela usuarios do MySql
			 */
			$sql = mysql_query("INSERT INTO usuarios(nome, sobrenome, pais, estado, cidade, email, senha)
			                    VALUES('$nome', '$sobrenome', '$pais', '$estado', '$cidade', '$email', '$senha')
			                   ");
			/** 
		     * mostrar na tela centralizado com o texto-> Cadastro realizado com sucesso! 
		     */
			echo "<center> <h1> Cadastro realizado com Sucesso! </h1> </center>";
		?>
	</body>
</html>