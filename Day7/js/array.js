let marks=[
    kuber= 100,
    raj=90,
    jim=75
]

// console.log(typeof marks);
// console.log(marks);
// console.log(marks[4]);

// //add element
// marks[5]=100;
// console.log(marks[6]);
// console.log(marks);

// //change element
// marks[1]=10;
// console.log(marks[1]);

//push pop

let num=[1,2,3,4,5,6,7,8,9]
let AddNum=[10,11,12];
let str=num.toString();
console.log(typeof str);

let join = num.join(" and ")
console.log(join);

//remove first element
let r = num.shift(1);
console.log(r);
console.log(num);

//add element at begining
let a=num.unshift(1);
console.log(num);

//concat
let conc = num.concat(AddNum);
console.log(conc);

//sort
//compare is a function that sort an array
let compare = (a,b)=>{
    return a-b;
}
let newArray = [5,7,9,4,1,2,557,452,5,0,54];
newArray.sort(compare);
console.log(newArray);

//slice

let deletedValues = newArray.splice(2,3,1001,1002)
console.log(deletedValues);
console.log(newArray);

