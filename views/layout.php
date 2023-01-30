<?php

/**
 * layoutHeader
 * 
 * @param string $param
 * @return string
 */
function layoutHeader(string $page = "Curriculum"):string{

    $outputHeader = 
    <<<HTML
        <!doctype html>
        <html lang="es">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>$page</title>
            <link href="./styles/index.css" type="text/css" rel="stylesheet"> 
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        </head>
    HTML;

    return $outputHeader;
}

/**
 * layoutNavbar
 * 
 * @param void
 * @return string
 */
function layoutNavbar(): string{

    $outputNavbar = 
    <<<HTML
        <body class="container-fluid vh-100 bg-dark text-white p-0">
            <nav class="navbar navbar-expand-lg bg-black mb-3">
                <div class="container-fluid ">
                    <a class="navbar-brand text-white" href="http://localhost/Proyectos-REDI/Curriculum-vitae/?page=home">Home</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link text-white" href="http://localhost/Proyectos-REDI/Curriculum-vitae/?page=sobreMi">Sobre mi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="http://localhost/Proyectos-REDI/Curriculum-vitae/?page=experiencia">Experiencia</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="ps-3">
    HTML;

    return $outputNavbar;

}

/**
 * layoutFooter
 * 
 * @param void
 * @return string
 */
function layoutFooter(): string{

    $outputFooter = 
    <<<HTML
            </div>
            <div class="container-fluid bg-black p-0 h-15">
                <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top h-100">
                    <div class="col-md-4 d-flex align-items-center bg-white h-100 w-25">
                        <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                            <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
                        </a>
                        <span class="mb-3 mb-md-0 text-muted">© 2023 Jose Manuel</span>
                    </div>

                    <ul class="nav col-md-4 justify-content-end gap-4 align-items-center list-unstyled d-flex bg-white h-100 w-25">
                        <li class="ms-3">
                            <a class="text-muted" href="#">
                            <svg width="16" height="16" viewBox="0 0 16 16">
                                <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                            </svg>
                            </a>
                        </li>
                        <li class="ms-3">
                            <a class="text-muted" href="#">
                            <svg width="16" height="16" viewBox="0 0 16 16">
                                <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                            </svg>
                            </a>
                        </li>
                        <li class="ms-3 w-15 bg-info h-100 d-flex justify-content-center align-items-center">
                            <a class="text-muted" href="#">
                                <svg class="fs-3 w-100 h-75"  viewBox="0 0 16 16">
                                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </footer>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" defer integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        </body>
    </html>
    HTML;

    return $outputFooter;

}