<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pendaftaran Beasiswa</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* CSS untuk styling footer */
        footer {
          position: fixed;
          left: 0;
          bottom: 0;
          width: 100%;
          background-color: #f8f9fa;
          text-align: center;
          padding: 10px 0;
        }
    
        /* CSS untuk memberikan padding-bottom pada body agar konten tidak tertutup footer */
        body {
          padding-bottom: 60px; /* Sesuaikan dengan tinggi footer Anda */
        }
        .table td,
        .table th {
            text-align: center; /* Mengatur posisi teks di tengah */
            white-space: nowrap; /* Mencegah teks mematah menjadi dua baris */
        }
        .custom-container {
        max-width: 100%;
        }
      </style>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.html">Pilihan Beasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="daftar.html">Daftar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="hasil.php">Hasil</a>
        </li>
      </ul>
    </div>
  </nav>
  
  <?php
    include("koneksi.php");
  ?>
<div class="col-lg-6 offset-lg-3 mt-4" id="daftar">
        <h2 class="text-center mb-4">DAFTAR PENGAJUAN</h2>
        <hr>
</div>

<div class=" container-fluid mx-auto custom-container ">
    <div class=" justify-content-center">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered" >
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>jeniskelamin</th>
                            <th>Alamat</th>
                            <th>Email</th>
                            <th>Nomor HP</th>
                            <th>Semester Saat Ini</th>
                            <th>IPK Terakhir</th>
                            <th>Jenis Beasiswa</th>
                            <th>Berkas Syarat</th>
                            <th>Status Pengajuan</th>
                        </tr>
                    </thead>
                <tbody>
                    <?php
                        $query = mysqli_query($con, "SELECT * FROM beasiswa");
                        $no = 0;
                        while ($data = mysqli_fetch_array($query)){
                            $no++;
                            ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?php echo $data['nama'];?></td>
                                <td><?php echo $data['jeniskelamin'];?></td>
                                <td><?php echo $data['Alamat'];?></td>
                                <td><?php echo $data['email'];?></td>
                                <td><?php echo $data['hp'];?></td>
                                <td><?php echo $data['semester'];?></td>
                                <td><?php echo $data['ipk'];?></td>
                                <td><?php echo $data['jenis_beasiswa'];?></td>
                                <td><?php echo $data['syarat'];?></td>
                                <td><?php echo '<span class="badge badge-warning">'."Belum diverifikasi".'</span>';?></td>
                            </tr>
                          <?php
                        }
                        ?>
                </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>