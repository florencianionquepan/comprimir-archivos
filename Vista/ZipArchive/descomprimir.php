<?php include_once('../../Vista/Common/Header.php')?>
    <div class="container-md">
        <div class="row m-5 text-center justify-content-center align-items-center">
            <form method="post" action="accionDescomprimir.php" enctype="multipart/form-data" class="col-12 col-md-8 col-lg-6 col-xl-4">
                    <input type="file" name="zip" class="form-control" id="zip">
                    <button class="btn btn-outline-secondary my-3" type="submit" id="descomprimir">DESCOMPRIMIR</button>
            </form>
        </div>

        <script type='text/javascript' src='../Assets/js/descomprimir.js'></script>
    </div>
<?php include_once('../../Vista/Common/Footer.php')?>