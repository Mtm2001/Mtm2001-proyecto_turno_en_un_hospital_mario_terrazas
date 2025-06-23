document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('form-turno');
    const lista = document.getElementById('lista-pacientes');
    const btnAtender = document.getElementById('btn-atender');

    function actualizarLista(data) {
        lista.innerHTML = '';
        data.forEach(paciente => {
            const li = document.createElement('li');
            li.textContent = paciente;
            lista.appendChild(li);
        });
    }

    form.addEventListener('submit', function (e) {
        e.preventDefault();
        const nombre = form.nombre.value;
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
});
