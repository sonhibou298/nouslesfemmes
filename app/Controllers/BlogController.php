<?php
namespace App\Controllers;
use App\Models\Admin;


class BlogController extends Controller{

    public function index(){
        return $this->view('blog.index');

    }

    public function show(int $idAdmin){
        $admin = new Admin($this->getDB());
        $admin = $admin->findById($idAdmin);
        return $this->view('blog.show', compact('admin'));
    }

    public function listAdmin(){
        $admin = new Admin($this->getDB());
        $admins = $admin->all();
        return $this->view('blog.listAdmin', compact('admins'));
    }
    public function login(){
        return $this->view('blog.index');
    }
    public function loginPost(){
        $admin = (new Admin($this->getDB()))->getByEmailAdmin($_POST['emailAdmin']);
        if(password_verify($_POST['pwdAdmin'], $admin->password))
        {
            return header('location: listAdmin');
        }else{

          return header('location: login?error=true');
        }

    }
    public function logout()
    {
        session_destroy();
        return header('location: login');
    }
}

