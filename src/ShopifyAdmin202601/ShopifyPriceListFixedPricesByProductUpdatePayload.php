<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyPriceList;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyProduct;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyPriceListFixedPricesByProductBulkUpdateUserError;

/**
 * Return type for `priceListFixedPricesByProductUpdate` mutation.
 */
class ShopifyPriceListFixedPricesByProductUpdatePayload
{
    protected $priceList;
    protected $pricesToAddProducts;
    protected $pricesToDeleteProducts;
    protected $userErrors;

    
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
     * The product for which the fixed prices were added.
     *
     * @return ShopifyProduct[]
     */
    public function getPricesToAddProducts(): ?array
    {
        return $this->pricesToAddProducts;
    }

    
    /**
     * The product for which the fixed prices were deleted.
     *
     * @return ShopifyProduct[]
     */
    public function getPricesToDeleteProducts(): ?array
    {
        return $this->pricesToDeleteProducts;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyPriceListFixedPricesByProductBulkUpdateUserError[]
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
            if (isset($data['priceList']) && $data['priceList'] !== null) {
                $instance->priceList = ShopifyPriceList::fromArray($data['priceList']);
            }
            if (isset($data['pricesToAddProducts']) && $data['pricesToAddProducts'] !== null) {
                $instance->pricesToAddProducts = array_map(function($item) { return ShopifyProduct::fromArray($item); }, $data['pricesToAddProducts']);
            }
            if (isset($data['pricesToDeleteProducts']) && $data['pricesToDeleteProducts'] !== null) {
                $instance->pricesToDeleteProducts = array_map(function($item) { return ShopifyProduct::fromArray($item); }, $data['pricesToDeleteProducts']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyPriceListFixedPricesByProductBulkUpdateUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->priceList !== null) {
                $data['priceList'] = $this->priceList->asArray();
            }
            if ($this->pricesToAddProducts !== null) {
                $data['pricesToAddProducts'] = array_map(function($item) { return $item->asArray(); }, $this->pricesToAddProducts);
            }
            if ($this->pricesToDeleteProducts !== null) {
                $data['pricesToDeleteProducts'] = array_map(function($item) { return $item->asArray(); }, $this->pricesToDeleteProducts);
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
