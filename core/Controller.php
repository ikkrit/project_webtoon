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

        ob_start();

        require_once(ROOT.'views/'.$file.'/'.$file.'.html.php');

        $content = ob_get_clean();

        require_once(ROOT.'views/layouts/home.html.php');
    }
}