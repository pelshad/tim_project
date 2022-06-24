<?php
// Controller 사용자의 요청을 처리하고 응답을 되돌려주는 전체 과정을 관장.
namespace application\controllers;

include_once "application/utils/SessionUtils.php";

abstract class Controller {
    /*abstract는 추상 클래스와 추상 메서드를 선언할 때 사용, 추상 메서드는 선언만 하고 기능은 구현하지 않음,
    클래스에서 추상 클래스를 상속받을 경우 추상 클래스 안에 있는 추상 메서드는 반드시 오버라이드하여 기능을 구현해야 줘야 함*/
    
    public function __construct($action) {
        // php는 생성자가 없으면 부모의 생성자를 불러온다.
        $view = $this->$action();
        require_once $this->getView($view); 
    }
    
    protected function addAttribute($key, $val) {
        $this->$key = $val;
    }

    protected function getView($view) {
        if(strpos($view, "redirect:") === 0) {
            header('Location: ' . substr($view, 9));
            return;
        }
        return _VIEW . $view;
        // _VIEW: ""로 감싸져있지 않고 $도 없고 대문자면 상수다.
    }
}

