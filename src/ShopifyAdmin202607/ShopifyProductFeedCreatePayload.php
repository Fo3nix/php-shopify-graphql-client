<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyProductFeed;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyProductFeedCreateUserError;

/**
 * Return type for `productFeedCreate` mutation.
 */
class ShopifyProductFeedCreatePayload
{
    protected $productFeed;
    protected $userErrors;

    
    /**
     * The newly created product feed.
     *
     * @return ShopifyProductFeed
     */
    public function getProductFeed(): ?ShopifyProductFeed
    {
        return $this->productFeed;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyProductFeedCreateUserError[]
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
            if (isset($data['productFeed']) && $data['productFeed'] !== null) {
                $instance->productFeed = ShopifyProductFeed::fromArray($data['productFeed']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyProductFeedCreateUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->productFeed !== null) {
                $data['productFeed'] = $this->productFeed->asArray();
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
