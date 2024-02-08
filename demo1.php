<?php
// Define an example array with old values
$array = array('apple', 'banana', 'orange');

// Define the old value and the new value to replace it
$old_value = 'banana';
$new_value = 'grape';

// Define a callback function to replace old values with new values
function replaceValue($value) {
    global $old_value, $new_value;
    return ($value == $old_value) ? $new_value : $value;
}

// Use array_map() to apply the callback function to each element of the array
$new_array = array_map('replaceValue', $array);

// Output the original array and the new array
echo "Original array: ";
print_r($array);
echo "<br>";
echo "New array: ";
print_r($new_array);
?>
