window.onscroll = () => {

    if(window.scrollY > 80) {
        document.querySelector('.header-div2').classList.add('active');
        // console.log('scrolled');
    } else {
        document.querySelector('.header-div2').classList.remove('active');
    }
}

window.onload = () => {
    if(window.scrollY > 80) {
        document.querySelector('.header-div2').classList.add('active');
    } else {
        document.querySelector('.header-div2').classList.remove('active');
    }
}