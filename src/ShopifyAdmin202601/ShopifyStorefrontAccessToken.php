<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyAccessScope;
use Carbon\Carbon;

/**
 * A token that delegates unauthenticated access scopes to clients that need to access the [Storefront API](https://shopify.dev/docs/api/storefront). Storefront access tokens enable headless storefronts and custom applications to interact with a store on behalf of customers without requiring authentication.
 *
 * The token provides specific permissions, such as reading [`Product`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product) data, managing carts, or creating [`Customer`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Customer) accounts. An app can have a maximum of 100 active storefront access tokens for each [`Shop`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Shop).
 *
 * Learn more about [building with the Storefront API](https://shopify.dev/docs/storefronts/headless/building-with-the-storefront-api/getting-started).
 */
class ShopifyStorefrontAccessToken implements ShopifyNode
{
    protected $accessScopes;
    protected $accessToken;
    protected $createdAt;
    protected $id;
    protected $title;
    protected $updatedAt;

    
    /**
     * List of permissions associated with the token.
     *
     * @return ShopifyAccessScope[]
     */
    public function getAccessScopes(): ?array
    {
        return $this->accessScopes;
    }

    
    /**
     * The issued public access token.
     *
     * @return string
     */
    public function getAccessToken(): ?string
    {
        return $this->accessToken;
    }

    
    /**
     * The date and time when the public access token was created.
     *
     * @return Carbon
     */
    public function getCreatedAt(): ?Carbon
    {
        return $this->createdAt;
    }

    
    /**
     * A globally-unique ID.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * An arbitrary title for each token determined by the developer, used for reference         purposes.
     *
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    
    /**
     * The date and time when the storefront access token was updated.
     *
     * @return Carbon
     */
    public function getUpdatedAt(): ?Carbon
    {
        return $this->updatedAt;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['accessScopes']) && $data['accessScopes'] !== null) {
                $instance->accessScopes = array_map(function($item) { return ShopifyAccessScope::fromArray($item); }, $data['accessScopes']);
            }
            if (isset($data['accessToken']) && $data['accessToken'] !== null) {
                $instance->accessToken = $data['accessToken'];
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['title']) && $data['title'] !== null) {
                $instance->title = $data['title'];
            }
            if (isset($data['updatedAt']) && $data['updatedAt'] !== null) {
                $instance->updatedAt = new Carbon($data['updatedAt']);
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
                $data['accessScopes'] = array_map(function($item) { return $item->asArray(); }, $this->accessScopes);
            }
            if ($this->accessToken !== null) {
                $data['accessToken'] = $this->accessToken;
            }
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->title !== null) {
                $data['title'] = $this->title;
            }
            if ($this->updatedAt !== null) {
                $data['updatedAt'] = $this->updatedAt->toIso8601String();
            }
            return $data;
        }
}
