
function printError(elemId, hintMsg) {
    document.getElementById(elemId).innerHTML = hintMsg;
}

function validate() {

    // Retrieving the values of form elements 
    var name = document.myForm.name.value;
    var email = document.myForm.email.value;
    var uname = document.myForm.uname.value;
    var role = document.myForm.role.value;
    var gender = document.myForm.gender.value;
    var dob = document.myForm.dob.value;


 
    // Defining error variables with a default value
    var nameErr = emailErr = mobileErr = countryErr = genderErr = true;
    
    // Validate name
    if(name == "") {
        printError("nameErr", "Please enter your name");
    } else {
        var regex = /^[a-zA-Z\s]+$/;                
        if(regex.test(name) === false) {
            printError("nameErr", "Please enter a valid name");
        } else {
            printError("nameErr", "");
            nameErr = false;
        }
    }
    
    // Validate email address
    if(email == "") {
        printError("emailErr", "Please enter your email address");
    } else {
        // Regular expression for basic email validation
        var regex = /^\S+@\S+\.\S+$/;
        if(regex.test(email) === false) {
            printError("emailErr", "Please enter a valid email address");
        } else{
            printError("emailErr", "");
            emailErr = false;
        }
    }
    
    // Validate mobile number
   
    
    // Validate country
 
    
    // Validate gender
    if(gender == "") {
        printError("genderErr", "Please select your gender");
    } else {
        printError("genderErr", "");
        genderErr = false;
    }
    
    // Prevent the form from being submitted if there are any errors
    if((nameErr || emailErr || mobileErr || countryErr || genderErr) == true) {
       return false;
    } else {
        // Creating a string from input data for preview
        var dataPreview = "You've entered the following details: \n" +
                          "Full Name: " + name + "\n" +
                          "Email: " + email + "\n" +
                          "Username: " + uname + "\n" +
                          "Password: " + pass + "\n" +
                          "Gender: " + gender + "\n" +
                          "Date of Birth: " + dob + "\n" +
                          ;
        
        // Display input data in a dialog box before submitting the form
        alert(dataPreview);
    }
}
