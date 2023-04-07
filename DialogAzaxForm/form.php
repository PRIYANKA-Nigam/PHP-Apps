<!doctype html>
<html>
    <head>
        <title>
            Dialog Form
        </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <script src="https://code.jquery.com/jquery-3.6.4.slim.js" 
                integrity="sha256-dWvV84T6BhzO4vG6gWhsWVKVoa4lVmLnpBOZh/CAHU4=" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4/jquery.min.js"></script>
        <style>
          body{
            background-color: blue;
          }
          .title{
                 text-align: center;
                 font-weight: bold;
          }
          input{
            border-radius: unset !important;
          }
          button{
            border-radius: unset !important;
            float: right;
            margin: 0.4rem;
          }
          .card{
            border-radius: unset !important;
            margin-top: 3rem;
            box-shadow: 0px 10px 10px 10px;
          }
            </style>
    </head>
    <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" 
    crossorigin="anonymous"></script>
    <div id="message"></div>
    <div class="container">
    <div class="row">
      <div class="col-md-3">
      </div>
      <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h4 class="title">Enter Info</h4>
            </div>
            <div class="card-body">
              <div class="form-group">
              <label>Name : </label>
              <input type="text" class="form-control" name="name" id="name" placeholder="Enter name"/>
              </div>
              <div class="form-group">
              <label>Contact : </label>
              <input type="text" class="form-control" name="cont" id="cont" placeholder="Enter num"/>
              </div>
              <div class="form-group">
              <label>Email : </label>
              <input type="email" class="form-control" name="email" id="email" placeholder="Enter email"/>
              </div>
              <div class="form-group">
              <label>Profile: </label>
              <input type="text" class="form-control" name="pro" id="pro" placeholder="Enter profile"/>
              </div>
              <div class="form-group">
                <button class="btn btn-warning" id="clearbtn" >Clear</button>
                <input type="button" class="btn btn-primary" id="submitbtn" name="save" value="submit" 
                onclick="clearfield();">
              </div>
            </div>
            <div class="card-footer">
                 <div id="response">

                 </div>
            </div>
        </div>
      </div>
    </div>
    </div>
    </body>

<script type="text/javascript">

        function clearfield(){
            var name=$("input[name=name]").val();
        var num=$("input[name=cont]").val();
        var email=$("input[name=email]").val();
        var profile=$("input[name=pro]").val();
        if(name!='' && num!='' && email!='' && profile!=''){
        var formData={ name:name,
         email:email,
         cont:contact,
         pro:profile};
         $('#message').html('<span style="color:red">Processing Form ... wait!!!...</span>');
        $.ajax({url:"http://localhost/DialogAzaxForm/api/submit.php",type:'post',data:formData,success: function(response)
            {
               var res =JSON.parse(response);
               console.log(res);
               if(res.success == true)
              $('#message').html('<span style="color:green">Form submitted</span>');
              else
              $('#message').html('<span style="color:red">Form submittion failed !!!!!!!</span>');
            }
        
        
        });
            
        }else{
            $('#message').html('<span style="color:red">Please fill all the fields</span>');
        }
    }
</script>
</html>