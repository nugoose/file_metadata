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
            <h3>upload your file here</h3>
            
            <form enctype="multipart/form-data" action="/file_size.php" method="POST">
                <!-- MAX_FILE_SIZE must precede the file input field, that value corresponds to 30mbs -->
                <input type="hidden" name="MAX_FILE_SIZE" value="30000000" />
                <!-- Name of input element determines name in $_FILES array -->
                <span>
                    <input name="userfile" type="file" />
                    <input type="submit" value="Send File" />
                </span>
            </form>
    
            <h2>made with php, hosted on heroku <3</h2>
        </div>
    </body>
</html>