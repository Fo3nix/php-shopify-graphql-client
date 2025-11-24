<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyProductVariant;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyProduct;

class ShopifyCombinedListingChild
{
    protected $parentVariant;
    protected $product;

    
    /**
     * @return ShopifyProductVariant
     */
    public function getParentVariant()
    {
        return $this->parentVariant;
    }

    
    /**
     * @return ShopifyProduct
     */
    public function getProduct()
    {
        return $this->product;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['parentVariant']) && $data['parentVariant'] !== null) {
                $instance->parentVariant = ShopifyProductVariant::fromArray($data['parentVariant']);
            }
            if (isset($data['product']) && $data['product'] !== null) {
                $instance->product = ShopifyProduct::fromArray($data['product']);
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
            if ($this->parentVariant !== null) {
                $data['parentVariant'] = $this->parentVariant->asArray();
            }
            if ($this->product !== null) {
                $data['product'] = $this->product->asArray();
            }
            return $data;
        }
}
