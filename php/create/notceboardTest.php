<?php
    include "../connect/connect.php";
    //board 확인용
    for($i=1; $i<=30; $i++){
        $regTime = time();
        $sql = "INSERT INTO feedBackBoard(userMemberID, boardTitle, boardContents, boardView, regTime) VALUES('5', '게시판 타이틀${i}입니다.', '게시판 컨텐츠${i}입니다.', '1', '$regTime');";
        $connect -> query($sql);
    }
    echo $sql;
?>