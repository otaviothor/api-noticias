# API de notícias com Lumen
Nesse projeto foi desenvolvido uma API RESTful de notícias usando o microframework baseado no Laravel, o Lumen, seguindo o Repository Pattern

## Descrição da rotas

### Rotas do autor
- `POST base_url/api/v1/autores`
```json
// corpo da requisicao em json
{
  "nome": "Nome",
  "sobrenome": "Sobrenome",
  "email": "seu@email.com",
  "senha": "senha",
  "sexo": "M", 
  "ativo": true
}

// resposta da requisicao em json
{  
  "status_code": 201, 
  "data": {
    "nome": "Nome",
    "sobrenome": "Sobrenome",
    "email": "seu@email.com",
    "sexo": "M", 
    "ativo": true,
    "id": 1
  }  
}
```

- `GET base_url/api/v1/autores`
- `GET base_url/api/v1/autores/{id}`
- `PUT base_url/api/v1/autores/{param}`
- `PATCH base_url/api/v1/autores/{param}`
- `DELETE base_url/api/v1/autores/{id}`

### Rotas de notícia
- `POST base_url/api/v1/noticias`
- `GET base_url/api/v1/noticias`
- `GET base_url/api/v1/noticias/{param}`
- `GET base_url/api/v1/noticias/autor/{author}`
- `PUT base_url/api/v1/noticias/{param}`
- `PATCH base_url/api/v1/noticias/{param}`
- `DELETE base_url/api/v1/noticias/{param}`
- `DELETE base_url/api/v1/noticias/autor/{author}`

### Rotas de imagens da notícia
- `POST base_url/api/v1/imagens-noticias`
- `GET base_url/api/v1/imagens-noticias`
- `GET base_url/api/v1/imagens-noticias/{id}`
- `GET base_url/api/v1/imagens-noticias/noticia/{news}`
- `PUT base_url/api/v1/imagens-noticias/{param}`
- `PATCH base_url/api/v1/imagens-noticias/{param}`
- `DELETE base_url/api/v1/imagens-noticias/{id}`
- `DELETE base_url/api/v1/imagens-noticias/noticia/{news}`

Veja a [documentação][docs_site] do projeto

## Melhorias para implementar
- validar os dados enviados na requisição
- gerar o slug baseado no título da notícia
- preencher o campo updated_at ao atualizar algum valor

### Gostou do projeto, dê uma estrela ⭐

[docs_site]: https://github.com/otaviothor/api-noticias/tree/main/docs/documentation.md
