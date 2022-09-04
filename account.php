<?php
session_start();
include "db_conn.php";
include "functions.php";
if(isset($_SESSION["username"])){
?>
    <?=template_header()?>
<center><div style="margin:10px"><br>
    Username : <?=$_SESSION["username"]?><br><br>
    Email    :<?=$_SESSION["email"]?><br><br>
    <a href="logout.php"><button style="height:40px;width:150px;background-color:#59ab6e !important;border:none;">Logout</button></a>
</div></center>
    <?=template_footer()?>
<?php
}
?>