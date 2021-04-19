<?php


require_once __DIR__ . '/vendor/autoload.php';

//Variables
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$date=$_POST['date'];
$target=$_POST['target'];
$subject=$_POST['subject'];
$introduction=$_POST['introduction'];
$summary=$_POST['summary'];
$conclusion=$_POST['conclusion'];
$signature=$_POST['signature'];

// Create new PDF instance

$mpdf = new \Mpdf\Mpdf();

// Create our PDF
$data='';
$data .='<h1 style="color:purple; text-align:center;"><big>MEMORANDUM</big></h1><hr>';
$data .='<h2><strong> Date : </strong>' .$date .'</h2>';
$data .='<h2><strong> From : </strong> ' .$firstname .' '.$lastname .'</h2>';
$data .='<h2><strong> To : </strong> ' .$target.'</h2><br>';
$data .='<h2><strong> Subject : </strong> ' .$subject .'</h2>';
$data.='<hr>';
if($introduction){
    $data .='<br><p>'.$introduction.'</p>';
}
if($summary){
    $data .='<br><p>'.$summary.'</p>';
}
if($conclusion){
    $data .='<br><p>'.$conclusion.'</p><br>';
}

$data .='<h3><strong> Signature : </strong> ' .$signature.'</h3><br><hr>';


// Write PDF
$mpdf->WriteHTML($data);

// Output to browser
$mpdf->Output($firstname .'.pdf', 'D');

?>