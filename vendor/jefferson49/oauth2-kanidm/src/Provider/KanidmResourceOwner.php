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

use League\OAuth2\Client\Provider\ResourceOwnerInterface;

class KanidmResourceOwner implements ResourceOwnerInterface
{
    /**
     * @var array
     */
    protected $response;

    /**
     * @param array $response
     */  
    public function __construct(array $response)
    {
        $this->response = $response;
    }

    /**
     * Get Id.
     */

    public function getId()
    {
        return $this->response['sub'];
    }

    /**
     * Get preferred user name.
     *
     * @return string|null
     */
    public function getPreferredUsername(): ?string
    {
        return $this->getResponseValue('preferred_username');
    }

    /**
     * Get preferred display name.
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->getResponseValue('name');
    }    

    /**
     * Get email address.
     *
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->getResponseValue('email');
    }    

    /**
     * Get user data as an array.
     *
     * @return array
     */
    public function toArray(): array
    {
        return $this->response;
    }

    /**
     * Get the response value for a certain key
     *
     * @return string|null
     */    
    private function getResponseValue($key): ?string
    {
        if (array_key_exists($key, $this->response)) {
            return $this->response[$key];
        }
        else {
            return null;
        }
    }    
}
