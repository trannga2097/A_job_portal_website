 <?php
    //Import PHPMailer classes into the global namespace
    //There must be at the top of your script, not inside a function 
    
    use PHPMailer\PHPMailer\PHPMailer;
    
    use PHPMailer\PHPMailer\Exception;
    //Load Composer's autoloader

    require 'email/src/vendor/autoload.php';



    $to=$_POST['to'];

    $from=$_POST['from'];

    $body=$_POST['body'];

    $id=$_POST['id'];

    // Instantiation and passing 'true' enables exceptions

    $mail= new PHPMailer(true);

    try{
        //Server settings

        $mail->SMTPDebug = 2;

        $mail->isSMTP();

        $mail->Host      = 'smtp.gmail.com';

        $mail->SMTPAuth = true;

        $mail->Username = $from;

        $mail->Password = 'Nga200197';

        $mail->SMTPSecure ='ssl';

        $mail->Port =465;

        //Recipients

        $mail->setFrom($to,'Job Portal');

        $mail->addAddress('trannga2097@gmail.com','trannga2097');

        //$mail->addAddress('ellen@example.com');
        //$mail->addReplyTo('info@example.com','Information');
        //$mail->addCC('bcc@example.com');

        //Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz');
        //$mail->addAttachment('/tmp/image.jpg','new.jpg');

        //Content
        $mail->isHTML(true);
        $mail->Subject = 'The Subject';
        $mail->Body =$body;
        $mail->AlBody = 'This is the body in plain text forn non-HTML mail clients';

        $mail->send();

        echo "<h1>Message has been sent</h1>";

        include ('connection/db.php');

        $query=mysqli_query($conn,"DELETE FROM apply_job WHERE id='$id' ");

        echo "<script>
        window.setTimeout(function(){
            window.location.href = 'http://localhost:8080/jobportal/admin/apply_jobs.php';

            },5000);
        </script>";
        
    }catch(Exception $e){

        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

    }

    ?>