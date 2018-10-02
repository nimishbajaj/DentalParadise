<?php
// "first_name=Pankaj&last_name=Ar&address1=pdsa%20jsda&city=DELHI&state=AZ&email=pankaj.arora%40cherishx.com&number1=1234567890&number2=1234567890&birth_month=03&birth_day=04&birth_year=1997&loan_amount=500&loan_reason=moving&own_home=false&active_military=false&own_car=false&months_at_address=48&credit_type=notSure&ssn=123456789&drivers_license_state=AR&drivers_license_number=543&income_type=Employment&income_monthly=2000&job_title=dsa&employer_name=bbb&income_frequency=WEEKLY&months_at_employer=12&job_title=dsa&employer_name=bbb&work_phone=1234567890&income_frequency=TWICEMONTHLY&next_pay_date_month=08&next_pay_date_day=1&next_pay_date_year=2018&consent_agreement=true"
    require 'phpmailer/PHPMailerAutoload.php';

      $message = "";
      foreach ($_POST as $key => $value) {
        $message .= "{$key}: {$value} <br/>";
      }

      $mail = new PHPMailer;

      $mail->isSMTP();

      $mail->Host = 'sg3plcpnl0198.prod.sin3.secureserver.net';

      $mail->SMTPSecure = 'ssl';
      $mail->Port = 465;

      $mail->SMTPAuth = true;

      $mail->Username = "helpdesk@dentalparadise.org";

      $mail->Password = "9818090947";

      $mail->setFrom('helpdesk@dentalparadise.org', 'Dental Paradise');

      $mail->addReplyTo('helpdesk@dentalparadise.org', 'Dental Paradise');

      $mail->addAddress("pankaj.arora1994@gmail.com");

      $mail->Subject = "A new lead is received from Dental Paradise - ".time();

      $mail->msgHTML($message);

      if (!$mail->send()) {
         echo "Mailer Error: " . $mail->ErrorInfo;
      } 
      else {
         echo 'Successfully processed';
      }
     
?>