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
    window.addEventListener('scroll', () => {
        document.documentElement.style.setProperty('--scroll-y', `${window.scrollY}px`);
    });
});

const globalNamespace = {
    navClassName: '',
};

const header = document.getElementById('masthead');

const showDialog = () => {
    if (document.body.classList.contains('has-modal')) {
        return;
    }

    document.body.classList.add('has-modal');
    const scrollY = document.documentElement.style.getPropertyValue('--scroll-y');
    const body = document.body;
    body.style.position = 'fixed';
    body.style.top = `-${scrollY}`;
};
const closeDialog = () => {
    const body = document.body;
    const scrollY = body.style.top;
    body.style.position = '';
    body.style.top = '';
    window.scrollTo(0, parseInt(scrollY || '0') * -1);
    body.classList.remove('has-modal');
};

const handleNavButtonClick = (className) => {
    if (className === 'search-bar--active' && document.body.classList.contains('has-modal')) {
        closeDialog();
    }

    if (globalNamespace.navClassName === className || className === 'reset') {
        if (className !== 'search-bar--active') {
            closeDialog();
        }
        header.className = 'site-header';
        globalNamespace.navClassName = '';
        return;
    }

    if (className === 'search-bar--active') {
        if (globalNamespace.navClassName === 'main-menu--active') {
            setTimeout(() => {
                header.className = `site-header ${className}`;
                globalNamespace.navClassName = className;
            }, 350);
        } else {
            header.className = `site-header ${className}`;
            globalNamespace.navClassName = className;
            return;
        }
    }

    switch (header.classList.contains('active')) {
        case true:
            header.className = `site-header active`;

            setTimeout(() => {
                header.className = `site-header active ${className}`;
            }, 300);
            break;
        case false:
            if (className !== 'search-bar--active') {
                showDialog();
            }

            header.className = `site-header active ${className}`;
            break;
    }

    globalNamespace.navClassName = className;
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
