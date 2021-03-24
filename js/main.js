/* eslint-disable template-curly-spacing */
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

let test;
const header = document.getElementById('masthead');

const handleNavButtonClick = (className) => {
    if (test === className || className === 'reset') {
        header.className = 'site-header';
        test = '';
        return;
    }

    if (className === 'search-bar--active') {
        header.className = `site-header ${className}`;
        test = className;
        return;
    }

    if (!header.classList.contains('active')) {
        header.className = `site-header active ${className}`;
    } else if (header.classList.contains('active')) {
        header.className = `site-header active`;

        setTimeout(() => {
            header.className = `site-header active ${className}`;
        }, 300);
    }

    test = className;
};

const handleNavigation = (e) => {
    switch (e.target.id) {
        case 'js-burger':
            handleNavButtonClick('main-menu--active');
            break;
        case 'js-mini-cart':
            handleNavButtonClick('mini-cart--active');
            break;
        case 'js-search-bar':
            handleNavButtonClick('search-bar--active');
            break;
        case 'masthead':
            handleNavButtonClick('reset');
            break;
        default:
            console.log(e.target.id);
            break;
    }
};
