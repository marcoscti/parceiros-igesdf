# Parcerias IgesDF

![WordPress Version](https://img.shields.io/badge/WordPress-v5.8+-blue.svg)
![PHP Version](https://img.shields.io/badge/PHP-v7.4+-777bb4.svg)
![License](https://img.shields.io/badge/License-GPLv2-green.svg)
![Bootstrap Version](https://img.shields.io/badge/Bootstrap-v5.3.8-563d7c.svg)

Plugin para gerenciamento e exibição de parcerias do **IgesDF** com suporte a visualização em grade e detalhes via modal.

## 📝 Descrição

O plugin permite que administradores cadastrem parcerias através de um Custom Post Type (CPT). A exibição no front-end é feita via shortcodes que geram grids responsivos, utilizando o framework **Bootstrap 5** para o layout e componentes de modal.

### Ideal para:
- Sites institucionais
- Portais de transparência

## 🚀 Recursos
- **Gestão Simplificada:** Cadastro intuitivo via painel administrativo.
- **Dois Modos de Exibição:** Galeria simples de logos ou cards com informações detalhadas.
- **Integração Bootstrap:** Modais nativos para exibição de conteúdo expandido.

## 🛠️ Tecnologias e Dependências

Para o funcionamento correto do plugin, certifique-se de cumprir os seguintes requisitos:

- **WordPress:** Versão 5.8 ou superior.
- **PHP:** Versão 7.4 ou superior.
- **Bootstrap 5.3.8:** Carregado automaticamente via CDN pelo plugin (CSS e JS Bundle).

## 💾 Instalação

1. Faça o upload da pasta `parceiros-igesdf` para o diretório `/wp-content/plugins/`
   ou envie o arquivo ZIP pelo painel do WordPress.
2. Ative o plugin em **Plugins → Plugins Instalados**.
3. No menu lateral do WordPress, acesse a nova opção **Parceiros**.
4. Cadastre suas parcerias enviando uma imagem destacada e preenchendo o conteúdo (opcional).
5. Utilize o shortcode em qualquer editor de conteúdo.

## 📖 Como Usar

### 1. Cadastro de Parceiro
No painel, vá em **Parceiros → Adicionar Novo** e preencha:

| Campo | Descrição |
| :--- | :--- |
| **Nome** | Nome da empresa ou instituição. |
| **Conteúdo (Editor)** | Texto e informações detalhadas que aparecerão no modal (Shortcode de detalhes). |
| **Imagem Destacada** | Logotipo da parceria. |

### 2. Shortcode
O plugin oferece duas opções de visualização:

**Galeria Simples (Apenas logos em grade de 6 colunas):**
`[galeria_parcerias]`

**Galeria com Detalhes (Cards com botão "Saiba mais" e Modal):**
`[galeria_parcerias_detail]`

**Onde pode ser usado:**
- Bloco de Shortcode (Gutenberg)
- Widget Shortcode (Elementor)
- Arquivos de template PHP via `<?php echo do_shortcode('[galeria_parcerias]'); ?>`
