document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('form-turno');
    const lista = document.getElementById('lista-pacientes');
    const btnAtender = document.getElementById('btn-atender');
    const btnRestaurar = document.getElementById('btn-restaurar');
    const inputNombre = form.nombre;

    function actualizarLista(data) {
        lista.innerHTML = '';
        data.cola.forEach(paciente => {
            const li = document.createElement('li');
            li.textContent = paciente;
            lista.appendChild(li);
        });

        if (data.restaurado) {
            inputNombre.value = data.restaurado;
        }
    }

    form.addEventListener('submit', function (e) {
        e.preventDefault();
        const nombre = inputNombre.value;
        fetch('procesar.php', {
            method: 'POST',
            headers: {'Content-Type': 'application/x-www-form-urlencoded'},
            body: `accion=agregar&nombre=${encodeURIComponent(nombre)}`
        })
        .then(res => res.json())
        .then(actualizarLista);
        form.reset();
    });

    btnAtender.addEventListener('click', function () {
        fetch('procesar.php', {
            method: 'POST',
            headers: {'Content-Type': 'application/x-www-form-urlencoded'},
            body: `accion=atender`
        })
        .then(res => res.json())
        .then(actualizarLista);
    });

    btnRestaurar.addEventListener('click', function () {
        fetch('procesar.php', {
            method: 'POST',
            headers: {'Content-Type': 'application/x-www-form-urlencoded'},
            body: `accion=restaurar`
        })
        .then(res => res.json())
        .then(actualizarLista);
    });
});
