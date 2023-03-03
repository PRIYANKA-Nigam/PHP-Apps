<html>
<style>
            /* h2{ direction:rtl; //was moving to extreme right not immediate right
                padding:200px;
                } */
                .red {
                    position: relative;
                    left: 310px;
                    top: -150px;

                }
                .a {
                    position: relative;
                    left: 400px;
                    top: -195px;

                }
                
               
                </style>
    <body style="background-color:grey; border-style:solid;border-width:20px;border-color:white;padding:0.25em">
        <h1><u>Fluid Conversion</u></h1>
</body>
<form method="POST" >
        <input type="text" class="app-form-control" placeholder="Enter Value" name="c1"> Gallon <br><br>
        <input type="text" class="app-form-control" placeholder="Enter Value" name="c1"> Kilolitre<br><br>
        <input type="text" class="app-form-control" placeholder="Enter Value" name="c1"> Liter<br><br>
        <input type="text" class="app-form-control" placeholder="Enter Value" name="c1"> Deciliter<br><br>
        <input type="text" class="app-form-control" placeholder="Enter Value" name="c1"> Centiliter<br><br>
        <input type="text" class="app-form-control" placeholder="Enter Value" name="c1"> Milliliter
        <div class="red">
        <h2><b>To </b></h2></div>
        <div class="a">
        <select name="operation">
<option value="cm">Gallon</option>
<option value="in">Kiloliter</option>
<option value="mm">Liter</option>
<option value="fo">Deciliter</option>
<option value="ya">Centiliter</option>
<option value="km">Milliliter</option>
            </div>
           
      <div class="b">
      <input type="text" class="app-form-control" placeholder="Converted Value" name="c2"> 
            </div>  
</form>
</body>
</html>