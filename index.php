<?php
$names = array('brad', 'john', 'jane', 'meowsalot');
// Basic loop while loop
$count = 1;
while ($count < 100) {
  echo "<li>$count</li>";
  $count++; // Adds 1
}
?>

<!--  While loop and an array and counter variable -->
<?php
$names = array('brad', 'john', 'jane', 'meowsalot');
$count = 0; // Access first item in array with "0"
while ($count < count($names)) {
  echo "<li>Hi my name is $names[$count] </li>";
  $count++;
}
?>
