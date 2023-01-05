const allBoxes = document.querySelectorAll('.container-bar');

  allBoxes.forEach(box => {

    box.addEventListener('click', e => {
      e.target.classList.toggle('active');
    })

  })


/* Set the width of the side navigation to 250px and the left margin of the page content to 250px and add a black background color to body */
function menubg() {
    document.getElementById("show-nav").style.width = "50%";
    document.getElementById("main").style.marginLeft = "50%";
    document.getElementById("nav-a-cont").style.display = "block";
  }
  
  /* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
  function closeNav() {
    document.getElementById("show-nav").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
    document.getElementById("nav-a-cont").style.display = "none";
  }


 