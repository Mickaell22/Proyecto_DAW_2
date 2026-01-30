<?php require_once __DIR__ . '/../layouts/header.php'; ?>

<section class="auth-section">
    <div class="auth-card">
        <h1>Crear Cuenta</h1>

        <?php if (isset($error)): ?>
            <div class="alerta error"><?php echo htmlspecialchars($error); ?></div>
        <?php endif; ?>

        <form method="POST" action="index.php?controller=auth&action=registro" id="form-registro">
            <div class="form-grupo">
                <label for="nombre">Nombre completo</label>
                <input type="text" id="nombre" name="nombre" required minlength="3">
            </div>

            <div class="form-grupo">
                <label for="email">Correo electrónico</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-grupo">
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" required minlength="6">
            </div>

            <div class="form-grupo">
                <label for="password_confirm">Confirmar contraseña</label>
                <input type="password" id="password_confirm" name="password_confirm" required minlength="6">
            </div>

            <button type="submit" class="btn-submit">Registrarse</button>
        </form>

        <p class="auth-link">
            ¿Ya tienes cuenta? <a href="index.php?controller=auth&action=login">Inicia sesión</a>
        </p>
    </div>
</section>

<?php require_once __DIR__ . '/../layouts/footer.php'; ?>
