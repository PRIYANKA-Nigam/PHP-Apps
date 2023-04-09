<html>
<head>
   <style> 
      #sampleChart { 
         max-width: 350px;  
         height: 450px; }
      * { 
  text-align: center;}
   </style>
   <script src = "https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
   </script>
</head>
<body>  
   <h2>Top <i> Programming Languages </i> in trend </h2>
   <p> Showing data of widely used languages in 2023 </p>
   <hr>
   <br><br>
   <canvas id = "pieChart"> </canvas>
   <br><br>
   <script>
      let canvas = document.getElementById("pieChart");
      new Chart(canvas, {
         type: "pie",
         data: {
            labels: ["Javascript", "Python", "Java","Kotlin","PHP","C#/Swift/R/Ruby","C/C++"],
            datasets: [{
               backgroundColor: ["blue", "red", "green","yellow","pink","magenta","black"],
               borderWidth: 5,
               data: [380, 240, 200,120,140,60,50]
            }]
         },
      });
   </script>
</body>
</html>