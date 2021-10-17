function validate(){  

        var role=document.getElementById("role").value;
        var name=document.getElementById("name").value;  
        var email=document.getElementById("email").value; 
        var uname=document.getElementById("uname").value; 
        var pass=document.getElementById("pass").value; 
        var Cpass=document.getElementById("Cpass").value; 
      
        var gender=document.myform.gender.value;
        var dob=document.getElementById("dob").value;
        if (name==null || name==""){  
        alert("Name can't be blank");  
        return false;  
      }

        let x = document.forms["myForm"]["name"].value;
        if (x == "") {
        alert("Field must be filled out");
        return false;
        }

         
        if (gender=="") {
            document.getElementById("genderErr").innerHTML = "Gender can not be empty";
            return false;
        }else{
        document.getElementById("genderErr").innerHTML = "";
        }

        if (dob=="") {
            document.getElementById("dobErr").innerHTML = "Date of birth can not be empty";
            return false;
        }else{
        document.getElementById("dobErr").innerHTML = "";
        }


}
function checkEmpty() {
        if (document.myForm.name.value = "") {
          alert("Name can't be blank");
            return false;  
        }
      }
function positionCheck() {
  if (document.getElementById("role").value == "") {
    document.getElementById("msg6").innerHTML = "Field is required";
    document.getElementById("msg6").style.color = "red";
    document.getElementById("role").style.borderColor = "red";
  }else {
    document.getElementById("msg6").innerHTML = "";
    document.getElementById("role").style.borderColor = "deepskyblue";
  }
}
        
           
function emailCheck() {
  var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if (document.getElementById("email").value == "") {
    document.getElementById("msg2").innerHTML = "Email is required";
    document.getElementById("msg2").style.color = "red";
    document.getElementById("email").style.borderColor = "red";
  } else if (!document.getElementById("email").value.match(mailformat)) {
    document.getElementById("msg2").innerHTML = "Enter valid Email";
    document.getElementById("msg2").style.color = "red";
    document.getElementById("email").style.borderColor = "red";
  } else {
    document.getElementById("msg2").innerHTML = "";
    document.getElementById("email").style.borderColor = "deepskyblue";
  }
}


function nameCheck() {
  var nameMatch =/^[a-zA-Z. ]*$/;
  if (document.getElementById("name").value == "") {
    document.getElementById("msg1").innerHTML = "Name is required";
    document.getElementById("msg1").style.color = "red";
    document.getElementById("name").style.borderColor = "red";
  } else if (document.getElementById("name").value.split(" ").length < 2) {
    document.getElementById("msg1").innerHTML = "Name must contain 2 words";
     document.getElementById("msg1").style.color = "red";
    document.getElementById("name").style.borderColor = "red";
  
  } else if (!document.getElementById("name").value.match(nameMatch)) {
      document.getElementById("msg1").innerHTML ="invalid name";
      document.getElementById("msg1").style.color = "red";
      document.getElementById("name").style.borderColor = "red";
    } else {
    document.getElementById("msg1").innerHTML = "";
    document.getElementById("name").style.borderColor = "deepskyblue";
  }
}
function unameCheck() {
  if (document.getElementById("uname").value == "") {
    document.getElementById("msg3").innerHTML = "Username is required";
    document.getElementById("msg3").style.color = "red";
    document.getElementById("uname").style.borderColor = "red";
  }else {
    document.getElementById("msg3").innerHTML = "";
    document.getElementById("uname").style.borderColor = "deepskyblue";
  }
}

function passCheck() {
    var passMatch = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/;
  if (document.getElementById("pass").value == "") {
    document.getElementById("msg4").innerHTML = "Password is required";
    document.getElementById("msg4").style.color = "red";
    document.getElementById("pass").style.borderColor = "red";
  } else if (document.getElementById("pass").value.length < 8 ) {
      document.getElementById("msg4").innerHTML = "Password must contain atleast 8 characters";
      document.getElementById("msg4").style.color = "red";
      document.getElementById("pass").style.borderColor = "red";
    } else if (!document.getElementById("pass").value.match(passMatch)) {
      document.getElementById("msg4").innerHTML ="Password must contain a special character,atleast 1 small letter,1 Capital letter & 1 digit";
      document.getElementById("msg4").style.color = "red";
      document.getElementById("pass").style.borderColor = "red";
    }else{
        document.getElementById("msg4").innerHTML = "";
        document.getElementById("pass").style.borderColor = "deepskyblue";
    }
  }


function cPassCheck() {
  if (document.getElementById("Cpass").value == "") {
    document.getElementById("msg5").innerHTML = "Confirm Password is required";
    document.getElementById("msg5").style.color = "red";
    document.getElementById("Cpass").style.borderColor = "red";
  } else if (document.getElementById("Cpass").value != document.getElementById("pass").value) {
      document.getElementById("msg5").innerHTML = "Passwords does not match";
      document.getElementById("msg5").style.color = "red";
      document.getElementById("Cpass").style.borderColor = "red";
    }else{
        document.getElementById("msg5").innerHTML = "";
        document.getElementById("Cpass").style.borderColor = "deepskyblue";
    }
  }