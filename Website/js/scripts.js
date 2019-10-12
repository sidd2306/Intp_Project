
function calculate() {
    
                    num1 = document.getElementById("vquantm").value;
                    num2 = document.getElementById("nvquantm").value;
                    /*num3 = document.getElementById("noof").value;
                    val1 = num1 * 2200 * num3;
                    val2 = num2 * 2400 * num3;
                    result= val1 + val2;
                    return "Total Result:" + result;*/
                    return document.getElementById("result").innerHTML = num1 * num2;

}