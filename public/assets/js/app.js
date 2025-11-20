
/* ============================
         JS PARA AUTORELLENO
============================== */
document.querySelectorAll('.usercard').forEach(card => {
    card.addEventListener('click', function (e) {
        e.preventDefault();

        const email = this.dataset.email;
        const password = this.dataset.password;

        // Rellenar inputs del formulario
        document.querySelector('input[name="email"]').value = email;
        document.querySelector('input[name="password"]').value = password;

        // Mostrar spinner
        document.getElementById('spinner').style.display = 'block';

        // Pequeño delay para permitir mostrar el spinner antes del submit
        setTimeout(() => {
            document.querySelector('.login-form').submit();
        }, 400);
    });
});
