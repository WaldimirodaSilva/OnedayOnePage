// Seleciona todos os elementos li dentro da classe .site-categoria-toggle
const templateList = document.querySelectorAll('.site-categoria-toggle li');

// Verifica se há elementos na lista
if (templateList) {
    // Para cada elemento da lista, adiciona um evento de clique que chama a função activeToggle
    templateList.forEach((template) => {
        template.addEventListener("click", activeToggle);
    });

    // Define a função activeToggle
    function activeToggle() {
        // Remove a classe "ativo" de todos os elementos da lista
        templateList.forEach((item) => {
            item.classList.remove("ativo");
        });
        // Adiciona a classe "ativo" apenas ao elemento clicado
        this.classList.add("ativo");
    }
}
