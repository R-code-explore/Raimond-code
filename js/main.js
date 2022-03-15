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

//Side ind-menu
let sideMenuBtn = document.querySelector('.ind-btn')
let sideMenu = document.querySelector('.ind-menu')
let sideMenuClose = document.querySelector('.close-ind-menu')

sideMenuBtn.addEventListener('click', () => {
    sideMenu.classList.remove('ind-menu-close')
    sideMenu.classList.add('ind-menu-open')
})

sideMenuClose.addEventListener('click', () => {
    sideMenu.classList.remove('ind-menu-open')
    sideMenu.classList.add('ind-menu-close')
})