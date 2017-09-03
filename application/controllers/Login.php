<?php
class Login extends CI_Controller
{
    public function index()
    {
        $config['global_xss_filtering'] = TRUE;
        $this->load->view('login');
    }
    public function register()
    {
        $to  = $_POST['email'] ;

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
    }
}