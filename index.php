<?php
/*Crie um projecto em PHP para uma competicao de natacao, o sistema devera permitir a insercao de cmpetiores com seu nome e idade, e o sistema devera identificar em qual categoria o nadador ira competir, por exemplo, 6 a 12 anos categoria infantil, 13 a 18 anos categoria adolescente, acima de  18 categoria adulto.
O Sistema devera retornar a categoria para cada nadador que for cadastrado.*/


//lista de categorias(array)
$categorias = [];
$categorias[] = 'Infantil';
$categorias[] = 'adolescente'; 
$categorias[] = 'adulto';
//imprimir a lista do array "print_r($categorias)";

//variaveis de entrada
$nome = 'Antonio';
$idade = 9;

// imprimir variaveis
//var_dump($nome);
//var_dump($idade);

//condicoes para cada nadador
if($idade >= 6 && $idade <= 12){
	//echo "infantil";
	for ($i=0; $i <= 2; $i++) { 
		if ($categorias[$i] == 'Infantil') {
			echo "O nadador ". $nome. " compente na Categoria ". $categorias[$i];
		
		}
	}
}

 else if($idade >= 13 && $idade <= 18){
 	for ($i=0; $i <= 2; $i++) { 
		if ($categorias[$i] == 'adolescente') {
			echo "O nadador ". $nome. " compente na Categoria ". $categorias[$i];
		
		}
	}
 }


 else if ($idade > 18 ){
 	for ($i=0; $i <= 2; $i++) { 
		if ($categorias[$i] == 'adulto') {
			echo "O nadador ". $nome. " compente na Categoria ". $categorias[$i];
		
		}
	}
 }