// Generar CodeQR
const image = document.getElementById("codigo_img")
const url = window.location.href

console.log(url);

const QR = new QRCode(image)
QR.makeCode(url)

//Descargar Code QR
const image_qr = document.getElementById("download_qr")

image_qr.addEventListener("click", () => {
    const enlace = document.createElement("a")
    enlace.href = image.querySelector('img').src;
    enlace.download = "Codigo QR generado desde PHOTOGRAPHY"
    enlace.click()
})

