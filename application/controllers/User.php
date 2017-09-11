<?php
class User extends CI_Controller
{
    public function register()
    {
        $this->load->view('register');
    }
    public function index()
    {
        $config['global_xss_filtering'] = TRUE;
        $this->load->view('login');
    }
    public function checkEmail()
    {
        $email = $_POST['email'];
        if (preg_match("/[^\d]@iuca.kg$/", $email)){
            $this->load->database();
            $this->db->where('email',$email);
            $query = $this->db->get('users');
            if ($query->num_rows() > 0){
                return true;
            }
            else{
                return false;
            }

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
    public function auth()
    {
        if($this->checkEmail()){
            // Send Email With Code.
            $this->SendEmail();

            redirect('/auth');


        }
        else{
            // Email NOT VALID redirect back
            redirect('/');
        }

        }



}