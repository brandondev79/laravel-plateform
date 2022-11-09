var headerDesktop            = document.getElementById('header-desktop'),
    headerMobile             = document.getElementById('header-mobile'),
    toggleMenuMobile         = document.getElementById('toggle-menu-mobile'),
    dropdownContainerDesktop = document.getElementById('container-dropdown-desktop');
dropdownLink             = document.getElementById('mobile-dropdown-link');

window.onscroll = function () {
    if (window.scrollY > 1) {
        if (!headerDesktop.className.match(/\bscroll\b/g)) {
            headerDesktop.className += " scroll";
        }

        if (!headerMobile.className.match(/\bscroll\b/g)) {
            headerMobile.className += " scroll";
        }

    } else {
        headerDesktop.className = headerDesktop.className.trim().replace(/\bscroll\b/g, "");
        headerMobile.className  = headerMobile.className.trim().replace(/\bscroll\b/g, "");
        dropdownContainerDesktop.removeAttribute('style');
    };
};

toggleMenuMobile.addEventListener('click', function() {
    toggleDropdown(headerMobile)
});

dropdownLink.addEventListener('click', function () {
    toggleDropdown(dropdownLink);
});

function toggleDropdown (elem) {
    if (elem.className.match(/\bopen\b/g)) {
        elem.className = elem.className.trim().replace(/\bopen\b/g, "");
    } else {
        elem.className  += " open";
    }
}

window.onload = function() {
    smoothscroll.polyfill();
}