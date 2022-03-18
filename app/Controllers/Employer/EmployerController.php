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
    public function loginPost():Employer
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
    public function createEmployer()
    {
        if( !empty($_POST)){
            $em = new Employer($this->getDB());
            $nomEm = $_POST['nomEmployer'];
            $prenomEm = $_POST['prenomEmployer'];
            $emailEm = $_POST['email'];
            $pwd = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $admin = $_POST['admin_id'];
            $result = $em->addEmployer($nomEm, $prenomEm, $emailEm, $pwd, $admin);
            return header('location : listEmployer');
        }
        return $this->view('employer.add');
    }

}