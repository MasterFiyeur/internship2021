<?php

include "class_filter.php";

$filter = new Filter;
if(count($filter->getErrors())>0){
    header('Content-Type: application/json');
	print json_encode(array("status" => 400, 'status_message' =>'Incorrect syntax of parameters.', "error" => $filter->getErrors()));
}else{
	http_response_code(200);
    header('Content-Type: application/json');
	print json_encode(array("status" => 400, 'status_message' =>'OK.', "data" => $filter->getObject()));
}
exit;
/* print array with status (code) & status_message & data */
?>