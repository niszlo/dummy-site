<?php
error_log("[".date("D M d H:i:s Y")."] pma:catched from client ".$_SERVER['REMOTE_ADDR'].":".$_SERVER['SERVER_PORT']." in ./pma/pma.php",0);
http_response_code(404);
exit();
?>