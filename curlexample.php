<?php
     	// create curl resource
        $ch = curl_init();
        $metadata = "http://169.254.169.254/latest/meta-data/";

        // set url
        curl_setopt($ch, CURLOPT_URL, "$metadata");

        //return the transfer as a string
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        // $output contains the output string
        $output = curl_exec($ch);

        // close curl resource to free up system resources
        curl_close($ch);

        //Get the public IP address
        echo "The metadata for your EC2 instance is $output";
?>
