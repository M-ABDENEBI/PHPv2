<?php
$curdir = getcwd();
if(mkdir($curdir."/test", 0777)){
    echo "sucess";
}else{
    echo "echec";
};
closedir($curdir);

rmdir('test');
?>