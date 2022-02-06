<html>
    <head>
        <title>Internship</title>
    </head>
    <link rel="stylesheet" href="styles.css">
    <body>
        <div class="logo">
            <img src="logo.png" alt="logo">
        </div>

        <form action="./AddFileDB.php" enctype='multipart/form-data' method="post">
            <input type="text" name="filename" id="filename" placeholder="Enter Name" required><br>
            <input type="file" name="file" id="file"><br>
            <button type="submit" id="submit" name="submit">Upload</button>
        </form>
        
    </body>


</html>


