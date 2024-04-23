const hamMenu = document.getElementById("hamburger-menu");
const listMenu = document.getElementById("list-menu");

hamMenu.addEventListener("click", () => {
    listMenu.classList.toggle("hidden");
});


const listLinks = document.getElementsByClassName("list-link");
const aboutContents = document.getElementsByClassName("contentAbout");

    function opentab(tabname) {
        for(listlink of listLinks){
            listlink.classList.remove(active-tab);
        }
    }