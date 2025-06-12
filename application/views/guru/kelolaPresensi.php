<div class="content-body">
    <div class="container-fluid">

        <!-- row -->
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Input Absen Siswa</h4>
                </div>
                <div class="card-body">
                    <div class="form-validation">
                            <form class="needs-validation" novalidate="" action="<?= base_url('guru/inputPresensi/') ?>" method="POST">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="mb-3 row">
                                            <label class="col-lg-4 col-form-label" for="kode_guru">Tanggal
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="date" readonly class="form-control" id="kode_guru" name="kode_guru" value="" required="">
                                            </div>
                                        </div>
                                         <div class="mb-3 row">
                                            <label class="col-lg-4 col-form-label" for="id_kelas">Pilih Kelas
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="default-select wide form-control" id="id_kelas" name="id_kelas">
                                                    <option data-display="Select">Please select</option>
                                                    <?php foreach ($kelas as $k) : ?>
                                                        <option value="<?= $k['id_kelas']; ?>"><?= $k['nama_kelas'] ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <div class="col-lg-8 ms-auto">
                                                <button type="submit" class="btn btn-primary">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>