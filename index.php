<?php
//get itemlist array from POST
$item_list = filter_input(INPUT_POST, 'itemlist', 
        FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
if ($item_list === NULL) {
    $item_list = array();
    
//    add some hard-coded starting values to make testing easier
//    $item_list[] = 'Write chapter';
//    $item_list[] = 'Edit chapter';
//    $item_list[] = 'Proofread chapter';
}

//get action variable from POST
$action = filter_input(INPUT_POST, 'action');

//initialize error messages array
$errors = array();

//process
switch( $action ) {
    case 'Add Item':
        $new_item = filter_input(INPUT_POST, 'newitem');
        if (empty($new_item)) {
            $errors[] = 'The new item cannot be empty.';
        } else {
            $item_list[] = $new_item;
        }
        break;
    case 'Delete item':
        $item_index = filter_input(INPUT_POST, 'itemid', FILTER_VALIDATE_INT);
        if ($item_index === NULL || $item_index === FALSE) {
            $errors[] = 'The item cannot be deleted.';
        } else {
            unset($item_list[$item_index]);
            $item_list = array_values($item_list);
        }
        break;
/*
    case 'Modify item':
    
    case 'Save Changes':
    
    case 'Cancel Changes':
    
    case 'Sort Items':
    
*/
}

include('item_list.php');
?>

