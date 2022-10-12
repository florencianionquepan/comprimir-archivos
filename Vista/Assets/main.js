const inputFile=document.querySelector('input');

inputFile.onchange=function(){
    if(inputFile.files.length>0){
        let formData=new FormData();
        for(let i=0;i<inputFile.files.length;i++){
            formData.append("archivos[]",inputFile.files[i]);
        }
        fetch("guardar.php",{
            method: 'POST',
            body:formData,
        })
        .then(resp=>successMessage(resp.json()))
    }
}

function successMessage(resp){
    console.log(resp);
    Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Tus archivos fueron subidos',
        showConfirmButton: false,
      })
}