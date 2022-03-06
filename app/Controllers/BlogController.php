<?php
namespace App\Controllers;



class BlogController extends Controller{

    public function index(){
        return $this->view('blog.index');

    }

    public function show(int $id){

        return $this->view('blog.show', compact('id'));
    }
    public function listAdmin(){
        $stmt = $this->db->getpdo()->query('SELECT * FROM administrateur');
        $admins = $stmt->fetchAll();
        return $this->view('blog.listAdmin', compact('admins'));
    }
}

