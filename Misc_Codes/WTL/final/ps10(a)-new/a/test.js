var key;
var res = "";
function saveData(){
    key = document.getElementById('txt1').value;
} 

function checkDash(){
    for(let i = 0 ; i < key.length  ; i++){
        var a = parseInt(key[i]);
        var b = parseInt(key[i+1]);
        if(a%2 === 0 && b%2 === 0)res+= a.toString() + "-";
        else res+= a.toString();

        document.getElementById('display').innerHTML = res;
    }
}