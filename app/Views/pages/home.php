<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>
<?php
$sumber = "https://mangamint.kaedenoki.net/api/manga/page/$pageNumber";
$data = file_get_contents($sumber);
$json = json_decode($data);
$result = (array) $json;
// test api load
$testAPILoad = $result['manga_list'];

// json
$result = $result["manga_list"];


?>
<?php if (!isset($testAPILoad)) : ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <div>
                    <img src="/assets/img/spinnervlll.gif" class="loader">
                </div>
            </div>
        </div>
    </div>
    <?php header("Refresh:0"); ?>
    <!-- else -->
<?php else : ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="title my-3">Manga Terbaru</h1>

                <?php for ($i = 0; $i < count((array) $result); $i++) : ?>
                    <div class="card card-home ">
                        <img src="<?= $result[$i]->thumb; ?>" class="card-img-top">
                        <div class="card-body">
                            <h6 class="card-title"><?= $result[$i]->title; ?></h6>
                            <p class="card-text"><?= $result[$i]->chapter; ?></p>
                            <p class="card-text update">update <?= $result[$i]->updated_on; ?> yang lalu</p>
                            <?php $manga = $result[$i]->endpoint; ?>
                            <a href="<?= base_url("detail-manga/$manga") ?>" class="btn btn-primary">Baca Manga</a>
                        </div>
                    </div>
                <?php endfor; ?>

            </div>

        </div>

        <div class="container my-5">
            <div class="row">
                <div class="col">
                    <nav aria-label="Page navigation example ">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="<?= base_url('/home/1'); ?>">1</a></li>
                            <li class="page-item"><a class="page-link" href="<?= base_url('/home/2'); ?>">2</a></li>
                            <li class="page-item"><a class="page-link" href="<?= base_url('/home/3'); ?>">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
<?= $this->endSection(); ?>