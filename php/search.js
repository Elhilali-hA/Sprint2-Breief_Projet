function searchbar() {
    var input, table, td, tr, filter;
    input = document.getElementById('search');
    filter = input.value.toLowerCase();
    tr = document.getElementsByTagName('tr');

    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName('td')[0];
        if (tr[i].innerHTML.toLowerCase().includes(filter)) {
            tr[i].style.display = "";
        } else {
            tr[i].style.display = "none";
        }
    }
}

