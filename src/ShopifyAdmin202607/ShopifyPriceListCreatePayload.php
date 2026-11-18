<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyPriceList;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyPriceListUserError;

/**
 * Return type for `priceListCreate` mutation.
 */
class ShopifyPriceListCreatePayload
{
    protected $priceList;
    protected $userErrors;

    
    /**
     * The newly created price list.
     *
     * @return ShopifyPriceList
     */
    public function getPriceList(): ?ShopifyPriceList
    {
        return $this->priceList;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyPriceListUserError[]
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
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyPriceListUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
