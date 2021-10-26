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
    <header>
        <div class="container">
            <div class="row">
                <div class="menu-button mr-auto">
                    <a href="<?php echo site_url("mahasiswa"); ?>" class="btn-menu">List Data Mahasiswa</a>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header -->

    <!-- Main Content -->
    <main>
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <form action="<?php echo site_url("updateaddmahasiswa"); ?>" method="POST" name="formaddmahasiswa" id="formaddmahasiswa" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label for="ffoto" class="col-sm-2 col-form-label">Foto</label>
                            <div class="col-sm-10">
                                <input type="file" name="ffoto" id="ffoto" class="form-control" placeholder="Masukan Foto" value="<?php echo set_value("ffoto"); ?>">
                                <div class="form-error">
                                    <?php echo form_error("ffoto"); ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="txtnpm" class="col-sm-2 col-form-label">NPM</label>
                            <div class="col-sm-10">
                                <input type="text" name="txtnpm" id="txtnpm" class="form-control" placeholder="Masukan NPM" value="<?php echo set_value("txtnpm"); ?>">
                                <div class="form-error">
                                    <?php echo form_error("txtnpm"); ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="txtnamamahasiswa" class="col-sm-2 col-form-label">Nama Mahasiswa</label>
                            <div class="col-sm-10">
                                <input type="text" name="txtnamamahasiswa" id="txtnamamahasiswa" class="form-control" placeholder="Masukan Nama Mahasiswa" value="<?php echo set_value("txtnamamahasiswa"); ?>">
                                <div class="form-error">
                                    <?php echo form_error("txtnamamahasiswa"); ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="dtanggallahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-10">
                                <input type="date" name="dtanggallahir" id="dtanggallahir" class="form-control" placeholder="Masukan Tanggal Lahir" value="<?php echo set_value("dtanggallahir"); ?>">
                                <div class="form-error">
                                    <?php echo form_error("dtanggallahir"); ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="txtjurusan" class="col-sm-2 col-form-label">Jurusan</label>
                            <div class="col-sm-10">
                                <input type="text" name="txtjurusan" id="txtjurusan" class="form-control" placeholder="Masukan Jurusan" value="<?php echo set_value("txtjurusan"); ?>">
                                <div class="form-error">
                                    <?php echo form_error("txtjurusan"); ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="txtalamat" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                                <input type="text" name="txtalamat" id="txtalamat" class="form-control" placeholder="Masukan Alamat" value="<?php echo set_value("txtalamat"); ?>">
                                <div class="form-error">
                                    <?php echo form_error("txtalamat"); ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="eemail" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" name="eemail" id="eemail" class="form-control" placeholder="Masukan Email" value="<?php echo set_value("eemail"); ?>">
                                <div class="form-error">
                                    <?php echo form_error("eemail"); ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="txtnotelepon" class="col-sm-2 col-form-label">No. Telepon</label>
                            <div class="col-sm-10">
                                <input type="text" name="txtnotelepon" id="txtnotelepon" class="form-control" placeholder="Masukan Nomor Telepon" value="<?php echo set_value("txtnotelepon"); ?>">
                                <div class="form-error">
                                    <?php echo form_error("txtnotelepon"); ?>
                                </div>
                            </div>
                        </div>
                        <div class="text-right aksi-button">
                            <button type="submit" name="btnsave" id="btnsave" class="">Save</button>
                        </div>
                    </form>
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
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
</body>

</html>