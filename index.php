<?php include __DIR__ . '/function.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= info()->site->name; ?></title>
    <meta name="description" content="<%= meta.description %> ">
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/fontawesome/css/all.css">


    <script src="/assets/jquery/jquery-3.6.1.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->
    <!-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->


    <script src="/assets/bootstrap/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="/assets/style.css">
    <script src="/assets/script.js"></script>
</head>
<?php include(__DIR__ . '/components/nav.php'); ?>

<body>
    <div style="
    background-image:url('/assets/images/266201492_3104429416537896_5734814137305973195_n.jpg');
    background-size:cover;
    background-position:center;
    ">
        <div class="text-white" style="
    display:flex;
    min-height:800px;
    flex-direction:column;
    justify-content:flex-end;
    ">
            <div>
                <div class="container my-5 py-4">
                    <h1 class="h1 p-4" style="font-size: 6vmin;"><?= info()->org->name; ?></h1>
                    <p class="card-text p-4"><?= info()->org->vission; ?></p>
                </div>
                <div class="dark-t glass mt-5">
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
                <div class="chip bg-primary text-white"><?= $v; ?></div>
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
    background-image:url('/assets/images/271857309_3141961019451402_3900946283840371728_n.jpg');
    background-size:cover;
    background-position:center;
    background-attachment:fixed;
    " class="my-5">
        <div class="white-_g"></div>
        <div class="dark-t text-white p-2">
            <section class="container-sm my-5 py-5" style="max-width: 500px;">
                <h2>Network’s member organizations</h2>
                <div class="glass p-3">
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
</body>

</html>