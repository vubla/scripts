<?php

$allowed_not_closed = array(
'.',
'..',
'magento1.4.0-1.7.x1.6.crawler.vubla.com',
'magento1.4.0-1.7.x1.5.crawler.vubla.com',
'magento-plugin2.crawler.vubla.com',
'magento1.4.x-1.6.x.crawler.vubla.com',
'magento1.4.0-1.7.x1.7.crawler.vubla.com',
'magento1.4.0-1.7.x1.4.crawler.vubla.com',
'magento-splittest.crawler.vubla.com',
'oscommerce1739.crawler.vubla.com',
'oscommerce2.3.1.crawler.vubla.com',
'oscommerce1.72.crawler.vubla.com'
);

function get_response($file)
{
            $url = parse_url($file);

                $host = $url['host'];
               @ $port = $url['port'];
                $path = $url['path'];
                @$query = $url['query'];
                if(!$port)
                    $port = 80;
                
                $request = "HEAD $path?$query HTTP/1.1\r\n"
                          ."Host: $host\r\n"
                          ."Connection: close\r\n"
                          ."\r\n";
                
                $address = gethostbyname($host);
                $socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
                socket_connect($socket, $address, $port);
                
                socket_write($socket, $request, strlen($request));
              
                $response = split(' ', socket_read($socket, 1024));
                if($response[1] == '301' || $response[1] == '302'){
                    return get_response($response[12]);
                }
                return $response[1];
                
                socket_close($socket);
}

$translate = array('000-default'=>'admin.vubla.com');
if ($handle = opendir('/etc/apache2/sites-enabled')) {
        while (false !== ($file = readdir($handle))) {
            
            if(isset($translate[$file])){
                $file = $translate[$file];
            }            
            if(!in_array($file, $allowed_not_closed))
            {
               echo $file . ': '. get_response('http://'.$file.'/') .PHP_EOL;
            }
        }
        
}
    