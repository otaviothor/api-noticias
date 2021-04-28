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

## autores
- `PUT base_url/api/v1/autores/{param}`
{
	"id": 1,
	"nome": "Otávio",
	"sobrenome": "Thor",
	"email": "otavioupdate@gmail.com",
	"ativo": false
}

- `PATCH base_url/api/v1/autores/{param}`
{
    "ativo": true
}

## noticias
- `POST base_url/api/v1/noticias`
{
	"autor_id": 6,
	"titulo": "primeira noticia de teste",
	"subtitulo": "subtitulo da primeira noticia de teste",
	"descricao": " alguma coisa que serve como descrição",
	"slug": "primeira-noticia-de-teste-de-slug-2",
	"ativo": true
}

- `PUT base_url/api/v1/noticias/{param}`
{
	"descricao": "essa descricao foi alterada baseado no slug da noticia",
    "ativo": false
}

- `PATCH base_url/api/v1/noticias/{param}`
{
    "ativo": true
}

## imagens da notícia
- `POST base_url/api/v1/imagens-noticias`
{
	"noticia_id": 25,
	"imagem": "https://images.unsplash.com/photo-1581822261290-991b38693d1b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80",
	"descricao": "imagem de astronauta",
	"ativo": true
}

- `PUT base_url/api/v1/imagens-noticias/{param}`
{
	"imagem": "https://images.unsplash.com/photo-1454789548928-9efd52dc4031?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80",
	"ativo": false
}

- `PATCH base_url/api/v1/imagens-noticias/{param}`
{
	"ativo": true
}
