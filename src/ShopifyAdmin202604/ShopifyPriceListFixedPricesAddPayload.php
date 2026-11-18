<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyPriceListPrice;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyPriceListPriceUserError;

/**
 * Return type for `priceListFixedPricesAdd` mutation.
 */
class ShopifyPriceListFixedPricesAddPayload
{
    protected $prices;
    protected $userErrors;

    
    /**
     * The list of fixed prices that were added to or updated in the price list.
     *
     * @return ShopifyPriceListPrice[]
     */
    public function getPrices(): ?array
    {
        return $this->prices;
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
            if (isset($data['prices']) && $data['prices'] !== null) {
                $instance->prices = array_map(function($item) { return ShopifyPriceListPrice::fromArray($item); }, $data['prices']);
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
            if ($this->prices !== null) {
                $data['prices'] = array_map(function($item) { return $item->asArray(); }, $this->prices);
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
