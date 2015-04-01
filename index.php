<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximun-scale=1">
<title>Exemplo de Teste 01</title>
<link rel="stylesheet" href="css/jquery.mobile.css" />
<link rel="stylesheet" href="css/mystyle.css" />
<script src="js/jquery.js"></script>
<script src="js/jquery.mobile.js"></script>
</head>

<body>
<div id="home" data-role="page">
  <div data-role="header" data-theme="d">
    <h1>Home</h1>
  </div>
  <div data-role="content">
    <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou          uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos.</p>
    
       <a href="#cardapio" data-corners="false" data-icon="arrow-r" data-role="button">Cardapio</a>
       <a href="#fotos" data-corners="false" data-icon="arrow-r" data-role="button">Fotos</a>
       <a href="#videos" data-corners="false" data-icon="arrow-r" data-role="button">Videos</a>
    
  </div><!-- fim do content -->
</div><!-- fim da pagina -->




<div id="cardapio" data-role="page">
  <div data-role="header" data-theme="d" data-position="fixed" data-id="vs_header">
    <h1>Cardapio</h1>
    <a href="#home" data-icon="grid"> Home </a> </div>
  <div data-role="footer" data-position="fixed" data-id="vs_footer">
    <div data-role="navbar">
      <ul>
        <li><a href="#home" data-icon="home">Home</a></li>
        <li><a href="#cardapio" data-icon="bars">Cardapio</a></li>
        <li><a href="#fotos" data-icon="grid">Fotos</a></li>
        <li><a href="#videos" data-icon="star">Videos</a></li>
      </ul>
    </div><!-- fim do navbar -->
  </div><!-- fim do footer -->
</div><!-- fim da pagina -->


<div id="fotos" data-role="page">
  <div data-role="header" data-theme="d" data-position="fixed" data-id="vs_header">
    <h1>Fotos</h1>
    <a href="#home" data-icon="grid"> Home </a> </div>
  <div data-role="footer" data-position="fixed" data-id="vs_footer">
    <div data-role="navbar">
      <ul>
     <li><a href="#home" data-icon="home">Home</a></li>
        <li><a href="#cardapio" data-icon="bars">Cardapio</a></li>
        <li><a href="#fotos" data-icon="grid">Fotos</a></li>
        <li><a href="#videos" data-icon="star">Videos</a></li>
      </ul>
    </div><!-- fim do navbar -->
  </div><!-- fim do footer -->
</div><!-- fim da pagina -->


<div id="videos" data-role="page">
  <div data-role="header" data-theme="d" data-position="fixed" data-id="vs_header">
    <h1>Videos</h1>
    <a href="#home" data-icon="grid"> Home </a> </div>
  <div data-role="footer" data-position="fixed" data-id="vs_footer">
    <div data-role="navbar">
      <ul>
        <li><a href="#home" data-icon="home">Home</a></li>
        <li><a href="#cardapio" data-icon="bars">Cardapio</a></li>
        <li><a href="#fotos" data-icon="grid">Fotos</a></li>
        <li><a href="#videos" data-icon="star">Videos</a></li>
      </ul>
    </div><!-- fim do navbar -->
  </div><!-- fim do footer -->
</div><!-- fim da pagina -->

</body>
</html>
