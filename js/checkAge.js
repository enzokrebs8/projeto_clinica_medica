document.getElementById("txtNascimento").addEventListener("change", checkAge);

function checkAge() {
    const nascimento = document.getElementById("txtNascimento");
    const additionalFields = document.getElementById("additionalFields");
    const responsibleFields = document.querySelectorAll("#additionalFields input");

    if (!nascimento.value) {
        additionalFields.classList.add("hidden");
        return; 
    }

    const birthDate = new Date(nascimento.value);
    const today = new Date();
    const age = today.getFullYear() - birthDate.getFullYear();
    const m = today.getMonth() - birthDate.getMonth();

    // Verifica se é menor de idade
    if (age < 18 || (age === 18 && m < 0)) {
        additionalFields.classList.remove("hidden"); // Mostra campos adicionais
        responsibleFields.forEach(field => field.required = true); // Torna os campos obrigatórios
    } else {
        additionalFields.classList.add("hidden"); // Esconde campos adicionais
        responsibleFields.forEach(field => field.required = false); // Remove obrigatoriedade
    }
}