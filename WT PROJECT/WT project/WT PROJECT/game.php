<!DOCTYPE html>
<html>
<head>
<title id="t"></title>

<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
img.buy {
    border: 1px solid #ddd;
    border-radius: 4px;
    padding: 5px;
    width: 150px;
}

img.buy:hover {
    box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
}
</style>
<script>
var F="<?php $obj = json_decode($_GET["filenm"], false); echo $obj?>";
console.log(F);
var FL=JSON.stringify(F);
console.log(FL);
var xmlhttp = new XMLHttpRequest();
var arr=[];
xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
         arr = JSON.parse(this.responseText);
		 document.getElementById("t").innerHTML = arr[0];
		 document.getElementById("h").innerHTML = arr[0];
		 document.getElementById("cat").innerHTML = arr[1];
		 document.getElementById("ifr").src = arr[2];
		 document.getElementById("SR").innerHTML = arr[3];
		 document.getElementById("gpic").src = arr[0]+".jpg";
		 document.getElementById("tm1").innerHTML = arr[5];
		 document.getElementById("tm2").innerHTML = arr[6];
		 document.getElementById("tm3").innerHTML = arr[7];
		 document.getElementById("tm4").innerHTML = arr[8];
		 document.getElementById("tm5").innerHTML = arr[9];
		 document.getElementById("tm6").innerHTML = arr[10];
		 document.getElementById("tr1").innerHTML = arr[12];
		 document.getElementById("tr2").innerHTML = arr[13];
		 document.getElementById("tr3").innerHTML = arr[14];
		 document.getElementById("tr4").innerHTML = arr[15];
		 document.getElementById("tr5").innerHTML = arr[16];
		 document.getElementById("tr6").innerHTML = arr[17];
		 document.getElementById("amz").href = arr[19];
		 document.getElementById("snp").href = arr[20];
		 document.getElementById("flp").href = arr[21];
		 document.getElementById("tx").innerHTML = arr.slice(23).join("");
    }
};

xmlhttp.open("GET", "game 2.php?FL=" + FL, true);
xmlhttp.send();


</script>
</head>
<body>
<center><h1 id="h"></h1></center>


<img id="gpic" src="" alt="Img Not Found" 
style="float:left;width:192px;height:108px;">
<h4><ins>Categories</ins> : <span id="cat"></span></h4>
<h4><ins>User Avg. Ratings</ins> : <span><p id="SR"></p></span></h4>
<h4><ins>About The Game</ins><h4>
<pre id="tx">
</pre>


<center><h3>Minimum Requirements</h3></center>
<table>
  <tr>
    <th>Component</th>
    <th>Requirements</th>

  </tr>
  <tr>
    <td>Operating System</td>
    <td id="tm1"></td>

  </tr>
  <tr>
    <td>Processor</td>
    <td id="tm2"></td>

  </tr>
  <tr>
    <td>Memory</td>
    <td id="tm3"></td>

  </tr>
  <tr>
    <td>Graphics</td>
    <td id="tm4"></td>

  </tr>
  <tr>
    <td>DirectX</td>
    <td id="tm5"></td>

  </tr>
  <tr>
    <td>Storage</td>
    <td id="tm6"></td>

  </tr>
</table>

<center><h3>Recommended Settings</h3></center>
<table>
  <tr>
    <th>Component</th>
    <th>Requirements</th>

  </tr>
  <tr>
    <td>Operating System</td>
    <td id="tr1"></td>

  </tr>
  <tr>
    <td>Processor</td>
    <td id="tr2"></td>

  </tr>
  <tr>
    <td>Memory</td>
    <td id="tr3"></td>

  </tr>
  <tr>
    <td>Graphics</td>
    <td id="tr4"></td>

  </tr>
  <tr>
    <td>DirectX</td>
    <td id="tr5"></td>

  </tr>
  <tr>
    <td>Storage</td>
    <td id="tr6"></td>

  </tr>
</table>
</br>
</br>
<iframe id="ifr" width="560" height="315" src="" frameborder="0" allowfullscreen></iframe>
<h3>Buy Now at Authorised Dealers below</h3>
<a id="amz" href="">
  <img class="buy" src="amazon.png" alt="No Internet Connection" style="width:30%;height:200px;border:0">
</a>
<a id="snp" href="">
  <img class="buy" src="snapdeal.png" alt="No Internet Connection" style="width:30%;height:200px;border:0">
</a>
<a id="flp" href="">
  <img class="buy" src="flipkart.jpg" alt="No Internet Connection" style="width:30%;height:200px;border:0">
</a>
</body>
</html>
