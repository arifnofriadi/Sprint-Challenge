<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\PostsModel;

class AdminController extends BaseController
{
    public function index()
    {
        $session = session();
        $data['users'] = $session->get('name');
        echo view('index', $data);
    }

    public function users()
    {
        $user = new UserModel();
        $data = [
            'users' => $user->orderBy('id', 'DESC')->paginate(10),
            'pager' => $user->pager,
        ];
        echo view('pages/users', $data);
    }

    public function posts()
    {
        $post = new PostsModel();
        $data = [
            'posts' => $post->orderBy('id', 'DESC')->findAll(),
        ];   
        echo view('pages/posts/index', $data);
    }
}
