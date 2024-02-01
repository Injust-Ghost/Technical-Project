let choice = prompt("Choice");
let id = 0;

let box1 = document.querySelector(".box1");
let box2_1 = document.querySelector(".box2_1");
let box2_2= document.querySelector(".box2_2");
let box3= document.querySelector(".box3");

for(i=0;i<6;i++)
{
    if(id!=choice)
    document.write(`<tr><td height="100"></td><tr>`);
    else
    document.write(`<tr><td height="100".sel></td></tr>`)
}