<?php
include "functions.php";

$subscriber = new Subscriber();
$subscriber->fromArray($_POST);
$subscriber->save();