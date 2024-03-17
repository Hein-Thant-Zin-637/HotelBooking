<?php
    function dd($value){
        echo"<pre>";
        var_dump($value);
        echo"</pre>";
        die();
    }
    function abort($code = 404){
        http_response_code(404);
        $title = $code;
        require("view/$code.php");
        die();
    }
    function authorize($condition, $respon = 403){
        
        if(!$condition){
            $title = $respon;
            require ("view/$respon.php");
            http_response_code($respon);
            die();
        }
        
    }

?>