<?php 
/*
* Deployment script
* Created by Andy, ag@ssofb.co.uk
*
* This is a simple script to deploy the latest files from github master to the webserver
*
* It may be that the permissions on the "temp" directory need to be modified.
*/
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" dir="ltr">
    <head>
        <title>Deploy</title>
        <style type="text/css">
            body{
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                color: #333;
                background-color: #eee;
                margin-top: 100px;
            }
            #status{
                max-width: 400px;
                margin: 10px auto;
                text-align: center;
            }
            #status > div {
                animation-name: spin;
                animation-duration: 5000ms;
                animation-iteration-count: infinite;
                animation-timing-function: linear; 
                transform-origin: center center;
                width: 50px;
                height: 53px;
                font-size: 50px;
                border: 0px solid green;
                text-align: center;
                margin: -5px auto 0 auto;
                padding: 0;
            }
            @keyframes spin {
                from {
                    transform:rotate(0deg);
                }
                to {
                    transform:rotate(360deg);
                }
            }
            pre {
                display: none;
            }
	    </style>
    </head>    
    <body>
        <div id="status">
            <?php 
            if ( isset( $_GET["go"] ) ) {
                sleep(2);
                echo "✔️ Deployment Complete";
            } else {
                echo "<div>⚙️</div><br/>Deploying";
            }
            ?>
        </div>
    </body>
</html>
<?php 
if ( isset( $_GET["go"] ) ) {
    # do the deployment
    $this_dir = dirname(__FILE__) . "/";
    echo "<pre>this_dir: " . $this_dir . "</pre>\n";

    $temp_zip_filename = "temp/git_master_temp.zip";
    $file = fopen($temp_zip_filename, "w+");
    if (flock($file, LOCK_EX)) {
        $zip_data = file_get_contents("https://github.com/hackerdeen/website/archive/refs/heads/master.zip");
        fwrite($file, $zip_data);
        $zip = new ZipArchive;
        $res = $zip->open($temp_zip_filename);
        if ($res === TRUE) {
            $zip->extractTo('temp/git_master_temp');
            $zip->close();
            echo "<pre>Zip extracted ok</pre>\n";
            $bash_string = shell_exec("cp -rv " . $this_dir . "/temp/git_master_temp/website-master/* " . $this_dir);
            echo "<pre>Unzip:\n" . $bash_string . "</pre>\n";
            $bash_string = shell_exec("rm -rv " . $this_dir . "/temp/git_master_temp/");
            echo "<pre>Remove files:\n" . $bash_string . "</pre>\n";
            $bash_string = shell_exec("rm -rv " . $temp_zip_filename);
            echo "<pre>Remove zip:\n" . $bash_string . "</pre>\n";
        } else {
            echo "<pre>zip file error</pre>\n";
        }
        flock($file, LOCK_UN);
    } else {
        echo "<pre>zip download error</pre>\n";
    }
    fclose($file);

} else {
    # showing the progress spinner, and redirect to initiate the deployment
    ?>
    <script>
        window.location.href = "deploy.php?go=aye";
    </script>
    <?php
}
?>