<?php
//get tasklist array from POST
$task_list = filter_input(INPUT_POST, 'tasklist', 
        FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
if ($task_list === NULL) {
    $task_list = array();
    
//    add some hard-coded starting values to make testing easier
//    $task_list[] = 'Write chapter';
//    $task_list[] = 'Edit chapter';
//    $task_list[] = 'Proofread chapter';
}

//get action variable from POST
$action = filter_input(INPUT_POST, 'action');

//initialize error messages array
$errors = array();

//process
switch( $action ) {
    case 'Add Item':
        $new_task = filter_input(INPUT_POST, 'newtask');
        if (empty($new_task)) {
            $errors[] = 'The new item cannot be empty.';
        } else {
            $task_list[] = $new_task;
        }
        break;
//Delete an item action
    case 'Delete Item':
        $task_index = filter_input(INPUT_POST, 'taskid', FILTER_VALIDATE_INT);
        if ($task_index === NULL || $task_index === FALSE) {
            $errors[] = 'The item cannot be deleted.';
        } else {
            unset($task_list[$task_index]);
            $task_list = array_values($task_list);
        }
        break;
//Modify the item action
    case 'Modify Item':
        $task_index = filter_input(INPUT_POST, 'taskid', FILTER_VALIDATE_INT);
        if ($task_index === NULL || $task_index === FALSE) {
            $errors[] = 'The item cannot be modified.';
        } else {
            $task_to_modify = $task_list[$task_index];
        }
        break;
//Save changes to the item action
    case 'Save Changes'
	   $task_index = filter_input(INPUT_POST, 'modifiedtaskid', FILTER_VALIDATE_INT);
	   $task_name = filter_input(INPUT_POST, 'modifiedtask');
	   if ($task_index == NULL || $task_index == FALSE ||
	       $task_name == NULL || $task_name == FALSE) {
	       $errors[] = 'The task cannot be modified.';
	 } else {
	       $task_list[$task_index] = $task_name;
	 }
	 break;
//Cancel changes to the item added action
    case 'Cancel Changes':
	  $modified_task = '';
    break; 
//Sort items action
    case 'Sort Items':
	  sort($task_list);
    break;
    
}
 
include('task_list.php');
?>
