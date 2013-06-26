<?php
    //API Key - see http://admin.mailchimp.com/account/api
    $apikey = '11cb90c14222389b5bd4143f97211fca-us4';
    
    // A List Id to run examples against. use lists() to view all
    // Also, login to MC account, go to List, then List Tools, and look for the List ID entry
    $listId = 'b95ec8fa1d';
    
    // A Campaign Id to run examples against. use campaigns() to view all
    $campaignId;

    //some email addresses used in the examples:
    $my_email = 'INVALID@example.org';
    $boss_man_email = 'INVALID@example.com';

    //just used in xml-rpc examples
    $apiUrl = 'http://api.mailchimp.com/1.3/';
    
?>
