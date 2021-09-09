// Add active class to the current button (highlight it)
var header = document.getElementById("myDIV");
var li = header.getElementsByClassName("nav-item");
for (var i = 0; i < btns.length; i++) {
    li[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  current[0].className = current[0].className.replace(" active", "");
  this.className += " active";
  });
}