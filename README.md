<html>
    <body class='yellow lighten-3'>
	  <div class="container">
		<div class="row">
			<div class="col s12">
				<div class="card-panel white">
					<small class="right"><b>jQuery Plugin</b></small>
					<h1 class="blue-grey-text text-darken-1">kenjs<b class="red-text text-darken-3">Mentions</b>.js</h1><hr />
					<div class="flow-text" style="text-align: justify !important;">
						<p>O kenjsMentions é um simples plugin jQuery, que tem a finalidade de trazer informações dinâmicamente de um banco de dados para a página, o objetivo real da criação deste plugin se deu na necessidade de ter um slide dinâmico de frases.</p>
					</div>
					<h3 class="blue-grey-text text-darken-1">Demo</h3><hr />
					http://kenjsmentions.innozone.com.br/
					<h3 class="blue-grey-text text-darken-1">Exemplo</h3><hr />
					<pre>
						<code class="html">
&lt;!DOCTYPE html>
&lt;html>
&lt;head>
  &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  &lt;meta charset="utf-8" />
  &lt;title>kenjsMention&lt;/title>
  &lt;link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  &lt;link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
  &lt;link rel="stylesheet" href="https://cdn.jsdelivr.net/animatecss/3.5.1/animate.min.css">
  &lt;link rel="stylesheet" href="https://highlightjs.org/static/demo/styles/github.css">
&lt;/head>
&lt;body>
  &lt;div id='example'>&lt;/div>
  &lt;script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js">&lt;/script>
  &lt;script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js">&lt;/script>
  &lt;script type="text/javascript" src="jQuery.kenjsMentions.js">&lt;/script>
  &lt;script type="text/javascript">
	$(document).ready(function() {
		$("#mention").kenjsMentions({
			'background' : 'blue darken-3', 
			'color' : 'white-text', 
			'flow' : true, 
			'duration' : 4, 
			'float' : 'right', 
			'align' : 'right-align', 
			'url' : 'database.php',
			'animation' : 'bounceInLeft' 
			});
  });
  &lt;/script>
&lt;/body>
&lt;/html>
</code>
</pre>
					<h3 class="blue-grey-text text-darken-1">Baixar</h3><hr />
					<div class='card-panel blue-grey lighten-2'>
						<div class="col s12 m6 center"><p><a href="https://code.jquery.com/jquery-latest.min.js" download class="btn blue-grey darken-2"><i class='fa fa-download left'></i>jQuery</a></p></div>
						<div class="col s12 m6 center"><p><a href="http://materializecss.com/bin/materialize-v0.97.6.zip" download="download" class="btn blue-grey darken-2"><i class='fa fa-download left'></i>Materialize</a></p></div>
						<div class="col s12 m6 center"><p><a href="https://cdn.jsdelivr.net/animatecss/3.5.1/animate.min.css" download="download" class="btn blue-grey darken-2"><i class='fa fa-download left'></i>AnimateCSS</a></p></div>
						<div class="col s12 m6 center"><p><a href="http://kenjsmentions.innozone.com.br/jQuery.kenjsMentions.min.js" download class="btn red darken-4"><i class='fa fa-download left'></i>kenjsMentions</a></p></div>
						<div class="clearfix"></div>
					</div>
					<h3 class="blue-grey-text text-darken-1">Opções</h3><hr />
					<table class='bordered striped highlight'>
						<thead>
							<tr>
								<th>Option Name</th>
								<th>Description</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>width</td>
								<td>Utilize as classes de largura do <i class='blue-text'>Materialize</i>, sem a classe .col. Exemplo: s12 m6 l3<p><b>PS.: </b>classes offset também podem ser incluídas.</p><p><span class="chip">Padrão : s12</span></p></td>
							</tr>
							<tr>
								<td>background</td>
								<td>Utilize classes de cor de fundo do <i class='blue-text'>Materialize</i>, exemplo : red lighten-3<p><span class="chip">Padrão : blue darken-3</span></p></td>
							</tr>
							<tr>
								<td>color</td>
								<td>Utilize classes de cor de texto do <i class='blue-text'>Materialize</i>, exemplo : blue-text text-darken-3<p><span class="chip">Padrão : white-text</span></p></td>
							</tr>
							<tr>
								<td>flow</td>
								<td>Defina com <b class='red-text'>true</b> e <b class='red-text'>false</b> para decidir a utilização da classe <i class='yellow-text text-darken-4'>flow-text</i> do <i class='blue-text'>Materialize</i><p><span class="chip">Padrão : true</span></p></td>
							</tr>
							<tr>
								<td>duration</td>
								<td>Defina o valor em segundos, a transição do slide.<p><span class="chip">Padrão : 4</span></p></td>
							</tr>
							<tr>
								<td>float</td>
								<td>Defina a direção, caso queira, com left e right, para flutuar a posição do slide.<p><span class="chip">Padrão : left</span></p></td>
							</tr>
							<tr>
								<td>align</td>
								<td>Defina o alinhamento do texto, caso queira, com left-align, center-align e right-align, para alinhar a posição do texto no slide.<p><span class="chip">Padrão : left-align</span></p></td>
							</tr>
							<tr>
								<td>url</td>
								<td>Defina a url do arquivo que retornará o conteúdo a ser incluso no slide.</td>
							</tr>
							<tr>
								<td>animation</td>
								<td>Defina a classe que animará a transição dos slides, lista de classe orientada pelo <a href="https://daneden.github.io/animate.css/" target="_blank">animate.css</a>.<p><span class="chip">Padrão : fadeIn</span></p></td>
							</tr>
						</tbody>
					</table>
