function panggilY(x) {
  const y = 3 * Math.pow(x, 3) + 2 * Math.pow(x, 2) + 12;
  return y;
}

const x = 3;
const result = panggilY(x);

console.log(`Hasil dari persamaan y = 3x^3 + 2x^2 + 12, dengan x = ${x}, adalah y = ${result}`);

console.log('========================================================')

const P = 40;
const L = 30;
const T = 25;

const luasPermukaan = 2 * (P*L + P*T + L*T);

console.log(`Luas Permukaan Prisma: ${luasPermukaan}`);

console.log('========================================================')

const r = 10;
const t = 15;

const s = Math.sqrt(Math.pow(r, 2) + Math.pow(t, 2));

const luasPermukaan1 = Math.PI * r * (r + s);

console.log(`Luas Permukaan Kerucut: ${luasPermukaan1}`);

console.log('========================================================')

const xx = 5
const yy = 108 * x ** 3 + 10 * x

console.log('nilai y adalah: ' + yy)