

// jquery code 

// window.onload = function(){
    // alert();
//}

// $(document).ready(function(){

// $('#div1').click(function(){
// $('#div1').css({
//     'background-color': 'orange',
//     'color': 'blue',

// });
// }); 

// });

document.getElementById("div1").onclick = function(){

    this.style.cssText="background-color:yellow";
}


// 

let sum = +"10" + 5 ;

let str = "123";
let num = Number(str);  // Explicit conversion to number
console.log(num);       // 123


console.log(sum);

let result = "5" + 2;
console.log(result); // Output: "52"
