function cors() {  
var xhttp = new XMLHttpRequest();  
xhttp.onreadystatechange = function() {    
    if (this.status == 200) {    
    alert(this.responseText);     
    document.getElementById("demo").innerHTML = this.responseText;    
    }  
};  
xhttp.open("GET", "https://api.fanduel.com/account/wallet", true);  
xhttp.withCredentials = true;  
xhttp.send();
}
cors();
    
