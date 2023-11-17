//tempat liburan = dunia fantasi tempat wahana
// min 18 tahun maks 50 tahun
// kuda putar, apa bila uang penumpang kurang dari 50rb dan tingginya kurang 166cm maka dia bisa naik kuda puter
// ombak banyu, jika uang < 50rb dan tinngi > 166cm maka dia hanya bisa naik ontang anting
// kora kora, jika uang lebih dari 50rb tapi tinggi kurang dari 166cm maka dia hanya bisa naik ombak banyu
// ontang anting, jika uang >50rb dan tb > 166cm maka bisa naik wahana favorit kora kora


let usia = prompt("Masukkan usia Anda: ");
let uang = prompt("Masukkan jumlah uang Anda: ");
let tinggiBadan = prompt("Masukkan tinggi badan Anda (dalam cm): ");

if (usia >= 18 && usia <= 80) {
    if (uang < 50000 && tinggiBadan < 166) {
        alert("Anda dapat naik kuda putar.");
    } else if (uang < 50000 && tinggiBadan >= 166) {
        alert("Anda hanya dapat naik ontang-anting.");
    } else if (uang >= 50000 && tinggiBadan < 166) {
        alert("Anda hanya dapat naik ombak banyu.");
    } else if (uang >= 50000 && tinggiBadan >= 166) {
        alert("Anda dapat naik wahana favorit, kora-kora.");
    } else {
        alert("Input tidak valid.");
    }
} else {
    alert("Maaf, Anda tidak memenuhi syarat usia untuk masuk ke Dunia Fantasi.");
}