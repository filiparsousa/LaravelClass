import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// Configurar o JQUERY
$document().ready(function(){
    $('modal').modal();
    
});
