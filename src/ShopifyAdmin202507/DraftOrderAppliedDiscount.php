<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MoneyBag;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MoneyV2;

class DraftOrderAppliedDiscount
{
    protected $amount;
    protected $amountSet;
    protected $amountV2;
    protected $description;
    protected $title;
    protected $value;
    protected $valueType;

    
    /**
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    
    /**
     * @return MoneyBag
     */
    public function getAmountSet()
    {
        return $this->amountSet;
    }

    
    /**
     * @return MoneyV2
     */
    public function getAmountV2()
    {
        return $this->amountV2;
    }

    
    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    
    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    
    /**
     * @return float
     */
    public function getValue()
    {
        return $this->value;
    }

    
    /**
     * @return DraftOrderAppliedDiscountTypeEnumObject
     */
    public function getValueType()
    {
        return $this->valueType;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['amount']) && $data['amount'] !== null) {
                $instance->amount = $data['amount'];
            }
            if (isset($data['amountSet']) && $data['amountSet'] !== null) {
                $instance->amountSet = MoneyBag::fromArray($data['amountSet']);
            }
            if (isset($data['amountV2']) && $data['amountV2'] !== null) {
                $instance->amountV2 = MoneyV2::fromArray($data['amountV2']);
            }
            if (isset($data['description']) && $data['description'] !== null) {
                $instance->description = $data['description'];
            }
            if (isset($data['title']) && $data['title'] !== null) {
                $instance->title = $data['title'];
            }
            if (isset($data['value']) && $data['value'] !== null) {
                $instance->value = $data['value'];
            }
            if (isset($data['valueType']) && $data['valueType'] !== null) {
                $instance->valueType = $data['valueType'];
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
            if ($this->amount !== null) {
                $data['amount'] = $this->amount;
            }
            if ($this->amountSet !== null) {
                $data['amountSet'] = $this->amountSet->asArray();
            }
            if ($this->amountV2 !== null) {
                $data['amountV2'] = $this->amountV2->asArray();
            }
            if ($this->description !== null) {
                $data['description'] = $this->description;
            }
            if ($this->title !== null) {
                $data['title'] = $this->title;
            }
            if ($this->value !== null) {
                $data['value'] = $this->value;
            }
            if ($this->valueType !== null) {
                $data['valueType'] = $this->valueType;
            }
            return $data;
        }
}
