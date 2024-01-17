// let str = "Hello";
// console.log(str.length+str);

// let str2 = 'Helllo';
// console.log(str2[0]);
// console.log(typeof(str2));

// let boy="Rakesh";
// let girl="Sweta";

// //Backtik 
// let friends= `${boy} is friend of ${girl}`;
// console.log(friends);

// //Excape sequence chaeacter

// let fruit = 'bana\'na'
// console.log(fruit);


//String Functions

// let name=" Hello World!"
// let welcome=" Welcome to Js"
// console.log(name.toLowerCase());
// console.log(name.toUpperCase());
// console.log(name.slice(2));
// console.log(name.slice(1,5));
// console.log(name.replace("!"," Replace Done"));
// console.log(name.concat(welcome+" Thank you"));
// console.log(name.trim());
// console.log(name[1]);

let str="fox jumps over the lazy dog";
let word="fox";

console.log(str.includes(word));
console.log(`Word: ${word} is aviable in` + "\n" + str);

console.log(`Word: "${word}"  ${str.includes(word)? "is": "Is not" } in the sentence`);