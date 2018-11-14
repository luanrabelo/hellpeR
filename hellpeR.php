<?php
$Book_1 = '<iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=BR&source=ac&ref=tf_til&ad_type=product_link&tracking_id=luanrabelo-20&marketplace=amazon&region=BR&placement=1491910399&asins=1491910399&linkId=b728e45dafcda978dfa7a1362bcac7bc&show_border=true&link_opens_in_new_window=true&price_color=000000&title_color=0066c0&bg_color=ffffff">
    </iframe>';

$Book_2 = '<iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=BR&source=ac&ref=tf_til&ad_type=product_link&tracking_id=luanrabelo-20&marketplace=amazon&region=BR&placement=B004VB3UYW&asins=B004VB3UYW&linkId=c4c06d5e947de22c4950c57c9a8354c8&show_border=true&link_opens_in_new_window=true&price_color=000000&title_color=0066c0&bg_color=ffffff">
    </iframe>';

$Book_3 = '<iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=BR&source=ac&ref=tf_til&ad_type=product_link&tracking_id=luanrabelo-20&marketplace=amazon&region=BR&placement=8536306351&asins=8536306351&linkId=1c9810dd6133785f9a4f9869858418b7&show_border=true&link_opens_in_new_window=true&price_color=000000&title_color=0066c0&bg_color=ffffff">
    </iframe>';

$Book_4 = '<iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=BR&source=ac&ref=tf_til&ad_type=product_link&tracking_id=luanrabelo-20&marketplace=amazon&region=BR&placement=B017MSB2V8&asins=B017MSB2V8&linkId=6a4568c0dcc89fa3f98a2f4f889d7172&show_border=true&link_opens_in_new_window=true&price_color=000000&title_color=0066c0&bg_color=ffffff">
    </iframe>';

$Kindle_1 = '<iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=BR&source=ac&ref=tf_til&ad_type=product_link&tracking_id=luanrabelo-20&marketplace=amazon&region=BR&placement=B00QJDONQY&asins=B00QJDONQY&linkId=84e899c72165c5ecf6ba03c0e6bf6529&show_border=true&link_opens_in_new_window=true&price_color=000000&title_color=0066c0&bg_color=ffffff">
    </iframe>';
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>hellpeR - Luan Rabelo</title>
<meta property="og:title" content="hellpeR" />
<meta property="og:url" content="http://ostras.esy.es/R/hellpeR.php" />
<meta property="og:description" content="Gerador de Scripts do R">
<meta property="og:image" content="https://www.shareicon.net/data/128x128/2016/08/18/812159_science_512x512.png" />
<meta name="author" content="Luan Rabelo">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="img/organism.png" type="image/x-icon" />
<script type="text/javascript">
function id(el) {
  return document.getElementById(el);
}
function mostra(element) {
  if (element) {
    id(element.value).style.display = 'block';
  }
}
function esconde_todos($element, tagName) {
  var $elements = $element.getElementsByTagName(tagName),
      i = $elements.length;
  while(i--) {
    $elements[i].style.display = 'none';
  }
}
window.addEventListener('load', function() {
  var $Masculino = id('g-bar'),
      $Feminino = id('g-pizza'),
      $sexo  = id('sel-sexo');

  //mostrando no onload da página
  esconde_todos(id('palco'), 'div');
  mostra(document.querySelector('input[name="graphic"]:checked'));


  //mostrando ao clicar no radio
  var $radios = document.querySelectorAll('input[name="graphic"]');
  $radios = [].slice.call($radios);

  $radios.forEach(function($each) {
    $each.addEventListener('click', function() {
      esconde_todos(id('palco'), 'div');
      mostra(this);
    });
  });
});
</script>
<style>
	input[type="text"]{width: 100%; height: 30px; padding: 10px 10px 10px 10px;}
	input[type=button], input[type=submit] {background-color: #0055CC; font-family: "Helvetica"; font-weight: bolder; font-size: 20px; letter-spacing: 2px; border: none; width: 100%; height: 50px; border-radius: 12.5px; color: white; padding: 15px 15px 15px 15px; text-decoration: none; cursor: pointer;}
	fieldset{width: 95%; margin: 0 auto; border-radius: 15px;}
	legend{ font-size: 25px; font-weight: bold; letter-spacing: 1.5px;}
	#description{font-size: 25px; font-weight: bold; letter-spacing: 1.5px;}
</style>
</head>

<body>
<h1 align="center">hellpeR</h1>
<form action="Untitled-2.php" method="post">
<fieldset><legend>Gráficos</legend>
<table width="100%">
  <tbody>
    <tr align="center">
      <td colspan="4" id="description">Escolha o tipo de gráfico de deseja plotar no R</td>
      </tr>
    <tr align="center">
      <td></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr align="center">
      <td><figure>
  <img src="img/gBar.png" width="200" height="200" alt=""/>
<figcaption><input name="graphic" type="radio" value="g-bar"> Gráfico em Barras</figcaption>
</figure></td>
      <td><?php echo($Book_2); ?></td>
      <td><figure>
  <img src="https://mbtskoudsalg.com/images/drawing-histograms-png.png" width="200" height="200" alt=""/>
<figcaption><input name="graphic" type="radio"> 
Histograma</figcaption>
</figure></td>
      <td><?php echo($Book_4); ?></td>
    </tr>
    <tr align="center">
      <td><?php echo($Kindle_1); ?></td>
      <td><figure>
  <img src="img/gPizza.png" width="200" height="200" alt=""/>
<figcaption><input name="graphic" type="radio" value="g-pizza"> 
Gráfico em Pizza</figcaption>
</figure></td>
      <td><?php echo($Book_3); ?></td>
      <td><figure>
  <img src="img/gBoxPlot.png" width="200" height="200" alt=""/>
<figcaption><input name="graphic" type="radio"> 
Gráfico em Boxplot</figcaption>
</figure></td>
    </tr>
    <tr align="center">
      <td><figure>
  <img src="img/gLines.png" width="200" height="200" alt=""/>
<figcaption><input name="graphic" type="radio"> 
Gráfico em Linhas</figcaption>
</figure></td>
      <td><figure>
  <img src="img/gNormal.png" width="200" height="200" alt=""/>
<figcaption><input name="graphic" type="radio"> 
Gráfico Dsitribuição Normal</figcaption>
</figure></td>
      <td><figure>
  <img src="https://png.icons8.com/metro/1600/scatter-plot.png" width="200" height="200" alt=""/>
<figcaption><input name="graphic" type="radio"> 
Gráfico em Dispersão</figcaption>
</figure></td>
      <td><?php echo($Book_1); ?></td>
    </tr>
  </tbody>
</table>
<div id="palco">
<div id="g-bar"><fieldset><legend>Gráfico em Barras</legend>
<table width="75%" align="center">
  <tbody>
    <tr align="center">
      <td colspan="2">&nbsp;</td>
      </tr>
	  <tr align="center">
      <td width="25%">Título do Gráfico</td>
      <td width="75%"><input name="Titulo" type="text" id="Titulo" placeholder="Título que aparecerá no gráfico" size="50%"></td>
    </tr>
	  <tr align="center">
	    <td>Tamanho do Texto</td>
	    <td><input name="TamTitulo" type="text" id="TamTitulo" placeholder="Tamanho do Texto do Título (Defalt=1)" size="50%"></td>
	    </tr>
	  <tr align="center">
      <td width="25%">Nome Variável 1</td>
      <td width="75%"><input name="VarName1" type="text" id="VarName1" placeholder="Ex. Qtde. de Professores"></td>
    </tr>
	  <tr align="center">
      <td>Dados da Variável 1</td>
      <td><input name="DadosVar1" type="text" id="DadosVar1" placeholder="Ex. 1751, 1186, 947, 29 (separados por ,)"></td>
    </tr>
    <tr align="center">
      <td>Nome Variável 2</td>
      <td><input name="VarName2" type="text" id="VarName2" placeholder="Ex. Nicho Ocupado"></td>
    </tr>
	  <tr align="center">
      <td>Dados da Variável 2</td>
      <td><input name="DadosVar2" type="text" id="DadosVar2" placeholder="Ex. &quot;UFPA&quot;, &quot;IFPA&quot;, &quot;EMBRAPA&quot;, &quot;MPEG&quot; (separados por ,)"></td>
    </tr>
	  <tr align="center">
	    <td>Subtítulo no Gráfico</td>
	    <td><input name="SubTitle" type="text" id="SubTitle" placeholder="Ex. Fonte: www.ibge.com.br"></td>
	    </tr>
  </tbody>
</table>
	
</fieldset></div>
    <div id="g-pizza"><fieldset><legend>Gráfico em Pizza</legend>
	
</fieldset></div>
</div>
<p align="center"><input type="submit" formmethod="POST" value="Gerar Script"></p>
</fieldset>	
</form>
</body>
</html>