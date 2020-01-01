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


<!-- START_e87acdb4ab9c38a855ac6f7239213c82 -->
## Display a listing of the resource.

GET /absences

> Example request:

```bash
curl -X GET -G "http://localhost/api/consulter_absences1" 
```

```javascript
const url = new URL("http://localhost/api/consulter_absences1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

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
    "data": []
}
```

### HTTP Request
`GET api/consulter_absences{mat}`


<!-- END_e87acdb4ab9c38a855ac6f7239213c82 -->


