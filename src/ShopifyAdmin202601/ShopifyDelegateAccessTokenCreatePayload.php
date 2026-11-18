<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyDelegateAccessToken;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyShop;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyDelegateAccessTokenCreateUserError;

/**
 * Return type for `delegateAccessTokenCreate` mutation.
 */
class ShopifyDelegateAccessTokenCreatePayload
{
    protected $delegateAccessToken;
    protected $shop;
    protected $userErrors;

    
    /**
     * The delegate access token.
     *
     * @return ShopifyDelegateAccessToken
     */
    public function getDelegateAccessToken(): ?ShopifyDelegateAccessToken
    {
        return $this->delegateAccessToken;
    }

    
    /**
     * The user's shop.
     *
     * @return ShopifyShop
     */
    public function getShop(): ?ShopifyShop
    {
        return $this->shop;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyDelegateAccessTokenCreateUserError[]
     */
    public function getUserErrors(): ?array
    {
        return $this->userErrors;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['delegateAccessToken']) && $data['delegateAccessToken'] !== null) {
                $instance->delegateAccessToken = ShopifyDelegateAccessToken::fromArray($data['delegateAccessToken']);
            }
            if (isset($data['shop']) && $data['shop'] !== null) {
                $instance->shop = ShopifyShop::fromArray($data['shop']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyDelegateAccessTokenCreateUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->delegateAccessToken !== null) {
                $data['delegateAccessToken'] = $this->delegateAccessToken->asArray();
            }
            if ($this->shop !== null) {
                $data['shop'] = $this->shop->asArray();
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
