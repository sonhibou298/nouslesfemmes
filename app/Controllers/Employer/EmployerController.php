<?php

namespace App\Controllers\Employer;
use App\Controllers\Controller;
use App\Models\Employer;


class EmployerController extends Controller
{
    public function listEmployer()
    {
       $employers = (new Employer($this->getDB()))->all();
       return $this->view('employer.list', compact('employers'));
    }

    public function login(){
        return $this->view('blog.index');
    }
    public function loginPost()
    {
        $employer = (new Employer($this->getDB()))->getByEmailEmployer($_POST['email']);
        if (password_verify($_POST['password'], $employer->password)) {
            return header('location: listRepondant');
        } else {
            return header('location: login?error=true');
        }
    }

    public function delete(int $id)
    {
        $employer = new Employer($this->getDB());
        $result = $employer->delete($id);
        if ($result){
            return header('location: listEmployer');
        }
    }
    public function createPost()
    {
        $nomEmployer = $_POST['nomEmployer'];
        $prenomEmployer = $_POST['prenomEmployer'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $admin_id = $_POST['admin_id'];
        $employer = (new Employer($this->getDB()))->create($nomEmployer, $prenomEmployer, $email, $password, $admin_id);
        var_dump($employer);
//        $nomEmployer = $_POST['nomEmployer'];
//        $prenomEmployer = $_POST['prenomEmployer'];
//        $email = $_POST['email'];
//        $password = $_POST['password'];
//        $admin_id = $_POST['admin_id'];
//        $employer = new Employer($this->getDB());
//        $result = $employer->create($nomEmployer, $prenomEmployer, $email, $password, $admin_id);

        return header('Location: listEmployer');
    }

}