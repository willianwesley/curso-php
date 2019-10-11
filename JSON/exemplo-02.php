<?php
$json = '[{"nome":"Jo\u00e3o","idade":20},{"nome":"Willian","idade":20}]';
json_encode($json, true);
var_dump($json);
?>
