<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Carbon\Carbon;

/**
 * A token that delegates a set of scopes from the original permission.
 *
 * To learn more about creating delegate access tokens, refer to
 * [Delegate OAuth access tokens to subsystems](https://shopify.dev/docs/apps/build/authentication-authorization/access-tokens/use-delegate-tokens).
 */
class ShopifyDelegateAccessToken
{
    protected $accessScopes;
    protected $accessToken;
    protected $createdAt;
    protected $expiresIn;

    
    /**
     * The list of permissions associated with the token.
     *
     * @return string[]
     */
    public function getAccessScopes(): ?array
    {
        return $this->accessScopes;
    }

    
    /**
     * The issued delegate access token.
     *
     * @return string
     */
    public function getAccessToken(): ?string
    {
        return $this->accessToken;
    }

    
    /**
     * The date and time when the delegate access token was created.
     *
     * @return Carbon
     */
    public function getCreatedAt(): ?Carbon
    {
        return $this->createdAt;
    }

    
    /**
     * The number of seconds until the delegate access token expires.
     *
     * @return int
     */
    public function getExpiresIn(): ?int
    {
        return $this->expiresIn;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['accessScopes']) && $data['accessScopes'] !== null) {
                $instance->accessScopes = $data['accessScopes'];
            }
            if (isset($data['accessToken']) && $data['accessToken'] !== null) {
                $instance->accessToken = $data['accessToken'];
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['expiresIn']) && $data['expiresIn'] !== null) {
                $instance->expiresIn = $data['expiresIn'];
            }
            return $instance;
        }

        /**
         * @param string $json
         * @return self
         */
        public static function fromJson(string $json): self
        {
            $data = json_decode($json, true);
            if ($data === null && json_last_error() !== JSON_ERROR_NONE) {
                throw new \InvalidArgumentException('Invalid JSON provided to fromJson method: ' . json_last_error_msg());
            }
            return self::fromArray($data);
        }

        /**
         * Converts this object to an array.
         * @return array
         */
        public function asArray(): array
        {
            $data = [];
            if ($this->accessScopes !== null) {
                $data['accessScopes'] = $this->accessScopes;
            }
            if ($this->accessToken !== null) {
                $data['accessToken'] = $this->accessToken;
            }
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->expiresIn !== null) {
                $data['expiresIn'] = $this->expiresIn;
            }
            return $data;
        }
}
