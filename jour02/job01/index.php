<?php
$n = 0;
while ($n < 42) {
    echo "$n" . "<br />";
    $n++;
}
if ($n == 42) {
    echo "<b>" . "<u>" . "$n" . "</u>" . "</b>" . "<br/>";
    $n++;
}
while ($n > 42 && $n <= 1337) {
    echo "$n" . "<br />";
    $n++;
}
?>