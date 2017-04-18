<?php
    header('Access-Control-Allow-Origin: *');
    $url1 = 'http://104.198.0.197:8080/';
    $apikey = 'apikey=e4731e8c7d6141f2b376f4076b6614b4';

    $url_legislators = $url1.'legislators?'.$apikey.'&per_page=all';
    $url_bill_active = $url1.'bills?last_version.urls.pdf__exists=true&history.active=true&'.$apikey.'&per_page=50';
    $url_bill_new = $url1.'bills?last_version.urls.pdf__exists=true&history.active=false&'.$apikey.'&per_page=50';
    $url_committees = $url1.'committees?'.$apikey.'&per_page=all';

    $url_legis_request_bills = $url1.'bills?sponsor_id=';
    $url_legis_request_comms = $url1.'committees?member_ids=';
    
    if($_GET['q'] == 'legislators'){
        echo (file_get_contents($url_legislators));
    }
    if($_GET['q'] == 'bills_active'){
        echo (file_get_contents($url_bill_active));
    }
    if($_GET['q'] == 'bills_new'){
        echo (file_get_contents($url_bill_new));
    }
    if($_GET['q'] == 'committees'){
        echo (file_get_contents($url_committees));
    }
    if($_GET['q'] == 'legis_bills'){
        echo (file_get_contents($url_legis_request_bills.$_GET['guide_id'].'&'.$apikey));
    }
    if($_GET['q'] == 'legis_comms'){
        echo (file_get_contents($url_legis_request_comms.$_GET['guide_id'].'&'.$apikey));
    }
?>
