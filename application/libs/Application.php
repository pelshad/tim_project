<?php
namespace application\libs;

class Application{
    
    public $controller;
    public $action;

    public function __construct() {
        $getUrl = '';
        if (isset($_GET['url'])) {
            // 1. url주소 받기
            /*$getUrl = $_GET['url']; rtrim 기능 대조용
            print $getUrl."<br>";*/

            $getUrl = rtrim($_GET['url']);// 굳이 rtrim을 사용하는 이유는 모르겠음
            //print $getUrl."<br>";
            // 2. url을 문자열로 이후 FILTER_SANITIZE_URL 필터는 문자열에서 모든 불법 URL 문자를 제거(filter_var)

            $getUrl = filter_var($getUrl, FILTER_SANITIZE_URL);
            //print $getUrl."<br>";
        }
        // 3./기준으로 배열로 분리 loclahost/board/list 기준으로 board->[0], list->[1]
        $getParams = explode('/', $getUrl);
        print_r($getParams);

        $controller = isset($getParams[0]) && $getParams[0] != '' ? $getParams[0] : 'board';
        //$getParams[0]이 빈칸이 아니라면 $getParams[0], 빈칸이라면 board

        $action = isset($getParams[1]) && $getParams[1] != '' ? $getParams[1] : 'index';
        //$getParams[1]이 빈칸이 아니라면 $getParams[1], 빈칸이라면 index

        // 4.apllication 폴더에 각 (board, user) controller 존재여부 확인 /는 파일 경로
        if (!file_exists('application/controllers/'. $controller .'Controller.php')) {
            echo "해당 컨트롤러가 존재하지 않습니다.";
            exit();
        }
        // 5. \ 네임스페이스 찾기 이후 객체화 -> Controller.php로 이동
        $controllerName = 'application\controllers\\' . $controller . 'controller';        
        new $controllerName($action); // 6. list기준 boardcontrooler(list) 객체 생성
    }
}