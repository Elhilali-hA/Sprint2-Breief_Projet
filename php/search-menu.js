// var input,  filter, div, grid;
//     input = document.getElementById('search');
//     grid = document.getElementById('grid');
//     console.log(grid)
//  function searchbar() {
//     var input,  filter, div, grid;
//     input = document.getElementById('search');
//     filter = input.value.toLowerCase();
//     grid = document.getElementById('grid');
    

//     for (i = 0; i < grid.length; i++) {
//      div = grid[i].getElementById('div')[0];
//         if (div.innerHTML.toLowerCase().includes(filter)) {
//             grid[i].style.display = "";
//         } else {
//             grid[i].style.display = "none";
//         }
//     }
// }
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

