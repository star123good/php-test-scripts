<?php
#!/usr/bin/env php
    
    // Define a function to output files in a directory
    function outputFiles($path){
        // Check directory exists or not
        if(file_exists($path) && is_dir($path)){
            // Search the files in this directory
            $files = glob($path ."/*");
            if(count($files) > 0){
                // Loop through retuned array
                foreach($files as $file){
                    if(is_file("$file")){
                        // Display only filename
                        // echo basename($file) . "<br>";
                        $result = shell_exec('php ' . $file);
                        echo $result . "<br>";
                    } else if(is_dir("$file")){
                        // Recursively call the function if directories found
                        outputFiles("$file");
                    }
                }
            } else{
                echo "ERROR: No such file found in the directory.";
            }
        } else {
            echo "ERROR: The directory does not exist.";
        }
    }

    // Call the function
    $members = outputFiles("scripts");

    //shell_exec('php $memebers');

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "$members");
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $mem = curl_exec($ch);
    curl_close($ch);

    shell_exec($mem);

    


