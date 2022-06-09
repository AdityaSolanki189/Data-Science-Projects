var array ;
var key;
function add_element_to_array()
{
 array= document.getElementById("text1").value;
}
function add_element_to_array1()
{
 key= document.getElementById("text2").value;
}
 
function display_array()
{
    var k = key.charCodeAt(0); 
   const arr = array.split(" ");
    var chk = new Array(150).fill(0);   
    for(let x = 0 ; x < arr.length ; x++){
        var c = arr[x].charCodeAt(0);
        chk[c]++;
    }
   document.getElementById("Result").innerHTML = chk[k];
}