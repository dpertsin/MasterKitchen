var slider = document.getElementById("myRange");
var output = document.getElementById("time");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}

function SearchFunc(){
    alert("Geia s gavliara");
}