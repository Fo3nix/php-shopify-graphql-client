<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyProduct;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyProductVariantConnection;

/**
 * A product and the subset of associated variants that are part of this delivery profile.
 */
class ShopifyDeliveryProfileItem implements ShopifyNode
{
    protected $id;
    protected $product;
    protected $variants;

    
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
     * A product associated with this profile.
     *
     * @return ShopifyProduct
     */
    public function getProduct(): ?ShopifyProduct
    {
        return $this->product;
    }

    
    /**
     * The product variants associated with this delivery profile.
     *
     * @return ShopifyProductVariantConnection
     */
    public function getVariants(): ?ShopifyProductVariantConnection
    {
        return $this->variants;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['product']) && $data['product'] !== null) {
                $instance->product = ShopifyProduct::fromArray($data['product']);
            }
            if (isset($data['variants']) && $data['variants'] !== null) {
                $instance->variants = ShopifyProductVariantConnection::fromArray($data['variants']);
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
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->product !== null) {
                $data['product'] = $this->product->asArray();
            }
            if ($this->variants !== null) {
                $data['variants'] = $this->variants->asArray();
            }
            return $data;
        }
}
