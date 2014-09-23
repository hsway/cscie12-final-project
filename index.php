<!DOCTYPE html>
<html lang="en">
<head>
	<?php include("inc/htmlhead.php"); ?>
	<title>Hank's Hankies - Home</title>
</head>
<body id="home">
	  <?php include("inc/nav.php"); ?>

	  <!-- Carousel -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="6000">
    <!-- use data-interval="false" above to stop auto-advance -->
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="img/500ht-rainbow.jpg" alt="Rainbow Fabrics">
          <!-- image credit: http://commons.wikimedia.org/wiki/File:Fabric_Rainbow_Colors.jpg -->
          <!-- <img src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" alt="First slide"> -->
          <div class="container">
            <div class="carousel-caption">
              <h1>Hank's Hankies.</h1>
              <p>Modern handkerchiefs for modern people.</p>
              <p><a class="btn btn-lg btn-primary" href="shop.php" role="button">Buy some Hankies!</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/500ht-plaid.jpg" alt="Plaid Fabric">
          <!-- image credit: http://en.wikipedia.org/wiki/File:MacKinnon_Hunting_tartan_%28Lyon_Court%29.jpg -->
          <!-- <img src="holder.js/900x500/auto/#666:#6a6a6a/text:Second slide" alt="Second slide"> -->
          <div class="container">
            <div class="carousel-caption">
              <h1>Be green (plaid).</h1>
              <p>Hank's Hankies are 100% recycled, and you'll never buy tissues again.</p>
              <p><a class="btn btn-lg btn-primary" href="shop.php" role="button">Buy some Hankies!</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/500ht-pattern.jpg" alt="Patterned Fabric">
          <!-- image credit: http://en.wikipedia.org/wiki/File:Kazakh_rug_chain_stitch_embroidery.jpg -->
          <!-- <img src="holder.js/900x500/auto/#555:#5a5a5a/text:Third slide" alt="Third slide"> -->
          <div class="container">
            <div class="carousel-caption">
              <h1>Not your grandpa's Hankie.</h1>
              <p>Unless your grandpa is extraordinarily dapper.</p>
              <p><a class="btn btn-lg btn-primary" href="shop.php" role="button">Buy some Hankies!</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->

    <div class="container marketing">
      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <h2><span class="glyphicon glyphicon-leaf"></span></h2>
          <p>Tissues are the worst. Be green and use Hankies instead. You'll save money too.</p>
          <p><a class="btn btn-default" href="products.php" role="button">Our Products &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <h2><span class="glyphicon glyphicon-heart"></span></h2>
          <p>Our Hankies are hand-made in the US. When you buy Hank's Hankies, you're supporting local artisans.</p>
          <p><a class="btn btn-default" href="company.php" role="button">Our Company &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <h2><span class="glyphicon glyphicon-send"></span></h2>
          <p>Got questions or comments? We'd love it if you'd drop us a note.</p>
          <p><a class="btn btn-default" href="contact.php" role="button">Contact Hank &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
    </div><!-- /.container -->

	  <?php include("inc/footer.php"); ?>
</body>
</html>