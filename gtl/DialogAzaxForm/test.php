<!DOCTYPE html>
<html>
<head>
<title>How to display PHP contact form popup using jQuery</title>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/cupertino/jquery-ui.css">
<style>
</style>
</head>
<body>
<button id="b1">Open Dialog Box</button><div id=msg></div>
<div id="my_dialog" title="plus2net  dialog"><form id=f1>
  <p>First Name<input type=text id=t1 name=t1><br>
       Second Name<input type=text id=t2 name=t2></form></p>
    </div>
    <script  src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script>
   $(document).ready(function() {
var pos = { my: "center center", at: "center top+150", of: window };
/////////
$(function() {
    $( "#my_dialog" ).dialog({
autoOpen: false,
position:pos,
 buttons: {
     "Close ": function() {
      $( this ).dialog( "close" );
      },
     "Submit ": function(){
     $('#msg').html($("#f1").serialize());
     $( this ).dialog( "close" );
     }
   }
		});
});
/////////
$("#b1").click(function(){
$( "#my_dialog" ).dialog( "open" );
})

})
</script>
</body>


</html>