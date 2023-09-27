        // Função para validar a igualdade das senhas
        function validarSenhas() {
            var senha = document.getElementById("senha").value;
            var senhaConfirm = document.getElementById("senhaConfirm").value;
            var senhaMismatch = document.getElementById("senhaMismatch");

            if (senha === senhaConfirm) {
                senhaMismatch.innerHTML = ""; // Senhas coincidem, mensagem de erro vazia
            } else {
                senhaMismatch.innerHTML = "As senhas não coincidem";
                
            }
        }

        // Adicione um evento de escuta aos campos de senha e confirmação de senha
        document.getElementById("senha").addEventListener("input", validarSenhas);
        document.getElementById("senhaConfirm").addEventListener("input", validarSenhas);