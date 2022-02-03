// Functions

// Toggle menu
function toggleMenu() {
    document.getElementById("openMenu").onclick = openNav;
    document.getElementById("closeMenu").onclick = closeNav;
    document.getElementById("closeMenuBackdrop").onclick = closeNav;

    function openNav() {
        let menu =  document.getElementById("navMenu");
        menu.classList.add("open-panel");
        menu.classList.remove("close-panel");
    }

    function closeNav() {
        let menu =  document.getElementById("navMenu");
        menu.classList.add("close-panel");
        menu.classList.remove("open-panel");
    }
}

// Navbar toggle class when scroll
function toggleNavbarClass() {
    let scrollpos = window.scrollY;
    const header = document.querySelector("nav.navbar");
    const header_height = header.offsetHeight;

    const add_class_on_scroll = () => header.classList.add("not-transparent");
    const remove_class_on_scroll = () => header.classList.remove("not-transparent");

    window.addEventListener('scroll', function() {
        scrollpos = window.scrollY;

        if (scrollpos >= header_height) { add_class_on_scroll() }
        else { remove_class_on_scroll() }
    });
}

// Toggle inputs login modal
function toggleInputsLogin() {
    document.getElementById("showInputs").onclick = showInputs;

    function showInputs() {
        let formGroup =  document.getElementById("loginInputs");
        formGroup.classList.add("show");
        formGroup.classList.remove("hidden");
    }
}

// Toggle bio more
function toggleBio() {
    document.getElementById("showBio").onclick = collapseText;

    function collapseText() {
        let profileBio = document.getElementById("profileBio");
        let label = document.getElementById("toggleLabel");
        let icon = document.getElementById("iconChevron");

        if (profileBio.classList.contains("show")) {
            profileBio.classList.remove("show");
            label.innerHTML = "meer";
            icon.classList.remove("flip");
        } else {
            profileBio.classList.add("show");
            label.innerHTML = "minder";
            icon.classList.add("flip");
        }
    }
}

window.onload = function(){
    toggleMenu();
    toggleNavbarClass();
    toggleInputsLogin();

    if (window.location.href.indexOf('auteurspagina.php') > -1) {
        toggleBio();
    }
};