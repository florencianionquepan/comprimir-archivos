const inputFile=document.querySelector('input');

inputFile.onchange=function(){
    var archivoZip = inputFile.value;

    if(!archivoZip.endsWith('.zip')){
        inputFile.value = '';
        errorMessage();
    }
}

function errorMessage(){
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Solo se admiten archivos tipo Zip',
        confirmButtonColor: 'rgb(156, 51, 253)',
      })
}

