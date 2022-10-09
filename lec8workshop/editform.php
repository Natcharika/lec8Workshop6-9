<?php include "connect.php"?>
<?php 
    $stmt=$pdo->prepare("SELECT * FROM member WHERE username=?");
    $stmt->bindParam(1,$_GET["username"]);
    $stmt->execute();
    $row=$stmt->fetch();
?>

<html>
<head><meta charset="utf-8"></head>
<body>
<form action="update.php" method="POST">
    <input type="hidden" name="username" value="<?=$row["username"]?>">
    Password: <input type="text" name="password" value="<?=$row["password"]?>"><br>    
    Name: <input type="text" name="name" value="<?=$row["name"]?>"><br>
    Address: <textarea name="address" rows="2" cols="50"><?=$row["address"]?></textarea><br>
    Mobile: <input type="text" name="mobile" value="<?=$row["mobile"]?>"><br>
    Email: <input type="text" name="email" value="<?=$row["email"]?>"><br>
    <input type="submit" value="แก้ไขข้อมูล">
</form>
</body>
</html>