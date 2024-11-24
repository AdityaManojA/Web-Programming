let number=parseInt(prompt("Enter a number: "));

function findfactorial(num) {
    let fact=1;
    if (numb<0){
        return "Negative number entered";
    }
    for (let i=1;i<=num;i++){
        fact*=i;
    }
    return fact;
}
if (isNaN(number)){
    alert("Non-numeric input entered");
}
if (number<0){
    alert("Negative number entered");
}
else{
    alert("Factorial of " + number + " is " + findfactorial(number));
}   
