document.querySelector('.cross').style.display = 'none'
document.querySelector('.hamburger').addEventListener("click", () => {
    document.querySelector('.navbar').classList.toggle('navbargo');
    if (document.querySelector('.navbar').classList.contains('navbargo')) {
        document.querySelector('.ham').style.display = 'inline'
        document.querySelector('.cross').style.display = 'none'
        

    }
    else {
        document.querySelector('.ham').style.display = 'none'
        setTimeout(() => {
            document.querySelector('.cross').style.display = 'inline'
        }, 300);
       
        
    }

})