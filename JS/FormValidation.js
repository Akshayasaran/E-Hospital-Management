function ValidatePatientdetails()
{
    var result = true;
    var patientid = document.getElementById("patientid").value;
    if(patientid=="")
    {
        alert("Enter Patient ID");
        result = false;
    }
    return result;
}

function ValidateLogin()
{
    var emailid = document.getElementById("emailid1").value;
    var pass = document.getElementById("password").value;
    var result = true;

    if(emailid=="")
    {
        alert("Enter EmailID");
        result = false;
    }
    if(pass=="")
    {
        alert("Enter Password");
        result = false;
    }
    return result;
}

function ValidateSignup()
{
    var result = true;
    var username = document.getElementById("username").value;
    var emailid = document.getElementById("emailid").value;
    var gender = document.getElementById("gender").value;
    var pass1 = document.getElementById("password1").value;
    var pass2 = document.getElementById("password2").value;

    if(username=="")
    {
        alert("Enter UserName");
        result = false;
    }
    if(emailid=="")
    {
        alert("Enter Email ID");
        result = false;
    }
    if(gender=="")
    {
        alert("Select Gender");
        result = false;
    }
    if(pass1=="" || pass2=="")
    {
        alert("Enter Password");
        result = false;
    }
    if(pass1!=pass2)
    {
        alert("Password doesn't match");
        result = false;
    }
    return result;
}