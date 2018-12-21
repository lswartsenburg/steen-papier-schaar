<!DOCTYPE html>
<?php   defined('C5_EXECUTE') or die("Access Denied."); ?>
<html lang="<?php echo LANGUAGE?>">

	<head>
		
		

		<?php   
		Loader::element('header_required');	 
		?>

<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- CSS libs -->
		<link rel="stylesheet" href="<?php  echo $this->getThemePath(); ?>/css/typography.css" />
		<link rel="stylesheet" href="<?php  echo $this->getThemePath(); ?>/css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?php  echo $this->getThemePath(); ?>/css/bootstrap-theme.css" />
		<link rel="stylesheet" href="<?php  echo $this->getThemePath(); ?>/css/main.css" />
		
		<script src="//cdn.optimizely.com/js/200607994.js"></script>

		<!-- JS libs -->
		<script src="<?php  echo $this->getThemePath(); ?>/js/bootstrap.min.js" ></script>
		<script src="<?php  echo $this->getThemePath(); ?>/js/jquery.easing.1.3.js" ></script>
		<script src="<?php  echo $this->getThemePath(); ?>/js/lazyload.js" /></script>
		<script src="<?php  echo $this->getThemePath(); ?>/js/main.js" /></script>
		<script type='text/javascript'>
		$(window).bind('scroll', function (e) {
		    var t = $(window).scrollTop() + $(".navbar").height();
		    $(".indicator").each(function (i, e) {
		        var telem = $("#" + $(e).attr("attr-target") + "-slide");
		        var top = $(telem).position()["top"]
		        var height = $(telem).height();
		        if (top <= t && top + height > t) {
		            $(e).parent("li").addClass("active");

		        } else {
		        	$(e).parent("li").removeClass("active");
		        }
		    });
		});
		</script>
		



		<noscript>
			<style>
				.lazy { display: none;}
			</style>
		</noscript>

		


	</head>
	<?php 
	global $u; 
	if ($u->isLoggedIn()) { 
		echo "<style>.navbar-custom.navbar-fixed-top{padding-top: 48px;}.page{margin-top: -204px;padding-bottom: 50px;padding-top: 204px;}</style>"; 
		echo '<body data-spy="scroll" data-target=".navbar-collapse" data-offset="223">';
	} else {

		if($c->getCollectionParentID() != 0){
			echo "<script> document.location.replace('/#".$c->getCollectionName()."')</script>";
		} 
		echo '<body>';
		//data-spy="scroll" data-target=".navbar-collapse" data-offset="175"
	} 
	?>


		<div id="main-container">
			<div class="navbar navbar-custom navbar-fixed-top" role="navigation">
	      <div class="container">

		      </div>
		      <div class="greynav">
		      	<div class="container">
		        <div class="navbar-header">
		        	<div class="collapsed-navbar-logo" href="#"><img src="/themes/sievecorp_onepage/img/logo.png" style="float: left;"></div>
		          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		            <span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		          </button>
		          
		        </div>
		      	<a class="navbar-logo" href="#">
		      		<img src="<?php  echo $this->getThemePath(); ?>/img/logo.png" />
		      	</a>
		        <div class="navbar-collapse collapse">
							<ul class="nav navbar-nav">

				  			<?php     
									if($c->getCollectionParentID() != 0){
  									
                    $a = new GlobalArea('Menu');
                    $a->display($c);
  									
									} else {
										foreach($pages as $key => $page){
						    				$pageNumber = $key+1;
						    				$pageName = $page->getCollectionName();
						    				if (!$pageName) { 
						    					$pageName = "Slide ".$pageNumber; 
						    				}
						    				echo '<li><a href="#'.str_replace(" ", "-", $page->getCollectionName()).'">'.$pageName.'</a><span id="indicator-'.$pageName.'" class="indicator" attr-target="'.str_replace(" ", "-", $page->getCollectionName()).'"></span></li>';
						    			
					    			}

				    			}

								?>
				  		</ul>
		        </div>
		      </div>
		    </div>
	    </div>
	    	   




