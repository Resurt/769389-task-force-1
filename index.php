<?php
set_include_path('classes');

$obTask = new Task(1,2);
$NextStatus = $obTask->getNextStatus(Task::ACTION_CANCEL);

$NextAction = $obTask->getNextAction(Task::STATUS_IN_WORK, Task::ROLE_IMPLEMENT);
?>
<div><?=$NextStatus?></div>
<div><?=$NextAction?></div>
