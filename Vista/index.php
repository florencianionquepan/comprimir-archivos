<?php include_once('../Vista/Common/Header.php')?>
    <div class="container-md">
        <div class="row m-5 text-center justify-content-center align-items-center">
            <form method="post" action="GenerarZip.php" enctype="multipart/form-data" class="col-12 col-md-8 col-lg-6 col-xl-4">
                    <input type="file" name="archivo" class="form-control" id="archivo">
                    <button class="btn btn-outline-secondary my-3" type="submit">SUBIR Y COMPRIMIR</button>
            </form>
        </div>
    </div>
<?php include_once('../Vista/Common/Footer.php')?>