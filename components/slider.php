<style>
    .carousel-item img{
        height:100vh;
        object-fit: cover;
        object-position: center;
    }
</style>
<div style="position: fixed;top:0;bottom:0;right:0;left:0;z-index:-1" id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="./assets/images/341490543_247394604616567_8412264122249967400_n.jpg" class="d-block w-100" alt="aayon">
        </div>
        <div class="carousel-item">
            <img src="./assets/images/342382349_260409073207514_4865740477052206910_n.jpg" class="d-block w-100" alt="aayon">
        </div>
        <div class="carousel-item">
            <img src="./assets/images/341679906_593278749422171_8330622252483739833_n.jpg" class="d-block w-100" alt="aayon">
        </div>
    </div>
</div>
<div class="text-white">
    <div class="container p-3" style="
    display:flex;
    flex-direction:column;
    height:65vh;">
        <h1 class="h1" style="font-size: 8vmin;"><?= info()->org->name; ?></h1>
        <div class="card-text fs-4 fw-lighter glass ms-auto px-2 text-end"><?= info()->org->vission; ?></div>
    </div>
    <div class="dark-t glass mt-5">
        <div style="background:linear-gradient(transparent, white);" class="pb-5">
            <section class="container p-5">
                <center>
                    <h2>mission</h2>
                </center>
                <ul class="row row-cols-1 row-cols-md-3 gx-5 ">
                    <?php
                    foreach (info()->org->mission as $m) {
                    ?>
                        <li class="px-4">
                            <?= $m; ?>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            </section>
        </div>
    </div>
</div>