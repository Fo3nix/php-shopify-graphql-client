<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyShippingLine;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMoneyBag;

class ShopifyRefundShippingLine
{
    protected $id;
    protected $shippingLine;
    protected $subtotalAmountSet;
    protected $taxAmountSet;

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return ShopifyShippingLine
     */
    public function getShippingLine()
    {
        return $this->shippingLine;
    }

    
    /**
     * @return ShopifyMoneyBag
     */
    public function getSubtotalAmountSet()
    {
        return $this->subtotalAmountSet;
    }

    
    /**
     * @return ShopifyMoneyBag
     */
    public function getTaxAmountSet()
    {
        return $this->taxAmountSet;
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
            if (isset($data['shippingLine']) && $data['shippingLine'] !== null) {
                $instance->shippingLine = ShopifyShippingLine::fromArray($data['shippingLine']);
            }
            if (isset($data['subtotalAmountSet']) && $data['subtotalAmountSet'] !== null) {
                $instance->subtotalAmountSet = ShopifyMoneyBag::fromArray($data['subtotalAmountSet']);
            }
            if (isset($data['taxAmountSet']) && $data['taxAmountSet'] !== null) {
                $instance->taxAmountSet = ShopifyMoneyBag::fromArray($data['taxAmountSet']);
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
            if ($this->shippingLine !== null) {
                $data['shippingLine'] = $this->shippingLine->asArray();
            }
            if ($this->subtotalAmountSet !== null) {
                $data['subtotalAmountSet'] = $this->subtotalAmountSet->asArray();
            }
            if ($this->taxAmountSet !== null) {
                $data['taxAmountSet'] = $this->taxAmountSet->asArray();
            }
            return $data;
        }
}
