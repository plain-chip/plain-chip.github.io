function cors() {  
var xhttp = new XMLHttpRequest();  
xhttp.onreadystatechange = function() {    
    if (this.status == 200) {    
    alert(this.responseText);     
    document.getElementById("demo").innerHTML = this.responseText;    
    }  
};  
xhttp.open("GET", "https://www.udemy.com/api-2.0/contexts/me/?header=True&footer=True", true);  
xhttp.withCredentials = true;  
xhttp.send();
}
cors();
