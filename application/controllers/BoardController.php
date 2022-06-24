<?php

namespace application\controllers;

use application\models\BoardModel;

// 외부 파일을 사용하겠다는 뜻

class BoardController extends Controller
{
    public function write()
    {
        $this->addAttribute(_TITLE, "글쓰기");
        $this->addAttribute(_HEADER, $this->getView("template/header.php"));
        $this->addAttribute(_MAIN, $this->getView("board/write.php"));
        $this->addAttribute(_FOOTER, $this->getView("template/footer.php"));
        return "template/t1.php";
    }

    public function writeProc()
    {
        $title = $_POST["title"];
        $ctnt = $_POST["ctnt"];
        $param = [
            "title" => $title,
            "ctnt" => $ctnt,
            "i_user" => $_SESSION[_LOGINUSER]->i_user
        ];
        $model = new BoardModel(); // BoardModel 객체 생성
        $this->addAttribute("data", $model->insBoard($param));
        return "redirect:/board/list";
    }

    public function list()
    {
        $model = new BoardModel();
        // $this->list = $model->selBoardList();
        $this->addAttribute(_TITLE, "리스트");
        $this->addAttribute("list", $model->selBoardList());
        $this->addAttribute("js", ["board/list"]);
        $this->addAttribute(_HEADER, $this->getView("template/header.php"));
        $this->addAttribute(_MAIN, $this->getView("board/list.php"));
        $this->addAttribute(_FOOTER, $this->getView("template/footer.php"));
        return "template/t1.php";
        // return "board/list.php"; // view 파일명
    }

    public function detail()
    {
        $i_board = $_GET["i_board"];
        // print "i_board : ${i_board}";
        $model = new BoardModel();
        $param = ["i_board" => $i_board];
        $this->addAttribute("data", $model->selBoard($param));
        $this->addAttribute("js", ["board/detail"]);
        return "board/detail.php";
        // 글번호, 제목, 내용, 글쓴이 이름, 작성일
    }

    public function del()
    {
        $i_board = $_GET["i_board"];
        $model = new BoardModel();
        $param = ["i_board" => $i_board];
        $this->addAttribute("data", $model->delBoard($param));
        return "redirect:/board/list";
    }

    public function mod()
    {
        $i_board = $_GET["i_board"];
        $model = new BoardModel();
        $param = ["i_board" => $i_board];
        $this->addAttribute("data", $model->selBoard($param));
        // template사용시 아래 3개는 필수다.
        $this->addAttribute(_TITLE, "수정");
        $this->addAttribute(_HEADER, $this->getView("template/header.php"));
        $this->addAttribute(_MAIN, $this->getView("board/mod.php"));
        $this->addAttribute(_FOOTER, $this->getView("template/footer.php"));
        return "template/t1.php";
        // detail과 mod의 차이는 template의 사용 유무
        // template: 만들어진 레이아웃 구성
        // 장점: 레이아웃 수정 시 template만 건드리면 된다.
    }

    public function modProc()
    {
        $i_board = $_POST["i_board"];
        $title = $_POST["title"];
        $ctnt = $_POST["ctnt"];
        $model = new BoardModel();
        $param = [
            "i_board" => $i_board,
            "title" => $title,
            "ctnt" => $ctnt
        ];
        $this->addAttribute("data", $model->updBoard($param));
        return "redirect:/board/detail?i_board={$i_board}";
    }
}
