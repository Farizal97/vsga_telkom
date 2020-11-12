var dataBarang = [
    "Buku Tulis",
    "Pensil",
    "Spidol"
];


function showbarang() {
    var listBarang = document.getElementById("list-barang");
    // clear list barang
    listBarang.innerHTML ="";
    
    // cetak semua barang
    for(let i =0; i< dataBarang.length; i++) {
        var btnEdit = "<a href='#' onclick='editBarang("+i+")'>Edit</a>";
        var btnHapus = "<a href='#' onclick='deleteBarang("+i+")'>Hapus</a>";

        listBarang.innerHTML += "<li>" + databarang[i] + " ["+btnEdit +" | "+ btnHapus +"]</li>";
    }
}

function addBarang() {
    var input = document.querySelector("input[name=barang]");
    dataBarang.push(input.value);
    showbarang();
}

function editBarang() {
    var newBarang = prompt("Nama Baru", dataBarang[id]);
    dataBarang[id] = newBarang;
    showbarang();
}