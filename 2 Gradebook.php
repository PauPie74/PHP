function getGrade($a, $b, $c) {
  $score = ($a + $b + $c) / 3;
  if ($score >= 90) {
    return "A";
  } elseif ($score >= 80) {
    return "B";
  } elseif ($score >= 70) {
    return "C";
  } elseif ($score >= 60) {
    return "D";
  } else {
    return "F";
  }
}