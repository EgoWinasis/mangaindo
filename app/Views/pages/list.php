<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>
<?php
$sumber = "https://mangamint.kaedenoki.net/api/genres";
$data = file_get_contents($sumber);
$json = json_decode($data);
$result = (array) $json;
$result = $result["list_genre"];
// dd($result);
?>
<div class="container">
    <div class="row">
        <div class="col-sm-8 center">
            <h3 class=" my-3 title">Kategori Manga Bahasa Indonesia</h3>

            <?php for ($i = 0; $i < count((array) $result); $i++) : ?>
                <div class="list-group list-manga ">
                    <!-- endpoint -->
                    <?php $endpointGenre = $result[$i]->endpoint; ?>
                    <a href="<?= base_url("/genres/$endpointGenre"); ?>" class="btn btn-dark my-3"><?= $result[$i]->genre_name; ?></a>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>