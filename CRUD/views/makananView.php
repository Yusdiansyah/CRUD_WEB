<div class="card card-primary card-outline">
    <div class="card-header">
        <h5 class="float-start mt-2 fw-bold"> Daftar Makanan </h5>
        <div class="float-end mt-2">
            <a title="Tambah" href="?page=makananAdd" class="btn btn-sm btn-success"> Tambah Data</a>
        </div>
    </div>
    <div class="container">
         <table class="table table-bordered table-striped table-hover text-center">
            <thead class="table-dark">
                <tr>
                    <th class="text-cemter">No.</th>
                    <th class="text-cemter">Nama Makanan.</th>
                    <th class="text-cemter">Asal daerah</th>
                    <th class="text-cemter">Keterangan</th>
                </tr>
            </thead>
            <tbody class="table-secondary">
                <tr>
                    <?php include "includes/config.php";
                    $query = "SELECT * FROM tbl_makanan ORDER BY id_makanan ASC";
                    $sql = mysqli_query($conn, $query);

                    $nomor = 1;
                    foreach ($sql as $val) {
                        ?>

                        <td class="text-center"><?= $nomor++; ?></td>
                        <td><?= $val['nama_makanan']; ?></td>
                        <td><?= $val['daerah_makanan']; ?></td>

                        <td class="text-center">
                            <a href="?page=makananUpdate&id=<?= $val['id_makanan'];?>"class="btn btn-sm btn-warning">
                                Update
                            </a>
                            <a href="?page=makananDelete&id=<?= $val['id_makanan'];?>"class="btn btn-sm btn-danger" onclick="return('Yakin ingin menghapus data ini?');">
                                Hapus
                            </a>
                        </td>    
                
                </tr>
                <?php
                    }
                    ?>
            </tbody>
        </table>
    </div>
</div>