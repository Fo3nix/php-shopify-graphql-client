<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMoneyBag;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMoneyV2;

/**
 * The order-level discount applied to a draft order.
 */
class ShopifyDraftOrderAppliedDiscount
{
    protected $amount;
    protected $amountSet;
    protected $amountV2;
    protected $description;
    protected $title;
    protected $value;
    protected $valueType;

    
    /**
     * Amount of the order-level discount that's applied to the draft order in shop currency.
     *
     * @return string
     */
    public function getAmount(): mixed
    {
        return $this->amount;
    }

    
    /**
     * The amount of money discounted, with values shown in both shop currency and presentment currency.
     *
     * @return ShopifyMoneyBag
     */
    public function getAmountSet(): ?ShopifyMoneyBag
    {
        return $this->amountSet;
    }

    
    /**
     * Amount of money discounted.
     *
     * @return ShopifyMoneyV2
     */
    public function getAmountV2(): ?ShopifyMoneyV2
    {
        return $this->amountV2;
    }

    
    /**
     * Description of the order-level discount.
     *
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    
    /**
     * Name of the order-level discount.
     *
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    
    /**
     * The order level discount amount. If `valueType` is `"percentage"`,
     * then `value` is the percentage discount.
     *
     * @return float
     */
    public function getValue(): ?float
    {
        return $this->value;
    }

    
    /**
     * Type of the order-level discount.
     *
     * @return string A ShopifyDraftOrderAppliedDiscountTypeEnumObject value
     */
    public function getValueType(): ?string
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
                $instance->amountSet = ShopifyMoneyBag::fromArray($data['amountSet']);
            }
            if (isset($data['amountV2']) && $data['amountV2'] !== null) {
                $instance->amountV2 = ShopifyMoneyV2::fromArray($data['amountV2']);
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
