// undian 4 pilihan
// kupon = 0
// if masuk angka 1 "mohon maaf anda kurang beruntung"
// if masuk angka 2 "bertambah 5 kupon"
// if masuk angka 3 "bertambah 15 kupon"
// if masuk angka 4 "bertambah 50 kupon"
// deffault angka di atas 4 "Selamat Anda Mendapat Jackpot"

let kupon = 0;

function mainMenu() {
  console.log("Menu:");
  console.log("1. Coba lagi");
  console.log("2. Tambah kupon (5 koin)");
  console.log("3. Tambah kupon (15 koin)");
  console.log("4. Tambah kupon (50 koin)");
  console.log("5. Keluar");
}

function tambahKupon(jumlah) {
  kupon += jumlah;
  alert("Kupon Anda sekarang: " + kupon);
}

function cekJackpot() {
  if (kupon >= 100) {
    alert("Selamat Anda dapat jackpot!");
  }
}

function game() {
  let pilihan = parseInt(prompt("Masukkan pilihan (1-5):"));

  switch (pilihan) {
    case 1:
      alert("Coba lagi, anda kurang beruntung");
      break;
    case 2:
      tambahKupon(5);
      break;
    case 3:
      tambahKupon(15);
      alert("Selamat Anda dapat!");
      break;
    case 4:
      tambahKupon(50);
      break;
    case 5:
      alert("Keluar dari permainan");
      break;
    default:
      tambahKupon(100);
      alert("Selamat Anda dapat jackpot!");
  }

  cekJackpot();
}

// Panggil fungsi utama
mainMenu();
game();