<?php
namespace App\Core;

class View {
    private static $layout;
    private $template;
    public static $params = array();

    public function setTemplate($template){
        $this->template = $template;
    }

    public function getTemplate(){
        return $this->template;
    }

    public static function setLayout($layout){
        self::$layout = $layout;
    }

    public static function getLayout(){
        return self::$layout;
    }

    public function load($template = '', $params = array()){
        self::$params = array_merge(self::$params, $params);
        extract(self::$params);
        include $template === '' ? 'View/' . $this->template . '.php' : "View/$template.php";
    }
    
    public function getString($val, $val2, $string){
        return $val == $val2 ? $string : '';
    }

}

function getParam($name, $default = ''){
    return isset(View::$params[$name]) ? View::$params[$name] : $default;
}