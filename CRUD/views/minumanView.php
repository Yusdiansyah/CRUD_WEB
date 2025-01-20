<div class="card card-primary card-outline">
    <div class="card-header">
        <h5 class="float-start mt-2 fw-bold"> Daftar Makanan </h5>
        <div class="float-end mt-2">
            <a title="Tambah Data" href="?page=minumanAdd" class="btn btn-sm btn-success"> Tambah Data</a>
        </div>
    </div>
    <div class="card-body">
         <table class="table table-bordered table-striped table-hover text-center">
            <thead class="table-dark">
                <tr>
                    <th class="text-cemter">No.</th>
                    <th class="text-cemter">Nama Minuman.</th>
                    <th class="text-cemter">Asal daerah</th>
                    <th class="text-cemter">Keterangan</th>
                </tr>
            </thead>
            <tbody class="table-secondary">
                <tr>
                    <?php include "includes/config.php";
                    $query = "SELECT * FROM tbl_minuman ORDER BY id_minuman ASC";
                    $sql = mysqli_query($conn, $query);

                    $nomor = 1;
                    foreach ($sql as $val) {
                        ?>

                        <td class="text-center"><?= $nomor++; ?></td>
                        <td><?= $val['nama_minuman']; ?></td>
                        <td><?= $val['daerah_minuman']; ?></td>

                        <td class="text-center">
                            <a href="?page=minumanUpdate&id=<?= $val['id_minuman'];?>"class="btn btn-sm btn-warning">
                                Update
                            </a>
                            <a href="?page=minumanDelete&id=<?= $val['id_minuman'];?>"class="btn btn-sm btn-danger" onclick="return('Yakin ingin menghapus data ini?');">
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