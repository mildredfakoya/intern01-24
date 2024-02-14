
function collectAndDisplayValues() {
    let bloodPressure = document.getElementById("bp").value;
    let pulse = document.getElementById("pulse").value;
    let respiration = document.getElementById("respiration").value;
    let weight = document.getElementById("weight").value;
    let height = document.getElementById("height").value;
    var bodyMassIndex = document.getElementById("bodyMassIndex").value;
    let temperature = document.getElementById("temperature").value;

    // For unit conversions
    let weightInKg = parseFloat(weight) * 0.453592;
    let heightInM = parseFloat(height) * 0.01;
    var bodyMassIndex = parseFloat((weightInKg/(heightInM) **2));
    let temperatureInC = (parseFloat(temperature) - 32) * 0.556;

    // To save vital signs
    sessionStorage.setItem("bloodPressure", bloodPressure);
    sessionStorage.setItem("pulse", pulse);
    sessionStorage.setItem("respiration", respiration);
    sessionStorage.setItem("weight", weightInKg.toFixed(1));
    sessionStorage.setItem("height", heightInM.toFixed(1));
    sessionStorage.setItem("bodyMassIndex", bodyMassIndex.toFixed(1));
    sessionStorage.setItem("temperature", temperatureInC.toFixed(1));

    // Display saved vital signs
    // displayVitalSigns();
}

function displayVitalSigns(){
    let container = document.getElementById("display-container");
    container.innerHTML = "";

    let bloodPressure = sessionStorage.getItem("bloodPressure");
    let pulse = sessionStorage.getItem("pulse");
    let respiration = sessionStorage.getItem("respiration");
    let weight = sessionStorage.getItem("weight");
    let height = sessionStorage.getItem("height");
    let bodyMassIndex = sessionStorage.getItem("bodyMassIndex");
    let temperature = sessionStorage.getItem("temperature");

    container.innerHTML += "Blood Pressure: " + bloodPressure + " mmHg<br></br><br>";
    container.innerHTML += "Pulse: " + pulse + " bpm<br></br><br>";
    container.innerHTML += "Respiration: " + respiration + " cpm<br></br><br>";
    container.innerHTML += "Weight: " + weight + " kg</br></br><br>";
    container.innerHTML += "Height: " + height + " meters<br></br><br>";
    container.innerHTML += "Body Mass Index: " + bodyMassIndex + " kg/m<sup>2</sup><br></br><br>";
    container.innerHTML += "Temperature: " + temperature + " &deg;C";

}

// Display saved vital signs on page load
displayVitalSigns();