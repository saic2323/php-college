<?php
error_reporting(0);
if($myfile=fopen("test.txt","w+") )
echo "test file created";
else
die("Unable to open file");
$data='First Text';
fwrite($myfile,$data);
fclose($myfile);
$myfile=fopen("test.txt","a+") or die("Unable to open file");
$data=' Second Text';
fwrite($myfile,$data);
echo ' writing is done successfully ';
echo "<br><b>File Details:</b>";
echo"<br>File size:",filesize("test.txt")."bytes";
echo"<br>Array file:",var_dump("test.txt");
$script=file_get_contents("test.txt");
echo"<br><b>Content of file:</b><br/>",$script;
echo"<br>Word count in file",str_word_count("test.txt");
echo"<br>Checking whether file exists or Not",file_exists("test.txt")?"True":"False";
echo"<br>Real path of file:",realpath('test.txt');
echo" <br>path inFormation of file:",pathinfo('test.txt');
$file2 =fopen("test2.txt","w+") or die("unable to open file");
echo"<br>Test2 file created";
$file3 =fopen("test3.txt","w+") or die("unable to open file");
echo"<br>Test3 file created";
echo"<br>Copying file:",copy('test.txt','test2.txt');
echo"<br>File copied Successfully";
echo"<br>Renaming file:",rename("/test3.txt",'/test3new.txt')?"<br>File Renamed
Sucessfully":"<br>File can't be Renamed";
echo"<br>Is file readable?:", is_readable('test2.txt')?"true":"false";
echo"<br>Is file writeable?:", is_writeable('test2.txt')?"true":"false";
echo"<br>is file executable?:",is_executable('test2.txt')?"true":"false","<br>";
$out=fopen("test.txt","r");
while(!feof($out)){
echo fgets($out)."<br>";
}