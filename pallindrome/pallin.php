<!doctype html>
<html>
    <head>
        <title></title>
     </head>
    <body>
<div class="container">
    <form id="contact" action=""  method="post">
        <h3>Check Pallindrome</h3>
        <h4>
        <?php
         if(isset($_POST['submit'])){
            $wo = $_POST['pallin'];
            $revWo = strrev($wo);
            if($wo === $revWo){
                echo "Yes it is";
            }else{
                echo "No it's not";
            }
         }

?>
</h4>
        <fieldset>
            <!-- <textarea placeholder="Type data here ......" name="pallin"> </textarea> -->
            <input type="text" name="pallin">
</fieldset>
<fieldset>
<input type="submit" name="submit" value="Submit">
</fieldset>
</form>
        </div>
</body>
</html>