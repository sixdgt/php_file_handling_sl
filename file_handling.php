<?php

// 1. Read Mode
// fopen() - this method takes two parameter
// 1st - File Url i.e file directory
// 2nd - Mode
echo "File Handling in PHP <br>";
// file url
$file_url = "note.txt";
echo "Reading first character<br>";
try{
    $file = fopen($file_url, "r");

    echo filesize($file_url); // to display the file size
    echo "<br>";
     // to display the content of file
     // here second parameter is the file length
    echo fread($file, 1);

    fclose($file); // to close the file
} catch (Exception $e){
    echo "File not found";
}

echo "<br>";
echo "<br>";
echo "Reading all content<br>";

try {
    $file_demo = fopen($file_url, "r");
    $file_size = filesize($file_url);
    echo fread($file_demo, $file_size);
    fclose($file_demo);
} catch (Exception $e){
    echo "File Not Found";
}
echo "<br>";

// 2. Append Mode 'a'
try {
    $file_append_demo = fopen("demo.txt", "a");
    $text_to_append = "File Handling Append Mode Demo.\nLets do it.";
    // 'demo.txt' is not available in the specified location so here first it will create file and then append the text we want
    fwrite($file_append_demo, $text_to_append);
} catch (Exception $e){
    echo "File not found";
} finally {
    fclose($file_append_demo);
}

echo "<br>";

// 3. Write Mode 'w'
try {
    $file_write_demo = fopen("item.txt", "w");
    // here 'item.txt' is not available so it will create the file first and write content
    $text_to_write = "File Handling in PHP | Write Mode.\nLets do it.";
    fwrite($file_write_demo, $text_to_write);
} catch (Exception $e) {
    echo "File processing failed";
} finally {
    fclose($file_write_demo);
}
echo "<br>";

// write over existing file
try {
    $file_write_demo = fopen("readme.txt", "w");
    // here 'readme.txt' is available so it will erase the existing file content and write with new content
    $text_to_write = "I am changed.";
    fwrite($file_write_demo, $text_to_write);
} catch (Exception $e) {
    echo "File processing failed";
} finally {
    fclose($file_write_demo);
}
echo "<br>";
