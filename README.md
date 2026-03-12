# Blog Simples - Laravel API e React

Este projeto consiste em um sistema de blog funcional composto por uma API desenvolvida em Laravel e uma interface de usuário construída em React. O objetivo é demonstrar uma integração básica entre backend e frontend com persistência de dados.

---

### Tecnologias Utilizadas

Backend:

* PHP / Laravel Framework.
* PostgreSQL (Via Neon.tech).
* Composer para gerenciamento de dependências.

Frontend:

* JavaScript / React.
* Axios para requisições HTTP.
* Node.js / NPM.

---

### Estrutura do Repositório

O repositório está dividido em duas pastas principais:

1. /api - Onde reside todo o código do backend Laravel.
2. /web - Onde reside a aplicação frontend React.

---

### Requisitos Prévios

Antes de começar, você precisará ter instalado em sua máquina:

* PHP 8.2 ou superior.
* Node.js e NPM.
* Composer.

---

### Configuração do Backend (Laravel)

1. Entre na pasta da API:

```bash
cd api

```

2. Instale as dependências do PHP:

```bash
composer install

```

3. Crie o arquivo de ambiente:

```bash
cp .env.example .env

```

4. Configure as variáveis de banco de dados no arquivo .env com as credenciais do seu projeto no Neon:

```text
DB_CONNECTION=pgsql
DB_HOST=seu-host-do-neon.neon.tech
DB_PORT=5432
DB_DATABASE=nome-do-banco
DB_USERNAME=seu-usuario
DB_PASSWORD=sua-senha

```

5. Gere a chave da aplicação e execute as migrações:

```bash
php artisan key:generate
php artisan migrate

```

6. Inicie o servidor:

```bash
php artisan serve

```

---

### Configuração do Frontend (React)

1. Entre na pasta do frontend:

```bash
cd web

```

2. Instale as dependências do Node:

```bash
npm install

```

3. Configure a URL da API (geralmente http://localhost:8000/api) nos arquivos de serviço do React.
4. Inicie o servidor de desenvolvimento:

```bash
npm run dev

```

---

### Deploy

Este projeto foi estruturado para ser hospedado facilmente:

* Banco de Dados: Neon (PostgreSQL).
* Backend: Render (Web Service).
* Frontend: Render (Static Site) ou Vercel.

Lembre-se de configurar as variáveis de ambiente (Environment Variables) nos respectivos painéis de controle das plataformas de hospedagem.

---

### Funcionalidades Implementadas

* Listagem de posts (Read).
* Criação de novos posts (Create).
* Visualização de conteúdo individual.
* Exclusão de posts (Delete).
