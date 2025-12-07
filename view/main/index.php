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
                <button id="btnCiego" class="boton" type="button">Ciego</button>
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

    <dialog id="modalCiego" class="modal-overlay">
        <div class="modal-wrapper">
            <button id="closeModalCiego" class="btn-close" type="button">
                <i class="ph ph-x"></i>
            </button>
            <div class="modal-content-text">
                <h1>Bienvenido a <span class="morado">HUREMA</span></h1>
                <audio id="audioCiego">
                    <source src="/assets/audios/ciego.mp3" type="audio/mpeg">
                    Tu navegador no soporta audios.
                </audio>
            </div>
        </div>
    </dialog>

    <script>
        // Modal Sordo Logic
        const btnSordo = document.getElementById('btnSordo');
        const modalSordo = document.getElementById('modalSordo');
        const closeModalSordo = document.getElementById('closeModal');
        const video = modalSordo.querySelector('video');

        btnSordo.addEventListener('click', () => {
            modalSordo.showModal();
            video.play();
        });

        const closeVideo = () => {
            modalSordo.close();
            video.pause();
            video.currentTime = 0;
        };

        closeModalSordo.addEventListener('click', closeVideo);

        modalSordo.addEventListener('click', (e) => {
            if (e.target === modalSordo) {
                closeVideo();
            }
        });

        // Modal Ciego Logic
        const btnCiego = document.getElementById('btnCiego');
        const modalCiego = document.getElementById('modalCiego');
        const closeModalCiego = document.getElementById('closeModalCiego');
        const audioCiego = document.getElementById('audioCiego');

        btnCiego.addEventListener('click', () => {
            modalCiego.showModal();
            audioCiego.play().catch(e => console.log('Audio playback failed:', e));
        });

        const closeAudio = () => {
            modalCiego.close();
            audioCiego.pause();
            audioCiego.currentTime = 0;
        };

        closeModalCiego.addEventListener('click', closeAudio);

        modalCiego.addEventListener('click', (e) => {
            if (e.target === modalCiego) {
                closeAudio();
            }
        });
    </script>
<?php include '../layouts/default/footer.php'; ?>