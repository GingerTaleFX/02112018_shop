let mobile_menu = document.querySelector('.mob-menu');
let navigation = document.querySelector('.navigation');
mobile_menu.addEventListener('click', function(){

    if ( navigation.classList.contains('show-menu') ) {
        navigation.classList.remove('show-menu');
        console.log('Закрывается меню');
    } else {
        navigation.classList.add('show-menu');
        console.log('Открывается меню');
    }

})