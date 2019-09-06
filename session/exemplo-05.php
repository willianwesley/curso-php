<?php

require_once("config.php");

echo session_save_path();

echo "<br>";

var_dump(session_status());

switch (session_status()) {
    case PHP_SESSION_DISABLED:
        echo "As sessões estão desabilitadas";
        break;
    case PHP_SESSION_NONE:
    echo "As sessões não está iniciada";
    break;
    case PHP_SESSION_ACTIVE:
    echo "As sessões está ativa";
    break;
}
?>