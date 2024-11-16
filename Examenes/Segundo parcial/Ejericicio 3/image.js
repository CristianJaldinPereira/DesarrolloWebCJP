let count = 0;
let images = [
    "arquitecturacomputadoras.jpg",
    "bigdata.jpg",
    "CursoAndroid.jpg",
    "introduccioinformatica.jpg",
    "ScrumIngenieriaSoftware.jpg"
];

let imgElement = document.getElementById('miImagen');
let image = document.getElementById("image");

imgElement.src = `../images/${images[0]}`;

function changeImage() {
    const imgElement = document.getElementById('miImagen');
    const image = document.getElementById("image");

    if (count >= images.length - 1) { 

        console.log("No hay más imágenes para cargar.");
        image.innerHTML = "<h1>No hay más imágenes a cargar</h1>";
    } else {

        count++; 
        imgElement.src = `../images/${images[count]}`;
        console.log(`Cambiando a la imagen: ${images[count]}`);
    }
}
