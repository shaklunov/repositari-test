<?php
    
    // iLEVEL Functions v 1.3.1

    // Developer: iLEVEL Web Solutions
    // Website:   http://ilevel.ws/
    // Email:     info@ilevel.ws
    // Skype:     ilevel.ws
    
    // How to use:
    // Include this code to each template and sender scripts
    // include_once("bx24/ilevel.functions.php");

    //show_errors(TRUE); // FALSE on 
     
    // Clear referer subdomains
    
    function extractDomain($host, $level = 3, $ignoreWWW = TRUE)
    {
        $parts = explode(".", $host);
        if($ignoreWWW and $parts[0] == 'www') unset($parts[0]);
        $parts = array_slice($parts, -$level);
        return implode(".", $parts);
    }
    
    function utf_encode($string)
    {
        $arrayUtf = array('u0410', 'u0430', 'u0411', 'u0431', 'u0412', 'u0432', 'u0413', 'u0433', 'u0414', 'u0434', 'u0415', 'u0435', 'u0401', 'u0451', 'u0416', 'u0436', 'u0417', 'u0437', 'u0418', 'u0438', 'u0419', 'u0439', 'u041a', 'u043a', 'u041b', 'u043b', 'u041c', 'u043c', 'u041d', 'u043d', 'u041e', 'u043e', 'u041f', 'u043f', 'u0420', 'u0440', 'u0421', 'u0441', 'u0422', 'u0442', 'u0423', 'u0443', 'u0424', 'u0444', 'u0425', 'u0445', 'u0426', 'u0446', 'u0427', 'u0447', 'u0428', 'u0448', 'u0429', 'u0449', 'u042a', 'u044a', 'u042b', 'u044b', 'u042c', 'u044c', 'u042d', 'u044d', 'u042e', 'u044e', 'u042f', 'u044f');
        $arrayCyr = array('А', 'а', 'Б', 'б', 'В', 'в', 'Г', 'г', 'Д', 'д', 'Е', 'е', 'Ё', 'ё', 'Ж', 'ж', 'З', 'з', 'И', 'и', 'Й', 'й', 'К', 'к', 'Л', 'л', 'М', 'м', 'Н', 'н', 'О', 'о', 'П', 'п', 'Р', 'р', 'С', 'с', 'Т', 'т', 'У', 'у', 'Ф', 'ф', 'Х', 'х', 'Ц', 'ц', 'Ч', 'ч', 'Ш', 'ш',  'Щ', 'щ', 'Ъ', 'ъ', 'Ы', 'ы', 'Ь', 'ь', 'Э', 'э', 'Ю', 'ю', 'Я', 'я');
    
        return str_replace($arrayUtf, $arrayCyr, $string);
    }
    
    // Getting real user IP
    function GetRealIp()
    {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) 
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        else
            $ip = $_SERVER['REMOTE_ADDR'];
            
        return $ip;
    }
    
    function startSession() {
        // Если сессия уже была запущена, прекращаем выполнение и возвращаем TRUE
        // (параметр session.auto_start в файле настроек php.ini должен быть выключен - значение по умолчанию)
        if ( session_id() ) return true;
        else return session_start();
        // Примечание: До версии 5.3.0 функция session_start()возвращала TRUE даже в случае ошибки.
        // Если вы используете версию ниже 5.3.0, выполняйте дополнительную проверку session_id()
        // после вызова session_start()
    }

    // Getting current url
    function getUrl()
    {
        $url  = @( $_SERVER["HTTPS"] != 'on' ) ? 'http://'.$_SERVER["SERVER_NAME"] : 'https://'.$_SERVER["SERVER_NAME"];
        $url .= ( $_SERVER["SERVER_PORT"] != 80 ) ? ":".$_SERVER["SERVER_PORT"] : "";
        $url .= $_SERVER["REQUEST_URI"];
        // return data
        return $url;
    }
    
    // Remove get papams from url
    // $q   = TRUE - save query string
    // $ref = TRUE - enable when iframe is used
    function unparse_url($q = FALSE, $ref = FALSE) { 
        
        $referer    = (isset($_SERVER['HTTP_REFERER'])) ? $_SERVER['HTTP_REFERER'] : NULL;
        $url        = ($ref) ? $referer : getUrl();
        $parsed_url = parse_url($url);
        
        $scheme   = isset($parsed_url['scheme']) ? $parsed_url['scheme'] . '://' : ''; 
        $host     = isset($parsed_url['host']) ? $parsed_url['host'] : ''; 
        $port     = isset($parsed_url['port']) ? ':' . $parsed_url['port'] : ''; 
        $user     = isset($parsed_url['user']) ? $parsed_url['user'] : ''; 
        $pass     = isset($parsed_url['pass']) ? ':' . $parsed_url['pass']  : ''; 
        $pass     = ($user || $pass) ? "$pass@" : ''; 
        $path     = isset($parsed_url['path']) ? $parsed_url['path'] : ''; 
        $query    = isset($parsed_url['query']) ? '?' . $parsed_url['query'] : ''; 
        $fragment = isset($parsed_url['fragment']) ? '#' . $parsed_url['fragment'] : ''; 
        
        return ($q) ? $scheme.$user.$pass.$host.$port.$path.$query.$fragment
                    : $scheme.$user.$pass.$host.$port.$path;
    }
    
    // Remove get papams from url and save it to COOCKIE
    function unparse_url_query($url) { 
        $parsed_url = parse_url($url);
        $query      = isset($parsed_url['query']) ? $parsed_url['query'] : NULL;

        return $query;
    }
	?>