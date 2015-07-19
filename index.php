<?php
$old_path = getcwd();
echo $old_path;
//chdir('/my/path/');
$output = shell_exec('./script.sh');
//chdir($old_path);
echo "<pre>$output</pre>";
?>