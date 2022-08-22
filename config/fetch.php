<?php
if(is_array($match)){
    if( is_callable( $match['target'] ) ) {
        call_user_func_array( $match['target'], $match['params'] ); 
    } else {
        ob_start();
        require "../template/{$match['target']}.php";
        $pageContent = ob_get_clean();
        require "../template/layout.php";
    }
}else{
    die("error");
}