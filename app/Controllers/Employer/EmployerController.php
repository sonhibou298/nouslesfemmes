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
    public function delete(int $id)
    {
        $employer = new Employer($this->getDB());
        $result = $employer->delete($id);
        if ($result){
            return header('Location: http://localhost/PHP/NousLesFemmes/listEmployer');
        }
    }
    public function create()
    {
        $employer = new Employer($this->getDB());
        $add = $employer->create();
        return $this->view('employer.add');
    }

}