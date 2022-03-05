// drop-down menu

function dropDown() {
    document.getElementById("myDropdown").classList.toggle("show");
  }
  
  // Close the dropdown menu if the user clicks outside of it
  window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
      var dropdowns = document.getElementsByClassName("dropdown-content");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
  } 

  //change language "about txt"
  initTxt()

function initTxt(){
    let txtFr = document.getElementById('txtFr')
    let txtEn = document.getElementById('txtEn')

    txtEn.classList.add("txtAbout")
    txtFr.style.display = "none"
}

function toggleText(){
    if(txtEn.classList.contains("txtAbout")){
        
        txtEn.classList.remove("txtAbout")
        txtFr.style.display = "block"
        txtEn.style.display = "none"
        txtFr.classList.add("txtAbout")
    
    }else{

        txtFr.classList.remove("txtAbout")
        txtEn.classList.add("txtAbout")
        txtEn.style.display = "block"
        txtFr.style.display = "none"

    }
}