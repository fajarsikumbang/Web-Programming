// Input nilai dari pengguna
const nilai = prompt("Masukkan nilai Anda:");

// Menentukan grade berdasarkan nilai
if (nilai > 85 && nilai <= 100) {
    alert("Grade Anda: A");
} else if (nilai >= 75 && nilai <= 85) {
    alert("Grade Anda: B");
} else if (nilai > 65 && nilai < 75) {
    alert("Grade Anda: C");
} else if (nilai >= 50 && nilai <= 65) {
    alert("Grade Anda: D");
} else if (nilai <= 50 && nilai >=0) {
    alert("Grade Anda: E, Anda harus mengulang mata kuliah");
} else 
    alert("Input tidak valid. Masukkan nilai antara 0 dan 100.");