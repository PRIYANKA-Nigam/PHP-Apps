<!DOCTYPE html>
<html>
    <head>
        <title>Form To PDF</title>
        <style>
.a{
    background-color: black;
    width: 500px;
    height: 1350px;
    margin: auto;
    padding-top: 20px;
    color: white;
    text-align: left;

}
.b{
    margin: auto;
    width: 200px;

}
.c{
    background-color: black;
    width: 500px;
    margin: auto;
    text-align: left;
    color: white;
    padding-top: 10px;
}
#but{
    margin-left: 200px;
    width: 100px;
    height: 40px;
}

            </style>
    </head>
    <body align="center">
        <div class="b">
    <h1 style="color:white;background:black"><center><b><u>Input Form</center></u></b></h1>
        </div> 
        <?php
           if(isset($_POST['Upload'])){
             $im=isset($_FILES['img'])?$_FILES['img']:null; 
 $img =isset($_FILES['img']['name'])?$_FILES['img']['name']:null;
 $tmp_img=isset($_FILES['img']['tmp_name'])? $_FILES['img']['tmp_name']:null;
 $img_error=isset($_FILES['img']['error'])?$_FILES['img']['error']:null;
 $folder='upload/';  $final=$folder.$img;
 $ext=pathinfo($img,PATHINFO_EXTENSION);
 if($img_error==0){
     $final=$folder.$img;
     $newFile=time()."_".$img;  
   //  move_uploaded_file($file_tmp,'files/'.$newFile);
     move_uploaded_file($tmp_img,'upload/'.$newFile);
     echo "File Uploaded Successfully";
     header("location:form_pdf.php?files=".$img."");
//      if(isset($_POST['submit']))
//    {   if(isset($_GET["files"]))
//     $images=$_GET["files"];
//      header("location:form_pdf2.php?files=".$img."");
//     }
 }else{
    echo "Upload Error! Please try again";
 }
           }
          
        ?>
      
        <div class="c">
        <label>Add Pic: </label>
          <form action="form_pdf.php" method="post" enctype="multipart/form-data">
            <input type="file" name="img">
                <input type="submit" name="Upload" value="UPLOAD" ><br>
            </form>
        </div>
      
        <div class="a">
        <form action="form_pdf2.php" method="post" >
            Name: <input type="text" name="name" placeholder="Enter Name"><br><br>
            Email: <input type="email" name="email" placeholder="Enter Email"><br><br>
            Mobile: <input type="tel" name="num" placeholder="Enter Contact number" 
            required><br><br>
            DOB: <input type="date" name="dob" placeholder="Enter Contact number"><br><br>
               Address: <textarea name="address" placeholder="Enter Address" rows="3" cols="50"> </textarea><br><br>
               State:  <select name="sx">
               <option value="Andhra Pradesh">Andhra Pradesh</option>
               <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                <option value="Assam">Assam</option>
                <option value="Bihar">Bihar</option>
               <option value="Chhattisgarh">Chhattisgarh</option>
                <option value="Goa">Goa</option>
                <option value="Gujarat">Gujarat</option>
               <option value="Haryana">Haryana</option>
                <option value="Himachal Pradesh">Himachal Pradesh</option>
                <option value="Jharkhand">Jharkhand</option>
               <option value="Karnataka">Karnataka</option>
                <option value="Kerala">Kerala</option>
                <option value="Madhya Pradesh">Madhya Pradesh</option>
               <option value="Maharashtra">Maharashtra</option>
                <option value="Manipur">Manipur</option>
                <option value="Meghalaya">Meghalaya</option>
               <option value="Mizoram">Mizoram</option>
                <option value="Nagaland">Nagaland</option>
                <option value="Orissa">Orissa</option>
               <option value="Punjab">Punjab</option>
                <option value="Rajasthan">Rajasthan</option>
                <option value="Sikkim">Sikkim</option>
               <option value="Tamil Nadu">Tamil Nadu</option>
                <option value="Telangana">Telangana</option>
                <option value="Tripura">Tripura</option>
               <option value="Uttar Pradesh">Uttar Pradesh</option>
                <option value="Uttarakhand">Uttarakhand</option>
                <option value="West Bengal">West Bengal</option>
                </select>
               City: <input type="text" name="city" placeholder="Enter City"> <br><br>
               Pin Code: <input type="number" name="pin" placeholder="Enter PinCode">
                <br><br>

            High School: <input type="o-percent-input" name="hsc" placeholder="HSC Percentage">
            Board:  <select name="board1">
               <option value="CBSE">CBSE</option>
               <option value="ICSE">ICSE</option>
                <option value="Other">Other</option>
                </select><br>
            Passout Year: <input type="number" name="y1" placeholder="10th Year">    
            <br><br>
            <label>Choose Intermediate Stream: </label>
            <select name="st">
            <option value=""> </option>
            <option value="Science(Bio-PCB)">Science(Bio-PCB)</option>
            <option value="Science(Maths-PCM)">Science(Maths-PCM)</option>
            <option value="Commerce">Commerce</option>
            <option value="Arts">Arts</option> 
            </select><br><br>
            Intermediate: <input type="o-percent-input" name="ssc" placeholder="SSC Percentage">
            Board:  <select name="board2">
               <option value="CBSE">CBSE</option>
               <option value="ICSE">ICSE</option>
                <option value="Other">Other</option>
                </select><br>
                Passout Year: <input type="number" name="y2" placeholder="12th Year">    
            <br><br>
            <label>Choose Bachelors Stream for Science(Non-Bio): </label>
            <select name="ss">
            <option value=""></option>
               <option value="Diploma">Diploma</option>
                <option value="B.Tech">B.Tech</option>
                <option value="BE">BE</option>
                <option value="BSC">BSC</option>
                <option value="BCA">BCA</option>
            </select> <br><br>
            <label>Choose Bachelors Stream for Science(Bio): </label>
            <select name="bs">
            <option value=""> </option>
               <option value="Diploma">Diploma</option>
               <option value="Bio Tech">Bio Tech</option>
               <option value="MBBS">MBBS</option>
                <option value="Pharmacist">Pharmacist</option>
            </select><br><br>
            <label>Choose Bachelors Stream for Commerce: </label>
            <select name="cs">
            <option value=""> </option>
               <option value="Diploma">Diploma</option>
               <option value="BBA">BBA</option>
                <option value="B.Com">B.Com</option>
                <option value="CS">CS</option>
                <option value="CA">CA</option>
            </select><br><br>
            <label>Choose Bachelors Stream for Arts: </label>
            <select name="as">
            <option value=""> </option>
               <option value="Diploma">Diploma</option>
               <option value="Bachelors in Economics">Bachelors in Economics</option>
                <option value="BFAD">BFAD</option>
                <option value="BA">BA</option>
                <option value="Law">Law</option>
                <option value="Hotel Management">Hotel Management</option>
                <option value="Journalism">Journalism</option>
                <option value="Fashion Design">Fashion Design</option>
                <option value="Event Management">Event Management</option>
            </select><br><br>
            Bachelors: <input type="o-percent-input" name="grad" placeholder="Graduation Percentage"><br>
            Passout Year: <input type="number" name="y3" placeholder="Graduation Year">    
            <br><br>
            <label>Job Profile: </label>
            <select name="jp">
               <option value="Student">Student</option>
               <option value="Job Holder">Job Holder</option>
                <option value="Job Seeker">Job Seeker</option>
                <option value="Retired">Retired</option>
                <option value="Unemployed">Unemployed</option>
                </select><br><br>
                <label>Language Known: </label>
                <textarea name="lang" placeholder="Enter Languages seprated by commas if more than 1">
                </textarea><br><br>
                Aadhar Card:   <input type="radio" name="aa" value="Yes" >Yes
                <input type="radio" name="aa" value="No" >No
                <input type="text" name="ab" placeholder="Aadhar Number" >
                <br>
                PAN Card:   <input type="radio" name="pa" value="Yes" >Yes
                <input type="radio" name="pa" value="No" >No
                <input type="text" name="pb" placeholder="PAN Number" >
                <br>
                Voter Card:   <input type="radio" name="va" value="Yes" >Yes
                <input type="radio" name="va" value="No" >No
                <input type="text" name="vb" placeholder="Voter ID" >
                <br>
                Passport:   <input type="radio" name="paa" value="Yes" >Yes
                <input type="radio" name="paa" value="No" >No
                <input type="text" name="pab" placeholder="Passport Number" >
                <br>
                Passport Expiry Date: <input type="date" name="y4" placeholder="Enter Year">    
                <br><br>
                <label>Marital Status: </label>
            <select name="ms">
               <option value="Single">Single</option>
               <option value="Married">Married</option>
                <option value="Divorced">Divorced</option>
                <option value="Widowed">Widowed</option>
                </select><br><br>
                <label>Gender: </label>
            <select name="gn">
               <option value="Male">Male</option>
               <option value="Female">Female</option>
                <option value="Transgender">Transgender</option>
                </select><br><br>
                <label>Add Skills: </label>
               <input type="checkbox" name="search[]" value="C"/>C
              <input type="checkbox" name="search[]" value="C++"/>C++
              <input type="checkbox" name="search[]" value="Java"/>Java
             <input type="checkbox" name="search[]" value="Spring"/>Spring
          <input type="checkbox" name="search[]" value="PHP"/>PHP
          <input type="checkbox" name="search[]" value="BootStrap"/>BootStrap<br>
          <input type="checkbox" name="search[]" value="HTML/CSS"/>HTML/CSS
          <input type="checkbox" name="search[]" value="JDBC/JPA/JSP"/>JDBC/JPA/JSP
          <input type="checkbox" name="search[]" value="Git"/>Git
          <input type="checkbox" name="search[]" value="Unix"/>Unix
             <input type="checkbox" name="search[]" value="MySQL"/>MySQL
          <input type="checkbox" name="search[]" value="Oracle"/>Oracle<br>
          <input type="checkbox" name="search[]" value="Android Studio"/>Android Studio
          <br><br>
          <label>Work Experience: </label>
          <input type="number" name="exp" />
          <br><br>
          <label>Project Description: </label>
          <textarea name="pro" placeholder="Enter proj" rows="8" cols="64"> </textarea><br>
          
            <br><br>
            <input type="submit" name="submit" value="SUBMIT" id="but"><br>
           
        </form>
        
        </div>
      
        
        <!-- <table border="2">
            <tr>
                <th>Name</th>
                <td><?php echo $name; ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?php echo $email; ?></td>
            </tr>
            <tr>
                <th>Number</th>
                <td><?php echo $mob; ?></td>
            </tr>
        </table> -->
    </body>
</html>