<?php include '../layouts/default/head.php'; ?>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
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
                <button id="btnSordo" class="boton-secundario" type="button">Sordo</button>
            </div>
        </div>
        <div class="landing-bg"></div>
    </article>

    <dialog id="modalSordo" class="modal-overlay">
        <div class="modal-wrapper">
            <button id="closeModal" class="btn-close" type="button">
                <i class="ph ph-x"></i>
            </button>
            <div class="video-container">
                <video controls>
                    <source src="/assets/videos/sordo.mp4" type="video/mp4">
                    Tu navegador no soporta videos.
                </video>
            </div>
        </div>
    </dialog>

    <script>
        const btnSordo = document.getElementById('btnSordo');
        const modalSordo = document.getElementById('modalSordo');
        const closeModal = document.getElementById('closeModal');
        const video = modalSordo.querySelector('video');

        btnSordo.addEventListener('click', () => {
            modalSordo.showModal();
        });

        const closeVideo = () => {
            modalSordo.close();
            video.pause();
            video.currentTime = 0;
        };

        closeModal.addEventListener('click', closeVideo);

        modalSordo.addEventListener('click', (e) => {
            if (e.target === modalSordo) {
                closeVideo();
            }
        });
    </script>
<?php include '../layouts/default/footer.php'; ?>