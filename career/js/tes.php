<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<script type="text/javascript" src="tes.js"></script>
<script src="jquery.min.js"></script>
<script>
	$(document).ready(function(){
	$("p").click(function(){
		$("h5").toggle();

	});

	$("h4").click(function(){
		$("h3").hide();
		
	});

	$("h2").click(function(){
		$("h1").hide();
		
	});

	$("button").click(function(){
	$("h5").toggle("fast");
	
	});

	$("a").click(function(){
	$("h5").toggle("slow");
	
	});


	});
</script>
</head>
<body>
<div>
<h1 class="a" id="a">Lagi Belajar Javascript</h1>
<h2 class="b" id="b">Lagi Belajar Javascript 2</h2>
<h3 class="c" id="c">Lagi Belajar Javascript 3</h3>
<h4 class="d" id="d">Lagi Belajar Javascript 4</h3>
<h5 class="e" id="e">Lagi Belajar Javascript 5</h5>
<p class="f" id="f">Lagi Belajar Javascript 6</p>
<button>toggle</button>
<a>toggle h5</a>
</div>
</body>
</html>