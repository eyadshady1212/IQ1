<?php
echo "<h2>قائمة المشاركين في اختبار الذكاء</h2>";
echo "<table border='1' cellpadding='5'><tr><th>التاريخ</th><th>الاسم</th><th>العمر</th><th>الـ IQ</th></tr>";

if (file_exists("results.csv")) {
    $lines = file("results.csv");
    foreach($lines as $line){
        $data = explode(",", trim($line));
        echo "<tr>";
        foreach($data as $cell){
            echo "<td>" . htmlspecialchars($cell) . "</td>";
        }
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='4'>لا توجد بيانات بعد</td></tr>";
}

echo "</table>";
?>
