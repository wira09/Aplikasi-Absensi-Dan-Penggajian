<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-12">
                <h1>Data Jabatan</h1>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <div class="card">
        <div class="card-header">
            <a href="?page=jabatan&method=tambah" class="btn btn-primary float-right">Tambah</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th class="text-center td-fit">No</th>
                        <th class="text-center">Nama</th>
                        <th class="text-center td-fit">Departemen</th>
                        <th class="text-center">Gaji Pokok</th>
                        <th class="text-center td-fit">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $q = "SELECT * FROM jabatan";
                    $no = 1;
                    if ($result = $mysqli->query($q)) {
                    } else echo "Error: " . $q . "<br>" . $mysqli->error;
                    ?>
                    <?php while ($row = $result->fetch_assoc()) : ?>
                        <tr>
                            <td class="text-center td-fit" style="vertical-align: middle;"><?= $no++; ?></td>
                            <td style="vertical-align: middle;"><?= $row['nama'] ?></td>
                            <td class="text-center" style="vertical-align: middle;"><?= $row['golongan'] ?></td>
                            <td class="text-center" style="vertical-align: middle;">Rp <?= number_format($row['gaji_pokok'], 0, ",", "."); ?></td>
                            <td class="text-center td-fit">
                                <a href="?page=jabatan&method=edit&id=<?= $row['id'] ?>" class="btn btn-sm btn-warning text-white">Edit</a>
                                <form action="?page=jabatan&method=hapus&id=<?= $row['id'] ?>" method="POST" class="d-inline">
                                    <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>