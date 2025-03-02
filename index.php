<?php
    $nama = "Benediktus Mario Laksono";
    $nim = "102022300270";
    $fakultas = "Fakultas Rekayasa Industri";
    $prodi = "S1 Sistem Informasi";
    $universitas = "Telkom University";
    $foto = "Mario .jpg";

    $x_url = "https://x.com/i/flow/login";
    $x_icon = "logo x.png";
    $x_name = "X";
    
    $github_url = "https://github.com/mario-005";
    $github_icon = "github.png";
    $github_name = "Github";
    
    $instagram_url = "https://www.instagram.com/bmario__/";
    $instagram_icon = "ig.png";
    $instagram_name = "Instagram";
    
    $facebook_url = "https://www.facebook.com";
    $facebook_icon = "facebook.png";
    $facebook_name = "Facebook";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Mahasiswa</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/png" href="logo telkom.png">
    <!-- dibuat di head karena yang di css tidak terbaca -->
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            color: white;
            font-size: 16px;
        }
        th {
            text-align: left;
            width: 150px;
            white-space: nowrap;
        }
        td {
            text-align: left;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="profile-picture">
            <picture><img src="<?php echo $foto; ?>" alt="Foto Profil"></picture>
        </div>
        <h1>Profil Mahasiswa</h1>
        
        <table>
                <tr>
                    <th>Nama</th>
                    <td><?php echo ": " , $nama; ?></td>
                </tr>
                <tr>
                    <th>NIM</th>
                    <td><?php echo ": " , $nim; ?></td>
                </tr>
                <tr>
                    <th>Jurusan</th>
                    <td><?php echo  ": " , $prodi; ?></td>
                </tr>
            </table>
        
        <h4 class="date">
            Tanggal: <time id="datetime"></time>
        </h4>
        
        <div class="social-icons">
            <div class="social-item">
                <a href="<?php echo $x_url; ?>" target="_blank"><img src="<?php echo $x_icon; ?>" alt="X"></a>
                <h5><?php echo $x_name; ?></h5>
            </div>
            <div class="social-item">
                <a href="<?php echo $github_url; ?>" target="_blank"><img src="<?php echo $github_icon; ?>" alt="Github"></a>
                <h5><?php echo $github_name; ?></h5>
            </div>
            <div class="social-item">
                <a href="<?php echo $instagram_url; ?>" target="_blank"><img src="<?php echo $instagram_icon; ?>" alt="Instagram"></a>
                <h5><?php echo $instagram_name; ?></h5>
            </div>
            <div class="social-item">
                <a href="<?php echo $facebook_url; ?>" target="_blank"><img src="<?php echo $facebook_icon; ?>" alt="Facebook"></a>
                <h5><?php echo $facebook_name; ?></h5>
            </div>
        </div>
    </div>
    <script>
        function updateDateTime() {
            let waktu = new Date();
            let options = { 
                day: 'numeric', 
                month: 'long', 
                year: 'numeric', 
                hour: '2-digit', 
                minute: '2-digit',
                second: '2-digit'
            };
            document.getElementById("datetime").textContent = waktu.toLocaleDateString("id-ID", options) + " WIB";
        }
        setInterval(updateDateTime, 1000); 
        updateDateTime(); 
    </script>
</body>
</html>
