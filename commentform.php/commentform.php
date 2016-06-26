<html>

<form action="" method="post">

<label> Name: <br><input type="text" name="name"><br></label>

<label> Message: <br><textarea cols="35" rows="5" name="mess"></textarea></label><br>

<input type="submit" name="post" value="Post">

</form>

</html>


<?php

$name = $_POST["name"];
$text = $_POST["mes"];
$post = $_POST["post"];

if ($post) {

 #WRITE DOWN COMMENTS#

$write = fopen("com.txt", "a+");
fwrite($write, "<u><b> $name</b></u><br>$text<br>");
fclose($write);

 #DISPLAY COMMENTS#

$read = fopen("com.txt", "r+t");
echo "All commentsl:";

while(!feof($read)) {
echo fread($read, 1024);
}

    fclose($read);

}