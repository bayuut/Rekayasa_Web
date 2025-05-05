<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Wisata</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">Daftar Wisata Jawa Tengah</h2>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID Wisata</th>
                <th>Kota</th>
                <th>Landmark</th>
                <th>Tarif</th>
            </tr>
        </thead>
        <tbody>
            <?php
            function curl($url){
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
                $output = curl_exec($ch);
                curl_close($ch);
                return $output;
            }

            // Ambil data JSON
            $send = curl("http://localhost/Rekayasa_Web/pertemuan2/wisata.php");

            // mengubah JSON menjadi array
            $data = json_decode($send, TRUE);

            // Tampilkan dalam tabel
            foreach($data as $row){
                echo "<tr>";
                echo "<td>".$row["id_wisata"]."</td>";
                echo "<td>".$row["kota"]."</td>";
                echo "<td>".$row["landmark"]."</td>";
                echo "<td>".$row["tarif"]."</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
