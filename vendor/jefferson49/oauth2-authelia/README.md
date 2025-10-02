# oauth2-authelia
Authelia Provider for the OAuth 2.0 Client

[![Latest Version](https://img.shields.io/github/release/jefferson49/oauth2-authelia.svg?style=flat-square)](https://github.com/jefferson49/oauth2-authelia/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](https://github.com/jefferson49/oauth2-authelia/blob/main/LICENSE)

This package provides [Authelia](https://authelia.com/) OAuth 2.0 support for the PHP League's [OAuth 2.0 Client](https://github.com/thephpleague/oauth2-client).

## Installation

To install, use composer:

```
"repositories": [
    {
        "url": "https://github.com/jefferson49/oauth2-authelia.git",
        "type": "git"
    }
],
"require": {
    "jefferson49/oauth2-authelia": ">=1.0.0"
}
```

## Usage

Usage is the same as The League's OAuth client, using `\Jefferson49\OAuth2\Client\Provider\Authelia` as the provider.

## License

The MIT License (MIT). Please see the [License File](https://github.com/jefferson49/oauth2-authelia/blob/main/LICENSE) for more information.