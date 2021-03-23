/* eslint-disable space-unary-ops */
/* eslint-disable no-unused-expressions */
/* eslint-disable no-console */
/* eslint-disable space-in-parens */
/* eslint-disable indent */
/* eslint-disable linebreak-style */
'use strict';
document.addEventListener('DOMContentLoaded', () => {
    header.addEventListener('click', handleNavigation);
});

const header = document.getElementById('masthead');

const handleNavButtonClick = (box, btn) => {
    btn.classList.toggle('active');
    box.classList.toggle('active');
    header.classList.toggle('active');


    // switch (action) {
    //     case true:
    //         btn.classList.remove('active');
    //         box.classList.remove('active');
    //         header.classList.remove('active');
    //         break;

    //     case false:
    //         btn.classList.add('active');
    //         box.classList.add('active');
    //         header.classList.add('active');
    //         break;
    //     default:
    //         console.log('oko');
    //         break;
    // }
};

const handleNavigation = (e) => {
    const mainNavigation = header.querySelector('.main-navigation');
    const miniCart = header.querySelector('.widget_shopping_cart_content');
    const searchBar = header.querySelector('.search-bar');

    switch (e.target.id) {
        case 'js-burger':
            handleNavButtonClick(mainNavigation, e.target);
            break;
        case 'js-mini-cart':
            handleNavButtonClick(miniCart, e.target);
            break;
        case 'js-search-bar':
            handleNavButtonClick(searchBar, e.target);
            break;
        default:
            break;
    }

    // switch (e.target.id) {
    //     case 'js-burger':
    //         e.target.classList.contains('active') ? handleNavButtonClick(mainNavigation, true, e.target) : handleNavButtonClick(mainNavigation, false, e.target);
    //         break;
    //     case 'js-mini-cart':
    //         e.target.classList.contains('active') ? handleNavButtonClick(miniCart, true, e.target) : handleNavButtonClick(miniCart, false, e.target);
    //         break;
    //     case 'js-search-bar':
    //         e.target.classList.contains('active') ? handleNavButtonClick(searchBar, true, e.target) : handleNavButtonClick(searchBar, false, e.target);
    //         break;
    //     default:
    //         break;
    // }
};
