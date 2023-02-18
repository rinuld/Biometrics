let btn = document.getElementById("generate");
let upload = document.getElementById("upload");
let outputBx = document.getElementById("outputBx");

btn.addEventListener("click", ()=>{
    let fr = new FileReader();
    fr.readAsText(upload.files[0]);

    fr.onload = function(){
        outputBx.innerHTML = fr.result;
    };
});