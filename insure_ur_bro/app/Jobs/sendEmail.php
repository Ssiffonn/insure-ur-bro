<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// require '../vendor/autoload.php';

class sendEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $FIO;
    private $phone;
    private $email;
    private $name;
    private $Cemail;
    private $date;

    public function __construct($FIO, $phone, $email, $name, $Cemail, $date)
    {
        $this->FIO = $FIO;
        $this->phone = $phone;
        $this->email = $email;
        $this->name = $name;
        $this->Cemail = $Cemail;
        $this->date = $date;
    }

    public function handle()
    {
        $mail = new PHPMailer(true);
        $mail->CharSet = 'UTF-8';

        try{
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'insureurbro@gmail.com';                     //SMTP username
            $mail->Password   = 'Den553208';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;

            //Recipients
            $mail->setFrom('insureurbro@gmail.com', 'insure_ur_ro');
            $mail->addAddress($this->Cemail, $this->name);     //Add a recipient
            
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = '?????????? ??????????';
            $mail->Body    = "????????????: ".$this->name."\n??????: ".$this->FIO."\n??????????????: ".$this->phone."\nemail: ".$this->email."\n???????? ????????????: ".$this->date;
            $mail->AltBody = "????????????: ".$this->name."\n??????: ".$this->FIO."\n??????????????: ".$this->phone."\nemail: ".$this->email."\n???????? ????????????: ".$this->date;

            $mail->send();
            //echo "?????????????? ??????????????????????<\n>";
        }
        catch(Exception $e){
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
