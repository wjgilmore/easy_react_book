<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title') Easy React Book</title>
	<link href="/css/app.css" rel="stylesheet">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,500,300|Merriweather:300,400,400italic,500,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,700,300' rel='stylesheet' type='text/css'>
</head>
<body>
	<nav>
		@include('inc._nav')
	</nav>
	
	@yield('content')

	<footer class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<p>Copyright &copy; W. Jason Gilmore</p>
			</div>
		</div>
	</footer>

	<script src="/js/all.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-21509545-9', 'auto');
  ga('send', 'pageview');

</script>
	
</body>
</html>
