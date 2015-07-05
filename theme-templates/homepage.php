

<?php
/*
Template Name: Homepage
*/
?>

 <?php get_header() ?>

 <nav class="navbar no-margin">
  <div class="container-fluid lan-nav-width">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header lan-nav-header">
      <button type="button" class="navbar-toggle collapsed cen-button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <i class="glyphicon glyphicon-menu-hamburger"></i>
      </button>
      <div class="logo relative">
            <a class="navbar-brand no-padding" href="#">
            	<img class="img-responsive img-circle" src="<?php echo get_stylesheet_directory_uri(); ?>/img/interimlogo.jpg">
			</a>

 		</div>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse lan-nav" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Why Join</a></li>
        <li><a href="#">About Reerka</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<section class="banner">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-6 col-xs-10 col-xs-offset-2 relative">
			<div class="absolute bg-forum">
				<form class="form-horizontal">
			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-4 control-label">Email </label>
			    <div class="col-sm-8">
			      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="inputPassword3" class="col-sm-4 control-label">Password</label>
			    <div class="col-sm-8">
			      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
			    </div>
			  </div>
		
			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="submit" class="btn btn-default">Sign in</button>
			    </div>
			  </div>
			</form>
				
				
			</div>
				
				
				
			</div>
			
		</div>

		

	</div>

	

</section>

 <?php get_footer() ?>