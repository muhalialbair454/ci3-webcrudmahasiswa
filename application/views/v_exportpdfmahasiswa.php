<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <style>
        #table {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #table td,
        #table th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #table tr:hover {
            background-color: #ddd;
        }

        #table th {
            padding-top: 10px;
            padding-bottom: 10px;
            text-align: left;
            background-color: #FF4900;
            color: white;
        }
    </style>
</head>

<body>
    <div style="text-align:center">
        <h3> Laporan Data Mahasiswa</h3>
    </div>
    <table class="table table-bordered table-striped" id="table">
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
                    <td><img src="<?php echo base_url() . 'assets/images/' . $allDataMahasiswa->foto; ?>" width="75px" alt="<?php echo $allDataMahasiswa->foto; ?>"></td>
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
</body>

</html>