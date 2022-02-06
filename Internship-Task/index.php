<html>
    <head>
        <title>Internship</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <div class="logo">
            <img src="logo.png" alt="logo">
        </div>

        <h1> WELCOME TO ADMINISTRATIVE DASHBOARD</h1>

        <div class="doc-table">
            <table>
                <tr class="top-row">
                    <td>Date Added</td>
                    <td>File Name</td>
                    <td>View</td>
                    <td>Delete</td>
                </tr>
                <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $db="internshipfile";
                    
                    $conn = new mysqli($servername, $username, $password, $db);
                    
                    $sql = "SELECT sno, DateAdded, FileName, File FROM internshipfile2";
                    $result = $conn->query($sql);

                    $i=0;
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                                if ($i%2==0){
                                    $filen=$row["File"];
                                    echo "<tr style='background-color:lightsteelblue'>";
                                    echo "<td>".$row["DateAdded"]."</td>";
                                    echo "<td>".$row["FileName"]."</td>";
                                    echo "<td> <button class='view' value='$filen'>View</button> </td>";
                                    echo "<td> <button class='delete' value='$filen' >Delete</button> </td>";
                                    echo "<tr>";
                                }
                                else{
                                    $filen=$row["File"];
                                    echo "<tr style='background-color:#E8F0F2'>";
                                    echo "<td>".$row["DateAdded"]."</td>";
                                    echo "<td>".$row["FileName"]."</td>";
                                    echo "<td> <button class='view' value='$filen'>View</button> </td>";
                                    echo "<td> <button class='delete' value='$filen'>Delete</button> </td>";
                                    echo "<tr>";
                                    
                                }
                                $i+=1;
                                
                        }
                    }
                    $conn->close();

                ?> 
                   
            
            </table>
            <br>
            <button class="add-file-btn" >Add New</button>
        </div>
        
    </body>
<script>
    document.querySelector(".add-file-btn").onclick=function(){location.href="./AddFile.php"};
    var delete_btn=document.querySelector(".delete");
</script>
</html>
