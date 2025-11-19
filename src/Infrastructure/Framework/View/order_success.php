<div class="success-container">
    <h1>✓ ¡Pedido Completado!</h1>
    <p>Tu pedido ha sido procesado exitosamente.</p>
    <p><strong>ID de Pedido:</strong> <?= isset($_GET['id']) ? (int)$_GET['id'] : 'N/A' ?></p>
    <p>Te enviaremos un correo de confirmación pronto.</p>

    <div>
        <a class="btn" href="/?shop=catalog">Continuar Comprando</a>
        <a class="btn" href="/?list=listar">Ver Mis Pedidos</a>
    </div>
</div>