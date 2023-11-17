function pemecahKata(kata) {
    let ary = []
    // let wordLength = kata.length
    for (let i = 0; i < kata.length; i++) {
        let tempArr = [] //temporary array
        for (let j = 0; j < kata.length - i; j++) {
            tempArr.push(kata[j])
        }
        ary.push(tempArr)
    }
    return ary
}

const insertedWord = prompt("Masukan kata: ")
console.log(pemecahKata(insertedWord))