// for (let i = 0; i <= 10; i++) {
//     console.log('Widia Cantik')
// }


// for (let angka = 1; angka <= 20; angka++) {
//     console.log(angka)
// }

// let jumlah = 0
// for (let x = 1; x <= 10; x++) {
//     jumlah = jumlah + x
// }
// console.log(jumlah)

// let i = 0;
// while (i < 10) {
//     console.log('khwjgekwasjlqks')
//     i++
// }

// let x = 1
// while (x <= 20) {
//     console.log(x)
//     i++
// }


// console.log('Peluncuran Toket Dimulai')
// let countDown = 50
// while (countDown >= 0) {
//     console.log(countDown)
//     countDown--
// }
// console.log('MELUNCUR!')
/*
let i = 1;
do {
    console.log("Widia Cantikk " + i)
    i++;
}
while (i < 10);
*/
let menu
do {
    menu = prompt(`
    ======== MENU ========
    1. Baca Data
    2. Ubah Data
    3. Cetak Data
    4. Hapus Data
    5. Keluar Program

    Masukan Pilihan Anda :
    `)

    switch (menu) {
        case "1":
            alert("Anda memilih menu nomer 1")
            break;
        case "2":
            alert("Anda memilih menu nomer 2")
            break;
        case "3":
            alert("Anda memilih menu nomer 3")
            break;
        case "4":
            alert("Anda memilih menu nomer 4")
            break;
    
        case "5":
            alert("Anda memilih menu nomer 5")
            break;
        default:
            alert("Pilihan anda tidak valid")
            break;
    }
} while(menu !== "5")