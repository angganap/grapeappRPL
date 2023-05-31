<?php

namespace App\Controllers\Users\Landings;

use App\Controllers\BaseController;
use App\Models\LoginModel;
use Google\Client;
use Google\Service\Oauth2;
use CodeIgniter\Controller;
use CodeIgniter\I18n\Time;

class Login extends BaseController
{
    private $client;

    public function __construct(){
        $this->$client = new Client();
        $this->$client->setClientId('1018405502701-q18o2i88c6djhu4akfmhkuak79gofjmt.apps.googleusercontent.com');
        $this->$client->setClientSecret('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');
        $this->$client->setRedirectUri(base_url('login/loginWithGoogle/callback'));
        $this->$client->addScope('email');
        $this->$client->addScope('profile');
    }
    
    public function generateRandomString()
    {
        $time = new Time('now', 'UTC');
        $dateTimeString = $time->format('YmdHis');

        $randomString = $dateTimeString;

        return $randomString;
    }

    public function index()
    {
        return view('landing/login');
    }

    public function logUser(){
        $username= $this->request->getPost('username');
        $password= $this->request->getPost('password');
        $loginModel = new LoginModel;
        $session = session();

        if($loginModel->countUsers($username)==1){
            $user = $loginModel->getUser($username);
            $pswHash = $user[0]->password;
            if(password_verify($password,$pswHash)){
                $is_test = $user[0]->is_test;
                echo json_encode(array("statusCode"=>200,"isTest"=>$is_test));
                $session->set('id',$user[0]->id);
            }else{
                echo json_encode(array("statusCode"=>201));
            }
        }else{
            echo json_encode(array("statusCode"=>201));
        }
    }

    public function loginWithGoogle(){

        $authUrl = $this->$client->createAuthUrl();

        return redirect()->to($authUrl);
    }

    public function loginCallback()
    {
        $code = $this->request->getGet('code');

        $accessToken = $this->$client->fetchAccessTokenWithAuthCode($code);

        $oauth2 = new Oauth2($this->$client);
        $userInfo = $oauth2->userinfo->get();

        $name = $userInfo['name'];
        $email = $userInfo['email'];
        
        $username = 'user_' . $this->generateRandomString();

        $data = [
            'username' => $username,
            'email' => $email,
            'name' => $name,
            'level' => 1,
            'is_test' => 0
        ];
         $loginModel = new LoginModel;
         $user = $loginModel->loginWithGoogle($email,$data);

         $session = session();
         $session->set('id',$user[0]->id);
         $this->$client->revokeToken();
        

        $is_test = $user[0]->is_test;
        if($is_test == 0){
            return redirect()->to('./test/awal');
        }else{
            return redirect()->to('./home');
        }
       

    }
    public function logout(){
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('login'));
    }
}
