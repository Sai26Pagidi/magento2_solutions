<?php
// $color = array('white', 'green', 'red'') Go to the editor
// Write a PHP script which will display the colors in the following way :
// Output :
// white, green, red,

// green
// red
// white
$color = array('white', 'green', 'red');
foreach ($color as $col) {
    echo "<li>$col</li>";
}
echo "\n";
echo "===============================================================================";
echo "\n";
sort($color);
foreach($color as $cs){
    echo "<li>$cs</li>";
}
echo "\n";
