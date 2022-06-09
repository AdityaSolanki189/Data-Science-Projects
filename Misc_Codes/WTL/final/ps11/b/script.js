let colors = ['red','green','blue']
function arrcolor() {
    var a= document.getElementById("pa").value; 
        //let usercolor = prompt("enter color: ")
        if(!colors.includes(a)){
            colors.push(a);
        }
        document.getElementById("pa2"). value =colors;
}
