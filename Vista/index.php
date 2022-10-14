<?php include_once('../Vista/Common/Header.php')?>
    

    <div class="container-md align-items: center">
        <div class="row pt-5 pb-5 ">
            <div class="col row pt-5 pb-5 mx-5 justify-content-center">
                <form method="post" action="accionZip.php" enctype="multipart/form-data" class="col-8 row align-items-center" id = "form" novalidate>
                    <input type="file" name="archivos[]" id='archivos' class="form-control" id="archivos[]" multiple></input>
                   <button class="btn btn-outline-secondary my-3" type="submit" id="comprimir">COMPRIMIR ARCHIVO/S</button>
                </form>
            </div>
    
            <div class="col row pt-5 pb-5 mx-5 justify-content-center">
                ARCHIVOS
                <table class="table table-hover" id='nombresArchivos'>
                    <tr></tr>
                </table>
            </div>
        </div>
    </div>

    <script type='text/javascript' src='./Assets/js.js'></script>
   
<?php
include_once('../Vista/Common/Footer.php');
?>