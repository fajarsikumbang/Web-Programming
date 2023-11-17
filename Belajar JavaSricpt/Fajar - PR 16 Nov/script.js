let kata = 'karawang';

function word1(kata) {
    let Arr = kata.split('');
    return Arr;
}

function word2(kata) {
    let Arr = kata.split('');
    let Arr2 = Arr.slice(0,7)
    return Arr2
}

function word3(kata) {
    let Arr = kata.split('');
    for (let i = 8; i != 0; i--) {
        let Arr2 = Arr.slice(0,i)
        console.log(Arr2)
    }
}
let hasil = [word1(kata), word2(kata), word3(kata)]
console.log(hasil);