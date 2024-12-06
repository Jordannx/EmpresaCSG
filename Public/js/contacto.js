// Seleccionamos el formulario y el mensaje de agradecimiento
const contactoForm = document.getElementById('contactoForm');
const agradecimientoDiv = document.getElementById('agradecimiento');

// Función que se ejecuta al enviar el formulario
contactoForm.addEventListener('submit', function(event) {
    event.preventDefault(); // Evita que el formulario se envíe de forma predeterminada

    // Validación personalizada
    const nombre = document.getElementById('nombre').value.trim();
    const email = document.getElementById('email').value.trim();
    const mensaje = document.getElementById('mensaje').value.trim();

    if (!nombre || !email || !mensaje) {
        alert('Por favor, completa todos los campos.');
        return;
    }

    // Simulamos un envío exitoso
    contactoForm.style.display = 'none'; // Oculta el formulario
    agradecimientoDiv.style.display = 'block'; // Muestra el mensaje de agradecimiento
});

// Validación en tiempo real (mientras se escribe)
document.getElementById('nombre').addEventListener('input', function() {
    if (this.value.trim() === '') {
        this.style.borderColor = 'red';
    } else {
        this.style.borderColor = '#ccc';
    }
});

document.getElementById('email').addEventListener('input', function() {
    if (this.value.trim() === '') {
        this.style.borderColor = 'red';
    } else {
        this.style.borderColor = '#ccc';
    }
});

document.getElementById('mensaje').addEventListener('input', function() {
    if (this.value.trim() === '') {
        this.style.borderColor = 'red';
    } else {
        this.style.borderColor = '#ccc';
    }
});
