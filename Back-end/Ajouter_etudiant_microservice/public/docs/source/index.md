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


<!-- START_e8374757eed810f76848ca5643106498 -->
## api/ajouter_etudiant
> Example request:

```bash
curl -X POST "http://localhost/api/ajouter_etudiant" 
```

```javascript
const url = new URL("http://localhost/api/ajouter_etudiant");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/ajouter_etudiant`


<!-- END_e8374757eed810f76848ca5643106498 -->


