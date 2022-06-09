function palindrome() {
    var string = document.getElementById("pa").value;
    var b = "";
    const len = string.length;
    for (let i = 0; i < len / 2; i++) {

        if (string[i] != string[len - 1 - i]) {
            document.getElementById("pa2").value = string + " is not a Palindrome String ";
            return 0;
        }
    }
    document.getElementById("pa2").value = string + " is a Palindrome String";

}