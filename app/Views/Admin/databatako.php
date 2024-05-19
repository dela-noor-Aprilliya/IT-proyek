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
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Form Tambah Batako</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="container">
                                        <form action="/kamar/save" method="post" enctype="multipart/form-data">
                                            <div class="mb-3">
                                                <label for="nomorKamar" class="form-label">Nama Batako:</label>
                                                <input name="nomor_kamar" type="text" class="form-control" id="nomorKamar" placeholder="Masukkan Nama Batako" autofocus>
                                                <div class="invalid-feedback">
                                                    
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="fasilitas" class="form-label">Stok:</label>
                                                <input name="fasilitas" type="text" class="form-control" id="fasilitas" placeholder="Masukkan Stok" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="ukuranKamar" class="form-label">Harga:</label>
                                                <input name="ukuran_kamar" type="text" class="form-control" id="ukuranKamar" placeholder="Masukkan Ukuran Harga" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="harga" class="form-label">Foto:</label>
                                                <input name="harga" type="text" class="form-control" id="hargaInput" placeholder="Masukkan Foto" required>
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
                        <th scope="col">Nama Batako</th>
                        <th scope="col">Stok</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Foto</th>
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
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Form Edit Batako</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                           
                        </div>
                    </div>
                </div>

        </div>
    </div>
</div>