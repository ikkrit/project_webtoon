<?php

class HomeController extends controller
{
    public function index()
    {
        $this->loadModel("HomeModel");

        $home = $this->HomeModel->getAll();

        $this->render('home');

        /*$this->render('home.html', compact('home'));*/
        
    }

    public function read($slug)
    {
        $this->loadModel('Home');

        $home = $this->Home->findBySlug($slug);

        $this->render('read.html', compact('home'));
    }

}