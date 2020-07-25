var items = [
  [
    "001",
    "Keyboard Logitek",
    60000,
    "Keyboard yang mantap untuk kantoran",
    "logitek.jpg",
  ],
  ["002", "Keyboard MSI", 300000, "Keyboard gaming MSI mekanik", "msi.jpg"],
  [
    "003",
    "Mouse Genius",
    50000,
    "Mouse Genius biar lebih pinter",
    "genius.jpeg",
  ],
  ["004", "Mouse Jerry", 30000, "Mouse yang disukai kucing", "jerry.jpg"],
];

function printItems(array) {
  data = "";

  for (var i = 0; i < array.length; i++) {
    data += `
        <div class = "col-sm-4 mt-5">
            <div class = "card" style = "width: 18rem;">
            <img src = "img/${array[i][4]}"class = "card-img-top" alt = "...">
                <div class = "card-body">
                    <h5 class = "card-title" id = "itemName"> ${array[i][1]} </h5>
                    <p class = "card-text"id = "itemDesc"> ${array[i][3]} </p>
                    <p class = "card-text"> Rp. ${array[i][2]} </p>
                    <a href = "#"class = "btn btn-primary" id = "addCart"> Tambahkan ke keranjang </a>
                </div>
            </div>
        </div>
    `;
  }
  return data;
}

document.getElementById("listBarang").innerHTML = printItems(items);

var formSearch = document.getElementById("formItem");
formSearch.addEventListener("submit", function (e) {
  e.preventDefault();

  var keyword = document.getElementById("keyword").value;

  filteringItems = filtering(keyword);
  document.getElementById("listBarang").innerHTML = printItems(filteringItems);
});

function filtering(string) {
  var filteringItems = [];

  for (j = 0; j < items.length; j++) {
    var itemNameToLowerCase = items[j][1].toLowerCase();
    var stringToLoweCase = string.toLowerCase();

    if (itemNameToLowerCase.includes(stringToLoweCase)) {
      filteringItems.push(items[j]);
    }
  }
  return filteringItems;
}
