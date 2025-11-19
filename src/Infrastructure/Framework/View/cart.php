<?php
require_once __DIR__ . '/../Helper/FlashMessage.php';
$success = \Infrastructure\Framework\Helper\FlashMessage::getSuccess();
$error = \Infrastructure\Framework\Helper\FlashMessage::getError();
?>

<div class="cart-container">
    <h1>Carrito de Compras</h1>
    <?php if (!empty($success)): ?>
        <div class="alert alert-success"><?= htmlspecialchars($success) ?></div>
    <?php endif; ?>

    <?php if (!empty($error)): ?>
        <div class="alert alert-error"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>

    <?php if (empty($cart)): ?>
        <p>Tu carrito está vacío.</p>
        <a class="btn" href="/?shop=catalog">Continuar Comprando</a>
    <?php else: ?>
        <div class="cart-items">
            <?php
            $total = 0;
            foreach ($cart as $item):
                $productId = $item['product_id'];
                $quantity = $item['quantity'];
            ?>
                <div class="cart-item">
                    <div class="cart-item-info">
                        <p><strong>Producto ID:</strong> <?= $productId ?></p>
                        <p><strong>Cantidad:</strong> <?= $quantity ?></p>
                    </div>
                    <form method="POST" action="/?cart=remove" style="display:inline;">
                        <input type="hidden" name="product_id" value="<?= $productId ?>">
                        <button class="btn btn-danger" type="submit">Eliminar</button>
                    </form>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="checkout-section">
            <a class="btn" href="/?shop=catalog">Continuar Comprando</a>
            <form method="POST" action="/?order=checkout" style="display:inline;">
                <button class="btn btn-success" type="submit">Proceder al Pago</button>
            </form>
        </div>
    <?php endif; ?>
</div>