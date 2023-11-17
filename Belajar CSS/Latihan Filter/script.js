// Mengambil semua elemen tombol dengan class "Beli Sekarang"
var beliSekarangButtons = document.querySelectorAll(".card button");

// Menambahkan event listener pada setiap tombol "Beli Sekarang"
beliSekarangButtons.forEach(function(button) {
  button.addEventListener("click", function() {
    // Aksi yang ingin Anda lakukan ketika tombol "Beli Sekarang" diklik

    // Misalnya, menampilkan pesan konfirmasi
    var carName = this.parentNode.querySelector("h3").textContent;
    var price = this.parentNode.querySelector("p").textContent;
    alert("Anda telah membeli " + carName + " dengan harga " + price);
  });
});