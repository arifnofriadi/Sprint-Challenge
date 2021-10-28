<?php

namespace App\Controllers;
use App\Models\UserModel;

class Home extends BaseController
{
    public function index()
    {
        helper(['form']);
        echo view('auth/login');
    }

    public function register()
    {
        helper(['form']);
        $data = [];
        echo view('auth/register', $data);
    }

    public function store()
    {
        helper(['form']);
        $rules = [
            'name'          => 'required|min_length[2]|max_length[50]',
            'email'         => 'required|min_length[4]|max_length[100]|valid_email|is_unique[users.email]',
            'password'      => 'required|min_length[4]|max_length[50]',
            'confirmpassword'  => 'matches[password]'
        ];

        if($this->validate($rules)){
            $userModel = new UserModel();

            $data = [
                'name'     => $this->request->getVar('name'),
                'email'    => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'role'     => 0
            ];

            $userModel->save($data);

            return redirect()->to('/');
        }else{
            $data['validation'] = $this->validator;
            echo view('auth/register', $data);
        }
    }

    public function loginAuth()
    {
        $session = session();

        $userModel = new UserModel();

        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        
        $data = $userModel->where('email', $email)->first();
        
        if($data){
            $pass = $data['password'];
            $authenticatePassword = password_verify($password, $pass);
            if($authenticatePassword){
                $ses_data = [
                    'id' => $data['id'],
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'role' => $data['role'],
                    'isLoggedIn' => TRUE
                ];

                $session->set($ses_data);
                if ($data['role'] == 0) {
                    return redirect()->to('/admin');
                }else {
                    return redirect()->to('/')->with('msg', "Your session is not function");
                }
            
            }else{
                $session->setFlashdata('msg', 'Password is incorrect.');
                return redirect()->to('/');
            }

        }else{
            $session->setFlashdata('msg', 'Email does not exist.');
            return redirect()->to('/');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/')->with('msg', 'Logged out');
    }
}
