<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyPriceListPriceUserError;

/**
 * Return type for `priceListFixedPricesDelete` mutation.
 */
class ShopifyPriceListFixedPricesDeletePayload
{
    protected $deletedFixedPriceVariantIds;
    protected $userErrors;

    
    /**
     * A list of product variant IDs whose fixed prices were removed from the price list.
     *
     * @return string[]
     */
    public function getDeletedFixedPriceVariantIds(): ?array
    {
        return $this->deletedFixedPriceVariantIds;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyPriceListPriceUserError[]
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
            if (isset($data['deletedFixedPriceVariantIds']) && $data['deletedFixedPriceVariantIds'] !== null) {
                $instance->deletedFixedPriceVariantIds = $data['deletedFixedPriceVariantIds'];
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyPriceListPriceUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->deletedFixedPriceVariantIds !== null) {
                $data['deletedFixedPriceVariantIds'] = $this->deletedFixedPriceVariantIds;
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
