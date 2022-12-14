<?php

class Home extends controller
{
    public function index()
    {
        $this->loadModel("Homes");

        $home = $this->Homes->getAll();

        $this->render('home.html', compact('home'));
        
    }

    public function read($slug)
    {
        $this->loadModel('Article');

        $home = $this->Home->findBySlug($slug);

        $this->render('read.html', compact('home'));
    }

}