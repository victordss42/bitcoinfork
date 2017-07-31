<?php
    include_once("conexao.php");
?>

<?php 
    include("g-head.php");
?>
<!-- PAGE RELATED HEAD -->
        <title>Programitando</title>
        <meta name="description" content="Nosso blog nasceu para levar sua carreira na área de TI a um outro nível, acompanhe nossas novidade e se torne um mito">
        
        <!-- Theme/Browser Color -->
        <meta name="theme-color" content="#000000">
        <meta name="msapplication-TileColor" content="#FFFFFF">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
      
        <!-- Social preview -->
        <meta property="og:site_name" content="GO G5!"/>
        <meta property="og:type" content="website"/>
        <meta property="og:url" content="https://programitando.com"/>
        <meta property="og:image" content="img/logo150x150.png"/>
        <meta property="og:image:type" content="image/png" />
        <meta property="og:image:width" content="150" />
        <meta property="og:image:height" content="150" />
    </head>
    <body>
<!-- /PAGE RELATED HEAD -->
<?php include_once("analyticstracking.php") ?>

<div class="flex-container">
  <header class="d-flex flex-column justify-content-center align-content-around header row text-center" id="ebook-header">
   <!-- <div class="container d-flex justify-content-center flex-column"> -->
      <a href="/">
      <img src=img/logo_banner_principal.png class="img-fluid" id="ebook-logo">
      </a>
      <h1 class="header-subtitle" id="ebook-subtitle">[eBook] O guia definitivo de Big Data para iniciantes</h1>
    <div class="ebook-button">            
    <a href="o_guia_definitivo_de_big_data.pdf"><input type="submit" class="form-control btn" value="BAIXAR MEU EBOOK"></a>
    </div>
    <!-- </div> -->
  </header>
</div>
<main class="" id="main">

<!-- PAGE RELATED CONTENT -->
<div class="container" id="ebook-form-container">
  <div class="row d-flex justify-content-center">
    <div class="d-flex sidebar col-md-8 col-sm-10 col-lg-7 justify-content-center">
      <div class="col-lg-11 col-md-11 d-flex text-center">
        <a href="/">
          <h1 class="header-subtitle outros-conteúdos" id="ebook-subtitle">Conheça nossos outros conteúdos</h1>
        </a>
      </div>
    </div>
  </div>
</div>
<!-- /PAGE RELATED CONTENT -->

</main>

<?php 
    include("footer.php");
?>