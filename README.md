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



## 🙋‍♂️ Autor
[Francis Campos](https://github.com/franciscampos91)