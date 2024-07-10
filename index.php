<?php
$values = '';
var_dump ($_POST);
if (! empty ($_GET))
{
        $values = "\t\n";
        $values .= "\t\n";
        $values .= 'GET';
        $values .= "\t\n";
        $values .= json_encode ($_GET);
}

if (! empty ($_POST))
{
        $values .= "\t\n";
        $values .= 'POST';
        $values .= "\t\n";
        $values .= json_encode ($_POST);
        $values .= "\t\n";
        $values .= json_encode (file_get_contents('php://input'));
        $values .= "\t\n";
        $values .= "\t\n";
}

$handle = fopen('action_data.txt', 'a');
fwrite($handle, $values);
fclose($handle);

?>