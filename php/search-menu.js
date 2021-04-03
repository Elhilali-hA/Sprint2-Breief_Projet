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
    var input, filter, div, h1, i, txtValue;
    input = document.getElementById("search");
    filter = input.value.toUpperCase();
    div = document.getElementById("div");
     h1 = div.getElementsByTagName("h1");
    


    for(i=0 ; i< h1.length; i++){
        txtValue = h1[i].textContent || h1[i].innerText;
        if(txtValue.toUpperCase().indexOf(filter) > -1){
            h1[i].style.display = "div";
        }

        else{
            h1[i].style.display = 'none';
        }
    }
}

