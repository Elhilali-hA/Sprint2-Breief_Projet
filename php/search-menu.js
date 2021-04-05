function searchbar() {
    var input, filter, x, i, h1;
    input = document.getElementById("search");
    filter = input.value.toUpperCase();
    x = document.getElementsByClassName("back_img");
    


    for(i=0 ; i< x.length; i++){
        h1 = x[i].getElementsByTagName('h1')[0];
        if(x[i].innerHTML.toUpperCase().includes(filter)){
            x[i].style.display = "";
        }

        else{
            x[i].style.display = "none";
        }
    }
}

