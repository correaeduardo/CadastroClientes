document.addEventListener('DOMContentLoaded', function () {
    const telefoneInput = document.getElementById('telefone');
    const fotoInput = document.getElementById('foto');
    const fotoPreview = document.getElementById('fotoPreview');

    if (fotoInput) {
        fotoInput.addEventListener('change', function () {
            const file = fotoInput.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    fotoPreview.src = e.target.result;
                    fotoPreview.style.display = 'block'; // Exibe a imagem
                };
                reader.readAsDataURL(file);
            } else {
                fotoPreview.src = '';
                fotoPreview.style.display = 'none'; // Oculta a imagem se nenhum arquivo for selecionado
            }
        });
    }

    if (telefoneInput) {
        telefoneInput.addEventListener('input', function (event) {
            let value = event.target.value.replace(/\D/g, '');

            if (value.length > 11) {
                value = value.slice(0, 11);
            }

            event.target.value = value;
        });
    }
});