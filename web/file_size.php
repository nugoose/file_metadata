<html>
    <head>
        <!-- google font -->
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <!-- css -->
        <link type='text/css' rel='stylesheet' href='rhp.css'>
    </head>
    
    <body>
        <div id='mainBody'>
            <h2>file metadata</h2>
            <?php
            
            $error_code = $_FILES['userfile']['error'];
            
            if (empty($_FILES)){
                print("<h4>something went wrong</h4>");
            }
            else if ($error_code == 0){
                $fname = $_FILES['userfile']['name'];
                $ftype = $_FILES['userfile']['type'];
                $fsizekb = $_FILES['userfile']['size'];
                $fsizemb = round($fsizekb / 1000000, 2);
                print("<h3>name: <span>$fname</span></h3>");
                print("<h3>type: <span>$ftype</span></h3>");
                if ($fsizemb > 1){
                    print("<h3>size: <span>$fsizekb bytes ($fsizemb mbs)</span></h3>");
                }
                else {
                    print("<h3>size: <span>$fsizekb bytes</span></h3>"); 
                }
                
            }
            else if ($error_code == 1){
                print("<h4>error - file exceeds the max filesize set in php.ini</h4>");
            }
            else if($error_code == 2){
                print("<h4>error - file exceeds max file size set in html form</h4>");
            }
            else if($error_code == 3){
                print("<h4>error - file was only partially uploaded</h4>");
            }
            else if($error_code == 4){
                print("<h4>error - no file was uploaded</h4>");
            }
            else{
                print("<h4>something went wrong</h4>");
            }
            
            ?>
    
            <h2>made with php, hosted on heroku <3</h2>
        </div>
    </body>
</html>