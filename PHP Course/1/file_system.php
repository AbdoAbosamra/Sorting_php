<?php
// working with file system
$dir = scandir(__DIR__);

var_dump(is_dir($dir[1]));

// . one dot refers to current dirctory
// .. two dots which refers to the parent directory

// i can loop on this files
//to make dirctoty
mkdir("");
// and to remove it
rmdir('');
// can also usr it
// recursive keyword
#mkdir("foo/bar", recursive:true);

# we have also function to check the file is exsit or not
// file_exist()
//filesize()
//file_put_contents()
//clearstatcache();
//fopen with the type of open r or wr
//fgets();
//file_get_contents(); and file_put_contents();
// copy from file to file
//unlink
// and filally using rename

