<?php
// Конвертер валют

$amount = 100;  // Сумма для конвертации
$currency = "доллар";  // Выбранная валюта для конвертации

switch ($currency) {
    case "доллар":
        $convertedAmount = $amount * 0.85;  // Предположим, что 1 доллар = 0,85 евро
        echo "Конвертированная сумма: " . $convertedAmount . " евро";
        break;
    case "евро":
        $convertedAmount = $amount * 1.18;  // Предположим, что 1 евро = 1,18 доллара
        echo "Конвертированная сумма: " . $convertedAmount . " долларов";
        break;
    case "фунт":
        $convertedAmount = $amount * 1.12;  // Предположим, что 1 фунт = 1,12 доллара
        echo "Конвертированная сумма: " . $convertedAmount . " долларов";
        break;
    default:
        echo "Выбрана неподдерживаемая валюта";
}
?>



