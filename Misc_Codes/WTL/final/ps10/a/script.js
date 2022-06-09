function dash(){
    var a= document.getElementById("pa").value; 
      var str = a.toString();
      var result = [str[0]];

      for (var x = 1; x < str.length; x++) {
        if (str[x - 1] % 2 === 0 && str[x] % 2 === 0) {
            document.getElementById("pa2"). value =result.push("-", str[x]);
        } else {
            document.getElementById("pa2"). value =result.push(str[x]);
        }
      }
      document.getElementById("pa2"). value =result.join("");
}