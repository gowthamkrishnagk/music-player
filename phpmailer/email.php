<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';


class VerificationCode
{
    public $smtpHost;
    public $smtpPort;
    public $sender;
    public $password;
    public $receiver;
    public $code;

    public function __construct($receiver)
    {

        $this->sender = "blogoospheres@gmail.com";
        $this->password = "eerdgjvfhqharjve";
        $this->receiver =   "$receiver";
        $this->smtpHost="smtp.gmail.com;";
        $this->smtpPort = 587;
    }


    public function sendMail(){
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );

        $mail->Host = $this->smtpHost;
        $mail->Port = $this->smtpPort;
        $mail->IsHTML(true);
        $mail->Username = $this->sender;
        $mail->Password = $this->password;
        $mail->Body=$this->getHTMLMessage();
        $mail->Subject = "Your verification code is {$this->code}";
        $mail->SetFrom($this->sender,"Blogosphere");
        $mail->AddAddress($this->receiver);
        if($mail->send()){
          // echo "MAIL SENT SUCCESSFULLY";
        }
        // echo "FAILED TO SEND MAIL";

    }


    public function getVerificationCode()
    {
        return (int) substr(number_format(time() * rand(), 0, '', ''), 0, 6);
    }


    public function getHTMLMessage(){
        $this->code = $this->getVerificationCode();
        insert_otp($this->receiver,$this->code);
        $htmlMessage=<<<MSG
        <!DOCTYPE html>
        <html>
        <body>
        <p>Your verification code is </p> <h1> {$this->code}</h1>
        <p>Use this code to verify your account.</p>
        </body>
        </html>
        MSG;
        return $htmlMessage;
    }

}






?>