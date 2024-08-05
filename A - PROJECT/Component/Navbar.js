var toggle  =   document.querySelector('.show-hide');
var toggleIcon  =   document.querySelector('.show-hide i');
var page    =   document.querySelector('.page');
var navbar  =   document.querySelector('.navbar');
flage = 0;

toggle.addEventListener('click', function(){
    if(flage == 0)
    {
        navbar.style.width = '14rem';
        toggle.style.transition = '1s';
        toggleIcon.style.transform = 'rotate(180deg)';
        flage = 1;
    }
    else{
        navbar.style.width = '3.2rem';
        toggle.style.transition = '1s';
        toggleIcon.style.transform = 'rotate(360deg)';
        flage = 0;
    }
});
page.addEventListener('click', function(){
    navbar.style.width  =  '3.2rem';
    toggle.style.transition = '1s';
    toggleIcon.style.transform = 'rotate(360deg)';
    flage = 0;
})