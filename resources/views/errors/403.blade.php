<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>403 - Akses Ditolak!</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
			WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>
		<link href="{{asset('assets/css/vendors.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}" />
    </head>
    
	<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

		<div class="m-grid m-grid--hor m-grid--root m-page">
			<div class="m-grid__item m-grid__item--fluid m-grid  m-error-1" style="background-image:url({{asset('assets/images/bg1.jpg')}});">
				<div class="m-error_container">
					<span class="m-error_number">
						<h1>403</h1>
					</span>
					<p class="m-error_desc">
						Jangan main-main, cukup satu kali main!
					</p>
				</div>
			</div>
        </div>
        
		<script src="{{asset('assets/js/vendors.bundle.js')}}" type="text/javascript"></script>
		<script src="{{asset('assets/js/scripts.bundle.js')}}" type="text/javascript"></script>

	</body>

</html>