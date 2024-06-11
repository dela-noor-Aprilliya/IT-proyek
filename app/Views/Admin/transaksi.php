<div class="container-fluid">
    <div class="card">

        <?php if (session()->getFlashdata('success')) : ?>
            <div class="alert alert-success" role="alert">
                <?= session()->getFlashdata('success') ?>
            </div>
        <?php endif; ?>

        <?php if (session()->getFlashdata('error')) : ?>
            <div class="alert alert-danger" role="alert">
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif; ?>
        <br>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col">

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalTambahData">
                        <i class="ti ti-square-plus fa-3"></i>
                        Tambah
                    </button>

                    <!-- ModalTambah -->
                    <div class="modal fade" id="ModalTambahData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Form Tambah Transaksi</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="container">
                                        <form action="/Transaksi/tambahTransaksi" method="post" enctype="multipart/form-data">
                                            <div class="mb-3">
                                                <label for="nama pembeli" class="form-label">Nama Pembeli:</label>
                                                <input name="nama_pembeli" type="text" class="form-control" id="namapembeli" placeholder="Masukkan Nama Pembeli" autofocus>
                                                <div class="invalid-feedback">

                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="no hp" class="form-label">No Hp:</label>
                                                <input name="no_hp" type="number" class="form-control" id="no hp" placeholder="Masukkan no hp" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="id_pembeli" class="form-label">Pilih Pembeli:</label>
                                                <select name="id_pembeli" class="form-control" id="id_pembeli">
                                                    <option value="">-- Pilih Pembeli --</option>
                                                    <?php foreach ($pembeli as $row) : ?>
                                                        <option value="<?= $row['id_pembeli'] ?>">
                                                            <?= $row['id_pembeli'] ?> - <?= $row['nama_pembeli'] ?>
                                                        </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="tanggalTransaksi" class="form-label">Tanggal Transaksi:</label>
                                                <input name="tanggal_transaksi" type="date" class="form-control" id="tanggalTransaksiInput" placeholder="Masukkan Tanggal Transaksi" required>
                                            </div>

                                            <div class="mb-3">
                                                <label for="harga" class="form-label">Total Harga:</label>
                                                <input name="total_harga" type="text" class="form-control" id="hargaInput" placeholder="Masukkan Total Harga" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="fotoTransaksi" class="form-label">Foto Transaksi:</label>
                                                <input name="foto_transaksi" type="file" class="form-control" id="fotoTransaksiInput" accept="image/*" required>
                                            </div>

                                            <div class="mb-3">
                                                <label for="statusPembayaran" class="form-label">Status Pembayaran:</label>
                                                <select name="status_pembayaran" class="form-control" id="statusPembayaran" required>
                                                    <option value="" disabled selected>-- Pilih Status Pembayaran --</option>
                                                    <option value="lunas">Lunas</option>
                                                    <option value="belum_lunas">Belum Lunas</option>
                                                </select>
                                            </div>

                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Tambah Transaksi</button>
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
                        <th scope="col">Nama Pembeli</th>
                        <th scope="col">No HP</th>
                        <th scope="col">Tanggal Transaksi</th>
                        <th scope="col">Total Harga</th>
                        <th scope="col">Foto Transaksi</th>
                        <th scope="col">Status Pembayaran</th>
                        <th scope="col">Filter</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($transaksi as $item) : ?>
                        <tr>
                            <td><?= esc($item['nama_pembeli']) ?></td>
                            <td><?= esc($item['no_hp']) ?></td>
                            <td><?= esc($item['tanggal_transaksi']) ?></td>
                            <td><?= esc($item['total_harga']) ?></td>
                            <td><img src="<?= base_url('uploads/' . $item['foto_transaksi']) ?>" alt="Foto Transaksi" width="100"></td>
                            <td><?= esc($item['status_pembayaran']) ?></td>
                            <td>
                                <a href="#" class="dropdown-item has-icon" data-bs-toggle="modal" data-bs-target="#editModal<?= esc($item['id_transaksi']) ?>">
                                    <i class="ti ti-pencil"></i>
                                    Edit
                                </a>

                                <a href="#" class="dropdown-row has-icon text-danger" data-bs-toggle="modal" data-bs-target="#deleteModal<?= esc($item['id_transaksi']) ?>">
                                    <i class="ti ti-trash"></i>Hapus
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?php foreach ($transaksi as $item) : ?>
                <!-- Modal Edit dan Hapus -->
                <!-- Modal Edit -->
                <div class="modal fade" id="editModal<?= esc($item['id_transaksi']) ?>" tabindex="-1" aria-labelledby="editModalLabel<?= esc($item['id_transaksi']) ?>" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editModalLabel<?= esc($item['id_transaksi']) ?>">Edit Data Transaksi</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="/Transaksi/editTransaksi/<?= esc($item['id_transaksi']) ?>" enctype="multipart/form-data">
                                    <input type="hidden" name="id_transaksi" value="<?= esc($item['id_transaksi']) ?>">
                                    <!-- Form edit data transaksi -->
                                    <div class="mb-3">
                                        <label for="nama_pembeli" class="form-label">Nama Pembeli:</label>
                                        <input type="text" class="form-control" name="nama_pembeli" value="<?= esc($item['nama_pembeli']) ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="no_hp" class="form-label">No HP:</label>
                                        <input type="text" class="form-control" name="no_hp" value="<?= esc($item['no_hp']) ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="tanggal_transaksi" class="form-label">Tanggal transaksi:</label>
                                        <input type="date" class="form-control" name="tanggal_transaksi" value="<?= esc($item['tanggal_transaksi']) ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="total_harga" class="form-label">Total harga:</label>
                                        <input type="text" class="form-control" name="total_harga" value="<?= esc($item['total_harga']) ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="foto_transaksi" class="form-label">Foto Transaksi:</label>
                                        <input type="file" class="form-control" name="foto_transaksi" accept="image/*" >
                                    </div>
                                    <div class="mb-3">
                                        <label for="status_pembayaran" class="form-label">Status Pembayaran:</label>
                                        <select class="form-control" name="status_pembayaran" required>
                                            <option value="lunas" <?= ($item['status_pembayaran'] == 'lunas') ? 'selected' : '' ?>>Lunas</option>
                                            <option value="belum lunas" <?= ($item['status_pembayaran'] == 'belum lunas') ? 'selected' : '' ?>>Belum Lunas</option>
                                        </select>
                                    </div>


                                    <!-- Tambahkan input fields lainnya sesuai kebutuhan -->
                                    <!-- Tombol Simpan -->
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal Hapus -->
                <div class="modal fade" id="deleteModal<?= esc($item['id_transaksi']) ?>" tabindex="-1" role="dialog" aria-labelledby="deleteModal<?= esc($item['id_transaksi']) ?>" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="deleteModalLabel<?= esc($item['id_transaksi']) ?>">Konfirmasi Hapus Data</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Apakah Anda yakin ingin menghapus data ini?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                <a href="/Transaksi/hapusTransaksi/<?= esc($item['id_transaksi']) ?>" class="btn btn-danger">Hapus</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>