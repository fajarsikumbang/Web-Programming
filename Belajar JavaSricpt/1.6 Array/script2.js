//array tradisional
    //nama aray   //elemen1....//elemen dst
let namaSiswa = ['Akbar','Fajar','Willy','Bisma','Putra','Novi','Dewi','Fahri'] //data/elemen array
                //0(index)//1     //2     //3      dst(index) 
// menambah data ke array
namaSiswa[8]    = "Imel"
namaSiswa[9]    = 'Widia'
namaSiswa[10]   = "Nahpid"
namaSiswa[11]   = 'Mega'
namaSiswa[12]   = 'Atila'
namaSiswa[13]   = 'Haris'
namaSiswa[14]   = 'Ihsan'
namaSiswa[15]   = 'latifah'

//mengahpus data array
namaSiswa[2] = null
delete namaSiswa[1]

console.log(namaSiswa)
// console.log(namaSiswa[5]) //untuk memunculkan salah satu index dari salah satu array saja


console.log(namaSiswa.length) //penambahan (.length) untuk mengetahui jumlah elemen pada array

//join array // untuk menyatukan elemen pada array

let text = ['namo','denai','jawir',true]

console.log(text.join(" ")) //bisa diisi apapun

//array push, menambah data pada akhir array

let play = [1,2,3]

play.push(9,2*10)

console.log(play)

//array method pop,menghapus elemen terakhir dari array

let x = [1,2,3,4]

x.pop()

console.log(x)

//array shit,adalah sebaliknya dari array method pop yaitu menghapus elemen paling awal atau index0

let y = [1,2,3,4]

y.shift()

console.log(y)

//aray unshift, menambah data dari depan / mengubahnya menjadi index0 kebalikan dari push

let v = [1,2,3,4]

v.unshift(0) //bisa diisi tipe string juga

console.log(v)