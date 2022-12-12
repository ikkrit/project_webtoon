<?php

abstract class controller
{
    public function loadModel(string $model)
    {
        require_once(ROOT.'models/'.$model.'.php');
        $this->$model = new $model();
    }

    public function render(string $file, array $data = [])
    {
        extract($data);

        require_once(ROOT.'views/'.strtolower(get_class($this)).'/'.$file.'.php');
    }
}