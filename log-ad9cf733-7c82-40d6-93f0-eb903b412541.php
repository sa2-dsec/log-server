<?php include "header.php" ?>

<?php


echo "Here is the last log from your apache server : " .$_GET['files'] ."<br /><br />";
echo "<pre>";
system("tail -n 10 /var/log/" .$_GET['files']);
echo "</pre>";
?>

<?php include "footer.php" ?>