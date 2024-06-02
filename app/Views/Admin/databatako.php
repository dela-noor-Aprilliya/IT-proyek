<div class="container-fluid">
    <div class="card">
        <?php if (session()->getFlashdata('success')) : ?>
            <div style="color: green;">
                <?= session()->getFlashdata('success') ?>
            </div>
        <?php endif; ?>

        <?php if (session()->getFlashdata('error')) : ?>
            <div style="color: red;">
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif; ?>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col">

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalTambahData">
                        <i class="ti ti-square-plus fa-3"></i>
                        Tambah
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="ModalTambahData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Form Tambah Batako</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="container">
                                        <form method="post" action="/DataBatako/TambahBatako" enctype="multipart/form-data">
                                            <div class="mb-3">
                                                <label for="nomorKamar" class="form-label">Nama Batako:</label>
                                                <input name="nama_batako" type="text" class="form-control" id="nomorKamar" placeholder="Masukkan Nama Batako" autofocus>
                                                <div class="invalid-feedback">

                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="fasilitas" class="form-label">Stok:</label>
                                                <input name="stok" type="text" class="form-control" id="fasilitas" placeholder="Masukkan Stok" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="ukuranKamar" class="form-label">Harga:</label>
                                                <input name="harga" type="text" class="form-control" id="ukuranKamar" placeholder="Masukkan Ukuran Harga" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="harga" class="form-label">Foto:</label>
                                                <input name="foto_transaksi" type="file" class="form-control" id="hargaInput" placeholder="Masukkan Foto">
                                            </div>

                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Tambah Batako</button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="mb-2"></div>

                <form action="" method="post">
                    <div class="col-4">

                    </div>
                </form>
            </div>

            <table class="table align-middle">
                <thead>
                    <tr>
                        <th>No</th>
                        <th scope="col">Nama Batako</th>
                        <th scope="col">Stok</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (isset($DataBatako) && !empty($DataBatako)) : ?>
                        <?php
                        $no = 1;
                        foreach ($DataBatako as $item) : ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= esc($item['nama_batako']) ?></td>
                                <td><?= esc($item['stok']) ?></td>
                                <td><?= esc($item['harga']) ?></td>
                                <td><img src="<?= base_url('uploads/' . esc($item['foto'])) ?>" alt="Foto Batako" style="max-width: 100px;"></td>
                                <td>
                                    <a href="#" class="dropdown-item has-icon" data-bs-toggle="modal" data-bs-target="#editModal<?= esc($item['id_batako']) ?>">
                                        <i class="ti ti-pencil"></i>
                                        Edit
                                    </a>

                                    <a href="#" class="dropdown-item has-icon text-danger" data-bs-toggle="modal" data-bs-target="#deleteModal<?= esc($item['id_batako']) ?>">
                                        <i class="ti ti-trash"></i>Hapus
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else : ?>
                    <?php endif; ?>
                </tbody>
            </table>



            <?php foreach ($DataBatako as $item) : ?>
                <!-- MODAL EDIT -->
                <div class="modal fade" id="editModal<?= esc($item['id_batako']) ?>" tabindex="-1" aria-labelledby="editModalLabel<?= esc($item['id_batako']) ?>" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editModalLabel<?= esc($item['id_batako']) ?>">Edit Data Batako</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="/DataBatako/editBatako/<?= esc($item['id_batako']) ?>" class="" enctype="multipart/form-data">
                                    <input type="hidden" name="id_batako" value="<?= esc($item['id_batako']) ?>">
                                    <div class="form-group">
                                        <label>Nama Batako</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" value="<?= esc($item['nama_batako']) ?>" name="nama_batako" required>
                                        </div><br>
                                    </div>
                                    <div class="form-group">
                                        <label>Stok</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" value="<?= esc($item['stok']) ?>" name="stok" required>
                                        </div><br>
                                    </div>
                                    <div class="form-group">
                                        <label>Harga</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" value="<?= esc($item['harga']) ?>" name="harga" required>
                                        </div>
                                    </div><br>
                                    <div class="form-group">
                                        <label>Foto</label>
                                        <div class="input-group">
                                            <input name="foto_transaksi" type="file" class="form-control" id="hargaInput" placeholder="Masukkan Foto">

                                        </div>
                                    </div><br>
                                    <button type="submit" name="simpan" class="btn btn-primary m-t-15 waves-effect">Simpan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal Hapus -->
                <div class="modal fade" id="deleteModal<?= esc($item['id_batako']) ?>" tabindex="-1" role="dialog" aria-labelledby="deleteModal<?= esc($item['id_batako']) ?>" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="deleteModalLabel<?= esc($item['id_batako']) ?>">
                                    Konfirmasi Hapus Data</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Apakah Anda yakin ingin menghapus data ini?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light" data-dismiss="modal">Batal</button>
                                <a href="/DataBatako/hapusBatako/<?= esc($item['id_batako']) ?>" class="btn btn-primary">Hapus</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

            <div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Form Edit Batako</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>