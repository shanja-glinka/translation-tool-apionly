# UI-translation-tool
Tool for creating translation dictionaries _API only_

## Usage

Help routing:
```
Request: https://../help/routing
```

Response:
```json
Response: {
    "ok": 200,
    "result": {
        "/": "*",
        "/info": "*",
        "/help/routing": "*",
        "/translations": "GET|POST",
        "/translations/languages": "GET",
        "/translations/language/:any": "GET"
    }
}
```
