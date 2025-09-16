<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ExchangeV2LineItem;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MoneyBag;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\TaxLine;

class ExchangeV2Additions
{
    protected $lineItems;
    protected $subtotalPriceSet;
    protected $taxLines;
    protected $totalPriceSet;

    
    /**
     * @return ExchangeV2LineItem[]
     */
    public function getLineItems()
    {
        return $this->lineItems;
    }

    
    /**
     * @return MoneyBag
     */
    public function getSubtotalPriceSet()
    {
        return $this->subtotalPriceSet;
    }

    
    /**
     * @return TaxLine[]
     */
    public function getTaxLines()
    {
        return $this->taxLines;
    }

    
    /**
     * @return MoneyBag
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
                $instance->lineItems = array_map(function($item) { return ExchangeV2LineItem::fromArray($item); }, $data['lineItems']);
            }
            if (isset($data['subtotalPriceSet']) && $data['subtotalPriceSet'] !== null) {
                $instance->subtotalPriceSet = MoneyBag::fromArray($data['subtotalPriceSet']);
            }
            if (isset($data['taxLines']) && $data['taxLines'] !== null) {
                $instance->taxLines = array_map(function($item) { return TaxLine::fromArray($item); }, $data['taxLines']);
            }
            if (isset($data['totalPriceSet']) && $data['totalPriceSet'] !== null) {
                $instance->totalPriceSet = MoneyBag::fromArray($data['totalPriceSet']);
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
