var dataURL = "color.php";
var list = [];

function convertToJSON(response){
    return response.json();
}

function processData(data){
    console.log(data);

    for(var i=0; i < data.length; i++){
        var div = document.createElement("div");
        div.classList.add("mystyle");
        // div.innerHTML = ".";
        
        // div.addEventListener('click')

        index = Math.floor(Math.random() * data.length);
        div.style.backgroundColor = data[index];

        console.log (data[index])
        document.getElementById("colorgrid").appendChild(div);
    }
}

var colors = ["#F60000", "FF8C00", "#FFEE00", "#4DE94C", "#3783FF", "#4815AA"]

function changeColor() {
    var col = document.getElementsByClassName("mystyle");
    col.style.backgroundColor = colors[Math.floor((Math.random()*8)+1)];
    
}	

fetch(dataURL)
.then(convertToJSON)
.then (processData)
.catch(function(err) {console.log("Fetch Error :-s", err)});