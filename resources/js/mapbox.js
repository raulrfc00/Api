

document.getElementById('modifyButton').addEventListener('click', function(event) {
    event.preventDefault();
    
    console.log('modifyButton clicked');
    // Modifica el estado del beneficiario
    document.getElementById('beneficiary-state').innerText = 'Nuevo estado del beneficiario';

    // También podrías abrir un formulario o realizar otras acciones según sea necesario.

})