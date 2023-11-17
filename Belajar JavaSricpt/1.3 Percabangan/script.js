// If statement

/*
const totalBelanja = prompt("Masukan Harga: ")

if (totalBelanja > 10000) {
    // console.log("Selamat Anda mendapatkan gelas kembar")
    alert ("Selamat Anda mendapatkan gelas kembar")
}

console.log("Terima Kasih Telah Berbelanja!")
*/

// If... else statement

/*
const password = prompt("Silakan Masukan Password")

if (password === "lawakwhitekopi") {
    alert("Anda dapat janda pirang!")
} else {
    alert("Payah banget jadi cowokk!!")
}*/

// If... else if... else statement

//jika nilai lebih dari samdeng 80, maka Grade : "Istimewa"
//jika nilai lebih dari samdeng 70, maka Grade : "Bagus"
//jika nilai lebih dari samdeng 60, maka Grade : "Cukup"
// Selain itu, Grade : "Kurang"


/*
nilai = prompt("Masukan Nilai")

if (nilai >= 80) {
    alert("Nilai Anda: " + "nilai "  + "Predikat Istimewa")
} else if (nilai >= 70) {
    alert("Nilai Anda: " + "nilai "  + "Predikat Bagus")
}
 else if (nilai >= 60) {
    alert("Nilai Anda: " + "nilai "  + "Predikat Cukup")
}
 else if (nilai >= 50) {
    alert("Nilai Anda: " + "nilai "  + "Predikat Kurang")
}
else {
    alert("Bodohh bangett")
}*/

// Switch statement
/*
const pil = prompt("Silakan pilih warna favoritmu!")
let keterangan = ""

switch (pil) {
    case "merah":
        keterangan = "Anda memilih warna MU!"
        break;

    case "biru":
        keterangan = "Anda memilih warna PERSIB!"
        break;

    case "kuning":
        keterangan = "Anda memilih warna GOLKAR!"
        break;

    case "orange":
        keterangan = "Anda memilih warna PERSIJA!"
        break;
    
    default:
        keterangan = "Warna tidak valid"
        break;
}

alert(keterangan)*/

// Nested IF / Percabangan Bersarang

/*const username = prompt("Username: ")
const password = prompt("Password")

// Cek username ada atau tidak
if (username === "steven") {
    // Cek password benar atau salah
    if (password === "12345"){
        alert("Silakan Masuk!")
    } else {
        alert ("Password anda salah! Silakan coba lagi!")
    }
} else {
    alert("Username tidak terdaftar!")
}*/

// if (username === "steven" && password === "12345") {
//     alert("Silakan Masuk!")
// } else {
//     alert("Username/Password Anda Salah! Silakan Coba Lagi!")
// }