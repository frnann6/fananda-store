// Profile section
const profiles = [
  {
    name: "Daffa Ramdhani",
    img: "assets/profileimg/daffa.PNG",
    ig_url: "http://instagram.com/dffa_rmdhni",
  },
  {
    name: "Fernanda Dwi C",
    img: "assets/profileimg/fernanda.png",
    ig_url: "http://instagram.com/frnann6",
  },
  {
    name: "M.Fasya Ishaq",
    img: "assets/profileimg/fasya.jpeg",
    ig_url: "http://instagram.com/planetafsy",
  },
];

const page = document.getElementById("page");

profiles.forEach((profile, index) => {
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
    `;
});
