

function check()
{
let email = document.getElementById("email").value;
let pass = document.getElementById("password").value;
let q1=document.getElementById("q1").value;
let q2=document.getElementById("q2").value;
let q3=document.getElementById("q3").value;
let shipping=document.getElementsByName("shipping");
if (email ==""||!email.includes("@")||!email.endsWith(".com"))
{
    alert("Invalid email.")
    return false;
}
if (pass=="")
{
alert("Invalid password.");
return false;
}
if (q1<0||q2<0||q3<0)
{
    alert("Invalid quanitity.")
    return false;
}
if (isNaN(q1)||isNaN(q2)||isNaN(q3))
{
    alert("Invalid quantity.")
    return false;
}
if(q1==""||q2==""||q3=="")
{
    alert("Invalid quantity.")
    return false;
}
if (shipping[0].checked==false&&shipping[1].checked==false&&shipping[2].checked==false)
{
    alert("Please choose shipping.")
    return false;
}


}