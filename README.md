# ImageKit Auth
External endpoint to obtain ImgeKit authentication parameters.

### Requirements

- PHP version >= 7.4
- Composer
- Apache or Ngnix

## Installation

Clone this project:

```bash
git clone https://github.com/ovillafuerte94/imagekit-auth.git
cd imagekit-auth
composer install
```

Rename the file *.env.example* to *.env* and set the `Public key`, `Private key` and `URL Endpoint`.

```env
PUBLIC_KEY=********************************
PRIVATE_KEY=********************************
ENDPOINT=********************************
```

Configure a Host for the project and access it through your browser **http://your-host.com/index.php**

- Example response:
```javascript
{
    token: "1bab386f-45ea-49e1-9f0d-6afe49a5b250",
    expire: 1580372696,
    signature: "0f9d5a45e97c24fa9200a9d5543c9af1e2c45a54"
}
```

## Credits

- [Omar Villafuerte](https://github.com/ovillafuerte94)
