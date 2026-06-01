=== Parcerias IgesDF ===
Contributors: marcoscti
Requires at least: 5.8
Tested up to: 6.7
Requires PHP: 7.4
Stable tag: 0.0.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Plugin para gerenciamento e exibição de Parcerias do IgesDF via shortcodes.

== Description ==

O plugin **Parcerias IgesDF** permite cadastrar, gerenciar e exibir logomarcas de instituições e empresas parceiras do IgesDF diretamente pelo painel administrativo do WordPress.

As parcerias são exibidas no site por meio de **shortcodes**, organizados em grids responsivos usando Bootstrap 5, ideal para rodapés ou páginas de transparência.

O plugin carrega automaticamente as dependências do Bootstrap 5.3.8 (CSS e JS Bundle) via CDN para garantir o funcionamento correto dos componentes.

Ideal para:
- Sites institucionais

Principais recursos:
- CRUD completo no admin
- Dois tipos de galeria (simples e com detalhes em modal)

== Installation ==

1. Faça o upload da pasta `parceiros-igesdf` para o diretório `/wp-content/plugins/`
   ou envie o arquivo ZIP pelo painel do WordPress.
2. Ative o plugin em **Plugins → Plugins Instalados**.
3. No menu lateral do admin, acesse **Parceiros**.
4. Cadastre seus parceiros.
5. Utilize um dos shortcodes disponíveis.

== How to Use ==

### Cadastro de Parceiro

Acesse:
Painel WordPress → Parcerias IgesDF → Adicionar Nova

Preencha os campos:

- **Título** (Obrigatório)
  Nome da instituição ou empresa.

- **Conteúdo** (Opcional)
  Informações detalhadas sobre a parceria (exibidas no modal do shortcode de detalhes).

- **Imagem destacada** (Recomendado)
  Logotipo do parceiro (formatos recomendados: PNG transparente ou SVG).

### Shortcode

Use os shortcodes abaixo:

`[galeria_parcerias]`
Exibe apenas os logos em uma grade compacta.

`[galeria_parcerias_detail]`
Exibe cards com o nome e botão para abrir detalhes em um modal.

Você pode inserir o shortcode em:

- Bloco **Shortcode** do Gutenberg
- Widget **Shortcode** do Elementor
- Conteúdo de páginas ou posts