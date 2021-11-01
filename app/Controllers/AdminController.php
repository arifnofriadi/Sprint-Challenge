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
        $session = session();
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
            'posts' => $post->orderBy('id', 'DESC')->paginate(10),
            'pager' => $post->pager,
        ];   
        echo view('pages/posts/index', $data);
    }

    public function create()
    {
        echo view('pages/posts/create');
    }

    public function storeData()
    {
        helper(['form', 'url']);
         
        $rules = [
            'title'         => 'required|min_length[2]|max_length[100]', 
            'description'   => 'required|min_length[10]',
        ];

        if($this->validate($rules)) {
            $postsModel = new PostsModel();

            $dataImage = $this->request->getFile('image');
            $fileName = $dataImage->getRandomName();
            
            $postsModel->insert([
                'title'         => $this->request->getVar('title'),
                'description'   => $this->request->getVar('description'),
                'image'         => $fileName
            ]);
            $dataImage->move('uploads/', $fileName);
            return redirect()->to(base_url('admin/posts'))->with('msg', 'Content successfully uploaded');

        }else{
            $data['validation'] = $this->validator;
            echo view('pages/posts/create', $data);
        }
    
    }

    public function updatePage($id = null)
    {
        $post = new PostsModel();
        $data['posts'] = $post->find($id);
        echo view('pages/posts/update', $data);
    }

    public function update($id = null)
    {
        $post = new PostsModel();
        $postItem = $post->find($id);
        $oldImage = $postItem['image'];

        $newImage = $this->request->getFile('image');

        if($newImage->isValid() && !$newImage->hasMoved()) {

            if(file_exists("uploads/".$oldImage)) {
                unlink("uploads/".$oldImage);
            }

            $imageName = $newImage->getRandomName();
            $newImage->move("uploads/", $imageName);

        }else{
            $imageName = $oldImage;
        }

        $data = [
            'title'         => $this->request->getVar('title'),
            'description'   => $this->request->getVar('description'),
            'image'         => $imageName,
        ];

        $post->update($id, $data);
        return redirect()->to('admin/posts')->with('msg', 'Data successfully updated');
    }

    public function delete($id = null)
    {
        $post = new PostsModel();
        $data = $post->find($id);
        $imageFile = $data['image'];

        if (file_exists("uploads/".$imageFile))
        {
            unlink("uploads/".$imageFile);
        }

        $post->delete($id);

        return redirect()->back()->with('msg','Data successfully deleted.');
    }

    public function view($id = null)
    {
        $posts = new PostsModel();
        $data['post'] = $posts->find($id);
        echo view('pages/posts/view', $data);
    }
}
