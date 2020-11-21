<style>
    body{ font-family: 微軟正黑體;
    padding: 20px; }
    </style>

<h1>匯率換算</h1>
<?php
$rate = 28.3;
$data = array(50000, 30000, 45000, 80000, 120000);
for ($i=0; $i<count($data); $i++){

echo "新台幣" . $data[$i] . "元換算成美金是" .
	round ($data[$i] / $rate, 2) . "元<br>";
}
?>