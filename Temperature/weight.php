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
            </style>
            </head>
    <body style="background-color:grey; border-style:solid;border-width:20px;border-color:white;padding:0.25em">
        <h1><u>Weight Conversion</u></h1>
        <br><br>
        <form method="POST" >
        <input type="text" class="app-form-control" placeholder="Enter Value" name="c1">
        <br><br>
        <input type="radio" name="units" value="gm">
        <label>Gram</label>
        <br>
        
        <input type="radio" name="units" value="ton"><label>Ton</label><br>
       
        <input type="radio" name="units" value="quin"> <label>Quintal</label><br>
        
        <input type="radio" name="units" value="p"><label>Pound</label><br>
       
        <input type="radio" name="units" value="kg"> <label>Kilogram</label><br>
     
        <input type="radio" name="units" value="hg">   <label>Hectogram</label><br>
       
        <input type="radio" name="units" value="dm"> <label>Decagram</label><br>
       
        <input type="radio" name="units" value="de"> <label>Decigram</label><br>
       
        <input type="radio" name="units" value="cg"> <label>Centigram</label><br>
       
        <input type="radio" name="units" value="mg"> <label>Milligram</label><br>
      
        <input type="radio" name="units" value="Mg">  <label>MegaGram</label>
        <div class="orange">
        <h2><b>To </b></h2></div>
        <div class="red">
        <input type="radio" name="units" value="gm">
        <label>Gram</label>
        <br>
        
        <input type="radio" name="units" value="ton"><label>Ton</label><br>
       
        <input type="radio" name="units" value="quin"> <label>Quintal</label><br>
        
        <input type="radio" name="units" value="p"><label>Pound</label><br>
       
        <input type="radio" name="units" value="kg"> <label>Kilogram</label><br>
     
        <input type="radio" name="units" value="hg">   <label>Hectogram</label><br>
       
        <input type="radio" name="units" value="dm"> <label>Decagram</label><br>
       
        <input type="radio" name="units" value="de"> <label>Decigram</label><br>
       
        <input type="radio" name="units" value="cg"> <label>Centigram</label><br>
       
        <input type="radio" name="units" value="mg"> <label>Milligram</label><br>
      
        <input type="radio" name="units" value="Mg">  <label>MegaGram</label>
            </div>
            <div class="yellow">
            <hr>
       <input type="text" class="app-form-control" placeholder="Converted Value" name="c2">  
            </div>  
</body>
</html>