<?php

/**
 * league/oauth2-client
 * Copyright (C) 2025 Alex Bilbie <hello@alexbilbie.com>
 *                    <https://github.com/thephpleague/oauth2-client>
 *
 * oauth2-kanidm:
 * Copyright (C) 2025 Jefferson49
 *                    <https://github.com/Jefferson49>
 *
 * MIT License
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 *
 * 
 * oauth2-kanidm
 *
 * Kanidm Provider for the PHP League's OAuth 2.0 Client
 * 
 */

namespace Jefferson49\OAuth2\Client\Provider;

use League\OAuth2\Client\Provider\GenericProvider;
use League\OAuth2\Client\Token\AccessToken;
use League\OAuth2\Client\Tool\BearerAuthorizationTrait;


class Kanidm extends GenericProvider
{
    use BearerAuthorizationTrait;

    /**
     * @var string Base URL of the nextcloud instance (not including trailing slash).
     */
    protected $kanidmUrl = '';

    protected function createResourceOwner(array $response, AccessToken $token): KanidmResourceOwner
    {
        return new KanidmResourceOwner($response);
    }

    /**
     * @inheritdoc
     */
    public function getBaseAuthorizationUrl()
    {
        return $this->kanidmUrl . '/ui/oauth2';
    }

    /**
     * @inheritdoc
     */
    public function getBaseAccessTokenUrl(array $params)
    {
        return $this->kanidmUrl . '/oauth2/token';
    }

    /**
     * @inheritdoc
     */
    public function getResourceOwnerDetailsUrl(AccessToken $token)
    {
        return $this->kanidmUrl . '/oauth2/openid/' . $this->clientId . '/userinfo';
    }

    /**
     * @inheritdoc
     */    
    protected function getRequiredOptions()
    {
        return [
            'kanidmUrl',
        ];
    }    

    /**
     * @inheritdoc
     */
    public function getDefaultScopes(): array
    {
        return [
            'openid',
            'email',
            'profile',
        ];
    }
    
    /**
     * Returns the string that should be used to separate scopes when building
     * the URL for requesting an access token.
     *
     * @return string Scope separator, defaults to ','
     */
    protected function getScopeSeparator()
    {
        return ' ';
    }
}
