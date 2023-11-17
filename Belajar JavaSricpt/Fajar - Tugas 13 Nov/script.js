/*
  Buatlah program untuk menentukan bilangan ganjil dan genap
  dari angka 1 sampai 50 menggunakan perulangan for dan while
*/

const maxsimal = parseInt(prompt("Masukan batas angka"))

// For Loop
for (let i = 1; i <= maxsimal; i++) {
    console.log(i, isEven(i))
}

// While
let i = 1
while(i <= maxsimal) {
    console.log(i, isEven(i))
    i++
}

function isEven(i) {
    return i % 2 === 0
}

// Buatlah program untuk menentukan bilangan
// yang habis dibagi 3 antara 1 sampai 100 pake for
// cetak di console --> "xx adalah bilangan yang habis dibagi 3"

// for (let i = 1; i <= 100; i++) {
//     if (i % 3 === 0) {
//         console.log(`${i} adalah bilangan yang habis dibagi 3`);
//     } else {
//         console.log(`${i} adalah bilangan yang tidak habis dibagi 3`);
//     }
// }