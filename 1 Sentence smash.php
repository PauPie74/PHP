function smash(array $words): string {
  $newstring = "";
  foreach ($words as $w) {
    $newstring .= $w . " ";
  }
  return trim($newstring);
}