let a = prompt("Enter value 1: ");
let operation = prompt("Select an operation: Addtion,Substratiob,Multiplaction,Division")
let b = prompt("Enter value 2: ");


a=parseFloat(a);
b=parseFloat(b);

// let operation = prompt("Select an operation: Addtion,Substratiob,Multiplaction,Division")

function CalculationSelection(a,b,operation){
    switch(operation.toLowerCase()){
        case '+':
            return Addition(a,b);
            break;
        case '-':
            return Substraction(a,b);
            break
        case '*':
            return Multiplaction(a,b);
            break;
        case '/':
            return Division(a,b); 
            break;
        default:
            console.log("Invalid input");
            break;
    }

}

function Addition(a,b) {
   var c=a+b;
   console.log(c);
    return c;
}
function Substraction(a,b){
    var c = a-b;
    return c;
}
function Multiplaction(a,b) {
    var c= a*b;
    return c;
}
function Division(a,b){
    var c = a/b;
    return c;
}

var result= CalculationSelection(a,b,operation);
if(result){
   document.write(result);
}
else{
    document.write("Invalid")
}
