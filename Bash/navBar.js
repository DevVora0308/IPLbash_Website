function activePage(className){
    if(className!='')
    {
        var element = document.getElementsByClassName("fa");
        for (var i = 0; i < element.length; i++) {
            if(element.classList.contains("activeSite")){
                element[i].className.remove("activeSite");
            }
        }
        currentPageClass = document.getElementsByClassName(className);
        for (var i = 0; i < currentPageClass.length; i++) {
            currentPageClass.classList.add("activeSite");
        }
    }
}