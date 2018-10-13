<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>event.preventDefault demo</title>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
 
<a href="https://ciblog.ferigalung.com">default click action is prevented</a>
<div id="log"></div>
 
<script>
$( "a" ).click(function( event ) {
  event.preventDefault();
  $( "<div>" )
    .append( 
    	for (var i = 1; i <= 10; i++) {
    		document.write(i);
    	}
     )
    .appendTo( "#log" );
});
</script>
 
</body>
</html>