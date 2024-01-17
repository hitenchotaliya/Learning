let num = [3,5,78,9,7,5,2,0]

// for(i=0;i<num.length;i++){
//     console.log(num[i]);
// }

// num.forEach((element)=>{
//     console.log(element*element);
//     console.log("/n");
// })

//array from

// let a="OkGoogle"
// let arr=Array.from(a);
// console.log(arr);

//for..of

for(let i of num){
    console.log(i);
}

//for in

for(let j in num){
    console.log(num[j]);
}