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

const showModal = () => {
    if (document.body.classList.contains('has-modal')) {
        return;
    }

    document.body.classList.add('has-modal');
    const scrollY = document.documentElement.style.getPropertyValue('--scroll-y');
    const body = document.body;
    body.style.position = 'fixed';
    body.style.top = `-${scrollY}`;
};

const closeModal = () => {
    const body = document.body;
    const scrollY = body.style.top;
    body.style.position = '';
    body.style.top = '';
    window.scrollTo(0, parseInt(scrollY || '0') * -1);
    body.classList.remove('has-modal');
};

const handleNavButtonClick = (className) => {
    if (className === 'reset' && !document.body.classList.contains('has-modal')) {
        return;
    }

    if (className === 'search-bar--active' && document.body.classList.contains('has-modal')) {
        closeModal();
    }

    if (globalNamespace.navClassName === className || className === 'reset') {
        if (className !== 'search-bar--active') {
            closeModal();
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
                showModal();
            }

            header.className = `site-header active ${className}`;
            break;
    }

    globalNamespace.navClassName = className;
};

const handleNavSubmenu = (e) => {
    if (e.target.classList.contains('menu-item-has-children')) {
        e.target.querySelector('.sub-menu').classList.toggle('show');
    }
};

const handleNavigation = (e) => {
    console.log(e.target.id);
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
            handleNavSubmenu(e);
            break;
    }
};
