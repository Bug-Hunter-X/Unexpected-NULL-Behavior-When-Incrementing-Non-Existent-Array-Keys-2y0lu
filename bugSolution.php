```php
<?php
function increment_array_value(array &$arr, $key, $increment = 1) {
  if (!array_key_exists($key, $arr)) {
    $arr[$key] = 0; // Initialize if key doesn't exist
  }
  $arr[$key] += $increment; // Increment the value
}

$my_array = ['a' => 1, 'b' => 2];
increment_array_value($my_array, 'c', 5);
print_r($my_array);
increment_array_value($my_array, 'a');
print_r($my_array);
?>
```