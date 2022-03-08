<?php

namespace App\Controllers\Employer;
use App\Controllers\Controller;
use App\Models\Admin;
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
            return header('location: listEmployer');
        } else {

            return header('location: login?error=true');
        }
    }

    public function delete(int $id)
    {
        $employer = new Employer($this->getDB());
        $result = $employer->delete($id);
        if ($result){
            return header('Location: http://localhost/PHP/NousLesFemmes/listEmployer');
        }
    }
    public function create($nomEmployer, $prenomEmployer, $email, $password, $admin_id)
    {
        $nomEmployer = $_POST['nomEmployer'];
        $prenomEmployer = $_POST['prenomEmployer'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $admin_id = $_POST['admin_id'];
        $employer = new Employer($this->getDB());
        $result = $employer->create($nomEmployer, $prenomEmployer, $email, $password, $admin_id);

        return header('Location: listEmployer');
    }

}