let num = [5, 2, 8, 9, 3,10 ]

num[5] = 6
num.push(7)
num.push(1)
num.length
num.sort()
console.log(num)
console.log(`Nosso vetor e o ${num.length}`)
console.log(`O primeiro valor do vetor e ${num[0]}`)
let pos = num.indexOf(5)
if (pos == -1) {
    console.log(`O valor nao foi encontrado!`)
} else {
    console.log(`O valor esta na posicao ${pos}`)
}

