/*
Buatlah program untuk menentukan upah mingguan seorang karyawan,

data yang dimasukkan yaitu: nama dan jumlah jam kerja

Ketentuan : 
1. Jika jam kerja kurang dari sama dengan 48 jam, maka gaji = jumlah jam kerja x 2000
2. Jika jam kerja lebih dari sama dengan 48 jam, maka gaji = 48 x 2000 + lembur * 3000

lembur didapat dari : jumlah jam kerja - 48

Lalu tampilkan hasilnya di console.log atau alert() dengan format tulisan
"Nama : <nama>, upah : <gaji>"

CLUE : gunakan IF-ELSE
*/

/* ========================== */
/* Silahkan Kerjakan Di bawah ini! */

const nama = prompt('masukan nama anda: ')
const jamKerja = prompt('masukan jam kerja anda: ')

const gaji = 2000
const lembur = 3000

let hasil = (gaji * lembur)

if (jamKerja <= 48) {
    console.log(nama + 'gaji anda' + jamKerja * gaji)
} else if (jamKerja >= 48) {
    console.log(nama + 'gaji anda' + jamKerja * hasil)
}