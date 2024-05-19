<div class="container-fluid">
    <div class="card">
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
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Form Tambah Transaksi</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="container">
                                        <form action="/kamar/save" method="post" enctype="multipart/form-data">
                                            <div class="mb-3">
                                                <label for="nomorKamar" class="form-label">Nama Pembeli:</label>
                                                <input name="nomor_kamar" type="text" class="form-control" id="nomorKamar" placeholder="Masukkan Nama Pembeli" autofocus>
                                                <div class="invalid-feedback">
                                                    
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="fasilitas" class="form-label">Alamat:</label>
                                                <input name="fasilitas" type="text" class="form-control" id="fasilitas" placeholder="Masukkan Alamat" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="harga" class="form-label">Foto:</label>
                                                <input name="harga" type="text" class="form-control" id="hargaInput" placeholder="Masukkan Foto" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="harga" class="form-label">Tanggal Transaksi:</label>
                                                <input name="harga" type="text" class="form-control" id="hargaInput" placeholder="Masukkan Tanggal Transaksi" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="harga" class="form-label">Total Harga:</label>
                                                <input name="harga" type="text" class="form-control" id="hargaInput" placeholder="Masukkan Total Harga" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="harga" class="form-label">Foto Transaksi:</label>
                                                <input name="harga" type="text" class="form-control" id="hargaInput" placeholder="Masukkan Foto Transaksi" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="harga" class="form-label">Status Pembayaran:</label>
                                                <input name="harga" type="text" class="form-control" id="hargaInput" placeholder="Status Pembayaran" required>
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
                        <th scope="col">Alamat</th>
                        <th scope="col">No HP</th>
                        <th scope="col">Tanggal Transaksi</th>
                        <th scope="col">Total Harga</th>
                        <th scope="col">Foto Transaksi</th>
                        <th scope="col">Status Pembayaran</th>
                        <th scope="col">Detail</th>
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
            </table>

                <div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Form Edit Transaksi</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                           
                        </div>
                    </div>
                </div>

        </div>
    </div>
</div>