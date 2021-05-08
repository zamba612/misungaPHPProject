<?php
namespace DB_MISUNGA\members;

include_once './DB.php';
include './Module.php';

$module=new \DB_MISUNGA\Module();

foreach ($module->Members() as $key => $value) {
    echo json_encode($value);
}
