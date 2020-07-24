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

function dataItems() {
  data = "";

  for (var i = 0; i < items.length; i++) {
    data += `
        <div class = "col-sm-4 mt-5">
            <div class = "card" style = "width: 18rem;">
            <img src = "img/${items[i][4]}"class = "card-img-top" alt = "...">
                <div class = "card-body">
                    <h5 class = "card-title" id = "itemName"> ${items[i][1]} </h5>
                    <p class = "card-text"id = "itemDesc"> ${items[i][3]} </p>
                    <p class = "card-text"> Rp. ${items[i][2]} </p>
                    <a href = "#"class = "btn btn-primary" id = "addCart"> Tambahkan ke keranjang </a>
                </div>
            </div>
        </div>
    `;
  }
  return data;
}

function search(keyword) {
  // data = []

  // for (var i = 0; i < items.length; i++) {
  //     if (items.includes(keyword) > 0) {
  //         data += items[i]
  //     }
  // }
  // return data
  console.log(keyword);
}

document.getElementById("listBarang").innerHTML = dataItems();

const keyword = document.getElementById("keyword").value;
const buttom = document
  .getElementById("searchItem")
  .addEventListener("click", search(keyword));
