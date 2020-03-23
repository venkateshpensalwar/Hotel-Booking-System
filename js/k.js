function GEEKFORGEEKS()                                
{ 
    var name = document.forms["RegForm"]["fname"];               
    var lastname = document.forms["RegForm"]["lname"]; 
    var password = document.forms["RegForm"]["pass"];   
    var email =  document.forms["RegForm"]["email"];  
    var mobile = document.forms["RegForm"]["mob"];  
   
    if (name.value == "")                                  
    { 
        window.alert("Please enter your fname."); 
        name.focus(); 
        return false; 
    } 
   if (lastname.value == "")                                  
    { 
        window.alert("Please enter your lname."); 
        lastname.focus(); 
        return false; 
    } 
if(password.value == "") 
{
    window.alert("Please enter strong password");
    password.focus();
    return false;
}
       
    if (email.value == "")                                   
    { 
        window.alert("Please enter a valid e-mail address."); 
        email.focus(); 
        return false; 
    } 
   
    if (email.value.indexOf("@", 0) < 0)                 
    { 
        window.alert("Please enter a valid e-mail address."); 
        email.focus(); 
        return false; 
    } 
   
    if (email.value.indexOf(".", 0) < 0)                 
    { 
        window.alert("Please enter a valid e-mail address."); 
        email.focus(); 
        return false; 
    } 

 if (mobile.value == "")                           
    { 
        window.alert("Please enter your telephone number."); 
        phone.focus(); 
        return false; 
    } 
   
   
    return true; 
}
