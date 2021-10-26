<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Load Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <!-- Load Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/libraries/bootstrap/css/bootstrap.min.css">
    <!-- Load Jquery Data Tables -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets//libraries/jquery/data-tables/css/jquery.dataTables.min.css">
    <!-- Load Main CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/styles/main.css">

    <title><?php echo $title; ?></title>
</head>

<body>

    <!-- Navbar -->
    <nav id="mainnav" class="row navbar-expand-lg navbar-light bg-black">
        <div class="container">
            <div class="row">
                <a href="<?php echo site_url("mahasiswa"); ?>" class="navbar-brand">
                    <img src="<?php echo base_url(); ?>assets/images/Logo.png" alt="Logo CODEIGNITER">
                </a>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Header -->
    <!-- End Header -->

    <!-- Main Content -->
    <main>
        <div class="container mt-3">
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Foto</th>
                                <th class="text-center">NPM</th>
                                <th class="text-center">Nama Mahasiswa</th>
                                <th class="text-center">Tanggal Lahir</th>
                                <th class="text-center">Jurusan</th>
                                <th class="text-center">Alamat</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">No. Telepon</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($getAllDataMahasiswa as $allDataMahasiswa) : ?>
                                <tr>
                                    <td class="text-center"><?php echo $no++; ?></td>
                                    <td><img src="<?php echo base_url() . 'assets/images/' . $allDataMahasiswa->foto; ?>" width="75px" alt="Foto"></td>
                                    <td class="text-center"><?php echo $allDataMahasiswa->npm; ?></td>
                                    <td class="text-center"><?php echo $allDataMahasiswa->nama_mahasiswa; ?></td>
                                    <td class="text-center"><?php echo $allDataMahasiswa->tanggal_lahir; ?></td>
                                    <td class="text-center"><?php echo $allDataMahasiswa->jurusan; ?></td>
                                    <td class="text-center"><?php echo $allDataMahasiswa->alamat; ?></td>
                                    <td class="text-center"><?php echo $allDataMahasiswa->email; ?></td>
                                    <td class="text-center"><?php echo $allDataMahasiswa->no_telepon; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
    <!-- End Main Content -->



    <!-- Load Bootstrap -->
    <script src="<?php echo base_url(); ?>assets/libraries/bootstrap/js/bootstrap.min.js"></script>
    <!-- Load Jquery -->
    <script src="<?php echo base_url(); ?>assets/libraries/jquery/jquery-3.6.0.min.js"></script>
    <!-- Load Jquery Data Tables -->
    <script src="<?php echo base_url(); ?>assets/libraries/jquery/data-tables/js/jquery.dataTables.min.js"></script>
    <!-- Load Jquery Validate -->
    <script src="<?php echo base_url(); ?>assets/libraries/jquery/validate/jquery.validate.min.js"></script>
    <!-- Load Main JS -->
    <script src="<?php echo base_url(); ?>assets/scripts/main.js"></script>
    <script>
        window.print();
    </script>
</body>

</html>