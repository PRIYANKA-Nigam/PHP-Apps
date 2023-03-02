<?php
require("fpdf184/fpdf.php");
$pdf=new FPDF();
//var_dump(get_class_methods($pdf));

//Add a new page
$pdf->AddPage();
$pdf->Rect(5, 5, 200, 287, 'S');  //add borders
$pdf->Cell(80); //move to right
$pdf->Image('Priyanka.jpg',10,8,33);
$pdf->Ln(5); //line break
 // Colors of frame, background and text
 $pdf->SetDrawColor(0,40,40);
 //$pdf->SetFillColor(230,230,0);   //use of $this in place of $pdf will give uncaught error as Using $this when not in object context
 $pdf->SetFillColor(200,220,255);
 // Thickness of frame (1 mm)
 $pdf->SetLineWidth(1);
$pdf->SetFont("Arial","B","20");
$pdf->SetX(45); //position at 4.5cm from left
$pdf->Cell(0,10,"Priyanka Nigam",1,1,"C");
$pdf->SetFont("Arial","U","10");
$pdf->SetX(45);
$pdf->Multicell(0,5,"Contact No:  8932946515\nEmail: nigampriyanka042@gmail.com",1,"C");
$pdf->SetFont("Arial","I","10");
$pdf->Ln(8);
$pdf->write(5,"Hi, I'm a developer working in top Indian MNC - TCS .Having an experience of 2.5 years in Corporate.Did graduation in the year 2020.I'm currently working as a Backend Developer and have also worked as a Freelancer Android Developer.");
$pdf->Ln(10);
$pdf->SetFont("Arial","B","15");
$pdf->Cell(0,10,"Graduation",1,1,"C");
$pdf->Ln(5);
$pdf->SetFont("Arial","I","15");
$pdf->write(5,"* HSC- 8.4 CGPA"); 
$pdf->Ln(10);
$pdf->write(5,"* SSC- 80%");
$pdf->Ln(10);
$pdf->write(5,"* B.Tech[ECE]- 82%");
$pdf->Ln(10);
$pdf->Rect(5, 5, 200, 287, 'S');  //add borders
$pdf->SetFont("Arial","B","15");
$pdf->Cell(0,10,"Experience",1,1,"C");
$pdf->Ln(5);
$pdf->SetFont("Arial","I","15");
$pdf->write(5,"* Android Developer at Technomekanics(Assam) - 2020"); 
$pdf->Ln(10);
$pdf->write(5,"* Software Support Engineer at AlsoEnergy(Gurgaon) - 2020-21");
$pdf->Ln(10);
$pdf->write(5,"* Developer at Tata Consultancy Services Limited(Noida) - 2021-present ");
$pdf->Ln(5);
$pdf->Ln(10);
$pdf->SetFont("Arial","B","15");
$pdf->Cell(0,10,"Major Projects",1,1,"C");
$pdf->Ln(5);
$pdf->SetFont("Arial","I","15");
$pdf->write(5,"* Native Apps - Novel App, Quiz App, Inventory Management,Shlok-Mantra App,Convertor App,Greetings App"); 
$pdf->Ln(10);
$pdf->write(5,"* Web Apps - Pdf App, Email App, Session Login App , Temperature Measurement,Calculator App,Pallindrome Checker");
$pdf->Ln(5);
$pdf->Ln(10);
$pdf->SetFont("Arial","B","15");
$pdf->Cell(0,10,"Skill-Set",1,1,"C");
$pdf->Ln(5);
$pdf->SetFont("Arial","I","15");
$pdf->write(5,"* C"); 
$pdf->Ln(10);
$pdf->write(5,"* C++");
$pdf->Ln(10);
$pdf->write(5,"* Java");
$pdf->Ln(10);
$pdf->write(5,"* Android Studio");
$pdf->Ln(10);
$pdf->write(5,"* Spring");
$pdf->Ln(10);
$pdf->write(5,"* PHP");
$pdf->Ln(10);
$pdf->write(5,"* Git");
$pdf->Ln(10);
$pdf->write(5,"* Unix");
$pdf->Ln(10);
$pdf->write(5,"* Oracle/Mysql");
$pdf->Ln(10);
$pdf->write(5,"* DevOps");
$pdf->Ln(10);
$pdf->Rect(5, 5, 200, 287, 'S');  //add borders
$pdf->SetFont("Arial","B","15");
$pdf->Cell(0,10,"IDE Used",1,1,"C");
$pdf->Ln(5);
$pdf->SetFont("Arial","I","15");
$pdf->write(5,"* Eclipse"); 
$pdf->Ln(10);
$pdf->write(5,"* Visual Studio");
$pdf->Ln(10);
$pdf->write(5,"* STS");
$pdf->Ln(10);
$pdf->write(5,"* Android Studio");
$pdf->Ln(10);
$pdf->write(5,"* Atom");
$pdf->Ln(10);
$pdf->write(5,"* Git Bash");
$pdf->Ln(10);
$pdf->write(5,"* Spinnaker");
$pdf->Ln(10);
$pdf->write(5,"* Postman");
$pdf->Ln(10);
$pdf->write(5,"* Sonar Qube");
$pdf->Ln(10);
$pdf->write(5,"* Swagger");
$pdf->Ln(10);
$pdf->SetFont("Arial","B","15");
$pdf->Cell(0,10,"Cloud Knowledge and Major Collaboration",1,1,"C");
$pdf->Ln(5);
$pdf->SetFont("Arial","I","15");
$pdf->write(5,"* Azure"); 
$pdf->Ln(10);
$pdf->write(5,"* Major Collaboration - Github,Gitlab,Azure DevOps");
$pdf->Ln(10);
$pdf->write(5,"* Project Tracking Tool - JIRA");
$pdf->Ln(10);
$pdf->SetFont("Arial","B","15");
$pdf->Cell(0,10,"Major Software and Libraries",1,1,"C");
$pdf->Ln(5);
$pdf->SetFont("Arial","I","15");
$pdf->write(5,"* Build Tools- Maven,Gradle"); 
$pdf->Ln(10);
$pdf->write(5,"* Libraries- Jackson,GSON,Volley,Picasso,Firebase");
$pdf->Ln(10);
$pdf->Rect(5, 5, 200, 287, 'S');  //add borders
$pdf->SetFont("Arial","B","15");
$pdf->Cell(0,10,"Language",1,1,"C");
$pdf->Ln(5);
$pdf->SetFont("Arial","I","15");
$pdf->write(5,"* English"); 
$pdf->Ln(10);
$pdf->write(5,"* Hindi");
$pdf->Ln(10);
//$pdf->Rect(5, 5, 200, 287, 'D');  //add borders
$pdf->SetFont("Arial","B","15");
$pdf->Cell(0,10,"Social Platform",1,1,"C");
$pdf->Ln(15);
$pdf->SetTextColor(220,50,50);  //will change text color from black to red
$pdf->SetFont("Arial","I","15");
$pdf->write(5,"- Github : https://github.com/PRIYANKA-Nigam"); 
$pdf->Ln(10);
$pdf->write(5,"- Hackerrank : https://www.hackerrank.com/certificates/913ee873d027");
$pdf->Ln(10);
$pdf->write(5,"- Stack Overflow : https://stackoverflow.com/users/14454060/priyanka-nigam");
$pdf->Ln(10);
$pdf->write(5,"- Linkedin : https://www.linkedin.com/in/priyanka-nigam-083247172");
$pdf->Ln(10);
$pdf->write(5,"- Twitter : https://twitter.com/PriyankaN2504?t=PoMOSe5uPWINkEcLlicDCg&s=09");
$pdf->Ln(10);
$pdf->write(5,"- Facebook : https://www.facebook.com/priyanka.nigam.9256");
$pdf->Ln(10);
$pdf->Rect(5, 5, 200, 287, 'S');  //add borders  
    // Position at 1.5 cm from bottom
    $pdf->SetY(-45);
      
    // Arial italic 8
    $pdf->SetFont('Arial','I',8);
      
    // Page number
    $pdf->Cell(0,10,'Page ' . 
        $pdf->PageNo(),0,0,'C');
$pdf->Output();

?>