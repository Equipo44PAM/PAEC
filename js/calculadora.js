const calcular = () => {
    // Se declaran las variables peso y estatura, se convierten a números
    let peso = parseInt(document.getElementById('peso').value);
    let estatura = parseFloat(document.getElementById('estatura').value);

    if (isNaN(peso)) {
        alert("Ingresa tu peso");
        return;
    } else if (isNaN(estatura)) {
        alert("Ingresa tu estatura");
        return;
    }

    // Se hace la operación para calcular el IMC
    let res = peso / (estatura * estatura);
    document.getElementById('res-imc').value = res.toFixed(2);

    // Determinar el tipo de IMC
    let tipoIMC = "";

    if (res < 18.5) {
        tipoIMC = "Se encuentra dentro del rango de peso insuficiente.";
    } else if (res >= 18.5 && res <= 24.9) {
        tipoIMC = "Se encuentra dentro del rango de peso normal o saludable.";
    } else if (res >= 25.0 && res <= 29.9) {
        tipoIMC = "Se encuentra dentro del rango de sobrepeso.";
    } else if (res >= 30.0) {
        tipoIMC = "Se encuentra dentro del rango de obesidad.";
    }

    // Actualizar el contenido del div con el resultado del tipo de IMC
    document.getElementById('imc-message').textContent = tipoIMC;
}
