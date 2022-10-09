<html>
<head><meta charset="utf-8">
<script>
function confirmDelete(username){
    var ans = confirm("ต้องการลบข้อมูล Username : " + username);
    if(ans==true)
        document.location = "delete.php?username=" + username;
    
}
</script>  
</head>
<body>
<?php
$pdo = new PDO("mysql:host=localhost;dbname=blueshop;charset=utf8", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $pdo->prepare("SELECT * FROM member");
$stmt->execute();

while ($row = $stmt->fetch()) {?> 
    <div>
        ชื่อสมาชิก: <?=$row["name"]?> <br> 
        ที่อยู่: <?=$row["address"]?><br> 
        อีเมล: <?=$row["email"]?><br>
        <img src='member_photo /<?=$row["username"]?>.jpg'><br>
        <a href='#' onclick='confirmDelete("<?=$row["username"]?>")'>ลบ </a>
        <hr>
    </div>
    <?php } ?>

</body>
</html>