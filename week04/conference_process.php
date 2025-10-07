<?php include("headeer.php"); ?>

<h2>報名結果</h2>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $identity = $_POST["role"];
    $sessions = $_POST["session"] ?? []; 

    $fee = 0;

        foreach ($sessions as $s) {
            if ($s == "morning") {
                $fee += 150; 
            } elseif ($s == "afternoon") {
                $fee += 100; 
            } elseif ($s == "lunch") {
                $fee += 60; 
            }
        }
    

    echo "姓名:$name<br>";
    echo "身份：" . ($identity == "teacher" ? "老師" : "學生") . "<br>";
    echo "應繳費用：$fee 元";
    echo "</div>";
}
?>

<?php include("footer.php"); ?>