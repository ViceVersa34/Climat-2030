let d1 = document.getElementById("infoIcon");
let d2 = document.getElementById("info");

d1.addEventListener("mouseover", () => {d2.style.display = "block";});
d1.addEventListener("mouseout", () => {d2.style.display = "none";});