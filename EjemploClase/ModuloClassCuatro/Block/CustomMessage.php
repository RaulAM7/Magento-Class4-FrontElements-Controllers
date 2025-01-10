<?php

namespace VendorClassCuatro\ModuloClassCuatro\Block;

use Magento\Framework\View\Element\Template;

class CustomMessage extends Template
{
    public function getCustomMessage()
    {
        return 'Esto es el return de un Block de Prueba, mi primerito Block';
    }
}

/* ¿Qué hace este block?

    - Define uin método getMessage() que devuelve un mensaje
    - Este mensaje sera usado en la plantilla conectada al bloque

*/
