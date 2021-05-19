<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>
<?php
$sumber = "https://mangamint.kaedenoki.net/api/manga/detail/$manga";
$data = file_get_contents($sumber);
$json = json_decode($data);
$result = (array) $json;
// dd($result);
// print_r($result);

?>
<?php if (!isset($result['thumb'])) : ?>
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
                <h1 class="title my-3"><?= $result['title']; ?></h1>
                <div class="card card-about my-4">
                    <!-- thumbnail -->
                    <?php $thumb = isset($result['thumb']) ? $result['thumb'] : '/assets/img/contact-bg.jpg' ?>
                    <!-- end -->
                    <img src="<?= $thumb; ?> " class="card-img-top border border-dark" alt="Thumbnail">
                    <div class="card-body">
                        <!-- sinopsis -->
                        <p class="card-text manga-sinopsis"><b>Sinopsis</b><br><?= $result['synopsis']; ?></p>
                        <!-- end sinopsis -->
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><b>Author : </b><?= $result['author']; ?></li>
                            <li class="list-group-item"><b>Status : </b><?= $result['status']; ?></li>
                            <!-- genre list -->
                            <li class="list-group-item"><b>Genre : </b>
                                <?php
                                $genre_list = $result['genre_list'];
                                for ($i = 0; $i < count((array) $genre_list); $i++) {
                                    echo $genre_list[$i]->genre_name . ", ";
                                }
                                ?>
                            </li>
                            <!-- end genre list -->

                            <!-- chapter list -->
                            <li class="list-group-item"><b>Daftar Chapter : </b>
                                <br>
                                <ul class="list-group list-group-flush">
                                    <?php $chapter_list = $result['chapter']; ?>
                                    <?php for ($i = 0; $i < count((array) $chapter_list); $i++) : ?>
                                        <!-- endpoint link -->
                                        <?php
                                        $manga_title = $chapter_list[$i]->chapter_title;
                                        $endpoint = $chapter_list[$i]->chapter_endpoint;
                                        ?>
                                        <!-- end link -->
                                        <li class="list-group-item"><?= $manga_title ?><a href="<?= base_url("baca-manga/$endpoint") ?>" class="chapter-list btn btn-primary"> Baca </a></li>
                                        <br>
                                    <?php endfor; ?>
                                </ul>
                            </li>
                            <!-- end chapter list -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
<?= $this->endSection(); ?>