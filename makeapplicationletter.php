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
$title= $_POST['title'];
$address=$_POST['address'];

// Create new PDF instance

$mpdf = new \Mpdf\Mpdf();

// Create our PDF
$data='';
$data .='<h1><big>APPLICATION LETTER</big></h1><hr>';
$data .='' .$firstname .'<br>';
$data .=' ' .$lastname .'<br>';

$data .=' ' .$date .'<br><br><br><br>';
$data .='' .$target.'<br>';
$data .=' ' .$address .'<br><br><br><br>';
$data .='<i> Dear ' .$title . '</i><br>';
$data .='<h2><strong> RE : </strong> ' .$subject .'</h2>';

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

$data .='<h3><strong><i> ' .$signature.'</i></strong></h3><br>';
$data .='<h3><strong><i> ' .$firstname.'</i></strong></h3><br><hr>';

// Write PDF
$mpdf->WriteHTML($data);

// Output to browser
$mpdf->Output($firstname .'.pdf', 'D');

?>