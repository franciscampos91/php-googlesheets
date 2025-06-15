# 📄 PHP + Google Sheets API

Projeto simples em PHP que demonstra como conectar-se à **Google Sheets API** utilizando uma **conta de serviço** para leitura e gravação de dados em uma planilha do Google.

---

## 💡 Motivação

A motivação para este projeto surgiu da necessidade de armazenar e visualizar dados de forma simples e acessível, sem depender de bancos de dados tradicionais.

Como ferramentas como o **Tableau Public** não oferecem suporte a conexões diretas com bancos de dados na versão gratuita, o **Google Sheets** se apresentou como uma excelente alternativa gratuita, acessível e compatível.

Este projeto visa:

- ✅ Demonstrar como usar o **Google Sheets como um "banco de dados" leve** via API.
- ✅ Facilitar a **inserção e leitura de dados** com PHP.
- ✅ Criar uma base de dados simples que pode ser consumida por ferramentas externas.
- ✅ Explorar o uso da **Google Sheets API** com autenticação via conta de serviço.

---

## ✨ O que o projeto faz

- Conecta-se à API do Google Sheets usando autenticação via **arquivo JSON da conta de serviço**.
- Realiza a **inserção de dados** na planilha de forma dinâmica via formulário HTML.
- Realiza a **leitura dos dados** diretamente da planilha e exibe em uma tabela HTML.
- Usa a biblioteca oficial do Google Client (`google/apiclient`) via **Composer**.

---

## 🔌 Tecnologias utilizadas

- 🐘 PHP
- 📄 Google Sheets API
- ☁️ Google Cloud Platform (para gerar as credenciais)
- 🎼 Composer (para gerenciar dependências)
- 🌐 HTML + CSS


## 🚀 Como usar

1. Clone o repositório:
   ```
   git clone https://github.com/franciscampos91/php-googlesheets.git
   cd php-google-sheets
   ```

2. Instale as dependências: 

```
composer require google/apiclient:^2.0
```

3. Crie um projeto no [Google Cloud Console](https://console.cloud.google.com/):

   - Crie um novo projeto (ou selecione um já existente).
   - No menu lateral, vá em **APIs e serviços > Biblioteca**.
   - Pesquise por **Google Sheets API** e clique em **Ativar**.
   - Depois, vá em **APIs e serviços > Credenciais**.
   - Clique em **Criar credencial > Conta de serviço**.
   - Dê um nome (ex: `php-sheets`), continue e conclua.
   - Após criar, vá até a conta de serviço e clique em **Chaves**.
   - Clique em **Adicionar chave > Criar nova chave > JSON**.
   - Baixe o arquivo `.json`, renomeie para `credentials.json` e coloque na raiz do projeto.
   - Copie o e-mail da conta de serviço (ex: `php-sheets@projeto.iam.gserviceaccount.com`).
   - Vá até sua planilha no Google Sheets e clique em **Compartilhar**.
   - Adicione o e-mail da conta de serviço como **Editor**.

   ✅ Pronto! Sua aplicação PHP agora pode acessar e modificar a planilha via API.


## ⚠️ Importante

- 🔐 **Nunca envie o arquivo `credentials.json` para repositórios públicos.**  
  Ele contém informações sensíveis da sua conta de serviço e pode comprometer a segurança do seu projeto.

- 📉 A Google Sheets API possui **limites de uso gratuitos**, como número de requisições por minuto, por usuário e por dia.  
  Consulte os detalhes das cotas aqui: [Google Sheets API Quotas](https://developers.google.com/sheets/api/limits).

- 🛑 Se o limite for ultrapassado e seu projeto estiver na cota gratuita, as requisições serão **temporariamente bloqueadas**,  
  mas **não haverá cobrança automática** — você só será cobrado se ativar a cobrança manualmente no Google Cloud.

- ✅ Para evitar problemas, use a API de forma controlada e monitore pelo painel do [Google Cloud Console](https://console.cloud.google.com/).




## 🙋‍♂️ Autor
[Francis Campos](https://github.com/franciscampos91)
