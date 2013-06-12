<?php
require_once 'array_to_json.php';
require_once 'inc/MCAPI.class.php';
require_once 'inc/config.inc.php'; //contains apikey

$api = new MCAPI($apikey);
$filter = array();
$exportArr = array();
$filter['list_id'] = 'b95ec8fa1d';
$retval = $api->campaigns($filter);

if ($api->errorCode){
	echo "Unable to Pull list of Campaign!";
	echo "\n\tCode=".$api->errorCode;
	echo "\n\tMsg=".$api->errorMessage."\n";
} else {
	$counter = 0;
	
    foreach($retval['data'] as $c){
		$exportArr[$counter]['title'] = $c['title'];
		$exportArr[$counter]['url'] = $c['archive_url'];
		$exportArr[$counter]['time'] = $c['send_time'];
		$counter++;
    }
	echo __json_encode($exportArr);
}
?>