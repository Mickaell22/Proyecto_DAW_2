<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Librería Patty</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header class="navbar">
        <div class="container">
            <a href="index.php" class="logo">Librería Patty</a>
            <nav>
                <a href="index.php">Catálogo</a>
                <?php if (isset($_SESSION['usuario_id'])): ?>
                    <?php if ($_SESSION['rol'] === 'admin'): ?>
                        <a href="index.php?controller=libro&action=create">Agregar Libro</a>
                    <?php endif; ?>
                    <span class="user-name">Hola, <?php echo htmlspecialchars($_SESSION['nombre']); ?></span>
                    <a href="index.php?controller=auth&action=logout" class="btn-logout">Cerrar Sesión</a>
                <?php else: ?>
                    <a href="index.php?controller=auth&action=login">Iniciar Sesión</a>
                    <a href="index.php?controller=auth&action=registro">Registrarse</a>
                <?php endif; ?>
            </nav>
        </div>
    </header>
    <main class="container">
