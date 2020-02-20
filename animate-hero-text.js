const colors = ['#20B2AA','#1B7672','#2EC5BE'];
var blobs = document.querySelectorAll("#background path");

blobs.forEach(blob => {
    blob.style.fill = colors[Math.floor(Math.random() * colors.length)];
});