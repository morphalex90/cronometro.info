<?php
if(isset($_GET['pdf'])){
	/*require_once 'dompdf/autoload.inc.php';
	use Dompdf\Dompdf;
	$dompdf = new Dompdf();
	#$html = file_get_contents("pdf-content.html");
	$dompdf->loadHtml('hello world');
	$dompdf->setPaper('A4', 'landscape');
	$dompdf->render();
	$dompdf->stream("hello.pdf");*/
} else {
	
	$description = 'Vuoi essere un guardiano al tempo? Ora ne hai l\'occasione! Prova questo ottimo cronometro';
?><!DOCTYPE html>
<html lang="it">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Cronometro.info</title>
        <meta name="title" content="Cronometro.info">
        <meta name="description" content="<?php echo $description; ?>">
        <meta property="og:title" content="Cronometro.info" />
        <meta property="og:description" content="<?php echo $description; ?>" />
        <meta property="og:image" content="/img/background.jpg" />
        <meta property="og:url" content="http://www.cronometro.info" />
        <meta property="og:type" content="website" />
		<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
		<link rel="manifest" href="/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-96518216-1', 'auto');
		  ga('set', 'anonymizeIp', true);
		  ga('send', 'pageview');

		</script>

		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/it_IT/sdk.js#xfbml=1&version=v2.8&appId=618575611669844";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		
		<script src="https://apis.google.com/js/platform.js" async defer>
		  {lang: 'it'}
		</script>
		
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<script>
		  (adsbygoogle = window.adsbygoogle || []).push({
			google_ad_client: "ca-pub-8946052108402323",
			enable_page_level_ads: true
		  });
		</script>
	
	</head>
	<body>
		<header>
			<div class="container">
				<div class="row">
					<div class="col-sm-6 sitebrand"><h1>Cronometro.info</h1><h2>Il tuo cronometro personale</h2></div>
					<div class="col-sm-6">
						<div class="social">
							<div class="fb-like" data-href="https://www.cronometro.info" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="false"></div>
							<div class="g-plusone" data-size="tall" data-annotation="none" data-width="300"></div>
						</div>
						<h3><?php echo $description; ?></h3>
					</div>
				</div>
			</div>
		</header>
		<div class="contenuto">
			<div class="container">
				<div class="row">
					<div class="col-sm-3 spot">
					Pubblicità
					</div>
					<div class="col-sm-3 inner-content">
						<div class="tempo">00:00:00:000</div>
						<button type="button" class="btn btn-primary start" data-toggle="tooltip" data-placement="top" title="Fai partire oppure ferma il tempo, proprio come un vero guardiano del tempo"><i class="fa fa-clock-o" aria-hidden="true"></i> Start</button>
						<button type="button" class="btn btn-primary reset" data-toggle="tooltip" data-placement="top" title="Passato troppo tempo? Azzera tutto"><i class="fa fa-stop" aria-hidden="true"></i> Reset</button>
						<button type="button" class="btn btn-primary giro" data-toggle="tooltip" data-placement="top" title="Hai bisogno di tenere segnati dei parziali? Fai click e verranno segnati nella tabella sotto"><i class="fa fa-slack" aria-hidden="true"></i> Giro</button>
						<table class="parziali">
							<tr><th>#</th><th>Parziale</th><th>Totale</th></tr>
						</table>
					</div>
					<div class="col-sm-6">
						<p>Questo sito è nato come progetto secondario dopo avere capito che non ci sono cronometri usabili facilmente trovabili.</p>
						<p></p>
					</div>
				</div>
			</div>
		</div>
        <footer>
			<div class="container text-center">
				<div class="row">
					<div class="col-sm-12">Copyright &copy; <a href="https://www.pieronanni.it" target="_blank" title="Piero Nanni">Piero Nanni</a> <?php echo date('Y');?>
					
						<a href="//www.iubenda.com/privacy-policy/8086642" class="iubenda-white iubenda-embed" title="Privacy Policy">Privacy Policy</a><script type="text/javascript">(function (w,d) {var loader = function () {var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0]; s.src = "//cdn.iubenda.com/iubenda.js"; tag.parentNode.insertBefore(s,tag);}; if(w.addEventListener){w.addEventListener("load", loader, false);}else if(w.attachEvent){w.attachEvent("onload", loader);}else{w.onload = loader;}})(window, document);</script>
					
					</div>
				</div>
			</div>
		</footer>      
    
		<link href="https://fonts.googleapis.com/css?family=Nova+Oval" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<script src="script.js"></script>
	</body>
</html>

<?php } ?>