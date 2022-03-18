<?php
namespace App\Controllers;
use App\Models\Admin;
use App\Models\Employer;


class BlogController extends Controller{

    public function index(){
        return $this->view('blog.index');

    }

    public function createAdmin()
    {
        if (!empty($_POST))
        {
            $admin = new Admin($this->getDB());
            $nom = $_POST['nomAdmin'];
            $prenom = $_POST['prenomAdmin'];
            $email = $_POST['emailAdmin'];
            $password = password_hash($_POST['passwordAdmin'], PASSWORD_DEFAULT);
            $admins = $admin->addAdmin($nom, $prenom, $email, $password);
            return header('location: listAdmin');
        }
        return $this->view('blog.add');
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

    public function delete(int $idAdmin)
    {
        $admin = new Admin($this->getDB());
        $result = $admin->delete($idAdmin);
        if ($result){
            return header('location: listAdmin');
        }

    }
    public function login(){
        return $this->view('blog.index');
    }
    public function loginPost(){
        $admin = new Admin($this->getDB());
        if (isset($_POST['emailAdmin']))
        {
            $admin->getByEmailAdmin($_POST['emailAdmin']);
        }else{
            return header('location: login?error=true');
        }
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

