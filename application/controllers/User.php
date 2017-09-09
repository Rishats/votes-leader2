<?php
class User extends CI_Controller
{
    public function index()
    {
        $config['global_xss_filtering'] = TRUE;
        $this->load->view('login');
    }
    public function checkEmail()
    {
        $email = $_POST['email'];
        if (preg_match("/[^\d]@iuca.kg$/", $email)){
            return true;
        }
        else{
            return false;
        }

    }
    public function SendEmail()
    {
        $email = $_POST['email'];
        $to  = $email;

        $subject = "Голосуй за лидера!";

        $message = ' 
    <html> 
        <head> 
            <title>Голосуй за лидера!</title> 
        </head> 
        <body> 
            <p>Ваш уникальный код для голосования</p> 
        </body> 
    </html>';

        $headers  = "Content-type: text/html; charset=windows-1251 \r\n";
        $headers .= "From: VOTES LEADER <votes@iuca.kg>\r\n";


        mail($to, $subject, $message, $headers);
        return true;
    }
    public function register()
    {
        if($this->checkEmail()){
            // Send Email With Code.
            $this->SendEmail();

            redirect('/auth');


        }
        else{
            // Email Empty redirect back
            redirect('/');
        }

        }

}