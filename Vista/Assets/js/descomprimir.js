const inputFile=document.querySelector('input');

inputFile.onchange=function(){
    var archivoZip = inputFile.value;

    var button = document.getElementById('descomprimir');
    button.disabled = false;

    if(!archivoZip.endsWith('.zip')){
        inputFile.value = '';
        errorMessage('Solo se admiten archivos tipo Zip'); 
        button.disabled = true;
    }else{
       if(!validarPeso()){
            errorMessage('El archivo es de mucho peso');
            inputFile.value = '';
            button.disabled = true;
        } 
    }
   
}

function errorMessage($text){
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: $text,
        confirmButtonColor: 'rgb(156, 51, 253)',
      })
}

function validarPeso(){

    var bandera = true;
    var size = inputFile.files[0].size;
    if(size > 2099000){
        bandera = false;
    }
    return bandera;
}

