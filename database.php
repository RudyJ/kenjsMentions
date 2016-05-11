<?php

// EXEMPLO DE RETORNO

$array = array(
			"Saber encontrar a alegria na alegria dos outros, é o segredo da felicidade.",
			"A alegria de fazer o bem é a única felicidade verdadeira.",
			"Ser feliz sem motivo é a mais autêntica forma de felicidade.",
			"Não existe um caminho para a felicidade. A felicidade é o caminho.",
			"A amizade duplica as alegrias e divide as tristezas.",
			"O segredo da felicidade é encontrar a nossa alegria na alegria dos outros.",
			"A alegria evita mil males e prolonga a vida.",
			"Aquele que nunca viu a tristeza, nunca reconhecerá a alegria.",
			"A alegria não está nas coisas, está em nós.",
			"Sofremos muito com o pouco que nos falta e gozamos pouco o muito que temos."
			);
			
shuffle($array);

/*
 *  É OBRIGATÓRIO O RETORNO EM JSON VIA JSON_ENCODE, COM UM ÍNDICE CHAMADO "mention", PORTANTO NÃO MUDAR ESSA ORDEM
 */
echo json_encode( array( "mention" => $array[0] ) );

?>