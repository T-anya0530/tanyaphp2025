<?php include("headeer.php"); ?>

<h2>報名結果</h2>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    //echo "<pre>";
    //print_r($_POST); 
    //echo "</pre>";

    $name = $_POST["name"];
    $identity = $_POST["role"];
    $dinner = $_POST["dinner"] ?? null;  

    $fee = 0;

    if ( $identity == "student") {
        
        if ($dinner === "dinner") { 
            $fee += 60;  
        }
    }

    echo "<div class='alert alert-info mt-4'>";
    echo "姓名：$name<br>";
    echo "身份：" . ($identity == "teacher" ? "老師" : "學生") . "<br>";
    echo "應繳費用：$fee 元";
    echo "</div>";
}
?>

<?php include("footer.php"); ?>