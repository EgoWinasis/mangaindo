<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2 class=" my-3 title">Tentang Kami</h2>
            <div class="card card-about my-4">
                <img src="/assets/img/contact-bg.jpg" class="card-img-top" alt="MangaIndo">
                <div class="card-body">
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus sunt nisi beatae reiciendis ipsum laudantium tempora quisquam, nemo animi doloremque quod molestias adipisci aperiam totam minima. Totam obcaecati fuga dolorem?.</p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><i class="fa fa-lg fa-home icon"></i>JL. Projosumarto 1, Kaladawa, Talang , Tegal</li>
                        <li class="list-group-item"><i class="fa fa-lg fa-phone icon"></i>0896332232</li>
                        <li class="list-group-item"><i class="fa fa-lg fa-envelope icon"></i>mangaindo@gmail.com</li>
                    </ul>
                </div>
            </div>


        </div>
    </div>
</div>
<?= $this->endSection(); ?>