<?php

error_reporting('E_ALL');
//send email
echo mail("testing.eecms@gmail.com","My subject",'This is the test data');
echo 'test new added data';
/*$zip = new ZipArchive;
$res = $zip->open('Bosmac.zip');
if ($res === TRUE) {
  $zip->extractTo('data/');
  $zip->close();
  echo 'done';
} else {
  echo 'no';
}*/

echo 'master change';

