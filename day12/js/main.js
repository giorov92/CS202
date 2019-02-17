//comment
/*multi-line comment*/

//statements

//print/ output information
//window.alert('Hello World');
//document.write('What is your email?');
//prompt('Enter your email');
//confirm('Agree to Terms And Conditions to proceed.');
console.log('In Console Now');
//parseInt(prompt('Enter Your Age'));
//element.innerHTML;

//variables - storage locations

/*var variablename = 25;
var text = 'Years Old';
alert(text);
document.write(variablename); */

/*var variablename2 = 'Giovanni';
document.write('<h2> Hello' + variablename2 + '</h2>'); */

/*var date = Date();
document.write(Date); */

//Data types
//numbers strings booleans objects arrays

/*var num = 2333;
var txt = 'Giovanni';
var gameOver = true/;false
var student =(
    Name:"Giovanni",
    Age:"24",
    eyeColor:"green",
)
var colors = ('green', 'red', 'black');*/

//functions are blocks of code that are used for specific purposes called on demand

/*function functionname(){
    //function codes in curly brackets
    alert('Hi New User!');
}
//function call
functionname(); */

/*function dosomething(){
    //document.getElementById('java').innerHTML = "New JavaScript For Class";
    var x = document.getElementById('java');
    x.style.color= "red";
    document.querySelector('java').Style.Fontsize = "1em";
}*/


//Events - click, load, resize, mouseover, blur, change, mouseout, keydown, 
//put a <something onfunction> in html

//eventlistener keeps html clean from java... it listens to events on the page and applies them to the page.
var x = document.querySelector('.btn');

x.addEventListener("click", function(){
document.getElementById('java').style.color = 'pink';
})
