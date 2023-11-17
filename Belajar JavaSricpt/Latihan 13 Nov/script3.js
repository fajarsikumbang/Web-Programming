// cari kode pos bandung 40100
// karawang 41300
// bogor 16100
// solo 51000
// denpasar 72000
// default kode pos tidak ditemukan

kospos = prompt('masukkan kode pos alamat anda')
let ket = ' '

switch (kospos) {
    case '40100' :
        ket = '40100 adalah kode pos dari kota bandung'
        break;
    case '41300' :
        ket = '41300 adalah kode pos dari kota karawang'
        break;
    case '16100' :
        ket = '16100 adalah kode pos dari kota bogor'
        break;
    case '51000' :
        ket = '51000 adalah kode pos dari kota solo'
        break;
    case '72000' :
        ket = '51000 adalah kode pos dari kota denpasar'
        break;
    default:
        ket = 'maaf kode pos yang anda masukan tidak terdaftar'
        break;
}
alert(ket)