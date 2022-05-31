

//On scroll content display -- About section

const ratio = .2

const options = {
    root: null,
    rootMargin: '0px',
    threshold: ratio
}
  
const handleInterserct = function (entries, observer) {
    entries.forEach(function (entry) {
        if(entry.intersectionRatio > ratio){
            entry.target.classList.add('main_visible')
            observer.unobserver(entry.target)
        }
    })
}

const observer = new IntersectionObserver(handleInterserct, options)
document.querySelectorAll('.main_reveal').forEach(function (r) {
    observer.observe(r)
})

//About section action

const aboutBtn = document.querySelector('.about_btn')
const fullAboutSection = document.querySelector('.complete_about')
const aboutCloseBtn = document.querySelector('.closeAboutBtn')

aboutBtn.addEventListener('click', () => {
    if(fullAboutSection.classList.contains('complete_about_close')){
        fullAboutSection.classList.remove('complete_about_close')
    }
})

aboutCloseBtn.addEventListener('click', () => {
    fullAboutSection.classList.add('complete_about_close')
})

//Footer part

//Characters count