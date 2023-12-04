function segitigaSikuSiku (tinggi) {
  for (let i = 0; i <= tinggi; i++) {
    let row = '';
    for (let j = 1; j <= i; j++) {
      row += '* ';
    }
    console.log(row);
  }
}

segitigaSikuSiku(10);
