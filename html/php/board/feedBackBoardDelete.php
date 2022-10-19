<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    $feedBackBoardId = $_POST['feedBackBoardId'];
    $feedBackBoardId = $connect -> real_escape_string($feedBackBoardId);
    $sql = "DELETE FROM feedBackBoard WHERE feedBackBoardId = $feedBackBoardId";
    $connect -> query($sql);

?>
<script>
    location.href="feedBackBoard.php";
</script>



