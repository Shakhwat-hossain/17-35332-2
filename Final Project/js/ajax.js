function getAll() {

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("livesearch").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","../View/showLiveSearchedProducts.php?",true);
    xmlhttp.send();
    return;
}


  function showResult(str) {


    //document.getElementById("search").style.backgroundColor="RED";
    if (str.length==0) {

      //document.getElementById("livesearch").innerHTML=""; 
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("livesearch").innerHTML = this.responseText;
        }
      };
      xmlhttp.open("GET","../View/showLiveSearchedProducts.php?",true);
      xmlhttp.send();

        //document.getElementById("livesearch").style.border="0px";
        
        //document.getElementById("productTable").innerHTML="";
        return;
    } else {

    document.getElementById("livesearch").innerHTML=""; 
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("livesearch").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","../View/showLiveSearch.php?q="+str,true);
    xmlhttp.send();
  }
}