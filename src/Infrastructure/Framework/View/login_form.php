<?php
require_once __DIR__ . '/../Helper/FlashMessage.php';
$success = \Infrastructure\Framework\Helper\FlashMessage::getSuccess();
$error = \Infrastructure\Framework\Helper\FlashMessage::getError();
?>

<main class="login-container">
    <h1 class="login-title">Iniciar sesión</h1>
    <?php if (!empty($success)): ?>
        <div class="login-alert success"><?= htmlspecialchars($success) ?></div>
    <?php endif; ?>
    <?php if (!empty($error)): ?>
        <div class="login-alert error"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>
    <p class="login-info">
        Los usuarios proporcionados son ficticios y están destinados para realizar pruebas.
    </p>
    <div class="login-quickusers">
        <div class="usercard" data-email="demo@pablogarciajc.com" data-password="password">
            <strong>Usuario de Prueba</strong>
            demo@pablogarciajc.com
            <p><a href="#" class="quick-select">Seleccionar</a></p>
        </div>
    </div>
    <form class="login-form" action="/?login=do" method="POST">
        <div class="login-field">
            <label class="login-label">Email:
                <input class="login-input" type="email" name="email" required>
            </label>
        </div>
        <div class="login-field">
            <label class="login-label">Contraseña:
                <input class="login-input" type="password" name="password" required>
            </label>
        </div>
        <button class="login-button" type="submit">Entrar</button>
    </form>
    <p class="login-help">
        <a class="login-link" href="/?register=form">¿No tienes cuenta? Regístrate</a>
    </p>
</main>




