<?php
namespace Core;

use App\controller\tripController;

class Framework
{
    public $arr;

    public function session($key, $value)
    {
        session_start();
        $_SESSION[$key] = $value;
    }

    public function redirect($url)
    {
        header("Location:/" . $url);
    }

    public function cookie($key, $value, $time)
    {
        setcookie($key, $value, time() + $time, '/');
    }

    public function json($value)
    {
        header('Content-Type:text/json');
        echo json_encode($value);
    }

    public function assign($key, $value)
    {
        $this->arr[$key] = $value;
    }

    public function display($file)
    {
        $file = VIEWS . $file;
        if (file_exists($file)) {
            if ($this->arr) {
                extract($this->arr);
            }
            include $file;
        } else {
            include VIEWS . '404.html';
        }
    }

    public static function start()
    {
        $tmp = explode('/', substr(explode('?', $_SERVER["REQUEST_URI"])[0], 1));
//        if (empty($method_name[1])) {
//            $class_name = 'indexController';
//        } else {
//            $class_name = $tmp[0] . 'Controller';
//        }
        $class_name = $tmp[0] . 'Controller';
        $method_name = isset($tmp[1]) ? $tmp[1] : 'index';
        $file = CONTROLLER . $class_name . '.php';
        $namespace_class_name = '\\App\\controller\\' . $class_name;
        if (file_exists($file)) {
            require $file;
            if (class_exists($namespace_class_name) && method_exists($namespace_class_name, $method_name)) {
                $page = new $namespace_class_name();
                $page->$method_name();
            } else {
                include VIEWS . '404.html';
            }
        } else {
            include VIEWS . '404.html';
        }
    }
}