function generateInvertedTriangle(rows) {
  for (let i = rows; i >= 1; i--) {
    let row = '';
    
    for (let j = 1; j <= rows - i; j++) {
      row += '  ';
    }
  
    for (let k = 1; k <= 2 * i - 1; k++) {
      row += '* ';
    }
    console.log(row);
  }
}

generateInvertedTriangle(12);


console.log("==================================================")

function segitigaSikuSiku(baris) {
    for (let i = 1; i <= baris; i++) {
        
        let spasi = " ".repeat(baris - i);
       
        let bintang = "* ".repeat(i);
        
        console.log(spasi + bintang);
    }
}


let barisSegitiga = 12;
segitigaSikuSiku(barisSegitiga);
