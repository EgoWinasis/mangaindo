<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>
<div class="bg-contact">
    <div class="container ">
        <div class="row ">
            <div class="col">

                <!-- form -->
                <div class="col-lg-8 form-contact ">

                    <h2 class="title-contact mt-5 mb-3">Hubungi Kami</h2>
                    <form>
                        <div class="row">
                            <label for="nama" class="mt-2">Nama</label>
                            <div class="col">
                                <input type="text" id="nama" name="firstName" class="form-control" placeholder="Nama Depan">
                            </div>
                            <div class="col">
                                <input type="text" name="lastName" class="form-control" placeholder="Nama Belakang">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="mt-2">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                        </div>
                        <div class="form-group">
                            <label for="complaint-option" class="mt-2">Perihal</label>
                            <select class="form-control" id="complaint-option">
                                <option>Link Rusak</option>
                                <option>Request Manga</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="complaint-description" class="mt-2">Deskripsi</label>
                            <textarea class="form-control" id="complaint-description" rows="3" placeholder="Tulis keluhan atau permintaan secara rinci..."></textarea>
                        </div>
                        <div class="form-group my-3">
                            <button type="button" class="btn btn-success">Kirim</button>
                        </div>
                    </form>



                </div>

            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>