<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>

    <?php
        echo "<h1>";

        if (isset($_POST['submit'])){
            echo $_POST['filename']. " submitted successfully.<br>";
            echo $_POST['submit']."<br>";
            echo $_FILES['file']['name']."<br>";

        }

            


        $servername = "localhost";
        $username = "root";
        $password = "";
        $db="internshipfile";
        
        $conn = new mysqli($servername, $username, $password, $db);

        

        $date=date("Y/m/d");
        echo $date."<br>";
        $name = $_FILES['file']['name'];
        $tname = $_FILES['file']['tmp_name'];
        $upload_dir= 'C:\xampp\htdocs\Internship-Task\filess';
        move_uploaded_file($tname, $upload_dir.'/'.$name);
        $sql = "INSERT INTO internshipfile2 (dateAdded, FileName, File) VALUES ( '".$date."','".$_POST['filename']."','".$name."')";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        echo "</h1>";
    ?>

    <button id="file-list">Go to File List</button>
    
</body>

<script>
    document.querySelector("#file-list").onclick=function(){location.href="./index.php"};
</script>
</html>

