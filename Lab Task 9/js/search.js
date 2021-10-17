function search(str) {
  var xhttp;  
  if (str == "") {
    document.getElementById("searchResults").innerHTML = "<center><br>No Result!</center>";
    document.getElementById("searchResults").style.color = "red";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    //console.log(this.responseText);
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("searchResults").style.color = "";
       document.getElementById("searchResults").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "../Controller/liveSearchController.php?q="+str, true);
  xhttp.send();
}