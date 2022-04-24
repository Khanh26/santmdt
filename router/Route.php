<?php

class Route
{
    public $Route = [];

    public function add($nameRoute, $view, $page = null)
    {
        array_push($this->Route, [
            'nameRoute' => $nameRoute,
            'fileView' => $view,
            'page' => $page,
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

    public function getFileViewByPage($page)
    {
        foreach ($this->Route as $key => $value) {
            if ($value['page'] == $page) {
                return $value['fileView'];
            }
        }
    }

    public function isExistRoute($nameRoute, $page = null)
    {
        foreach ($this->Route as $key => $value) {
            if ($value['nameRoute'] == $nameRoute & $value['page'] == $page) {
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

    public function view($nameRoute, $page = null)
    {
        if ($nameRoute == 'admin') {
            if ($this->isExistRoute($nameRoute, $page)) {
                if (file_exists('./view/' . $this->getFileViewByPage($page))) {
                    include './view/' . $this->getFileViewByPage($page);
                } else {
                    include './view/error/page404.php';
                } 
            } else {
                include './view/error/page404.php';
            }
        } else if ($this->isExistRoute($nameRoute)) {
            if (file_exists('./view/' . $this->getFileViewByName($nameRoute))) {
                include './view/' . $this->getFileViewByName($nameRoute);
            } else {
                include './view/error/page404.php';
            } 
        } else {

                include './view/error/page404.php';
        }
    }
}
