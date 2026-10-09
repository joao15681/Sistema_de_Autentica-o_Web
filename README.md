#  Sistema de Autenticação Web

Sistema completo de Login e Cadastro desenvolvido com interface moderna, integração com base de dados **MySQL** e gestão de sessões seguras via **PHP**.

---

##  Tecnologias Utilizadas

* **Front-end:** HTML5, CSS3 (Flexbox, UI/UX responsivo)
* **Back-end:** PHP 8+ (Sessões e gestão de rotas)
* **Base de Dados:** MySQL (Criptografia `password_hash` e `password_verify`)
* **Servidor Local:** XAMPP (Apache + MySQL)

---

##  Funcionalidades

- [x] Tela de Login com validação de credenciais
- [x] Tela de Cadastro de novos utilizadores
- [x] Criptografia segura de senhas na base de dados
- [x] Painel restrito acessível apenas via sessão ativa (`$_SESSION`)
- [x] Encerramento seguro de sessão (Logout)
- [x] Validação básica no front-end e tratamento no back-end

---

##  Como Executar o Projeto Localmente

1. **Clonar o Repositório:**
   git clone https://github.com/joao15681/Sistema_de_Autentica-o_Web.git

2. **Configurar o XAMPP:**
   * Mova a pasta do projeto para o diretório `htdocs` do seu XAMPP (`C:\xampp\htdocs\`).
   * Abra o XAMPP Control Panel e inicie os serviços **Apache** e **MySQL**.

3. **Importar a Base de Dados:**
   * Acesse `http://localhost/phpmyadmin` no seu navegador.
   * Crie uma nova base de dados com o nome `system_login`.
   * Acesse a aba **Importar** e selecione o ficheiro `usuarios.sql` presente na raiz deste projeto.

4. **Acessar a Aplicação:**
   * Abra o navegador e acesse: `http://localhost/Sistema_de_Autentica-o_Web/login.html`