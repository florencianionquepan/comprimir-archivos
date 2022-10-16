
const inputFile=document.querySelector('input');

inputFile.onchange=function(){

    
    if(inputFile.files.length>0 && verificarArchivos()){

        subir();
        let formData=new FormData();
        for(let i=0;i<inputFile.files.length;i++){
            formData.append("archivos[]",inputFile.files[i]);
        }
        fetch("../../Util/guardar.php",{
            method: 'POST',
            body:formData,
            })
            .then(resp=>successMessage(resp.json()))
    }
}

function verificarArchivos(){
    var archivos = inputFile.files;
    var bandera = true;
    var i = 0;
    while(bandera && i<archivos.length){
        const fsize = archivos.item(i).size;
        if(fsize > 2099000){
            bandera = false;
            errorMessage();
            inputFile.value = '';
            
        }
        i++;
    }
    return bandera;
}

function successMessage(resp){
    console.log(resp);
    Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Nice:)',
        text: 'Tus archivos fueron subidos correctamente',
        confirmButtonColor: 'rgb(156, 51, 253)',
        })
}

function errorMessage(){
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Alguno de los archivos tiene mucho peso',
        confirmButtonColor: 'rgb(156, 51, 253)',
      })
}

function subir(){
    archivos = inputFile.files;
    for(i = 0; i < archivos.length; i++){
        var table = document.getElementById("nombresArchivos");
        var cantFilas = table.getElementsByTagName("tr").length;
        var row = table.insertRow(cantFilas);
        row.innerHTML += '<td>'+archivos[i].name+'</td>'+'<td>'+'<input class="remove btn btn-default border" type="button" value="x" >'+'</td>';
    
    }
}

$(document).on('click', '.remove', function(event) {
    event.preventDefault();

    var fila = $(this).closest('tr');
    console.log(fila);

    var nombreArchivo = fila[0].firstChild.innerHTML;

    $.post("../../Util/eliminar.php",{"texto":nombreArchivo});

    fila.remove();
});