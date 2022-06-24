<?php
namespace application\models;

use Exception; //에러를 다루는 객체, catch문에서 예외처리 
//http://jun.hansung.ac.kr/SWP/PHP/PHP%20Exception%20Handling.html(참고)

use PDO; //PHP에서 지원하는 기능, PHP DATA OBJECT를 Import

class Model {
    public function __construct() {
        $dsn = _DBTYPE . ':host=' ._HOST. ';dbname=' . _DBNAME . ';charset=' . _CHARSET;
        //Heidi SQL에 로그인하기 한 변수
        try {
            $this->pdo = new PDO($dsn, _DBUSER, _DBPASSWORD);
            //class model의 생성자(__construct) 안 pdo에 PDO객체를 생성

            $this->pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); 
            //PDO::ATTR_EMULATE_PREPARES: Preppared Statement를 데이터베이스가 지원 하지 않을 경우
            //                            에뮬레이션 하는 기능으로 false 를 지정해서 데이터베이스의 기능을 사용함.

            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //PDO::ATTR_ERRMODE : 이 속성은 PDO 객체가 에러를 처리하는 방식을 결정합니다.
            //PDO::ERRMODE_EXCEPTION : 에러가 발행했을때 PDOException 을 throw 하도록합니다.

        } catch(Exception $e) { // DB접속 중 문제 발생 시
            var_dump("DB 접속 중 에러가 발생하였습니다. :::: " . $e->getMessage());
        }
    }
}
/* 
 각 모델(boardmodel, uesrmodel)에 extend부분 (각 모델 기능별 함수)
 - $sql = "sql 문법";            : sql 쿼리에 들어갈 문법
 - $stmt = $db->prepare($sql);   : 스테이트먼트(sql에 있는 보안기능? 아래쪽 스테이트먼트 참고)를 생성.
 - $stmt->bindvalue();           : 각 값들을 지정
                                   bindValue , bindParam를 사용해 값을 지정하고 execute()로 주입하거나,
                                   execute에 arrry를 이용하여 직접 주입 (https://offbyone.tistory.com/1)
 - $stmt->execute();             : 값을 주입합니다. bind기능을 이용하지 않을시 array로 사용가능(Boardmodel insBoard ver3 참고)
 - return $stmt->fetchAll(PDO::FETCH_NUM); : 결과를 가져옵니다. fetch면 변수형, fetchAll은 배열형

    + fetch에서 반환되는 값들
      PDO::FETCH_NUM   : 숫자 인덱스 배열 반환
      PDO::FETCH_ASSOC : 컬럼명이 키인 연관배열 반환
      PDO::FETCH_BOTH  : 위 두가지 모두
      PDO::FETCH_OBJ   : 컬럼명이 프로퍼티인 인명 객체 반환

*/

/*
 * 스테이트먼트
 수강 초에 배운 홈페이지 만들기 방식은 인젝션(해킹)에 취약해서
 php내에 인젝션을 막기 위한 라이브러리들을 제공
 그 중 하나가 mysqli의 stmt를 활용한 prepared statement
 출처: https://jeongnue.tistory.com/452
*/