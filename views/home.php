<?php


/**
 * home
 * 
 * @param void
 * @return string
 */
function home():string{
    $outputHome = 
    <<<HTML
        <div>
            <h1 class="fs-1 text-center fw-bold">Bienvenido</h1>
            <br>
                <div>
                    <h2 class="fs-2 fw-bold-600 mb-4">Mis datos personales</h2>
                    <div class="d-flex align-items-center gap-4">
                        <img class="img-fluid rounded-circle w-25" src="./img/yo.jpg">
                        <ul class="list-unstyled d-flex flex-column gap-3">
                            <li class="fs-5"> 
                                <span class="fw-bold-500 fs-4"> Nombre: </span> 
                                <br> 
                                Jose Manuel Mendoza Murillo
                            </li>
                            <li class="fs-5"> 
                                <span class="fw-bold-500 fs-4"> Edad: </span> 
                                <br>
                                 21 años
                            </li>
                            <li class="fs-5">
                                <span class="fw-bold-500 fs-4"> Domicilio: </span> 
                                <br>
                                Pablo Lopez #87 COL El Trompo Jamay, Jalisco
                            </li>
                            <li class="fs-5"> 
                                <span class="fw-bold-500 fs-4"> Número de telefono: </span> 
                                <br>
                                 3921279642
                            </li>
                        </ul>
                    </div>
                </div>
        </div>
    HTML;

    return $outputHome;
}

    /*
        ** Requisitos para dar residencias **
        - Constancia del seguro social
        - Estar registrado en el SAT (Para obtener la firma electronica y el RFC)
        - Constacia del RFC
        - Tener cuenta bancaria
    */