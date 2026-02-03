<?php require_once __DIR__ . '/../layouts/header.php'; ?>

<section class="auth-section">
    <div class="auth-container">
        <div class="auth-image-side">
            <div class="icon-books">📖</div>
            <h2>Unete a nuestra comunidad</h2>
            <p class="frase">"Los libros son los amigos mas silenciosos y constantes; son los consejeros mas accesibles y los maestros mas pacientes."</p>
            <p class="autor-frase">- Charles W. Eliot</p>
        </div>

        <div class="auth-form-side">
            <div class="auth-card">
                <h1>Crear Cuenta</h1>
                <p class="subtitulo">Registrate para comentar tus libros favoritos</p>

                <?php if (isset($error)): ?>
                    <div class="alerta error"><?php echo htmlspecialchars($error); ?></div>
                <?php endif; ?>

                <form method="POST" action="index.php?controller=auth&action=registro" id="form-registro">
                    <div class="form-grupo">
                        <label for="nombre">Nombre completo</label>
                        <input type="text" id="nombre" name="nombre" placeholder="Tu nombre" required minlength="3">
                    </div>

                    <div class="form-grupo">
                        <label for="email">Correo electronico</label>
                        <input type="email" id="email" name="email" placeholder="tu@email.com" required>
                    </div>

                    <div class="form-grupo">
                        <label for="password">Contrasena</label>
                        <input type="password" id="password" name="password" placeholder="Minimo 6 caracteres" required minlength="6">
                    </div>

                    <div class="form-grupo">
                        <label for="password_confirm">Confirmar contrasena</label>
                        <input type="password" id="password_confirm" name="password_confirm" placeholder="Repite tu contrasena" required minlength="6">
                    </div>

                    <button type="submit" class="btn-submit">Registrarse</button>
                </form>

                <p class="auth-link">
                    Ya tienes cuenta? <a href="index.php?controller=auth&action=login">Inicia sesion</a>
                </p>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/../layouts/footer.php'; ?>
