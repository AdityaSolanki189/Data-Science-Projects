
function occurrence() {
    // var a= document.getElementById("pa").value; 
    // var b= document.getElementById("pa1").value; 
    // let arr = a.split(' ');
    // const len = a.length();
    // let count=0;

    // for (var x = 1; x < len; x++) {
    //     if (arr[x]===b) {
    //         count++;
    //     } 
    //   }
    //   document.getElementById("pa2"). value =count;
    let arr = ['a','z','a','b','d','b','b','b']
    
        let x=document.getElementById("pa").value; 
        let count=0;
        for(var i=0;i<arr.length;i++){
            if(arr[i]==x){
                count++;
            }
        } 
        document.getElementById("pa2"). value =count;

}