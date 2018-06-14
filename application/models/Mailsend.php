<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mailsend extends CI_Model{
    
    function __construct() {
        parent::__construct();
        $this->load->library('email');
    }

   public function send_mail($from='info@thirumalatravels.com',$to='info@thirumalatravels.com',$subject='Test Mail from World Vision Cable',$message='',$cc='info@thirumalatravels.com',$bcc=''){
        $mail_subject = $subject;
	    $message_html = '<!DOCTYPE html><html lang="en"><head><meta charset="utf-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
                        <style type="text/css">
                        html, body {margin: 0; padding: 0; outline: 0; font-family: "Lucida Grande",Verdana,Arial,Helvetica,sans-serif; font-size: 13px; font-weight: normal; width:100%; height:100%; }
                        body{min-width:320px; margin:0; padding:0; background:#fff;}
                        *, *:before, *:after { -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; }
                        .main { width:100%; margin:0; padding:0; display:block; position:relative; }
                        .main-center {background: #f6f6f6; width:100%; max-width:800px; margin:0 auto; display:block; }
                        .center { width:100%; max-width:650px; margin:0 auto; display:block; padding-top:0px; }
                        </style>
                        </head>
                        <body class="background">
                        <div class="main">
                        <div class="main-center">
                        <div class="center">
                        <table style="border: 0px solid #ccc" border="0" cellpadding="0" cellspacing="0" align="center" width="600" bgcolor="#FFFFFF">
                        <tbody>
                        <tr>
                            <td width="500" height="80" align="left" bgcolor="#FFFFFF" style="font-size: 0; line-height: 0; padding: 0 10px">
                            <span style="font-size: 0; line-height: 0"><a href="https://www.webliststore.org/srithirumala.com" target="_blank" rel="noreferrer"><img src="https://www.webliststore.org/srithirumala.com/assets/images/logo.jpg" width="200" border="0"></a></span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4" bgcolor="#0093de" style="padding: 30px; font-size: 16px;font-weight: bold; text-align: center; color: #fff"><span style="color:#fff;">Sri Thirumala</span> Tours and Travels</td>
                        </tr>
                        <tr>
                        <td colspan="4" style="padding: 30px 20px 10px; font-size: 14px">
                            <div>'.$message.'</div>
                            <br><br>
                            <div>Grow your business online. Grow your business with <a href="https://www.webliststore.org/srithirumala.com" style="color:#de1d3c;"><b>Sri Thirumala Tours and Travels</b></a>.</div>
                            <br></td>
                        </tr>
                        <tr><td colspan="4" style="padding: 20px; font-size: 14px"><div style="font-size: 14px"> <span>Regards,</span></div>
                            <div style="font-size: 14px; padding-top: 10px"> <span>Team Sri Thirumala Tours and Travels</span> </div></td>
                        </tr>
                        <tr>
                        <td colspan="4" style="padding: 10px 20px; font-size: 14px;background: #0093de;color:#fff;font-size: 10px;">
                        <p>The information contained in this e-mail is private & confidential and may also be legally privileged. If you are not the intended recipient of this mail, please notify us, preferably by e-mail; and do not read, copy or disclose the contents of this message to anyone. Whilst we have taken reasonable precautions to ensure that any attachment to this e-mail has been swept for viruses, e-mail communications cannot be guaranteed to be secure or error free, as information can be corrupted, intercepted, lost or contain viruses. We do not accept liability for such matter or their consequences.</p>
                        </td></tr></tbody></table></div></div></div></body></html>';
	    
        	    $config['protocol']    = 'sendmail';
                $config['mailpath']    = '/usr/sbin/sendmail';
                //$config['smtp_timeout'] = '5'; 
                $config['charset']    = 'utf-8';
                $config['mailtype'] = 'html'; // or html
                $config['validation'] = TRUE;
      
              $config['wordwrap'] = TRUE;
              $config['smtp_host'] = 'mail.webliststore.in';
              $config['smtp_port'] = '465';
              $config['smtp_user'] = 'form@webliststore.in';
              $config['smtp_pass'] = 'weblist@123';

      $this->email->initialize($config);
     
      $this->email->to($to);
      if(isset($bcc)){$this->email->bcc($bcc);}
      $this->email->cc($cc);
      //$this->phpmailer->IsMail();
      $this->email->from($from);
      //$this->email->IsHTML(true);
      $this->email->subject($mail_subject);
      $this->email->message($message_html);
      if($this->email->Send()) {
        return '1';
      }
      else {
        return '0';
      }
    }
    
}