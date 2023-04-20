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
    <?php include(__DIR__ . '/components/slider.php'); ?>
    <div class="bg-white">

        <section class="container-sm py-5 mb-5">
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
    background-image:url('./assets/images/275391264_966778570662298_5008541774799580137_n.jpg');
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
    </div>
    <?php include(__DIR__ . '/components/footer.php'); ?>
</body>

</html>