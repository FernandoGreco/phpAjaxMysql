<html>
<head>
<script>

function showUser(str) {

    alert (str);

    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getuser.php?q="+str,true);
        xmlhttp.send();
    }
}


</script>
</head>
<body>

<form>
<select name="users" onchange="showUser(this.value)">
  <option value="">Select a person:</option>
  <option value="1">Peter Griffin</option>
  <option value="2">Lois Griffin</option>
  <option value="3">Joseph Swanson</option>
  <option value="4">Glenn Quagmire</option>
  </select>
</form>
<br>

<form>
ID <input type="text" name="fname" value="fname" id="fname"><br>

  <input type="button" onclick="showUser(document.getElementById('fname').value)" value="Enviar">
</form>

<div id="txtHint"><b>Person info will be listed here...</b></div>




<script type="text/javascript">


function showUser2(){
  var first = document.getElementById('fname').value;

  

</script>

</body>
</html>