<?php

return array(

    'pdf' => array(
        'enabled' => true,
        'binary' => 'C:/wkhtmltopdf/bin/wkhtmltopdf.exe',
        // linux
        //cp vendor/h4cc/wkhtmltopdf-amd64/bin/wkhtmltopdf-amd64 /usr/local/bin/
        // chmod +x /usr/local/bin/wkhtmltopdf-amd64
        //'binary'  => '/usr/local/bin/wkhtmltopdf-amd64',
        'timeout' => false,
        'options' => array(),
        'env' => array(),
    ),
    'image' => array(
        'enabled' => true,
        'binary' => 'C:/wkhtmltox/bin/wkhtmltoimage.exe',
        'timeout' => false,
        'options' => array(),
        'env' => array(),
    ),

);
