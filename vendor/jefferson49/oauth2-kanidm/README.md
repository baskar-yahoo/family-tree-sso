# oauth2-kanidm
Kanidm Provider for the OAuth 2.0 Client

[![Latest Version](https://img.shields.io/github/release/jefferson49/oauth2-kanidm.svg?style=flat-square)](https://github.com/jefferson49/oauth2-kanidm/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](https://github.com/jefferson49/oauth2-kanidm/blob/main/LICENSE)

This package provides [Kanidm](https://kanidm.com/) OAuth 2.0 support for the PHP League's [OAuth 2.0 Client](https://github.com/thephpleague/oauth2-client).

## Installation

To install, use composer:

```
"repositories": [
    {
        "url": "https://github.com/jefferson49/oauth2-kanidm.git",
        "type": "git"
    }
],
"require": {
    "jefferson49/oauth2-kanidm": ">=1.0.0"
}
```

## Usage

Usage is the same as The League's OAuth client, using `\Jefferson49\OAuth2\Client\Provider\Kanidm` as the provider.

## License

The MIT License (MIT). Please see the [License File](https://github.com/jefferson49/oauth2-kanidm/blob/main/LICENSE) for more information.