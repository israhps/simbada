<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM profil ORDER BY id DESC");
?>

<html>
<head>    
    <title>Tambah Data</title>
</head>

<body>
<a href="add.php">Tambah Data Profil</a><br/><br/>

    <table width='80%' border=1>

    <tr>
        <th>Nama</th> <th>NIM</th> <th>Jurusan</th> <th>Email</th> 
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['nama']."</td>";
        echo "<td>".$user_data['nim']."</td>";
        echo "<td>".$user_data['jurusan']."</td>";
        echo "<td>".$user_data['email']."</td>";    

              
    }
    ?>
    </table>
</body>
</html>