<?php

class RegistrarDominioTest extends FeatureTestCase
{
   
    function test_basic_example()
    {
     
        $this->visit('/dominio/registrar')
            ->see('¿ Ya tienes un dominio ?')
            ->type('midominio.com', 'dominio')
            ->press('Enviar');
        
        $this->see('Su solicitud fue enviada con éxito');
    }
}
