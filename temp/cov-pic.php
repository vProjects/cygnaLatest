<?php

 

move_uploaded_file($GLOBALS['_FILES']['covFileToUpload']['tmp_name'], $GLOBALS['_FILES']['covFileToUpload']['name']);

echo $GLOBALS['_FILES']['covFileToUpload']['name'];



?>