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

#Clima

APIs for managing Clima
<!-- START_9fa71975b718a4cc102933172c5c61de -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/clima" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/clima"
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
null
```

### HTTP Request
`GET api/clima`


<!-- END_9fa71975b718a4cc102933172c5c61de -->

<!-- START_724f17b84fe3295de0995f2dc27ec11e -->
## Almacena un nuevo recurso en el almacenamiento.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/clima" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"temp":4665.131832801,"feels_like":305.382409665,"temp_min":2322.87,"temp_max":46354138.4,"pressure":10,"humidity":3}'

```

```javascript
const url = new URL(
    "http://localhost/api/clima"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "temp": 4665.131832801,
    "feels_like": 305.382409665,
    "temp_min": 2322.87,
    "temp_max": 46354138.4,
    "pressure": 10,
    "humidity": 3
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
`POST api/clima`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `temp` | float |  required  | La temperatura del clima.
        `feels_like` | float |  required  | La temperatura que siente el ser humano.
        `temp_min` | float |  required  | La temperatura mínima.
        `temp_max` | float |  required  | La temperatura máxima.
        `pressure` | integer |  required  | La presión en unidad hPa.
        `humidity` | integer |  required  | La humedad en porcentaje.
    
<!-- END_724f17b84fe3295de0995f2dc27ec11e -->

#general


<!-- START_4dfafe7f87ec132be3c8990dd1fa9078 -->
## Return an empty response simply to trigger the storage of the CSRF cookie in the browser.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/sanctum/csrf-cookie" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/sanctum/csrf-cookie"
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
`GET sanctum/csrf-cookie`


<!-- END_4dfafe7f87ec132be3c8990dd1fa9078 -->


