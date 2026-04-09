// Collaborations section

const collabolators = [
  { name: "Dhevv Label", img: "assets/icon/dhevv.png" },
  { name: "Lafern Collective", img: "assets/icon/lafern.jpeg" },
  { name: "Vousa Official", img: "assets/icon/vousa.png" },
];

const collab = document.getElementById("collab");

collabolators.forEach((collabolator, index) => {
  collab.innerHTML += `
     <div class="box-collab text-center ${index === 2 ? "box-vousa" : ""}">
          <img src="${collabolator.img}" alt="">
          <h5 class="fw-semibold mt-4">${collabolator.name}</h5>
        </div>
    `;
});

// Detail products
const products = [
  {
    name: "Fashion",
    desc: "Lorem ipsum dolor sit amet consectetur, adipisicing elit.",
    img: "assets/products/dhevv-product.png",
    price: "Rp 135.000",
    price_cuts: "Rp 200.000"
  },
  {
    name: "Fashion",
    desc: "Lorem ipsum dolor sit amet consectetur, adipisicing elit.",
    img: "assets/products/lafern-product.png",
    price: "Rp 100.000",
    price_cuts: "Rp 180.000"
  },
  {
    name: "Fashion",
    desc: "Lorem ipsum dolor sit amet consectetur, adipisicing elit.",
    img: "assets/products/dhevv-product.png",
    price: "Rp 115.000",
    price_cuts: "Rp 200.000"
  },
];

const detail = document.getElementById("detail");

products.forEach((product, index) => {
  detail.innerHTML += `
    <div class="box">
        <img src="${product.img}" alt="" data-index="${index}" style="cursor: pointer;">
        <div class="desc">
            <h2>${product.name}</h2>
            <p>${product.desc}</p>
            <h5 class="text-black coret">${product.price_cuts}</h5>
            <h5 class="text-danger mt-3">${product.price}</h5>
        </div>
    </div>
    `;
});

// Add click event to product images
document.querySelectorAll('.detail .box img').forEach(img => {
  img.addEventListener('click', function() {
    const index = this.getAttribute('data-index');
    const product = products[index];
    document.getElementById('modalImg').src = product.img;
    document.getElementById('modalName').textContent = product.name;
    document.getElementById('modalDesc').textContent = product.desc;
    document.getElementById('modalPrice').textContent = product.price;
    const modal = new bootstrap.Modal(document.getElementById('productModal'));
    modal.show();
  });
});
