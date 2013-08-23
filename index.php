<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Modelo de Sites Contabeis Modelo-1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="A professional HTML bootstrappage clinic templateto take your business online. Responsive clean design.">
    <meta name="author" content="bootstrapclinic">
    <!-- Le styles -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="themes/css/main.css" rel="stylesheet">
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
  </head>

<body>
<div class="container">
  <!-- Navbar
    ================================================== -->
    <?php include ('inc/menu.php'); ?>
	<div class="label label-warning" style="display:block;"> 	</div>
<!-- ================Carousel and pages======= -->
		<?php include('inc/carousel.php');?>
				<!-- ARQUIVO DE MENSAGENS DE BOAS VINDAS -->
				<?php include ('inc/welcome.php'); ?>
		</p>
		<hr/>
		<div class="row">
		<div class="span12">
		  <ul id="boxWrap" class="thumbnails">
			<li class="span3">
			  <div class="thumbnail">
				<div class="caption">
				 <img src="themes/css/images/block1.jpg" alt="">
				  <h4>Servico tal</h4>
				  <p> 
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.<br/>
				  </p>
				  <a id="blockOne" class="btn btn-large" href="detail1.html" >Mais</a>
				</div>
			  </div>
			</li>
			<li class="span3">
			  <div class="thumbnail">
				<div class="caption">
				<img src="themes/css/images/block2.jpg" alt=""/>
				  <h4>Servico tal</h4>
				  <p> 
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.<br/>
				  </p>
				 <a id="blockTwo" class="btn btn-large" href="detail2.html" >Mais</a> 
				</div>
			  </div>
			</li>
			<li class="span3">
			  <div class="thumbnail">
				<div class="caption">
				<img src="themes/css/images/block3.jpg" alt=""/>
				  <h4>Servico tal</h4>
				  <p> 
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.<br/>
				  </p>
				  <a id="blockThree" class="btn btn-large" href="detail3.html">Mais</a>
				</div>
			  </div>
			</li>
			<li class="span3">
			  <div class="thumbnail">
				<div class="caption">
				 <img src="themes/css/images/block4.jpg" alt=""/>
				  <h4>Servico tal</h4>
				  <p> 
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.<br/>
				  </p>
				  <a id="blockFour" class="btn btn-large" href="detail4.html">Mais</a>
				</div>
			  </div>
			</li>
		  </ul>
		</div>
		</div>
	
		<div id="book" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="book" aria-hidden="false">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3> Online Booking your appointment</h3>
		  </div>
		<form class="form-horizontal">
		  <div class="modal-body">
			<div class="alert alert-error">
Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
			</div>	  
				<fieldset>
				<div class="control-group">
					  <select class="input-xlarge"><option>Services</option></select>
				  </div>
				<div class="control-group">
					  <input type="text" placeholder="Date" class="input-xlarge"/>
				  </div>
				  <div class="control-group">
					  <input type="text" placeholder="Time" class="input-xlarge"/>
				  </div>
				  <div class="control-group">
					  <input type="text" placeholder="name" class="input-xlarge"/>
				  </div>
				   <div class="control-group">
					  <input type="text" placeholder="email" class="input-xlarge"/>
				  </div>
				   <div class="control-group">
					  <input type="phone" placeholder="phone" class="input-xlarge"/>
				  </div>
				  <div class="control-group">
					  <textarea rows="4" placeholder="notes" id="textarea" class="input-xlarge"></textarea>
				  </div>
				</fieldset>
		  </div>
		  <div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
			<button class="btn btn-primary">Confirm</button>
		  </div>
		</form>
		</div>
 <?php include 'inc/footer.php'; ?>
</div><!-- /container -->
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap/js/jquery.js"></script>	
    <script src="bootstrap/js/bootstrap.min.js"></script>
	<script>
	// carousel demo
    $('#myCarousel').carousel()
	</script>
</body>
</html>
