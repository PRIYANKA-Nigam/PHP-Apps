<?php 
if(isset($_POST['submit'])){
  // $image=file_get_contents('upload/'.$_GET['file']);
  // header("location:form_pdf2.php?files=".$image."");
  // $images=glob('upload/'.'*.{jpg,jpeg,png}',GLOB_BRACE);
   $name=$_POST['name']; 
   $email=$_POST['email'];
   $mob=$_POST['num'];
   $dob=$_POST['dob'];
   $address=$_POST['address']; 
   $state=$_POST['sx'];
   $city=$_POST['city'];
   $pin=$_POST['pin'];
   $hsc=$_POST['hsc'];
   $board1=$_POST['board1'];
   $y1=$_POST['y1'];
   $inter=$_POST['st'];
   $ssc=$_POST['ssc'];
   $board2=$_POST['board2'];
   $y2=$_POST['y2'];
   $b1=$_POST['ss'];
   $b2=$_POST['bs'];
   $b3=$_POST['cs'];
   $b4=$_POST['as'];
   $bach=$_POST['grad'];
   $y3=$_POST['y3'];
   $job=$_POST['jp'];
   $lang=$_POST['lang'];
  $as=(isset($_POST['aa'])?$_POST['aa']:"");
   $an=$_POST['ab'];
   $ps=(isset($_POST['pa'])?$_POST['pa']:"");
   $pn=$_POST['pb'];
   $vs=(isset($_POST['va'])?$_POST['va']:"");
   $vn=$_POST['vb'];
   $pas=(isset($_POST['paa'])?$_POST['paa']:"");
   $pan=$_POST['pab'];
   $y4=$_POST['y4'];
   $mars=$_POST['ms'];
   $gen=$_POST['gn'];
   $skill='';
   if(!empty($_POST['search'])){
    foreach($_POST['search'] as $lang){
      $skill.=$lang.',';
    }
 }
 $exp=$_POST['exp'];
 $proj=$_POST['pro'];
 //to pick image from inside upload folder
 $path="upload/";
 $extension_array=array('jpg','png','jpeg','JPG','PNG','JPEG');
 if(is_dir($path)){
  $files=scandir($path);
  for($i=0;$i<count($files);$i++){
    if($files[$i]!='.' && $files[$i]!='..'){
      $file=pathinfo($files[$i]);
      $extension=$file['extension'];
      $images='upload/'.$files[$i];
    }
  }
 }


}

require("fpdf184/fpdf.php");
$pdf=new FPDF();
//Add a new page
$pdf->AddPage();
$pdf->SetFont("Arial","B",10);//10->font size ,B->bold

// $pdf->SetTextColor(91,137,42);
$pdf->SetTextColor(255,255,255);
// $pdf->Text(60,27,'CV');
$pdf->Cell(0,10,"CV Details",0,1,'C','U');//cell same as echo ,10->width,10->height,1->border(keeping 0 will remove border),
//1->show that we want new line after form details(keeping 0 will make text to start writing from after form details,C->center
//R->right)
$pdf->Ln(5);
// $pdf->Cell(20); 

$pdf->SetTextColor(0,0,0);
$pdf->Cell(30,10,"Name",1,0);
$pdf->Cell(30,10,"Contact Number",1,0);
$pdf->Cell(70,10,"Email",1,0);
$pdf->Cell(30,10,"DOB",1,1);
$pdf->SetFont("Arial","I",10);
$pdf->SetTextColor(0,0,255);
$pdf->Cell(30,10,$name,1,0);
$pdf->Cell(30,10,$mob,1,0);
$pdf->Cell(70,10,$email,1,0);
$pdf->Cell(30,10,$dob,1,1);
$pdf->Image($images,172,25,30);
$pdf->SetTextColor(0,0,0);
$pdf->SetFont("Arial","B",10);
$pdf->Cell(30,10,"Address",1,0);
$pdf->SetFont("Arial","I",8);
$pdf->SetTextColor(0,0,255);
$pdf->Cell(130,10,$address,1,1);
// $pdf->Text(10,27,$address);
$pdf->SetTextColor(0,0,0);
$pdf->SetFont("Arial","B",10);
$pdf->Ln(2);
$pdf->Cell(45,10,"State",1,0);
$pdf->Cell(70,10,"City",1,0);
$pdf->Cell(0,10,"Pin",1,1);
$pdf->SetFont("Arial","I",10);
$pdf->SetTextColor(0,0,255);
$pdf->Cell(45,10,$state,1,0);
$pdf->Cell(70,10,$city,1,0);
$pdf->Cell(0,10,$pin,1,1);
$pdf->Ln(5);
$pdf->SetTextColor(0,0,0);
$pdf->SetFont("Arial","B",10);
$pdf->Cell(50,10,"10th Percentage",1,0);
$pdf->Cell(20,10,"year",1,0);
$pdf->Cell(0,10,"10th Board",1,1);
$pdf->SetFont("Arial","I",10);
$pdf->SetTextColor(0,0,255);
$pdf->Cell(50,10,$hsc,1,0);
$pdf->Cell(20,10,$y1,1,0);
$pdf->Cell(0,10,$board1,1,1);
$pdf->Ln(5);
$pdf->SetTextColor(0,0,0);
$pdf->SetFont("Arial","B",10);
$pdf->Cell(50,10,"12th Percentage",1,0);
$pdf->Cell(15,10,"year",1,0);
$pdf->Cell(30,10,"12th Board",1,0);
$pdf->Cell(0,10,"12th Site",1,1);
$pdf->SetFont("Arial","I",10);
$pdf->SetTextColor(0,0,255);
$pdf->Cell(50,10,$ssc,1,0);
$pdf->Cell(15,10,$y2,1,0);
$pdf->Cell(30,10,$board2,1,0);
$pdf->Cell(0,10,$inter,1,1);
$pdf->Ln(5);
$pdf->SetTextColor(0,0,0);
$pdf->SetFont("Arial","B",10);
$pdf->Cell(50,10,"Graduation Stream",1,0);
$pdf->Cell(40,10,"Graduation Percentage",1,0);
$pdf->Cell(0,10,"year",1,1);
$pdf->SetFont("Arial","I",10);
$pdf->SetTextColor(0,0,255);
$pdf->Cell(50,10,$b1,1,0);
$pdf->Cell(40,10,$bach,1,0);
$pdf->Cell(0,10,$y3,1,1);
$pdf->Ln(5);
$pdf->SetTextColor(0,0,0); 
$pdf->SetFont("Arial","B",10);
$pdf->Cell(50,10,"Job Status",1,0);
$pdf->SetFont("Arial","I",10);
$pdf->SetTextColor(0,0,255);
$pdf->Cell(0,10,$job,1,1);
$pdf->Ln(5);
$pdf->SetTextColor(0,0,0);
$pdf->SetFont("Arial","B",10);
$pdf->Cell(50,10,"Language/s Known",1,0);
$pdf->SetFont("Arial","I",10);
$pdf->SetTextColor(0,0,255);
$pdf->Cell(0,10,$lang,1,1);$pdf->Ln(5);
$pdf->SetTextColor(0,0,0);
$pdf->SetFont("Arial","B",10);
$pdf->Cell(50,10,"Aadhar Card Holder",1,0);
$pdf->Cell(0,10,"Aadhar Number",1,1);
$pdf->SetFont("Arial","I",10);
$pdf->SetTextColor(0,0,255);
$pdf->Cell(50,10,$as,1,0);
$pdf->Cell(0,10,$an,1,1);
$pdf->SetTextColor(0,0,0);
$pdf->SetFont("Arial","B",10);
$pdf->Cell(50,10,"PAN Card Holder",1,0);
$pdf->Cell(0,10,"PAN Number",1,1);
$pdf->SetFont("Arial","I",10);
$pdf->SetTextColor(0,0,255);
$pdf->Cell(50,10,$ps,1,0);
$pdf->Cell(0,10,$pn,1,1);
$pdf->SetTextColor(0,0,0);
$pdf->SetFont("Arial","B",10);
$pdf->Cell(50,10,"Voter Card Holder",1,0);
$pdf->Cell(0,10,"Voter Number",1,1);
$pdf->SetFont("Arial","I",10);
$pdf->SetTextColor(0,0,255);
$pdf->Cell(50,10,$vs,1,0);
$pdf->Cell(0,10,$vn,1,1);
$pdf->SetTextColor(0,0,0);
$pdf->SetFont("Arial","B",10);
$pdf->Cell(50,10,"Passport Holder",1,0);
$pdf->Cell(40,10,"Passport Number",1,0);
$pdf->Cell(0,10,"Passport Expiry",1,1);
$pdf->SetFont("Arial","I",10);
$pdf->SetTextColor(0,0,255);
$pdf->Cell(50,10,$pas,1,0);
$pdf->Cell(40,10,$pan,1,0);
$pdf->Cell(0,10,$y4,1,1);
$pdf->Ln(5);
$pdf->SetTextColor(0,0,0);
$pdf->SetFont("Arial","B",10);
$pdf->Cell(50,10,"Marital Status",1,0);
$pdf->SetFont("Arial","I",10);
$pdf->SetTextColor(0,0,255);
$pdf->Cell(0,10,$mars,1,1); $pdf->Ln(5);
$pdf->SetTextColor(0,0,0);
$pdf->SetFont("Arial","B",10);
$pdf->Cell(50,10,"Gender",1,0); 
$pdf->SetFont("Arial","I",10);
$pdf->SetTextColor(0,0,255);
$pdf->Cell(0,10,$gen,1,1);$pdf->Ln(5);
$pdf->SetTextColor(0,0,0);
$pdf->SetFont("Arial","B",10);
$pdf->Cell(50,10,"Skills",1,0);
$pdf->SetFont("Arial","I",10);
$pdf->SetTextColor(0,0,255);
$pdf->Cell(0,10,$skill,1,1);
$pdf->SetTextColor(0,0,0);
$pdf->SetFont("Arial","B",10);
$pdf->Cell(50,10,"Work Experience",1,0);
$pdf->SetFont("Arial","I",10);
$pdf->SetTextColor(0,0,255);
$pdf->Cell(0,10,$exp,1,1);
$pdf->SetTextColor(0,0,0);
$pdf->SetFont("Arial","B",10);
$pdf->Cell(37,10,"Project/s Undertaken",1,0);
$pdf->SetFont("Arial","I",10);
$pdf->SetTextColor(0,0,255);
$pdf->Write(10,$proj);

$pdf->Output();
?>