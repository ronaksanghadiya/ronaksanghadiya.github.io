<?php
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$msg=$_POST['msg'];

$html='<table>
        <tr>
        <th>Name</th>
        <th>email</th>
        <th>mobile</th>
        <th>msg</th>
        </tr>
        <tr>
        <td>'.$name.'</td>
        <td>'.$email.'</td>
        <td>'.$mobile.'</td>
        <td>'.$msg.'</td>
        </tr>
    </table>';

        $html=$html;
        include('smtp/PHPMailerAutoload.php');
        $mail=new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host="smtp.gmail.com";
        $mail->Port=587;
        $mail->SMTPSecure="tls";
        $mail->SMTPAuth=true;
        $mail->Username="csonllineshop@gmail.com";
        $mail->Password="huihjpaquyuxwdqa";
        $mail->SetFrom("csonllineshop@gmail.com");
        $mail->addAddress($email);
        $mail->IsHTML(true);
        // $mail->addAttachment('C-S-logo.png','logo');
        $mail->Subject="Your Veryfication Code";
        $mail->Body=$html;
        $mail->SMTPOptions=array('ssl'=>array(
            'verify_peer'=>false,
            'verify_peer_name'=>false,
            'allow_self_signed'=>false
        ));
        if($mail->send()){
            echo "done";
        }else{
            // echo "Mailer Error: " . $mail->ErrorInfo;
        }
?>

