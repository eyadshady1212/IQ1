<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"] ?? "";
    $age = $_POST["age"] ?? "";
    $score = $_POST["score"] ?? "";
    $date = date("Y-m-d H:i:s");

    $line = "$date,$name,$age,$score\n";
    file_put_contents("results.csv", $line, FILE_APPEND);

    echo "تم تسجيل البيانات بنجاح";
} else {
    echo "طلب غير صالح";
}
?>
