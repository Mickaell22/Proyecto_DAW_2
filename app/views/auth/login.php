<?php require_once __DIR__ . '/../layouts/header.php'; ?>

<section class="auth-section">
    <div class="auth-container">
        <div class="auth-image-side login-bg">
            <div class="icon-books">📚</div>
            <h2>Bienvenido de vuelta</h2>
            <p class="frase">"Un lector vive mil vidas antes de morir. El que nunca lee vive solo una."</p>
            <p class="autor-frase">- George R.R. Martin</p>
        </div>

        <div class="auth-form-side">
            <div class="auth-card">
                <h1>Iniciar Sesion</h1>
                <p class="subtitulo">Accede a tu cuenta</p>

                <?php if (isset($error)): ?>
                    <div class="alerta error"><?php echo htmlspecialchars($error); ?></div>
                <?php endif; ?>

                <form method="POST" action="index.php?controller=auth&action=login" id="form-login">
                    <div class="form-grupo">
                        <label for="email">Correo electronico</label>
                        <input type="email" id="email" name="email" placeholder="tu@email.com" required>
                    </div>

                    <div class="form-grupo">
                        <label for="password">Contrasena</label>
                        <input type="password" id="password" name="password" placeholder="Tu contrasena" required>
                    </div>

                    <button type="submit" class="btn-submit">Entrar</button>
                </form>

                <p class="auth-link">
                    No tienes cuenta? <a href="index.php?controller=auth&action=registro">Registrate aqui</a>
                </p>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/../layouts/footer.php'; ?>
