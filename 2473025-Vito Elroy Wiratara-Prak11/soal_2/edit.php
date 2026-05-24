<?php
include 'koneksi.php';
$id = $_GET['id'];
$sql = "SELECT * FROM siswa WHERE id=$id";
$result = $conn->query($sql);
$data = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <title>2473025 - Vito Elroy Wiratara</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa; }
        .container { 
            width: 400px; 
            margin: 40px auto; 
            background-color: #ffffff;
            border: 1px solid #e0e0e0; 
            padding: 20px 30px; 
            border-radius: 8px; 
            box-shadow: 0 4px 8px rgba(0,0,0,0.05); 
        }

        h3 {
            text-align: center;
            color: #333; 
        }
        label {
            font-weight: bold;
            color: #555;
        }
        input[type=text] { 
            width: 100%; 
            padding: 8px; 
            margin: 10px 0 20px; 
            box-sizing: border-box; 
            border: 1px solid #ccc; 
            border-radius: 4px; 
        }

        .btn {
            padding: 8px 15px;
            text-decoration: none;
            color: white;
            border-radius: 4px;
            border: none;
            cursor: pointer;
            font-size: 14px;
            display: inline-block;
            margin-right: 10px;
            margin-bottom: 10px; }
        .btn-update {
            background-color: #4CAF50;
        }
        .btn-kembali {
            background-color: #2196F3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h3>Edit Data Siswa</h3>
        <form action="proses_edit.php" method="post">
            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
            
            <label>Nama</label>
            <input type="text" name="nama" value="<?php echo $data['nama']; ?>" required>
            
            <label>Kelas</label>
            <input type="text" name="kelas" value="<?php echo $data['kelas']; ?>" required>
            
            <button type="submit" class="btn btn-update">Update</button><br>
            <a href="index.php" class="btn btn-kembali">Kembali</a>
        </form>
    </div>
</body>
</html>
