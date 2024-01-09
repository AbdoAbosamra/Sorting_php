

$old_colors =['red' , 'blue' , 'green'];
$new_colors = ['white' , 'yellow'];

$old_colors[count($old_colors)] = $new_colors[0];
$old_colors[count($old_colors)] = $new_colors[1];

// or
$old_colors[] = $new_colors[0];
$old_colors[] = $new_colors[1];
echo "<pre>";
print_r($old_colors) ;

// so can i append in the array by adding new indexes in the array.
