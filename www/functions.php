<?php
if($_POST['response'] == 'yes') {
    file_put_contents('response.txt','yes');
}