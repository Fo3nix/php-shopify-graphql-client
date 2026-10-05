<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyProductVariantConnection;

class ShopifySubscriptionBillingAttemptInventoryError
{
    protected $code;
    protected $insufficientStockProductVariants;

    
    /**
     * @return ShopifySubscriptionBillingAttemptInventoryErrorCodeEnumObject
     */
    public function getCode()
    {
        return $this->code;
    }

    
    /**
     * @return ShopifyProductVariantConnection
     */
    public function getInsufficientStockProductVariants()
    {
        return $this->insufficientStockProductVariants;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['code']) && $data['code'] !== null) {
                $instance->code = $data['code'];
            }
            if (isset($data['insufficientStockProductVariants']) && $data['insufficientStockProductVariants'] !== null) {
                $instance->insufficientStockProductVariants = ShopifyProductVariantConnection::fromArray($data['insufficientStockProductVariants']);
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
            if ($this->code !== null) {
                $data['code'] = $this->code;
            }
            if ($this->insufficientStockProductVariants !== null) {
                $data['insufficientStockProductVariants'] = $this->insufficientStockProductVariants->asArray();
            }
            return $data;
        }
}
