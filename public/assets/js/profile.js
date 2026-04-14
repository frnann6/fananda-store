// Profile section
const page = document.getElementById("page");

fetch("/profiles")
  .then((res) => res.json())
  .then((profiles) => {

    profiles.forEach((profile) => {
      page.innerHTML += `
      <div class="col profile">
        <img src="${profile.img}" alt="">
        <h3 class="mt-3 border-2 border-bottom mx-auto">${profile.name}</h3>
        <div class="d-flex justify-content-center gap-3 mt-3">
            <a href="${profile.ig_url}" target="_blank" class="ig-icons">
              <h3><i class="bi bi-instagram"></i></h3>
            </a>
            <h3><i class="bi bi-linkedin"></i></h3>
        </div>
    </div>
      `
    })
  })
