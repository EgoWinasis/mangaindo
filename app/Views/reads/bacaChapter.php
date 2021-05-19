<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>
<?php
$sumber = "https://mangamint.kaedenoki.net/api/chapter/$endpoint";
$data = file_get_contents($sumber);
$json = json_decode($data);
$result = (array) $json;
// title chapter
$chapterTitle = explode('-', $endpoint);
$chapterTitle = strtoupper(join(' ', $chapterTitle));
// test api load
$testAPILoad = $result['chapter_image'];
// chapter image
$chapterImage = $result['chapter_image'];

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
                <h1 class="title my-3"><?= $chapterTitle; ?></h1>
                <div class="card card-about my-4">
                    <?php for ($i = 0; $i < count((array) $chapterImage); $i++) : ?>
                        <img class="card-img-top " src="<?= $chapterImage[$i]->chapter_image_link; ?>" alt="Card image cap">
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
<?= $this->endSection(); ?>