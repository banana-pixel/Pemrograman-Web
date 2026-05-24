<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>2473025 - Vito Elroy WIratara</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        
        .container {
            width: 700px;
            margin: 40px auto;
            background-color: #ffffff;
            border: 1px solid #e0e0e0;
            padding: 20px 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.05);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }
        th, td {
            border: 1px solid #dee2e6;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
            color: #333;
        }

        .btn {
            padding: 6px 12px;
            text-decoration: none;
            color: white;
            border-radius: 4px;
            font-size: 14px;
            display: inline-block;
            border: none;
            cursor: pointer;
        }
        .btn-tambah { 
            background-color: #4CAF50;
            margin-bottom: 10px; }
        .btn-edit { 
            background-color: #2196F3; 
        }
        .btn-hapus { 
            background-color: #f44336;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Data Siswa</h2>
        <a href="tambah.php" class="btn btn-tambah">Tambah Data</a>
        
        <table>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
            <?php
                $sql = "SELECT * FROM siswa";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . $row["nama"] . "</td>";
                        echo "<td>" . $row["kelas"] . "</td>";
                        echo "<td>
                                <a href='edit.php?id=" . $row["id"] . "' class='btn btn-edit'>Edit</a>
                                <a href='hapus.php?id=" . $row["id"] . "' class='btn btn-hapus' onclick='return confirm(\"Yakin ingin menghapus data ini?\")'>Hapus</a>
                              </td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>Tidak ada data</td></tr>";
                }
            ?>
        </table>
    </div>
</body>
</html>