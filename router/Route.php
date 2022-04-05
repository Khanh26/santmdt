<?php

class Route
{
    public $Route = [];

    public function add($nameRoute, $view)
    {
        array_push($this->Route, [
            'nameRoute' => $nameRoute,
            'fileView' => $view
        ]);
    }
    public function getAll()
    {
        return $this->Route;
    }

    public function getFileViewByName($nameRoute)
    {
        foreach ($this->Route as $key => $value) {
            if ($value['nameRoute'] == $nameRoute) {
                return $value['fileView'];
            }
        }
    }

    public function isExistRoute($nameRoute)
    {
        foreach ($this->Route as $key => $value) {
            if ($value['nameRoute'] == $nameRoute) {
                return true;
            }
        }
        return false;
    }

    public function getCurrentRoute()
    {
        if (isset($_GET['router'])) {
            return $_GET['router'];
        } else {
            return 'trangchu';
        }
    }

    public function view($nameRoute)
    {

        if ($this->isExistRoute($nameRoute)) {
            if (file_exists('./view/client/'.$this->getFileViewByName($nameRoute))) {
                include './view/client/'.$this->getFileViewByName($nameRoute);
            } else {
                include './view/error/page404.php';
            }
        } else {
            include './view/error/page404.php';
        }
    }
}
