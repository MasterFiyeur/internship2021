<?php

include "class_filter.php";

$filter = new Filter;
if(count($filter->getErrors())>0){
    header('Content-Type: application/json');
	print json_encode(array("status" => 400, 'status_message' =>'Incorrect syntax of parameters.', "error" => $filter->getErrors()));
}else{
	http_response_code(200);
    header('Content-Type: application/json');
	echo $filter->toJSON();
}
exit;
/* print array with status (coe) & status_message & data */
?>