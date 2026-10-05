<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyExchangeV2LineItem;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMoneyBag;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyTaxLine;

class ShopifyExchangeV2Additions
{
    protected $lineItems;
    protected $subtotalPriceSet;
    protected $taxLines;
    protected $totalPriceSet;

    
    /**
     * @return ShopifyExchangeV2LineItem[]
     */
    public function getLineItems()
    {
        return $this->lineItems;
    }

    
    /**
     * @return ShopifyMoneyBag
     */
    public function getSubtotalPriceSet()
    {
        return $this->subtotalPriceSet;
    }

    
    /**
     * @return ShopifyTaxLine[]
     */
    public function getTaxLines()
    {
        return $this->taxLines;
    }

    
    /**
     * @return ShopifyMoneyBag
     */
    public function getTotalPriceSet()
    {
        return $this->totalPriceSet;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['lineItems']) && $data['lineItems'] !== null) {
                $instance->lineItems = array_map(function($item) { return ShopifyExchangeV2LineItem::fromArray($item); }, $data['lineItems']);
            }
            if (isset($data['subtotalPriceSet']) && $data['subtotalPriceSet'] !== null) {
                $instance->subtotalPriceSet = ShopifyMoneyBag::fromArray($data['subtotalPriceSet']);
            }
            if (isset($data['taxLines']) && $data['taxLines'] !== null) {
                $instance->taxLines = array_map(function($item) { return ShopifyTaxLine::fromArray($item); }, $data['taxLines']);
            }
            if (isset($data['totalPriceSet']) && $data['totalPriceSet'] !== null) {
                $instance->totalPriceSet = ShopifyMoneyBag::fromArray($data['totalPriceSet']);
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
            if ($this->lineItems !== null) {
                $data['lineItems'] = array_map(function($item) { return $item->asArray(); }, $this->lineItems);
            }
            if ($this->subtotalPriceSet !== null) {
                $data['subtotalPriceSet'] = $this->subtotalPriceSet->asArray();
            }
            if ($this->taxLines !== null) {
                $data['taxLines'] = array_map(function($item) { return $item->asArray(); }, $this->taxLines);
            }
            if ($this->totalPriceSet !== null) {
                $data['totalPriceSet'] = $this->totalPriceSet->asArray();
            }
            return $data;
        }
}
