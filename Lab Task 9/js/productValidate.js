function validate() {
  let x = document.forms["myForm"]["productname"].value;
  if (x == "") {
    alert("Product Name must be filled out");
   
    return false;

  }
    let y = document.forms["myForm"]["buyingprice"].value;
  if (y == "") {
    alert("Buying price must be filled out");
    document.getElementById('msg2').innerHTML = "Buying price must be filled out";
    return false;
}
    let z = document.forms["myForm"]["sellingprice"].value;
  if (z == "") {
    alert("Selling price must be filled out");
    document.getElementById('msg3').innerHTML = "Selling price must be filled out";
    return false;
}
   let a = document.forms["myForm"]["image"].value;
  if (a == "") {
    alert("Field must be filled out");
    document.getElementById('msg4').innerHTML = "Field must be filled out";
    return false;

}
}