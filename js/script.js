// JavaScript for the sidenav
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    //document.getElementById("main").style.marginLeft = "250px";
    document.getElementById("menu-open").style.display = "none";
    document.getElementById("menu-close").style.display = "block";
    document.getElementById("menu-list").style.transform = "translate3d(0px, 0px, 0px)";
    document.getElementById("top-menu").style.marginLeft = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "64px";
    //document.getElementById("main").style.marginLeft = "64px";
    document.getElementById("menu-open").style.display = "block";
    document.getElementById("menu-close").style.display = "none";
    document.getElementById("menu-list").style.transform = "translate3d(-300px, 0px, 0px)";
    document.getElementById("top-menu").style.marginLeft = "64px";
}
