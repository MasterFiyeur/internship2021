<?php

include "class_filter.php";

$filter = new Filter;
echo $filter->toJSON();
/* print array with status (code) & status_message & data */
?>