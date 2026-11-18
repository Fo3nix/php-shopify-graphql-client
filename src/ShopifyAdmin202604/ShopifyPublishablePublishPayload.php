<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyPublishableHydrator;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyPublishable;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyShop;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyUserError;

/**
 * Return type for `publishablePublish` mutation.
 */
class ShopifyPublishablePublishPayload
{
    protected $publishable;
    protected $shop;
    protected $userErrors;

    
    /**
     * Resource that has been published.
     *
     * @return ShopifyPublishable
     */
    public function getPublishable(): ?ShopifyPublishable
    {
        return $this->publishable;
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
     * @return ShopifyUserError[]
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
            if (isset($data['publishable']) && $data['publishable'] !== null) {
                $instance->publishable = ShopifyPublishableHydrator::fromArray($data['publishable']);
            }
            if (isset($data['shop']) && $data['shop'] !== null) {
                $instance->shop = ShopifyShop::fromArray($data['shop']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->publishable !== null) {
                $data['publishable'] = ShopifyPublishableHydrator::toArray($this->publishable);
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
