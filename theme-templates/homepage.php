

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
	<div class="container wrapper">
		<div class="row main">
			<div class="col-sm-4 col-sm-offset-8 col-xs-12">
				<div class=" bg-forum">
			
					
					    <ul class="nav nav-tabs">
        <li class="nav active"><a href="#A" data-toggle="tab">Login</a></li>
        <li class="nav"><a href="#B" data-toggle="tab">Sign Up</a></li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
    	<div class="tab-pane fade in active" id="A">
    		<form class="form-horizontal">
    			<div class="form-group">
    				<div class="col-sm-12">
    					<input type="email" class="form-control" id="inputEmail3" placeholder="Email" autofocus>
    				</div>
    			</div>
    			<div class="form-group">
    				<div class="col-sm-12">
    					<input type="password" class="form-control" id="inputPassword3" placeholder="Password" >
    				</div>
    			</div>
    			<div class="checkbox">
    				<label>
    					<input class="or-brand"type="checkbox"> Remember Me
    				</label>
    			</div>



    			<div class="form-group">
    				<div class="col-sm-12">
    					<button type="submit" class="btn btn-default">Login</button>
    				</div>
    			</div>
    		</form>
    	</div>


    	<div class="tab-pane fade" id="B">
    		<form class="form-horizontal">
    			<div class="form-group">
    				<div class="col-sm-12">
    					<input type="email" class="form-control" id="inputEmail3" placeholder="Email">
    				</div>
    			</div>
    			<div class="form-group">
    				<div class="col-sm-12">
    					<input type="password" class="form-control" id="inputPassword3" placeholder="Password">
    				</div>
    			</div>
    			<div class="form-group">
    				<div class="col-sm-12">
    					<button type="submit" class="btn btn-default">Sign in</button>
    				</div>
    			</div>
    		</form>
    	</div>
    </div>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="container">

</div>

 <?php get_footer() ?>