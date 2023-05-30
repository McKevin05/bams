var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}


let sidetoggle = document.querySelector('.toggle');
let sidebar = document.querySelector(".sidebar");
let homeSection = document.querySelector('.home-section');
let hideBrand = document.querySelector('.hide-brand');
sidetoggle.onclick = function(){
  sidetoggle.classList.toggle('active')
};
sidetoggle.addEventListener("click", ()=>{
  sidebar.classList.toggle("close");
  homeSection.classList.toggle("close");
  hideBrand.classList.toggle("close");
  
  
});
