<?php
$weight = 70; 
$height = 1.75; 
$bmi = $weight / ($height ** 2);
echo "Your BMI is: " . number_format($bmi, 2) . "\n";
if ($bmi < 18.5) {
    echo "Weight category: Underweight";
} elseif ($bmi >= 18.5 && $bmi < 24.9) {
    echo "Weight category: Normal weight";
} elseif ($bmi >= 25 && $bmi < 29.9) {
    echo "Weight category: Overweight";
} else {
    echo "Weight category: Obese";
}
?>
