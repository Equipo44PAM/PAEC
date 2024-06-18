document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector('.form-estudiantes');
    form.addEventListener('submit', function(event) {
        event.preventDefault(); // Evitar que se envíe el formulario

        // Obtener los valores de los campos al enviar el formulario
        let peso = parseFloat(document.getElementById('peso_imc').value);
        let talla = parseFloat(document.getElementById('talla_imc').value);
        let imc = peso / (talla * talla);

        // Obtener el contexto del gráfico
        let ctx = document.getElementById('myChart').getContext('2d');

        // Crear el gráfico de barras
        const myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Tu IMC'],
                datasets: [{
                    label: 'IMC',
                    data: [imc.toFixed(2)], // Redondear el IMC a dos decimales
                    backgroundColor: 'rgba(0, 0, 0, .5)',
                    borderColor: 'rgb(0, 0, 0)',
                    borderWidth: 1.5
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    });
});
