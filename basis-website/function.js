function convertToJason(response){
     return response.json(); //zet het om van rauwe data naar json
}

function processData(data){
console.log(data[0]); //testen of je data hebt ontvangen
    document.querySelector("#customername").innerHTML = data.naam;  //laat zien wat je hebt ontvangen
}

fetch("giveMeData.php") //haal de data op
.then(convertToJason) 
.then(processData) 
.catch(function(err) {console.log('Fetch Error :-S', err)});