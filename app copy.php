<?php include __DIR__ . '/function.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= info()->site->name; ?></title>
    <meta name="description" content="<%= meta.description %> ">
    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/fontawesome/css/all.css">


    <script src="./assets/jquery/jquery-3.6.1.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->
    <!-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->

    <meta name="theme-color" content="#315381" />
    <script src="./assets/bootstrap/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="./assets/style.css">
    <script src="./assets/script.js"></script>
</head>

<body>
    <?php include(__DIR__ . '/components/nav.php'); ?>
    <div style="
    ">
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
    </div>

    <section class="container-sm py-5 my-5">
        <center>
            <?php
            foreach (info()->org->values as $v) {
            ?>
                <div class="chip dark-t text-primary fs-3"><?= $v; ?></div>
            <?php
            }
            ?>
        </center>
    </section>
    <section class="container py-5 my-5">
        <h2>background</h2>
        <div class="read">
            <p><?= info()->org->background; ?></p>
        </div>
    </section>
    <div style="
    background-image:url('./assets/images/341679906_593278749422171_8330622252483739833_n.jpg');
    background-size:cover;
    background-position:center;
    background-attachment:fixed;
    " class="mt-5">
        <div class="white-_g"></div>
        <div class="dark-t text-white py-5">
            <section class="container-sm mt-5 py-5" style="max-width: 500px;">
                <h2>Network’s member organizations</h2>
                <div class="glass p-3 b_t b_b">
                    <table class="table text-white">
                        <?php
                        foreach (info()->org->members as $m) {
                        ?>
                            <tr>
                                <td><?= $m[0] ?></td>
                                <td><?= $m[1] ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </table>
                </div>
            </section>
        </div>
    </div>
    <?php include(__DIR__ . '/components/footer.php'); ?>
</body>

</html>