// Encontrar el mayor numero de un array

let numeros = [5, 7, 8, 9, 3, 8, 45, 33, 77, 99, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
let numeroMaximo = 0
let tamaño = numeros.length

for(let i =0; i<tamaño; i++){
    if(numeroMaximo < numeros[i]) {
        numeroMaximo = numeros[i]
    }
   
}
console.log(numeroMaximo)