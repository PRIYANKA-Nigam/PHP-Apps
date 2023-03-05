<html>
    <head>
        <style>
            /* h2{ direction:rtl; //was moving to extreme right not immediate right
                padding:200px;
                } */
                .orange {
                    position: relative;
                    left: 150px;
                    top: -120px;

                }
                .red {
                    position: relative;
                    left: 250px;
                    top: -290px;
                }
                .yellow {
                    position: relative;
                    top: -250px;
                }
                .v{
                    position: relative;
                    top: -250px;
                    left: 5px;
                    height: 50px;
                    width: 100px;
                    padding: 10px;15px;
                    background-color:black;
                    color:white;
                    
                }
            </style>
            </head>
    <body style="background-color:grey; border-style:solid;border-width:20px;border-color:white;padding:0.25em">
        <h1><u>Weight Conversion</u></h1>
        <br><br>
        <form method="POST" >
        <input type="text" class="app-form-control" placeholder="Enter Value" name="c1">
        <br><br>
        <input type="radio" name="units1" value="gm">
        <label>Gram</label>
        <br>
        
        <input type="radio" name="units2" value="ton"><label>Ton</label><br>
       
        <input type="radio" name="units3" value="quin"> <label>Quintal</label><br>
        
        <input type="radio" name="units4" value="p"><label>Pound</label><br>
       
        <input type="radio" name="units5" value="kg"> <label>Kilogram</label><br>
     
        <input type="radio" name="units6" value="hg">   <label>Hectogram</label><br>
       
        <input type="radio" name="units7" value="dm"> <label>Decagram</label><br>
       
        <input type="radio" name="units8" value="de"> <label>Decigram</label><br>
       
        <input type="radio" name="units9" value="cg"> <label>Centigram</label><br>
       
        <input type="radio" name="units10" value="mg"> <label>Milligram</label><br>
      
        <input type="radio" name="units11" value="Mg">  <label>MegaGram</label>
        <div class="orange">
        <h2><b>To </b></h2></div>
        <div class="red">
        <input type="radio" name="units11" value="gm">
        <label>Gram</label>
        <br>
        
        <input type="radio" name="units21" value="ton"><label>Ton</label><br>
       
        <input type="radio" name="units31" value="quin"> <label>Quintal</label><br>
        
        <input type="radio" name="units41" value="p"><label>Pound</label><br>
       
        <input type="radio" name="units51" value="kg"> <label>Kilogram</label><br>
     
        <input type="radio" name="units61" value="hg">   <label>Hectogram</label><br>
       
        <input type="radio" name="units71" value="dm"> <label>Decagram</label><br>
       
        <input type="radio" name="units81" value="de"> <label>Decigram</label><br>
       
        <input type="radio" name="units91" value="cg"> <label>Centigram</label><br>
       
        <input type="radio" name="units101" value="mg"> <label>Milligram</label><br>
      
        <input type="radio" name="units111" value="Mg">  <label>MegaGram</label>
            </div>
            <button class="v" name="sub">CONVERT</button>
            <div class="yellow">
            <hr>
       <input type="text" class="app-form-control" placeholder="Converted Value" name="c2">  
            </div>  
            </form>
            <?php
               if(isset($_POST['units1'])){
               // $_POST['c2']="hi";
               echo "hi";
               }
            ?>
</body>
</html>