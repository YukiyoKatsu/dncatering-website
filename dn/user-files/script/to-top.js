const toTop = document.querySelector('.to-top');
window.addEventListener('scroll', () => {
    if(window.scrollY > 200){
        toTop.classList.add('active');
    }else{
        toTop.classList.remove('active');
    }
});
toTop.addEventListener('click', () => {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});

const chatWithUs = document.querySelector('.chatWithUs');
window.addEventListener('scroll', () => {
    if(window.scrollY > 200){
        chatWithUs.classList.add('active');
    }else{
        chatWithUs.classList.remove('active');
    }
});