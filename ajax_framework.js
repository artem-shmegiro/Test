/ * XMLHTTPRequest Enable * /
function createObject() {
var request_type;
var browser = navigator.appName;
if(browser == "Microsoft Internet Explorer"){
request_type = new ActiveXObject("Microsoft.XMLHTTP");
}else{
request_type = new XMLHttpRequest();
}
return request_type;
}
var http = createObject();
/* Required: var nocache is a random number to add to request. This value solve an Internet Explorer cache issue */
var nocache = 0;
function insert() {
 // Optional: Show a waiting message in the layer with ID login_response
 document.getElementById('insert_response').innerHTML = "Just a second..."
 // Required: verify that all fileds is not empty. Use encodeURI() to solve some issues about character encoding.
var fnumber= encodeURI(document.getElementById('fnumber').value);
var snumber = encodeURI(document.getElementById('snumber').value);
 // Set te random number to add to URL request
nocache = Math.random();
 // Pass the login variables like URL variable
http.open('get', 'insert.php?fnumber='+fnumber+'&snumber=' +snumber+'&nocache = '+nocache);
http.onreadystatechange = insertReply;
http.send(null);
}
function insertReply() {
if(http.readyState == 4){ 
var response = http.responseText;
// else if login is ok show a message: "Site added+ site URL".
document.getElementById('insert_response').innerHTML = 'Site added:'+response;
 }
 }
