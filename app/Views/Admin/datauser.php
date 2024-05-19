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
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Form Tambah User</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="container">
                                        <form action="/kamar/save" method="post" enctype="multipart/form-data">
                                            <div class="mb-3">
                                                <label for="nomorKamar" class="form-label">Username:</label>
                                                <input name="nomor_kamar" type="text" class="form-control" id="nomorKamar" placeholder="Masukkan Username" autofocus>
                                                <div class="invalid-feedback">
                                                    
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="fasilitas" class="form-label">Password:</label>
                                                <input name="fasilitas" type="text" class="form-control" id="fasilitas" placeholder="Masukkan Password" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="ukuranKamar" class="form-label">Level:</label>
                                                <input name="ukuran_kamar" type="text" class="form-control" id="ukuranKamar" placeholder="Masukkan Ukuran Level" required>
                                            </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Tambah User</button>
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
                        <th scope="col">Username</th>
                        <th scope="col">Password</th>
                        <th scope="col">Level</th>
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
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Form Edit User</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                           
                        </div>
                    </div>
                </div>

        </div>
    </div>
</div>