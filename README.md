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
- `POST base_url/api/v1/noticias`
- `GET base_url/api/v1/noticias`
- `GET base_url/api/v1/noticias/{author}`
- `GET base_url/api/v1/noticias/{param}`
- `PUT base_url/api/v1/noticias/{param}`
- `PATCH base_url/api/v1/noticias/{param}`
- `DELETE base_url/api/v1/noticias/{author}`
- `DELETE base_url/api/v1/noticias/{param}`

### Rotas de imagens da notícia
- `POST base_url/api/v1/imagens-noticias`
- `GET base_url/api/v1/imagens-noticias`
- `GET base_url/api/v1/imagens-noticias/{news}`
- `GET base_url/api/v1/imagens-noticias/{id}`
- `PUT base_url/api/v1/imagens-noticias/{param}`
- `PATCH base_url/api/v1/imagens-noticias/{param}`
- `DELETE base_url/api/v1/imagens-noticias/{news}`
- `DELETE base_url/api/v1/imagens-noticias/{id}`

## Melhorias
- validar os dados enviados na requisição
- gerar o slug baseado no título da notícia
- preencher o campo updated_at ao atualizar algum valor

### Gostou do projeto, dê uma estrela ⭐
