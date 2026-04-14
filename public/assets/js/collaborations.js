// Collaborations section
const collab = document.getElementById("collab");

fetch("/produk")
  .then((res) => res.json())
  .then((logos) => {
    
    logos.forEach((logo, index) => {
      collab.innerHTML += `
        <div class="box-collab text-center ${index === 2 ? "box-vousa" : ""}">
          <img src="${logo.logo}" alt="">
          <h5 class="fw-semibold mt-4">${logo.name}</h5>
        </div>
      `
    })
  })

// Detail products
let productsData = []

const detail = document.getElementById("detail");

fetch("/produk")
  .then((res) => res.json())
  .then((products) => {

    productsData = products;

    products.forEach((product, index) => {
      detail.innerHTML += `
        <div class="box">
            <img src="${product.img}" alt="" data-index="${index}" style="cursor: pointer;">
            <div class="desc">
                <h2>${product.name}</h2>
                <p>${product.description}</p>
                ${
                  Number(product.price_cut) > Number(product.price)
                    ? `<h5 class="text-black coret">Rp ${product.price_cut}</h5>`
                    : ""
                }
                <h5 class="text-danger mt-3">Rp ${product.price}</h5>
            </div>
        </div>
      `;
    });
  });

// Add click event to product images
document.getElementById('detail').addEventListener('click', function(e) {

  if (e.target.tagName === 'IMG'){

    const index = e.target.getAttribute("data-index");
    const product = productsData[index];

    document.getElementById("modalImg").src = product.img;
    document.getElementById("modalName").textContent = product.name;
    document.getElementById("modalDesc").textContent = product.description;
    document.getElementById("modalPriceCut").textContent = "Rp " + product.price_cut;
    document.getElementById("modalPrice").textContent = "Rp " + product.price;

    const modal = new bootstrap.Modal(document.getElementById("productModal"));
    modal.show();
  }

})
