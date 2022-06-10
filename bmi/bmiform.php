<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="function.js"></script>
    <title>BMI Calculator</title>
</head>
<body>
    

<form>
            <h4>BMI Calculator</h4>
            <input id="weight" type="text" placeholder="jouw gewicht in kilograms" />
            <br />
            <br />
            <input id="height" type="text" placeholder="jouw lengte in meters" />
            <br />
            <br />
            
            <input class = "submit" type="button"  value="Submit" onclick="bmi()" />
            <p id="result">hier zie je het resultaat</p>
        </form>
</body>
</html>