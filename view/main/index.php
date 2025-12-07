<?php include '../layouts/default/head.php'; ?>
    <link rel="stylesheet" href="/assets/css/main/index.css">
    <title>VerdeFast</title>
</head>
<body>
<?php include '../layouts/modules/alertas.php'; ?>
    <article class="landing-container">
        
        <div class="landing-desktop">
            <section class="dato">
                <h1 class="verdefast">Bienvenido a <span class="verde">HUREMA</span></h1>
            </section>
            <p class="pruebalo-ya">¿Tipo de Discapacidad?</p>
            <div class="botones">
                <a href="/view/form/login.php" class="boton">Ciego</a>
                <a href="/view/form/registrar_usuario.php?origen=index" class="boton-secundario">Sordo</a>
            </div>
        </div>
        <div class="landing-bg"></div>
    </article>
<?php include '../layouts/default/footer.php'; ?>