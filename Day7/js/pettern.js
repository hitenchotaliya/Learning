let n = prompt("enter number you want")
n = Number.parseInt(n);

for(let i=1;i<=n;i++){
    for(let j=1;j<=i;j++){
        document.write("*");
    }
    document.write("<br>");
}
for(let i=n; i>=1; i--){
    for(let j=1; j<=i; j++){
        document.write("*");
    }
    document.write("<br>");
}