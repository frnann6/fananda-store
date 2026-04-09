// tentang kami / About us

document.getElementById("about_paragraf").innerHTML =
  `Kami berawal dari tiga pelajar dengan satu impian sederhana: menciptakan sesuatu yang bermakna. Dari ruangan kecil yang dipenuhi ide dan malam-malam panjang tanpa tidur, lahirlah Fananda. <br><br> Fananda adalah platform digital yang menghadirkan produk berkualitas serta pengalaman berbelanja yang berkesan. Kami menggabungkan kreativitas, kolaborasi, dan semangat untuk menciptakan sesuatu yang berbeda.`;

const picts = [
  { img: "assets/images/startup.jpg" },
  { img: "assets/images/startup-2.jpg" },
];

const carousel = document.getElementById("carousel");

picts.forEach((pict, index) => {
  carousel.innerHTML += `
    <div class="carousel-item ${index === 0 ? "active" : ""}">
        <img src="${pict.img}" alt="about-img.jpg">
    </div>
    `;
});
