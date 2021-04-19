<?php


require_once __DIR__ . '/vendor/autoload.php';

//Variables
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$title=$_POST['title'];
$website=$_POST['website'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$github=$_POST['github'];
$introduction=$_POST['introduction'];
$skills=$_POST['skills'];
$skills1=$_POST['skills1'];
$skills2=$_POST['skills2'];
$skills3=$_POST['skills3'];
$skills4=$_POST['skills4'];
$skills5=$_POST['skills5'];
$skills6=$_POST['skills6'];
$skills7=$_POST['skills7'];
$education1=$_POST['education1'];
$education2=$_POST['education2'];
$education3=$_POST['education3'];
$qualification1=$_POST['qualification1'];
$qualification2=$_POST['qualification2'];
$qualification3=$_POST['qualification3'];
$date111=$_POST['date111'];
$date112=$_POST['date112'];
$date121=$_POST['date121'];
$date122=$_POST['date122'];
$date131=$_POST['date131'];
$date132=$_POST['date132'];

$workplace1=$_POST['workplace1'];
$workplace2=$_POST['workplace2'];
$workplace3=$_POST['workplace3'];
$experience1=$_POST['experience1'];
$experience2=$_POST['experience2'];
$experience3=$_POST['experience3'];
$date11=$_POST['date11'];
$date12=$_POST['date12'];
$date21=$_POST['date21'];
$date22=$_POST['date22'];
$date31=$_POST['date31'];
$date32=$_POST['date32'];
$hobby1=$_POST['hobby1'];
$hobby2=$_POST['hobby2'];
$hobby3=$_POST['hobby3'];
$hobby4=$_POST['hobby4'];
$language1=$_POST['language1'];
$language2=$_POST['language2'];
$language3=$_POST['language3'];
$language4=$_POST['language4'];
$technology1=$_POST['technology1'];
$technology2=$_POST['technology2'];
$technology3=$_POST['technology3'];
$technology4=$_POST['technology4'];

// Create new PDF instance

$mpdf = new \Mpdf\Mpdf();
$align='right';
$color ='blue';
// Create our PDF
$data='';

$data .='<h1 style="font-size:30px; text-align:left; color:purple;">' .$firstname .' '.$lastname .'</h1>';
$data .='<h2 style="font-size:30px"><i>'. $title . '</i></h2>';
$data .='<strong style="text-align:left;" >Email Address :</strong>'.$email .'                    ';
$data .='<strong >Website : </strong>'.$website .'<br>';
$data .='<strong style="text-align:left;">Github Username :</strong>'.$github.'      ';
$data .='<strong >Phone No. :</strong>'.' '.$phone .'<br>';
$data.='<hr>';
if($introduction){
    $data .='<br><strong>Introduction</strong> <br>'.$introduction.'<br>';
}
if($skills){
    $data .='<br><strong>Skills</strong> <br>'.$skills.'<br>';
    if($skills1){
        $data .=$skills1.'<br>';
    }
    if($skills2){
        $data .=$skills2.'<br>';
    }
    if($skills3){
        $data .=$skills3.'<br>';
    }
    if($skills4){
        $data .=$skills4.'<br>';
    }
    if($skills5){
        $data .=$skills5.'<br>';
    }
    if($skills6){
        $data .=$skills6.'<br>';
    }
    if($skills7){
        $data .=$skills7.'<br>';
    }
}
if($education1){
$data .='<br><h2></i><strong>Education Background</strong> </h2><h3><i>'.$education1.'</i></h3><h3><i>'.$date111.' to '.$date112.'</i></h3>'.$qualification1.'<br>';
if($education2){
    $data .='<h3><i>'.$education2.'</i></h3><h3><i>'.$date121.' to '.$date122.'</i></h3>'.$qualification2.'<br>';
}
if($education3){
    $data .='<h3><i>'.$education3.'</i></h3><h3><i>'.$date131.' to '.$date132.'</i></h3>'.$qualification3.'<br>' ;
}
}
if($workplace1){
$data .='<br><h2></i><strong>Work History</strong> </h2><h3><i>'.$workplace1.'</i></h3><h3><i>'.$date11.' to '.$date12.'</i></h3>'.$experience1.'<br>';
if($workplace2){
    $data .='<h3><i>'.$workplace2.'</i></h3><h3><i>'.$date21.' to '.$date22.'</i></h3>'.$experience2.'<br>';
}
if($workplace3){
    $data .='<h3><i>'.$workplace3.'</i></h3><h3><i>'.$date31.' to '.$date32.'</i></h3>'.$experience3.'<br>';
}
}
if($hobby1){
    $data .='<br><strong>Hobbies</strong> <br>'.$hobby1.'<br>';
    if($hobby2){
        $data .=$hobby2.'<br>';
    }
    if($hobby3){
        $data .=$hobby3.'<br>';
    }
    if($hobby4){
        $data .=$hobby4.'<br>';
    }
}
if($language1){
    $data .='<br><strong>Languages</strong> <br>'.$language1.'<br>';
    if($language2){
        $data .=$language2.'<br>';
    }
    if($language3){
        $data .=$language3.'<br>';
    }
    if($language4){
        $data .=$language4.'<br>';
    }
}
if($technology1){
    $data .='<br><strong>Technologies</strong> <br>'.$technology1.'<br>';
    if($technology2){
        $data .=$technology2.'<br>';
    }
    if($technology3){
        $data .=$technology3.'<br>';
    }
    if($technology4){
        $data .=$technology4.'<br>';
    }
}

// Write PDF
$mpdf->WriteHTML($data);

// Output to browser
$mpdf->Output($firstname .'.pdf', 'D');

?>