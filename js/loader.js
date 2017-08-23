var myVar;

function myFunction() {
    myVar = setTimeout(showPage, 300);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("about").style.display = "none";
  document.getElementById("event").style.display = "none";
  document.getElementById("comities").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}