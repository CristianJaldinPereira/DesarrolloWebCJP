document.getElementById('form-libros').addEventListener('submit', async function (e) {
    e.preventDefault();

    const datos = new FormData(this);

    try {
        const respuesta = await fetch('insertar.php', {
            method: 'POST',
            body: datos
        });

        if (respuesta.ok) {
            window.location.href = 'listar.php';
        } else {
            console.error('Error al registrar los libros');
        }
    } catch (error) {
        console.error('Error:', error);
    }
});
