// let kata = prompt('Masukan kata')

// function pembalikKata(x) {
//     let y = x.split('')
//     let z = y.reverse()
//     let reversedKata = z.join('')
//     return reversedKata
// }

// alert('Kata = '+kata);
// alert('Kata Terbalik = '+pembalikKata(kata));


function reversedWord(kata) {
    let newKata = ""
    for (let i = 0; i < kata.length; i++) {
        newKata = kata[i] + newKata
    }
    return newKata;
}

const inputKata = prompt("Masukkan kata: ")

if (inputKata === "") {
    alert("Kata tidak valid")
} else {
    alert(reversedWord(inputKata))
}

