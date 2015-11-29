<?php
include($_SERVER['DOCUMENT_ROOT']."/bx24/ilevel.functions.php");

    //define('SXPATH', $_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/banka/');         // SxGeo path 
    $utm_arr     = array();
    $link_arr    = array();
	$enterData   = array();
    $cookie_time = 60*60*24*365*10; // 10 years
    

    // Save first visit time
    if (!isset($_COOKIE['first_visit']))
        setcookie('first_visit', date("d.m.Y H:i:s"), time()+$cookie_time, '/');
    
    // UTM data from GET to COOCKIE
    if (isset($_GET['utm_source']))
    {
        // Adding UTM to COOCKIE
        foreach ($_GET as $key => $val) 
            (strpos($key, 'utm') === 0) ? $utm_arr[$key] = $val : NULL;
    }
    
  
    // Define kms or rsya
    if (isset($_GET['type']) || isset($_GET['network']))
    {
        // &type={source_type} - яндекс ( search | context )
        // &network={network} - Google ( g,s | c )
        $utm_arr['kms'] = ($_GET['type'] == 'context' || $_GET['network'] == 'c') ? TRUE : FALSE;
    }
    // Define remarketing / retargeting
    if (isset($_GET['remarketing']) || isset($_GET['retargeting']))
    {
        //&remarketing=1 - Google | яндекс
        //&retargeting=1 - Google | яндекс
        $utm_arr['remarketing'] = ($_GET['remarketing'] == '1' || $_GET['retargeting'] == '1') ? TRUE : FALSE;
    }
    if (isset($_GET['placement']))
    {
        // &placement={placement} - Google ( доменное им¤ сайта )
        $utm_arr['domain_name'] = ($_GET['placement']) ? $_GET['placement'] : FALSE;
    }
	if (isset($_GET['source']))
    {
        // &source={source} - яндекс ( доменна¤ площадка | none )
        $utm_arr['domain_name'] = ($_GET['source'] != 'none') ? $_GET['source']  : FALSE;
    }
	if (isset($_GET['position']))
    {
        // position={position} - яндекс (номер позиции обь¤влени¤ в блоке|0 )
        $utm_arr['position'] = ($_GET['position']) ? $_GET['position'] : FALSE;
    }
	if (isset($_GET['adposition']))
    {
        // adposition={adposition} - Google (2t1)
        $utm_arr['position'] = ($_GET['adposition']) ? $_GET['adposition'] : FALSE;
    }
	if (isset($_GET['keyword']))
    {
        // &keyword={keyword} - яндекс ( keywords )
        // &keyword={keyword} - Google ( keywords )
        $utm_arr['keyword'] = ($_GET['keyword']) ? $_GET['keyword'] : FALSE;
    }
	if (isset($_GET['block']))
    {
        // &block={position_type} - яндекс ( premium|other|none )
        $utm_arr['block'] = ($_GET['block']) ? $_GET['block'] : FALSE;
    }
    	
    // UTM data in json to cookie
    $utm_json = json_encode($utm_arr);
    // Save and redeclare data to coockie
    if (isset($_COOKIE['utm']))
    {
        if ($utm_json != '[]')
        {
            setcookie('utm', '', time()-60);
            setcookie('utm', $utm_json, time()+$cookie_time, '/'); 
        }
    }
    else
    {
        setcookie('utm', $utm_json, time()+$cookie_time, '/');
    }
    
    // Getting true referer to SESSION
    if (isset($_SERVER['HTTP_REFERER']) and $_SERVER['HTTP_REFERER'])
    { 
		// log_write($_SERVER['HTTP_REFERER']);
        $current_domain = strpos($_SERVER['HTTP_REFERER'], extractDomain($_SERVER['SERVER_NAME']));
		if ($current_domain === FALSE) 
		{   
			// Parse url of current page
			$enterData['referer'] = unparse_url(TRUE, TRUE); // $_SERVER['HTTP_REFERER'];			
			// log_write($_SERVER['HTTP_REFERER']." rewrited to ".$enterData['referer']);
		}
		else
		{
			$link_arr['referer_order_url'] = unparse_url(TRUE, TRUE);	
		}		
    }
    
    // Getting enter URL
    $enterData['enter_url'] = unparse_url(TRUE);
    
    $jsonEnterData = json_encode($enterData);
	if (!isset($_COOKIE['enter_data']))
	{
		setcookie('enter_data', $jsonEnterData, time()+$cookie_time, '/'); 
	}		
	
	// Getting curent (order) url
	$link_arr['order_url'] = unparse_url(FALSE);
	// UTM data in json to cookie
	$link_json = json_encode($link_arr);
    	
    // Save and redeclare data to coockie
    if (isset($_COOKIE['link']))
    {
        if ($link_json != '[]')
        {
            setcookie('link', '', time()-60);
            setcookie('link', $link_json, time()+$cookie_time, '/'); 
        }
    }
    else
    {
        setcookie('link', $link_json, time()+$cookie_time, '/');
    }
	    // Get the country
    //include(SXPATH.'bx24/SxGeo.php');
    //$SxGeo = new SxGeo(SXPATH.'bx24/SxGeo.dat');
    //$cntr = $SxGeo->getCountry(GetRealIp());
	
?>

