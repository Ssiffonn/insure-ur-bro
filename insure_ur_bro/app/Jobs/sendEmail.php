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

    public function __construct($FIO, $phone, $email, $name, $Cemail)
    {
        $this->FIO = $FIO;
        $this->phone = $phone;
        $this->email = $email;
        $this->name = $name;
        $this->Cemail = $Cemail;
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
            $mail->Username   = 'den553208@gmail.com';                     //SMTP username
            $mail->Password   = 'WUB553MAN208';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;

            //Recipients
            $mail->setFrom('insure_ur_bro@example.com', 'insure_ur_ro');
            $mail->addAddress($this->Cemail, $this->name);     //Add a recipient
            
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Новый заказ';
            $mail->Body    = "Услуга: ".$this->name."\nФИО: ".$this->FIO."\nтелефон: ".$this->phone."\nemail: ".$this->email;
            $mail->AltBody = "Услуга: ".$this->name."\nФИО: ".$this->FIO."\nтелефон: ".$this->phone."\nemail: ".$this->email;

            $mail->send();
            //echo "Успешно отправленно<\n>";
        }
        catch(Exception $e){
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
