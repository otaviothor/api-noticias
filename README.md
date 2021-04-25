# API de notícias com Lumen
Nesse projeto foi desenvolvido uma API RESTful de notícias usando o microframework baseado no Laravel, o Lumen, seguindo o Repository Pattern

## Descrição da rotas

### Rotas do autor
- `POST base_url/api/v1/autores`
- `GET base_url/api/v1/autores`
- `GET base_url/api/v1/autores/{id}`
- `PUT base_url/api/v1/autores/{param}`
- `PATCH base_url/api/v1/autores/{param}`
- `DELETE base_url/api/v1/autores/{id}`

### Rotas de notícia
- `GET base_url/api/v1/noticias`
- `SHOW base_url/api/v1/noticias`
- `POST base_url/api/v1/noticias`
- `PUT base_url/api/v1/noticias`
- `PATCH base_url/api/v1/noticias`
- `DELETE base_url/api/v1/noticias`

### Rotas de imagens da notícia
- `GET base_url/api/v1/imagens-noticias`
- `SHOW base_url/api/v1/imagens-noticias`
- `POST base_url/api/v1/imagens-noticias`
- `PUT base_url/api/v1/imagens-noticias`
- `PATCH base_url/api/v1/imagens-noticias`
- `DELETE base_url/api/v1/imagens-noticias`

## Melhorias
- validar os dados enviados na requisição
- gerar o slug na notícia baseado no nome
- preencher o campo updated_at ao atualizar algum valor

### Gostou do projeto, dê uma estrela ⭐
