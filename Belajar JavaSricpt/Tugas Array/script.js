/*
1. Buatlah array dengan nama mahasiswa lalu isi datanya dengan nama-nama dibawah ini:
Andrew, Bob, Clark, David, Ethan, Fernando, Gabriel
setelah itu tampilkan di console
*/
console.log("Tampilkan")
let mahasiswaList = ["Andrew", "Bob", "Clark", "David", "Ethan", "Fernando", "Gabriel"]
tampilkanData(mahasiswaList)
console.log("\n")

/*
2. Tambahkan nama : Harold, Iglesias, Jackson pada array tersebut
lalu tampilkan di console
*/
console.log("Tambahkan")
mahasiswaList.push("Harold")
mahasiswaList.push("Iglesias")
mahasiswaList.push("Jackson")
tampilkanData(mahasiswaList)
console.log("\n")

/*
3. Tampilkan nama Bob, David, dan Fernando pada console
*/
console.log("Tambahkan Lagi")
console.log(mahasiswaList[1])
console.log(mahasiswaList[3])
console.log(mahasiswaList[5])
console.log("\n")

/*
4. Hapus nama "Jackson" dari array lalu tampilkan ke console
*/
console.log("Hapus")
delete mahasiswaList[5]
tampilkanData(mahasiswaList)
console.log("\n")

/*
5. Hapus nama "Andrew" dari array lalu tampilkan ke console
*/
console.log("Hapus Lagi")
mahasiswaList.shift()
tampilkanData(mahasiswaList)
console.log("\n")

/*
6. Tambahkan nama Andy sebelum Bob, lalu tampilkan ke console
*/
console.log("Unshift")
mahasiswaList.unshift("Andy")
tampilkanData(mahasiswaList)
console.log("\n")

/*
7. Ubah nama Fernando menjadi Francesco, lalu tampilkan ke console
*/
console.log("Ubah")
mahasiswaList[5] = "Francesco"
tampilkanData(mahasiswaList)
console.log("\n")

/*
8. Hapus nama "Ethan" dari array, lalu tampilkan ke console
*/
console.log("Hapus Lagi")
delete mahasiswaList[4]
tampilkanData(mahasiswaList)
console.log("\n")

// Silahkan dikerjakan, semoga paham :)
function tampilkanData(dataList) {
    for (let n = 0; n < dataList.length; n++) {
        const data = dataList[n];
        console.log(data)
    }
}