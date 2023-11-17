// KALKULATOR HITUNG VOLUME KUBUS
let sisiA=15
let sisiB=15
let sisiC=15

const volumeKubus=(sisiA*sisiB*sisiC)

console.log('volume kubus: '+volumeKubus)

console.log('===================================================')

// KALKULATOR HITUNG VOLUME BALOK

let panjang=21
let lebar=27
let tinggi=31

const volumeBalok=(panjang*lebar*tinggi)

console.log('volume balok: '+volumeBalok)

console.log('===================================================')

// KALKULATOR HITUNG VOLUME TABUNG
let phi=15
let jari_jari=12
let Tinggi=17

const volumeTabung=phi*(jari_jari**2)*Tinggi

console.log('volume tabung: '+volumeTabung)

console.log('===================================================')

// Konfersi Suhu C -> F
function konversiCelsiusToFahrenheit(celsius) {
  var fahrenheit = (celsius * 9/5) + 32;
  return fahrenheit;
}

var suhuCelsius = 30;

var suhuFahrenheit = konversiCelsiusToFahrenheit(suhuCelsius);

console.log(suhuCelsius + " derajat Celsius setara dengan " + suhuFahrenheit + " Fahrenheit.");

console.log('=============================================================================================')

// Konfersi Suhu F -> C
function fahrenheitToCelsius(fahrenheit) {
  var celsius = (fahrenheit - 32) * 5/9;
  return celsius;
}

var suhuFahrenheit = 98.6;
var suhuCelsius = fahrenheitToCelsius(suhuFahrenheit);

console.log(suhuFahrenheit + " Fahrenheit setara dengan " + suhuCelsius + " derajat Celsius.");




// function bruteForceSearch(arr, target) {
//   for (let i = 0; i < arr.length; i++) {
//     if (arr[i] === target) {
//       return i; // Mengembalikan indeks jika elemen ditemukan
//     }
//   }
//   return -1; // Mengembalikan -1 jika elemen tidak ditemukan
// }

// const myArray = [1, 3, 5, 7, 9];
// const targetElement = 5;

// const result = bruteForceSearch(myArray, targetElement);

// if (result !== -1) {
//   console.log(`Elemen ${targetElement} ditemukan di indeks ${result}.`);
// } else {
//   console.log(`Elemen ${targetElement} tidak ditemukan.`);
// }
