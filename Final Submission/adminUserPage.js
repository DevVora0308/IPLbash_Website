function openPage(pageName,elmnt) {
    var color = "orange";
    var i, tabContent, tabLinks;
    tabContent = document.getElementsByClassName("tabContent");
    for (i = 0; i < tabContent.length; i++) {
        tabContent[i].style.display = "none";
    }
    tabLinks = document.getElementsByClassName("tabLink");
    for (i = 0; i < tabLinks.length; i++) {
        tabLinks[i].style.backgroundColor = "";
        tabLinks[i].style.color = "";
        tabLinks[i].style.textDecoration = "none";
        tabLinks[i].style.borderTop = "none";
    }
    document.getElementById(pageName).style.display = "block";
    elmnt.style.backgroundColor = color;
    elmnt.style.color = "navy";
    elmnt.style.textDecoration = "underline";
    elmnt.style.borderTop = "10px solid navy";
}

// Get the element with id="defaultOpen" and click on it
function openDefaultTab(){
    document.getElementById("defaultOpen").click();
}

