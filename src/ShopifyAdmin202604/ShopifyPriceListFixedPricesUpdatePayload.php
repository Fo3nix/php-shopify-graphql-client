<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyPriceList;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyPriceListPrice;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyPriceListPriceUserError;

/**
 * Return type for `priceListFixedPricesUpdate` mutation.
 */
class ShopifyPriceListFixedPricesUpdatePayload
{
    protected $deletedFixedPriceVariantIds;
    protected $priceList;
    protected $pricesAdded;
    protected $userErrors;

    
    /**
     * A list of deleted variant IDs for prices.
     *
     * @return string[]
     */
    public function getDeletedFixedPriceVariantIds(): ?array
    {
        return $this->deletedFixedPriceVariantIds;
    }

    
    /**
     * The price list for which the fixed prices were modified.
     *
     * @return ShopifyPriceList
     */
    public function getPriceList(): ?ShopifyPriceList
    {
        return $this->priceList;
    }

    
    /**
     * The prices that were added to the price list.
     *
     * @return ShopifyPriceListPrice[]
     */
    public function getPricesAdded(): ?array
    {
        return $this->pricesAdded;
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
            if (isset($data['priceList']) && $data['priceList'] !== null) {
                $instance->priceList = ShopifyPriceList::fromArray($data['priceList']);
            }
            if (isset($data['pricesAdded']) && $data['pricesAdded'] !== null) {
                $instance->pricesAdded = array_map(function($item) { return ShopifyPriceListPrice::fromArray($item); }, $data['pricesAdded']);
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
            if ($this->priceList !== null) {
                $data['priceList'] = $this->priceList->asArray();
            }
            if ($this->pricesAdded !== null) {
                $data['pricesAdded'] = array_map(function($item) { return $item->asArray(); }, $this->pricesAdded);
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
