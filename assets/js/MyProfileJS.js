function enableEdit()
{
    document.getElementById("nameTB").removeAttribute("readonly"); 
    document.getElementById("contactTB").removeAttribute("readonly"); 
    document.getElementById("dateTB").removeAttribute("readonly"); 
    document.getElementById("gender").removeAttribute("disabled"); 
    document.getElementById("bloodgroup").removeAttribute("disabled"); 
    document.getElementById("updateBTN").removeAttribute("hidden"); 
    document.getElementById("enableBTN").setAttribute("hidden", "hidden");
}