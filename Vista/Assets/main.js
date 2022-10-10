const btnSubir=document.querySelector('#envio');
const inputFile=document.querySelector('input');

btnSubir.onclick=function(){
    if(inputFile.files.length>0){
        let formData=new FormData();
        for(let i=0;i<inputFile.files.length;i++){
            formData.append("archivos[]",inputFile.files[i]);
        }
        fetch("guardar.php",{
            method: 'POST',
            body:formData,
        })
        .then(resp=>console.log(resp));
    }else{
        Swal.fire('Debes adjuntar un archivo al menos!');
    }
}