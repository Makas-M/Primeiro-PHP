<!-- Crie um projecto em PHP para uma competicao de natacao, o sistema devera 
permitir a insercao de competidores com seu nome e idade, e o sistema devera 
identificar em qual categoria o nadador ira competir, por exemplo, 6 a 12 anos 
categoria infantil, 13 a 18 anos categoria adolescente, acima de  18 categoria adulto.
O Sistema devera retornar a categoria para cada nadador que for cadastrado.-->

<!DOCTYPE html>
<html>
<head>
	<title>Exercicio</title>
</head>
<body>
	<?php
		//dados de entrada
		$nome = $_GET["nome"];
		$anoNasc = $_GET["idade"];
		//tratamento do ano de nascimento em idade
		$idade = date("Y") - $anoNasc;
		//lista de categorias(array)
		$categorias = [];
		$categorias[] = 'Infantil';
		$categorias[] = 'adolescente'; 
		$categorias[] = 'adulto';
		//imprimir a lista do array: "print_r($categorias)";

		

		// imprimir variaveis
		//var_dump($nome);
		//var_dump($idade);
		if ($idade <6 ) {
			echo "Nadador não pode participar!";
		}
		//condicoes para cada nadador
		if($idade >= 6 && $idade <= 12){
		
			for ($i=0; $i <= 2; $i++) { 
				if ($categorias[$i] == 'Infantil') {
					echo "O nadador ". $nome. " tem $idade anos e "."<br>compente na Categoria ". $categorias[$i];
				}
			}
		}

 		else if($idade >= 13 && $idade <= 18){
 			for ($i=0; $i <= 2; $i++) { 
				if ($categorias[$i] == 'adolescente') {
					echo "O nadador ". $nome. " tem $idade anos e "."<br>compente na Categoria ". $categorias[$i];
				}
			}
 		}

		else if ($idade > 18 ){
 			for ($i=0; $i <= 2; $i++) { 
				if ($categorias[$i] == 'adulto') {
					echo "O nadador ". $nome. " tem $idade anos e "."<br>compente na Categoria ". $categorias[$i];
				}
			}
 		}
 	?>
 	<div>
 		<br>
 		<a href="index.html">Voltar</a>
 	</div>
</body>
</html>

