// Input tahun lahir dari pengguna
const tahunLahir = prompt("Masukkan tahun lahir Anda:");

// Menentukan generasi berdasarkan tahun lahir
if (tahunLahir >= 1944 && tahunLahir <= 1964) {
    alert("Anda termasuk baby boomer.");
} else if (tahunLahir >= 1965 && tahunLahir <= 1979) {
    alert("Anda termasuk generasi X.");
} else if (tahunLahir >= 1980 && tahunLahir <= 1994) {
    alert("Anda termasuk generasi Y.");
} else if (tahunLahir >= 1995 && tahunLahir <= 2015) {
    alert("Anda termasuk generasi Z.");
} else {
    alert("Tahun yang Anda masukkan tidak valid.");
}