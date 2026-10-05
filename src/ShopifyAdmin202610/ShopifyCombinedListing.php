<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCombinedListingChildConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyProduct;

class ShopifyCombinedListing
{
    protected $combinedListingChildren;
    protected $parentProduct;

    
    /**
     * @return ShopifyCombinedListingChildConnection
     */
    public function getCombinedListingChildren()
    {
        return $this->combinedListingChildren;
    }

    
    /**
     * @return ShopifyProduct
     */
    public function getParentProduct()
    {
        return $this->parentProduct;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['combinedListingChildren']) && $data['combinedListingChildren'] !== null) {
                $instance->combinedListingChildren = ShopifyCombinedListingChildConnection::fromArray($data['combinedListingChildren']);
            }
            if (isset($data['parentProduct']) && $data['parentProduct'] !== null) {
                $instance->parentProduct = ShopifyProduct::fromArray($data['parentProduct']);
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
            if ($this->combinedListingChildren !== null) {
                $data['combinedListingChildren'] = $this->combinedListingChildren->asArray();
            }
            if ($this->parentProduct !== null) {
                $data['parentProduct'] = $this->parentProduct->asArray();
            }
            return $data;
        }
}
