import './bootstrap';

// Importar o Inputmask
import Inputmask from 'inputmask';

// Acrescentar máscara no campo com Inputmask
// DOMContentLoaded - disparar o evento quando o HTML for totalmente carregado
document.addEventListener("DOMContentLoaded", function(){

    var cpfMask = new Inputmask("999.999.999-99");
    cpfMask.mask(document.querySelector('.cpf'));

    var telefoneMask = new Inputmask("(99) 9 9999-9999");
    telefoneMask.mask(document.querySelector('.telefone'));

});
