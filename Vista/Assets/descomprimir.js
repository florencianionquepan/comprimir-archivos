const btnDescomprimir=document.querySelector('#descomprimir');
inputFile=document.querySelector('input');

/* btnDescomprimir.onclick=function(){
    console.log('hola');
    if(inputFile.files.length>0){
        let formData=new FormData();
        formData.append("zip",inputFile.files);
        fetch("accionDescomprimir.php",{
            method: 'POST',
            body:formData,
        })
        .then(resp=>console.log(resp))
    }
} */
