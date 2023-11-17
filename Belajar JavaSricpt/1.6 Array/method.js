const arr = ["Akbar-chan", "Fajar-kun", "Willy-san", "Bisma-sama", "Fahri-senpai", "Putra-sensei"]

// length = mengetahui jumlah element pada array
console.log(arr.length)

// join = untuk menggabukan pada element pada array
// nama_array.join("")
arr.push("Atilla-san", [10, 20, 30])
arr.push("Nahpid-san", "Ikh-san")

console.log(arr)

// pop = menghapus element terakhir array
// nama_array.pop()

arr.pop()

console.log(arr)

// unshift = menambah element di awal array
// nama_array.unshift("elemen1", "emelen2", ...)

arr.unshift("Idey-Ciboedax-Jatirasa", "Email-chan", "Mega-chan", "Latifah-chan", "Dewi-chan", "Novi-imoet")

console.log(arr)

// shift = menghapus element pertama array
// nama_array.shift()

arr.shift()

console.log(arr)

// slice = mengambil beberapa element dari array
// nama_array.slice(indexAwal, indexAkhir)

const arr2 = arr.slice(3, 6)
console.log(arr2)

// splice = menyelipkan data pada array
// nama_array.splice(indexAwal, mauDihapusBerapa, elemen1,2,..dst)

arr.splice(6, 0, "Alwan-sensei", "Budi Sudiarto", "Josept S")

console.log(arr)

// map = memetakan
let angka = [1, 3, 4, 5, 6, 9, 8]

let angka2 = angka.map(function (e) {
    return e * 2
})
console.log(angka2)

// for each = sama seperti perulangan for
arr.forEach(function (e) {
    console.log(e)
})

// filter = menyaring data di dalam array
let angka3 = angka.filter(function (e) {
    return e >= 5
})

console.log(angka3)

// find = sama kaya filter, tapi cuma mengembalikan 1 element
let angka4 = angka.find(function (e) {
    return e % 2 === 0
})

console.log(angka4)

