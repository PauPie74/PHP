function bmi($weight, $height) {
  $bmi = $weight / pow($height, 2);
  if ($bmi > 30){
    return "Obese";
  } elseif ($bmi > 25 ) {
    return "Overweight";
  } elseif ($bmi > 18.5 ) {
    return "Normal";
  } else {
    return "Underweight";
  }
}