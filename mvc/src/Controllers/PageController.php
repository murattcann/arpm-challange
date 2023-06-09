<?php
namespace App\Controllers;
class PageController extends BaseController
{
    public function  home(){
        return $this->view("view", ["content" => "I'm in the homepage"]);
    }

    public function  folder1(){
        return $this->view("view", ["content" => "I'm in folder1"]);
    }
    public function  folder2(){
        return $this->view("view", ["content" => "I'm in folder2"]);
    }
}