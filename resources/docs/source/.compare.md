---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#general


<!-- START_ac9367f43bc50d60909260eabae1a50b -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/estacaoano" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"vel"}'

```

```javascript
const url = new URL(
    "http://localhost/api/estacaoano"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "vel"
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/estacaoano`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `name` | string |  required  | The name of the estacao_ano.
    
<!-- END_ac9367f43bc50d60909260eabae1a50b -->

<!-- START_fc0df71431476d3cbd9c54bc533f7f10 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/estacaoano/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/estacaoano/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/estacaoano/create`


<!-- END_fc0df71431476d3cbd9c54bc533f7f10 -->

<!-- START_9b6f2019d0832386db72ff5ca481269d -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/estacaoano" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"commodi"}'

```

```javascript
const url = new URL(
    "http://localhost/api/estacaoano"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "commodi"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/estacaoano`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `name` | string |  required  | The name of the estacao_ano.
    
<!-- END_9b6f2019d0832386db72ff5ca481269d -->

<!-- START_e3f60edc242c282ef7dd85fb79904244 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/estacaoano/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"est"}'

```

```javascript
const url = new URL(
    "http://localhost/api/estacaoano/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "est"
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
[]
```

### HTTP Request
`GET api/estacaoano/{estacaoano}`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `name` | string |  required  | The name of the estacao_ano.
    
<!-- END_e3f60edc242c282ef7dd85fb79904244 -->

<!-- START_fe7038d840480acd12ef5a85db33b769 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/estacaoano/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/estacaoano/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/estacaoano/{estacaoano}/edit`


<!-- END_fe7038d840480acd12ef5a85db33b769 -->

<!-- START_bb9bea4a80e7d2e9ad363c9441d81728 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/estacaoano/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"aspernatur"}'

```

```javascript
const url = new URL(
    "http://localhost/api/estacaoano/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "aspernatur"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/estacaoano/{estacaoano}`

`PATCH api/estacaoano/{estacaoano}`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `name` | string |  required  | The name of the estacao_ano.
    
<!-- END_bb9bea4a80e7d2e9ad363c9441d81728 -->

<!-- START_558954fe083fe8eb1137e5b41809b740 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/estacaoano/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/estacaoano/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/estacaoano/{estacaoano}`


<!-- END_558954fe083fe8eb1137e5b41809b740 -->

<!-- START_341e7f25be1d7d91e0e5e5ec7336bd4d -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/marca" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/marca"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/marca`


<!-- END_341e7f25be1d7d91e0e5e5ec7336bd4d -->

<!-- START_c49e14106b72a38c027857f4695b8d7e -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/marca/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/marca/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/marca/create`


<!-- END_c49e14106b72a38c027857f4695b8d7e -->

<!-- START_5552fb01a9ed19f6da3ba1675b1bcfa7 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/marca" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"qui"}'

```

```javascript
const url = new URL(
    "http://localhost/api/marca"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "qui"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/marca`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `name` | string |  required  | The name of the marca.
    
<!-- END_5552fb01a9ed19f6da3ba1675b1bcfa7 -->

<!-- START_77172cf3ead25ddd689efd0b22cbe60a -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/marca/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"est"}'

```

```javascript
const url = new URL(
    "http://localhost/api/marca/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "est"
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\Marca] 1"
}
```

### HTTP Request
`GET api/marca/{marca}`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `name` | string |  required  | The name of the marca.
    
<!-- END_77172cf3ead25ddd689efd0b22cbe60a -->

<!-- START_b94b900d09285789102860caa649861b -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/marca/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/marca/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\Marca] 1"
}
```

### HTTP Request
`GET api/marca/{marca}/edit`


<!-- END_b94b900d09285789102860caa649861b -->

<!-- START_87a6d20f9c7639ec3fa766e00d733c8d -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/marca/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"quo"}'

```

```javascript
const url = new URL(
    "http://localhost/api/marca/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "quo"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/marca/{marca}`

`PATCH api/marca/{marca}`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `name` | string |  required  | The name of the marca.
    
<!-- END_87a6d20f9c7639ec3fa766e00d733c8d -->

<!-- START_c4bf8885e3db5b2d9eea89b16b6c08e1 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/marca/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/marca/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/marca/{marca}`


<!-- END_c4bf8885e3db5b2d9eea89b16b6c08e1 -->

<!-- START_7a22d55ad161ecbcd6505c433909ffac -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/roupa" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/roupa"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": [
        {
            "id": 10,
            "marca_id": 11,
            "estacao_ano_id": 3,
            "tamanho_id": 4,
            "tipo-roupa_id": 7,
            "user_id": 19,
            "preco": 29,
            "descricao": "casaco malha",
            "image": "images\/35Lso6thD590q9Xi5baP4PAxA0ATDAsKrXQQUpZj.webp",
            "created_at": "2019-11-06 17:37:23",
            "updated_at": "2019-11-06 17:37:23",
            "deleted_at": null,
            "user": {
                "id": 19,
                "name": "Freida Hintz",
                "email": "myrtie45@example.net",
                "email_verified_at": "2019-11-06 09:43:57",
                "role_id": 3,
                "created_at": "2019-11-06 09:43:57",
                "updated_at": "2019-11-06 09:43:57",
                "deleted_at": null
            }
        },
        {
            "id": 11,
            "marca_id": 6,
            "estacao_ano_id": 4,
            "tamanho_id": 2,
            "tipo-roupa_id": 5,
            "user_id": 27,
            "preco": 10,
            "descricao": "calções",
            "image": "images\/qJnlq6pUcrjpYADt9WGjOjhtmgT6YjTqZ0f3I9YD.jpeg",
            "created_at": "2019-11-06 19:31:37",
            "updated_at": "2019-11-06 19:31:37",
            "deleted_at": null,
            "user": {
                "id": 27,
                "name": "Jevon Murray",
                "email": "barrows.danial@example.net",
                "email_verified_at": "2019-11-06 09:43:57",
                "role_id": 3,
                "created_at": "2019-11-06 09:43:57",
                "updated_at": "2019-11-06 09:43:57",
                "deleted_at": null
            }
        },
        {
            "id": 12,
            "marca_id": 10,
            "estacao_ano_id": 1,
            "tamanho_id": 4,
            "tipo-roupa_id": 1,
            "user_id": 12,
            "preco": 20,
            "descricao": "camisolas",
            "image": "images\/pnPTkcWaQ2G8IIwxrQBhxpJ4iI9CsGfVwQR1Dfpn.jpeg",
            "created_at": "2019-11-06 19:37:01",
            "updated_at": "2019-11-06 19:37:01",
            "deleted_at": null,
            "user": {
                "id": 12,
                "name": "Mohammed Lynch V",
                "email": "schmeler.julianne@example.org",
                "email_verified_at": "2019-11-06 09:43:57",
                "role_id": 3,
                "created_at": "2019-11-06 09:43:57",
                "updated_at": "2019-11-06 09:43:57",
                "deleted_at": null
            }
        },
        {
            "id": 13,
            "marca_id": 9,
            "estacao_ano_id": 3,
            "tamanho_id": 3,
            "tipo-roupa_id": null,
            "user_id": 14,
            "preco": 17,
            "descricao": "Vestido",
            "image": "images\/sxWDiClXV8SfVOK4WGKIr8JIHDdhJii7op3m5JLv.jpeg",
            "created_at": "2019-11-08 00:52:22",
            "updated_at": "2019-11-08 00:52:22",
            "deleted_at": null,
            "user": {
                "id": 14,
                "name": "Kiara Hyatt",
                "email": "gianni37@example.com",
                "email_verified_at": "2019-11-06 09:43:57",
                "role_id": 3,
                "created_at": "2019-11-06 09:43:57",
                "updated_at": "2019-11-06 09:43:57",
                "deleted_at": null
            }
        },
        {
            "id": 14,
            "marca_id": 8,
            "estacao_ano_id": 1,
            "tamanho_id": 4,
            "tipo-roupa_id": null,
            "user_id": 14,
            "preco": 55,
            "descricao": "Camisola",
            "image": "images\/sj2mccEiVCxbdVQK43GWl0gp2WvOvjdED0Ywhty8.jpeg",
            "created_at": "2019-11-08 00:58:06",
            "updated_at": "2019-11-08 00:58:06",
            "deleted_at": null,
            "user": {
                "id": 14,
                "name": "Kiara Hyatt",
                "email": "gianni37@example.com",
                "email_verified_at": "2019-11-06 09:43:57",
                "role_id": 3,
                "created_at": "2019-11-06 09:43:57",
                "updated_at": "2019-11-06 09:43:57",
                "deleted_at": null
            }
        },
        {
            "id": 15,
            "marca_id": 11,
            "estacao_ano_id": 3,
            "tamanho_id": 8,
            "tipo-roupa_id": null,
            "user_id": 25,
            "preco": 40,
            "descricao": "Blusa Fresca",
            "image": "images\/CQrzCTnD3pf9F3aFmZDoqbtBNqFjX1QHfdsyf5Z2.jpeg",
            "created_at": "2019-11-08 01:05:52",
            "updated_at": "2019-11-08 01:05:52",
            "deleted_at": null,
            "user": {
                "id": 25,
                "name": "Alva Howell",
                "email": "yhowe@example.org",
                "email_verified_at": "2019-11-06 09:43:57",
                "role_id": 3,
                "created_at": "2019-11-06 09:43:57",
                "updated_at": "2019-11-06 09:43:57",
                "deleted_at": null
            }
        },
        {
            "id": 16,
            "marca_id": 6,
            "estacao_ano_id": 5,
            "tamanho_id": 3,
            "tipo-roupa_id": null,
            "user_id": 11,
            "preco": 20,
            "descricao": "Calça de Ganga",
            "image": "images\/y7tLyhqazbQLO4Dbe7SYLnxmxpZC80bL39qBG6Mj.jpeg",
            "created_at": "2019-11-08 10:43:19",
            "updated_at": "2019-11-08 10:43:19",
            "deleted_at": null,
            "user": {
                "id": 11,
                "name": "Mr. Cortez Barton PhD",
                "email": "myriam51@example.net",
                "email_verified_at": "2019-11-06 09:43:57",
                "role_id": 3,
                "created_at": "2019-11-06 09:43:57",
                "updated_at": "2019-11-06 09:43:57",
                "deleted_at": null
            }
        },
        {
            "id": 17,
            "marca_id": 8,
            "estacao_ano_id": 1,
            "tamanho_id": 3,
            "tipo-roupa_id": null,
            "user_id": 25,
            "preco": 26,
            "descricao": "Camisola de lã amarela",
            "image": "images\/fCvHrHwYGxq0n8TXlSkzPTLhSgRQRNFRYWewfssd.png",
            "created_at": "2019-11-08 10:51:25",
            "updated_at": "2019-11-08 10:51:25",
            "deleted_at": null,
            "user": {
                "id": 25,
                "name": "Alva Howell",
                "email": "yhowe@example.org",
                "email_verified_at": "2019-11-06 09:43:57",
                "role_id": 3,
                "created_at": "2019-11-06 09:43:57",
                "updated_at": "2019-11-06 09:43:57",
                "deleted_at": null
            }
        }
    ],
    "message": "Listagem das roupas",
    "result": "OK"
}
```

### HTTP Request
`GET api/roupa`


<!-- END_7a22d55ad161ecbcd6505c433909ffac -->

<!-- START_d12ece41d85e4d897819b6364f931230 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/roupa/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/roupa/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/roupa/create`


<!-- END_d12ece41d85e4d897819b6364f931230 -->

<!-- START_8db5cb2c1ba4b4b838f52e25efcc0797 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/roupa" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"marca_id":"sunt","estacao_ano_id":"amet","tamanho_id":"magni","tipo_id":"aliquid","user_id":2,"preco":8,"descricao":"laudantium","image":"aut"}'

```

```javascript
const url = new URL(
    "http://localhost/api/roupa"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "marca_id": "sunt",
    "estacao_ano_id": "amet",
    "tamanho_id": "magni",
    "tipo_id": "aliquid",
    "user_id": 2,
    "preco": 8,
    "descricao": "laudantium",
    "image": "aut"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/roupa`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `marca_id` | string |  required  | The marca of the roupa.
        `estacao_ano_id` | string |  required  | The estacao_ano_id of the roupa.
        `tamanho_id` | string |  required  | The tamanho_id of the roupa.
        `tipo_id` | string |  required  | The tipo_id of the roupa.
        `user_id` | integer |  required  | The user creator of the roupa.
        `preco` | integer |  required  | The preco creator of the roupa.
        `descricao` | string |  required  | The descricao creator of the roupa.
        `image` | file |  required  | The image of the roupa.
    
<!-- END_8db5cb2c1ba4b4b838f52e25efcc0797 -->

<!-- START_aa3793c95996999d4cc8159984bab528 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/roupa/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"marca_id":"voluptatem","estacao_ano_id":"quam","tamanho_id":"inventore","tipo_id":"neque","user_id":4,"preco":18,"descricao":"quo","image":"consequuntur"}'

```

```javascript
const url = new URL(
    "http://localhost/api/roupa/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "marca_id": "voluptatem",
    "estacao_ano_id": "quam",
    "tamanho_id": "inventore",
    "tipo_id": "neque",
    "user_id": 4,
    "preco": 18,
    "descricao": "quo",
    "image": "consequuntur"
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\Roupa] 1"
}
```

### HTTP Request
`GET api/roupa/{roupa}`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `marca_id` | string |  required  | The marca of the roupa.
        `estacao_ano_id` | string |  required  | The estacao_ano_id of the roupa.
        `tamanho_id` | string |  required  | The tamanho_id of the roupa.
        `tipo_id` | string |  required  | The tipo_id of the roupa.
        `user_id` | integer |  required  | The user creator of the roupa.
        `preco` | integer |  required  | The preco creator of the roupa.
        `descricao` | string |  required  | The descricao creator of the roupa.
        `image` | file |  required  | The image of the roupa.
    
<!-- END_aa3793c95996999d4cc8159984bab528 -->

<!-- START_c58621cd440180e7ef6d64bcfb5b6ce9 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/roupa/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/roupa/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\Roupa] 1"
}
```

### HTTP Request
`GET api/roupa/{roupa}/edit`


<!-- END_c58621cd440180e7ef6d64bcfb5b6ce9 -->

<!-- START_9be43a831bea2c7e6adb6f7b55496dad -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/roupa/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"marca_id":"nesciunt","estacao_ano_id":"tempora","tamanho_id":"velit","tipo_id":"esse","user_id":19,"preco":17,"descricao":"sit","image":"dolor"}'

```

```javascript
const url = new URL(
    "http://localhost/api/roupa/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "marca_id": "nesciunt",
    "estacao_ano_id": "tempora",
    "tamanho_id": "velit",
    "tipo_id": "esse",
    "user_id": 19,
    "preco": 17,
    "descricao": "sit",
    "image": "dolor"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/roupa/{roupa}`

`PATCH api/roupa/{roupa}`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `marca_id` | string |  required  | The marca of the roupa.
        `estacao_ano_id` | string |  required  | The estacao_ano_id of the roupa.
        `tamanho_id` | string |  required  | The tamanho_id of the roupa.
        `tipo_id` | string |  required  | The tipo_id of the roupa.
        `user_id` | integer |  required  | The user creator of the roupa.
        `preco` | integer |  required  | The preco creator of the roupa.
        `descricao` | string |  required  | The descricao creator of the roupa.
        `image` | file |  required  | The image of the roupa.
    
<!-- END_9be43a831bea2c7e6adb6f7b55496dad -->

<!-- START_b3a0465317b5b3b09053161c8d5d033b -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/roupa/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/roupa/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/roupa/{roupa}`


<!-- END_b3a0465317b5b3b09053161c8d5d033b -->

<!-- START_248b4e695ff0bf790be78308dfddfe95 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/tamanho" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/tamanho"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/tamanho`


<!-- END_248b4e695ff0bf790be78308dfddfe95 -->

<!-- START_c4ffee467b4a8aac3a1453b5bd40a7b1 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/tamanho/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/tamanho/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/tamanho/create`


<!-- END_c4ffee467b4a8aac3a1453b5bd40a7b1 -->

<!-- START_acaa186c99486ad30aaecf66cbe846dd -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/tamanho" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"velit"}'

```

```javascript
const url = new URL(
    "http://localhost/api/tamanho"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "velit"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/tamanho`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `name` | string |  required  | The name of the tamanho.
    
<!-- END_acaa186c99486ad30aaecf66cbe846dd -->

<!-- START_0a63ea4e8bbb2681cadcef5293e26f18 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/tamanho/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"dignissimos"}'

```

```javascript
const url = new URL(
    "http://localhost/api/tamanho/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "dignissimos"
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": 1,
    "name": "XS",
    "created_at": "2019-11-06 00:54:33",
    "updated_at": "2019-11-06 00:54:33",
    "deleted_at": null
}
```

### HTTP Request
`GET api/tamanho/{tamanho}`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `name` | string |  required  | The name of the tamanho.
    
<!-- END_0a63ea4e8bbb2681cadcef5293e26f18 -->

<!-- START_2916c6ebfd4c637b40b39ce168c90e70 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/tamanho/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/tamanho/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/tamanho/{tamanho}/edit`


<!-- END_2916c6ebfd4c637b40b39ce168c90e70 -->

<!-- START_ab4fd93e0cdf6e39caa640139e9163f9 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/tamanho/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"maiores"}'

```

```javascript
const url = new URL(
    "http://localhost/api/tamanho/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "maiores"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/tamanho/{tamanho}`

`PATCH api/tamanho/{tamanho}`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `name` | string |  required  | The name of the tamanho.
    
<!-- END_ab4fd93e0cdf6e39caa640139e9163f9 -->

<!-- START_f605a5fac0b233d963b0c2651da97dbc -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/tamanho/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/tamanho/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/tamanho/{tamanho}`


<!-- END_f605a5fac0b233d963b0c2651da97dbc -->

<!-- START_07e7f3ae367cb99564afa991e133a461 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/tipo" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/tipo"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/tipo`


<!-- END_07e7f3ae367cb99564afa991e133a461 -->

<!-- START_26d20894bfb7310b4c3140ce204e3adc -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/tipo/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/tipo/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/tipo/create`


<!-- END_26d20894bfb7310b4c3140ce204e3adc -->

<!-- START_80a06024db4f0d37a70ede1272c3a4d5 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/tipo" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"expedita"}'

```

```javascript
const url = new URL(
    "http://localhost/api/tipo"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "expedita"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/tipo`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `name` | string |  required  | The name of the tipo.
    
<!-- END_80a06024db4f0d37a70ede1272c3a4d5 -->

<!-- START_f695ab48314b4d59f8f1ea5d829afe74 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/tipo/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"explicabo"}'

```

```javascript
const url = new URL(
    "http://localhost/api/tipo/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "explicabo"
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": 1,
    "name": "Camisola",
    "created_at": "2019-11-06 00:57:44",
    "updated_at": "2019-11-06 00:57:44",
    "deleted_at": null
}
```

### HTTP Request
`GET api/tipo/{tipo}`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `name` | string |  required  | The name of the tipo.
    
<!-- END_f695ab48314b4d59f8f1ea5d829afe74 -->

<!-- START_fc3faaddf5db2691ce9cbe79e1408004 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/tipo/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/tipo/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/tipo/{tipo}/edit`


<!-- END_fc3faaddf5db2691ce9cbe79e1408004 -->

<!-- START_208c69de33e9cfaba5c8dccd74aebec5 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/tipo/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"eligendi"}'

```

```javascript
const url = new URL(
    "http://localhost/api/tipo/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "eligendi"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/tipo/{tipo}`

`PATCH api/tipo/{tipo}`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `name` | string |  required  | The name of the tipo.
    
<!-- END_208c69de33e9cfaba5c8dccd74aebec5 -->

<!-- START_7c0de1b3482697b6ea2f65ccaa6f0c49 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/tipo/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/tipo/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/tipo/{tipo}`


<!-- END_7c0de1b3482697b6ea2f65ccaa6f0c49 -->


