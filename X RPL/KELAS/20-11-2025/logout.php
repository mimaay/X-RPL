<?php
    session_start();
    session_destroy();
    echo '<meta http-eqiv="refresh" content="1.5" url=index.php>';
    exit();
?>