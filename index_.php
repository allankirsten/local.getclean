<!doctype html>
<html lang="pt-BR">
<head>
	<?php include("includes/seoblack.php"); ?>

	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
	<title>Black Ship</title>
	
	<meta name="author" content="Black Ship" />
	<meta property='og:type' content='website'>
	<meta property='og:site_name' content='Black Ship'>
	<meta property='og:url' content='<?php echo $$url; ?>'>
	<?php if(isset($seo['titulo'])) : ?>
	<meta property='og:title' content='<?php echo $seo["titulo"]; ?> | Black Ship'>
	<meta name="description" content='<?php echo $seo["descricao"]; ?>'>	
	<meta property='og:description' content='<?php echo $seo["descricao"]; ?>'>
	<meta property='og:image' content='<?php echo $seo["image"]; ?>'>
	<?php else : ?>
	<meta property='og:title' content='Black Ship'>
	<meta name="description" content="Black Ship is a creative crew on a journey across the borders between communication, knowledge and collaboration.">	
	<meta property='og:description' content='Black Ship is a creative crew on a journey across the borders between communication, knowledge and collaboration.'>
	<meta property='og:image' content=''>
	<?php endif; ?>
	
	<?php //define('BASE_URL', '/blackship/web/build'); //dev ?>
	<?php //define('BASE_URL', '/blackship'); //homolog ?>
	<?php define('BASE_URL', '/preview'); //prod ?>
	
	<link href="<?php echo BASE_URL ?>/images/favicon.gif" rel="icon" type="image/x-icon" />
	<link rel="stylesheet" href="<?php echo BASE_URL ?>/css/fancybox/jquery.fancybox.css">
	<!-- <link rel="stylesheet" href="<?php echo BASE_URL ?>/css/style.min.css?v=1.3.0"> -->
	<link rel="stylesheet" href="<?php echo BASE_URL ?>/css/style.css">
	<link rel="stylesheet" href="<?php echo BASE_URL ?>/css/style_fix.css">
	
	<script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBN7Ti66xRomR_moplYPRrIhyWQOnm-lGw">
    </script>
	
	<!--[if lt IE 9]>
	<script src="js/html5.js"></script>
	<![endif]-->

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-58722421-1', 'auto');
	  ga('send', 'pageview');
	</script>

</head>
<body>
	<div id="container">
		<div id="home"></div>	
		<div id="works-header"></div>	
		<div id="works"></div>	
		<div id="work"></div>	
		<div id="network"></div>	
		<div id="footer"></div>	
		<div id="error"></div>	
		<div id="transition"></div>	
	</div>

	<script type="text/template" id="works-header-template">
		<div class="works__header">
			<div class="works-header__nav"></div>
			<div class="works-header__buttons">
				<div class="works-header-buttons__item reset" data-filter="*" title="reset navigation">
					<svg version="1.1" id="Camada_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					width="50px" height="50px" viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve">
					<g>
					<rect width="50" height="50" class="cls-1"/>
					<path d="M24.453,40h-0.051c-3.325,0-6.445-1.314-8.784-3.698c-2.34-2.388-3.619-5.565-3.608-8.946
					c0.027-6.997,5.651-12.713,12.535-12.74h0.05c3.325,0,6.444,1.314,8.786,3.702c2.338,2.388,3.62,5.563,3.607,8.947
					C36.959,34.257,31.335,39.973,24.453,40z M32.852,18.852c-2.199-2.246-5.131-3.478-8.256-3.478h-0.046
					c-6.476,0.026-11.767,5.402-11.793,11.983c-0.012,3.181,1.192,6.164,3.39,8.41c2.198,2.241,5.131,3.475,8.256,3.475h0.048
					c6.475-0.026,11.764-5.402,11.79-11.984C36.254,24.081,35.05,21.093,32.852,18.852z M25.618,26.166l0.016,9.993
					c0,0.209-0.255,0.379-0.567,0.379c-0.313,0-0.568-0.17-0.568-0.379v-5.987v-2.096l-4.882,4.861c-0.09,0.095-0.209,0.14-0.329,0.14
					c-0.119,0-0.239-0.045-0.329-0.14c-0.182-0.183-0.182-0.482,0-0.668l3.563-3.619l1.291-1.457h-8.025
					c-0.205,0-0.371-0.234-0.371-0.519c0-0.286,0.166-0.521,0.371-0.521L25,26.125 M24.141,26.154h9.07
					c0.204,0,0.371,0.234,0.371,0.521c0,0.284-0.167,0.519-0.371,0.519h-8.973 M24.814,26.3l4.565-4.623
					c0.183-0.185,0.476-0.185,0.66,0c0.181,0.188,0.181,0.488-0.002,0.673l-4.565,4.621 M24.499,27v-8.547
					c0-0.208,0.255-0.376,0.568-0.376c0.312,0,0.567,0.168,0.567,0.376v9.166 M25.618,26.166 M24.494,14.615c-0.002,0-0.011,0-0.011,0
					c-0.606,0-1.174-0.238-1.601-0.675c-0.423-0.432-0.656-1.01-0.654-1.628c0.005-1.269,1.027-2.31,2.275-2.312
					c0.617,0,1.183,0.239,1.608,0.672c0.427,0.432,0.66,1.014,0.658,1.631C26.764,13.572,25.743,14.611,24.494,14.615z M25.543,11.25
					c-0.275-0.279-0.641-0.434-1.029-0.434c-0.818,0.005-1.478,0.677-1.481,1.501c-0.002,0.396,0.149,0.767,0.419,1.048
					c0.275,0.279,0.641,0.435,1.031,0.435v0.406L24.49,13.8c0.808-0.004,1.471-0.679,1.473-1.502
					C25.967,11.902,25.816,11.528,25.543,11.25z" class="cls-2"/>
					<path d="M25,27.75l-6.138-5.886c-0.185-0.182-0.185-0.475,0-0.66c0.188-0.18,0.488-0.18,0.674,0.002L25,26.562" class="cls-2"/>
					<path d="M25,26.562l5.535,5.925c0.185,0.183,0.185,0.476,0,0.66c-0.188,0.181-0.488,0.181-0.674-0.002L25,28.076" class="cls-2"/>
					</g>

					</svg>
					<div class="ponteiro">
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							 viewBox="-272 395.9 50 50" style="enable-background:new -272 395.9 50 50;" xml:space="preserve">
						<g>
							<path class="st0" d="M-245,419.3l4.7,7.8c0.1,0.1,0.1,0.2,0.1,0.3c0,0.2-0.2,0.4-0.4,0.4c0,0,0,0,0,0c-0.1,0-0.2,0-0.2-0.1l-7.8-5
								l-5.1-8.1c-0.1-0.2-0.1-0.4,0.1-0.5c0.1-0.1,0.3-0.2,0.5-0.1L-245,419.3"/>
							<path class="st1" d="M-245.7,419.8l3.3,5.4c0,0.1,0.1,0.1,0.1,0.2c0,0.2-0.1,0.3-0.3,0.3c0,0,0,0,0,0c-0.1,0-0.1,0-0.2,0l-5.4-3.4l-3.5-5.6
								c-0.1-0.1-0.1-0.3,0-0.4c0.1-0.1,0.2-0.1,0.4,0L-245.7,419.8"/>
						</g>
						</svg>
					</div>
				</div>
				<a href="http://www.google.com" class="navigate link1" target="_blank" style="text-decoration:none" title="join the crew">
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid" width="50" height="50" viewBox="0 0 50 50">
						<defs></defs>
						<g>
							<rect width="50" height="50" class="cls-1"/>
							<path d="M33.969,13.219 C33.925,13.105 33.824,13.026 33.707,13.013 C33.591,13.000 33.476,13.054 33.409,13.156 C31.796,15.604 29.611,16.986 26.326,17.639 C26.235,17.655 26.154,17.716 26.108,17.802 C26.063,17.889 26.056,17.989 26.089,18.081 C27.401,21.565 22.709,27.834 20.945,29.604 C20.884,29.665 20.848,29.749 20.848,29.837 C20.848,29.925 20.881,30.010 20.941,30.073 L22.093,31.262 C22.078,31.275 22.064,31.286 22.049,31.299 L18.434,27.607 C18.424,27.601 18.414,27.589 18.405,27.583 C18.025,27.209 17.528,27.004 17.000,27.004 C16.461,27.004 15.953,27.220 15.569,27.607 C15.185,27.999 14.975,28.520 14.975,29.071 C14.976,29.627 15.187,30.142 15.569,30.535 C16.024,31.003 16.674,31.214 17.315,31.109 L18.925,32.752 L16.933,34.785 L17.168,35.026 C17.091,35.017 17.015,35.003 16.936,35.003 C15.860,35.005 14.979,35.907 14.975,37.006 C14.973,37.541 15.174,38.041 15.539,38.416 C15.907,38.794 16.396,39.001 16.919,39.001 C16.919,39.001 16.927,39.001 16.929,39.001 C18.005,38.997 18.885,38.097 18.891,36.998 C18.891,36.919 18.878,36.843 18.869,36.765 L19.097,36.998 L21.090,34.964 L22.700,36.608 C22.600,37.258 22.806,37.925 23.262,38.394 C23.646,38.780 24.156,38.997 24.695,38.997 C25.237,38.997 25.745,38.780 26.128,38.394 C26.510,38.001 26.722,37.480 26.722,36.930 C26.722,36.385 26.517,35.876 26.145,35.483 C26.140,35.477 26.135,35.472 26.130,35.466 L22.526,31.786 C22.540,31.774 22.553,31.763 22.566,31.752 L23.682,32.904 C23.743,32.967 23.826,33.000 23.908,33.000 C23.964,33.000 24.022,32.983 24.075,32.950 C31.324,28.354 33.634,23.250 34.294,19.778 C35.015,15.989 34.011,13.330 33.969,13.219 ZM16.925,38.294 L16.919,38.647 L16.919,38.294 C16.583,38.294 16.267,38.159 16.030,37.917 C15.797,37.674 15.667,37.353 15.669,37.010 C15.672,36.296 16.240,35.715 16.946,35.710 C17.281,35.710 17.596,35.844 17.833,36.085 C18.068,36.327 18.198,36.651 18.195,36.993 C18.194,37.707 17.622,38.291 16.925,38.294 ZM19.097,36.032 L17.879,34.785 L19.397,33.236 L20.616,34.480 L19.097,36.032 ZM25.632,35.975 C25.881,36.227 26.019,36.567 26.019,36.930 C26.019,37.287 25.881,37.627 25.630,37.884 C25.130,38.394 24.260,38.394 23.759,37.884 C23.425,37.545 23.300,37.059 23.423,36.584 C23.455,36.461 23.420,36.327 23.331,36.239 L21.587,34.456 L21.827,34.211 L19.661,32.001 L19.422,32.245 L17.678,30.465 C17.611,30.394 17.521,30.359 17.430,30.359 C17.399,30.359 17.369,30.365 17.340,30.371 C16.885,30.494 16.395,30.365 16.066,30.025 C15.815,29.774 15.678,29.434 15.678,29.071 C15.678,28.708 15.815,28.374 16.066,28.116 C16.567,27.607 17.436,27.607 17.936,28.116 C17.944,28.128 17.953,28.134 17.962,28.140 L25.617,35.958 C25.622,35.963 25.627,35.969 25.632,35.975 ZM33.661,19.690 C33.024,22.988 30.820,27.830 23.956,32.254 L23.065,31.334 C25.911,28.916 27.661,26.331 28.636,24.525 C28.728,24.360 28.672,24.146 28.514,24.051 C28.357,23.956 28.155,24.013 28.066,24.180 C27.111,25.946 25.393,28.478 22.591,30.845 L21.617,29.839 C23.260,28.077 27.870,22.161 26.803,18.212 C29.826,17.548 31.945,16.253 33.556,14.070 C33.804,15.043 34.160,17.107 33.661,19.690 Z" class="cls-2"/>
						</g>
					</svg>
				</a>
				<div class="works-header-buttons__item email" title="drop a message">
					<a href="mailto:hi@blackship.com" class="navigate">
					<svg version="1.1" id="Camada_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="40px" height="40px" viewBox="0 0 40 40" enable-background="new 0 0 40 40" xml:space="preserve"> 
						<g id="garrafa"> 
							<path fill="#FBFBFB" d="M26.809,15.582l0.932-2.531c0.118,0.039,0.795,0.322,0.923,0.295c0.27-0.052,0.5-0.254,0.601-0.522 l0.684-1.88c0.074-0.201,0.07-0.43-0.014-0.619c-0.088-0.198-0.797-0.571-0.988-0.637l-0.5-0.178l0.469-1.271 c0.072-0.203,0.067-0.424-0.016-0.616c-0.085-0.195-0.24-0.339-0.435-0.411l-2.392-0.858c-0.133-0.047-0.272-0.055-0.395-0.027 c-0.271,0.055-0.504,0.252-0.602,0.523l-0.469,1.264c-0.756-0.248-1.457-0.571-1.529-0.557c-0.272,0.053-0.549,0.382-0.648,0.651 l-0.678,1.835c-0.073,0.202-0.068,0.426,0.016,0.617c0.078,0.178,0.879,0.555,1.064,0.634l-0.928,2.522 c-0.139,0.016-0.273,0.039-0.404,0.064c-2.148,0.428-3.973,2.02-4.762,4.157l-3.586,9.812c-0.071,0.189,0.021,0.401,0.201,0.467 c0.183,0.065,0.387-0.036,0.457-0.227l3.586-9.812c0.697-1.889,2.312-3.298,4.217-3.677c0.176-0.035,0.436-0.034,0.637-0.051 c0.139-0.015,0.258-0.108,0.307-0.244l1.138-3.089c0.034-0.094,0.032-0.193-0.009-0.282c-0.037-0.089-0.188-0.183-0.275-0.214 l-0.652-0.265c-0.014-0.009-0.034-0.018-0.046-0.045c-0.007-0.015-0.007-0.036-0.001-0.054l0.678-1.832 c0.004-0.014,0.012-0.026,0.02-0.035c0.184,0.049,1.018,0.363,1.268,0.45c0.002,0,0.002,0.001,0.004,0.002l3.185,1.138l1.116,0.402 c0.02,0.008,0.029,0.022,0.035,0.037c0.008,0.016,0.008,0.036,0.002,0.054l-0.678,1.835c-0.014,0.04-0.045,0.046-0.053,0.048 c-0.01,0.003-0.023,0.003-0.041-0.003l-0.588-0.211c-0.182-0.064-0.381,0.037-0.451,0.228l-1.138,3.091 c-0.05,0.138-0.019,0.291,0.083,0.389c1.504,1.49,1.979,3.81,1.207,5.903l-2.426,6.659c-0.069,0.193,0.021,0.402,0.205,0.467 c0.039,0.016,0.08,0.022,0.119,0.021c0.145-0.002,0.281-0.099,0.334-0.246l2.426-6.66C28.861,19.803,28.384,17.274,26.809,15.582z M25.789,7.045c0.005-0.002,0.037,0.004,0.035,0.003l2.389,0.856c0.014,0.006,0.033,0.015,0.041,0.036 c0.012,0.024,0.006,0.048,0.002,0.062L27.785,9.27l-2.52-0.917l0.469-1.262C25.748,7.055,25.777,7.045,25.789,7.045z"/> 
							<path fill="#FBFBFB" d="M19.734,19.997c-0.258-0.097-0.523-0.022-0.592,0.163l-2.834,7.788c-0.066,0.187,0.09,0.412,0.349,0.506 c0.056,0.021,0.112,0.034,0.167,0.04c0.197,0.018,0.37-0.06,0.425-0.205l2.833-7.786C20.15,20.316,19.994,20.087,19.734,19.997z"/> 
							<path fill="#FBFBFB" d="M24.434,21.707c-0.26-0.092-0.525-0.015-0.596,0.176l-2.145,5.889c-0.068,0.188,0.086,0.418,0.346,0.514 c0.057,0.021,0.113,0.032,0.168,0.037c0.197,0.018,0.375-0.062,0.428-0.211l2.143-5.888C24.846,22.033,24.691,21.803,24.434,21.707 z"/>	
							<path fill="#FBFBFB" d="M23.163,23.081c-0.54-0.006-1.151-0.128-1.763-0.349c-1.402-0.512-2.643-1.512-2.307-2.438 c0.174-0.48,0.746-0.748,1.57-0.736c0.541,0.008,1.15,0.129,1.762,0.354c1.402,0.509,2.645,1.508,2.306,2.436 C24.559,22.828,23.986,23.093,23.163,23.081z M20.676,20.372c-0.516-0.007-0.758,0.128-0.789,0.21 c-0.07,0.196,0.453,0.902,1.789,1.39c0.514,0.188,1.037,0.295,1.475,0.3c0.516,0.008,0.756-0.128,0.789-0.214 c0.07-0.194-0.453-0.899-1.791-1.387C21.637,20.483,21.114,20.377,20.676,20.372z"/>
						</g> 
						<g id="agua"> <path fill="#FBFBFB" d="M33.635,32.179c-2.305,0-4.18-2.139-4.18-4.769c0-0.229-0.164-0.41-0.365-0.41h-0.002h-0.003 c-0.202,0-0.366,0.182-0.366,0.41c0,2.63-1.873,4.769-4.176,4.769s-4.176-2.139-4.176-4.769c0-0.229-0.164-0.41-0.367-0.41 c0,0-0.001,0-0.002,0h-0.001c-0.203,0-0.367,0.182-0.367,0.41c0,2.63-1.874,4.769-4.175,4.769c-2.303,0-4.084-2.139-4.084-4.769 c0-0.229-0.164-0.41-0.367-0.41c0,0-0.001,0-0.002,0H11c-0.203,0-0.366,0.182-0.366,0.41c0,2.63-1.966,4.769-4.269,4.769 C6.164,32.179,6,32.361,6,32.589C6,32.817,6.164,33,6.365,33c2.057,0,3.908-1.451,4.637-3.499C11.731,31.549,13.398,33,15.455,33 c2.056,0,3.813-1.449,4.543-3.496C20.729,31.551,22.487,33,24.543,33c2.057,0,3.815-1.451,4.545-3.499 C29.816,31.549,31.576,33,33.635,33C33.836,33,34,32.817,34,32.589C34,32.361,33.836,32.179,33.635,32.179z"/> 
						</g> 
					</svg>
					</a>
				</div>
			</div>
		</div>
		<div class="works-header__responsive">
			<div class="works-header__openclose"><span></span></div>
			<div class="works-header-responsive__nav"></div>
			<div class="works-header-responsive__buttons">
				<div class="works-header-responsive-buttons__item reset" data-filter="*">View All</div>
				<a href="http://www.google.com" target="_blank"><div class="works-header-responsive-buttons__item">Custom URL</div></a>
				<a href="mailto:hi@blackship.com" target="_blank"><div class="works-header-responsive-buttons__item email">Contact</div></a>
			</div>
		</div>
	</script>

	<script type="text/template" id="home-template">
		<div id="home__header">
			<div class="home-header__text">
				<h2>Black Ship is a creative crew on a journey across the borders between communication, content and collaboration.</h2>
			</div>
		</div>
	</script>

	<script type="text/template" id="works-template">
		<div id="works">
			<div class="works__grid">
				<div class="works-grid__sizer"></div>
			</div>
			

			<div class="works__also">
				<div class="works-also__header">
					<h2>View Also</h2>
				</div>
				<%= worksalso %>
			</div>

		</div>
	</script>


	<script type="text/template" id="work-template">
		
		<div id="work__galeries">
			<%= galerias %>
			<div class="work-galery__prevnext">
				<div class="work-galery-prevnext__item next"></div>
				<div class="work-galery-prevnext__item prev"></div>
			</div>
		</div>
		<div id="work__content">
			<div class="work-content__text">
				<h2><%= titulo %></h2>
				<p><%= descricao %></p>
				<div class="work-content__nextprev">
					<div class="work-content-nextprev next">
						<div class="title"><%= nextproject %></div>
					</div>
					<div class="work-content-nextprev prev">
						<div class="title"><%= prevproject %></div>
					</div>
				</div>
				<div class="work-content__share">
					<a href="javascript:void(0)" class="twitter"></a>
					<a href="javascript:void(0)" class="facebook"></a>
					<a href="javascript:void(0)" class="google"></a>
					<a href="javascript:void(0)" class="pinterest"></a>
				</div>
			</div>
			<div id="work__galeries__videos" class="galeria-mobile">
				<%= videos %>
				<div class="work-galery__prevnext">
					<div class="work-galery-video-prevnext__item next"></div>
					<div class="work-galery-video-prevnext__item prev"></div>
				</div>
			</div>
			<div id="work__galeries__images" class="galeria-mobile">
				<%= galerias_mobile %>
				<div class="work-galery__prevnext">
					<div class="work-galery-prevnext__item next"></div>
					<div class="work-galery-prevnext__item prev"></div>
				</div>
			</div>
			<div class="work-content__artists">
				<%= artistas %>
			</div>
		</div>
	</script>

	<script type="text/template" id="network-template">
		<div id="elm__network">
			<div class="network__header">
				<h2>Collaborative Network</h2>
			</div>
			<div id="network__map__container">
			<div id="network__map"></div>
			</div>
		</div>
	</script>

	<script type="text/template" id="footer-template">
		<div id="elm__footer">
			<div class="footer__logo">
				<img src="<?php echo BASE_URL ?>/images/footer-logo-white.gif" width="33px" alt="Why join the navy if you can be a pirate?" title="Why join the navy if you can be a pirate?"/>
			</div>
		</div>
	</script>

	<script type="text/template" id="error-template">
		<div id="error_text">
			<h1>404</h1>
		</div>
	</script>

	<script type="text/template" id="projeto-template">
		<div class="works-grid__item <%= grid_size %> <%= categoria_slug %>" data-idwork="<%= slug %>" data-index="<%= index %>" style="background-image: url(<%= capa %>);" >
			<div class="works-item__caption">
				<p class="category"><%= categoria %></p>
				<h2 class="title"><%= titulo %></h2>
				<p class="caption"><%= caption %></p>
			</div>
		</div>
	</script>

	<script type="text/template" id="transition-template">
		<div id="transition">
			<div class="transition__loader white">
				<div class="transition__logo black"></div>
			</div>
			<div class="transition__loader black">
				<div class="transition__logo white"></div>
			</div>
		</div>
	</script>

	<script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.7.1/modernizr.min.js"></script>
	<script src="//code.createjs.com/preloadjs-0.4.1.min.js"></script>
	<script src="<?php echo BASE_URL ?>/js/main.min.js?v=2.0.1"></script>

	
</body>
</html>