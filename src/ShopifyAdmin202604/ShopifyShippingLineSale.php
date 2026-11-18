<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyShippingLine;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifySaleTax;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMoneyBag;

/**
 * A sale associated with a shipping charge.
 */
class ShopifyShippingLineSale implements ShopifySale
{
    protected $actionType;
    protected $id;
    protected $lineType;
    protected $quantity;
    protected $shippingLine;
    protected $taxes;
    protected $totalAmount;
    protected $totalDiscountAmountAfterTaxes;
    protected $totalDiscountAmountBeforeTaxes;
    protected $totalTaxAmount;

    
    /**
     * The type of order action that the sale represents.
     *
     * @return string A ShopifySaleActionTypeEnumObject value
     */
    public function getActionType(): ?string
    {
        return $this->actionType;
    }

    
    /**
     * The unique ID for the sale.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * The line type associated with the sale.
     *
     * @return string A ShopifySaleLineTypeEnumObject value
     */
    public function getLineType(): ?string
    {
        return $this->lineType;
    }

    
    /**
     * The number of units either ordered or intended to be returned.
     *
     * @return int
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    
    /**
     * The shipping line item for the associated sale. `shippingLine` is not available if the `SaleActionType` is a return.
     *
     * @return ShopifyShippingLine
     */
    public function getShippingLine(): ?ShopifyShippingLine
    {
        return $this->shippingLine;
    }

    
    /**
     * All individual taxes associated with the sale.
     *
     * @return ShopifySaleTax[]
     */
    public function getTaxes(): ?array
    {
        return $this->taxes;
    }

    
    /**
     * The total sale amount after taxes and discounts.
     *
     * @return ShopifyMoneyBag
     */
    public function getTotalAmount(): ?ShopifyMoneyBag
    {
        return $this->totalAmount;
    }

    
    /**
     * The total discounts allocated to the sale after taxes.
     *
     * @return ShopifyMoneyBag
     */
    public function getTotalDiscountAmountAfterTaxes(): ?ShopifyMoneyBag
    {
        return $this->totalDiscountAmountAfterTaxes;
    }

    
    /**
     * The total discounts allocated to the sale before taxes.
     *
     * @return ShopifyMoneyBag
     */
    public function getTotalDiscountAmountBeforeTaxes(): ?ShopifyMoneyBag
    {
        return $this->totalDiscountAmountBeforeTaxes;
    }

    
    /**
     * The total amount of taxes for the sale.
     *
     * @return ShopifyMoneyBag
     */
    public function getTotalTaxAmount(): ?ShopifyMoneyBag
    {
        return $this->totalTaxAmount;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['actionType']) && $data['actionType'] !== null) {
                $instance->actionType = $data['actionType'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['lineType']) && $data['lineType'] !== null) {
                $instance->lineType = $data['lineType'];
            }
            if (isset($data['quantity']) && $data['quantity'] !== null) {
                $instance->quantity = $data['quantity'];
            }
            if (isset($data['shippingLine']) && $data['shippingLine'] !== null) {
                $instance->shippingLine = ShopifyShippingLine::fromArray($data['shippingLine']);
            }
            if (isset($data['taxes']) && $data['taxes'] !== null) {
                $instance->taxes = array_map(function($item) { return ShopifySaleTax::fromArray($item); }, $data['taxes']);
            }
            if (isset($data['totalAmount']) && $data['totalAmount'] !== null) {
                $instance->totalAmount = ShopifyMoneyBag::fromArray($data['totalAmount']);
            }
            if (isset($data['totalDiscountAmountAfterTaxes']) && $data['totalDiscountAmountAfterTaxes'] !== null) {
                $instance->totalDiscountAmountAfterTaxes = ShopifyMoneyBag::fromArray($data['totalDiscountAmountAfterTaxes']);
            }
            if (isset($data['totalDiscountAmountBeforeTaxes']) && $data['totalDiscountAmountBeforeTaxes'] !== null) {
                $instance->totalDiscountAmountBeforeTaxes = ShopifyMoneyBag::fromArray($data['totalDiscountAmountBeforeTaxes']);
            }
            if (isset($data['totalTaxAmount']) && $data['totalTaxAmount'] !== null) {
                $instance->totalTaxAmount = ShopifyMoneyBag::fromArray($data['totalTaxAmount']);
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
            if ($this->actionType !== null) {
                $data['actionType'] = $this->actionType;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->lineType !== null) {
                $data['lineType'] = $this->lineType;
            }
            if ($this->quantity !== null) {
                $data['quantity'] = $this->quantity;
            }
            if ($this->shippingLine !== null) {
                $data['shippingLine'] = $this->shippingLine->asArray();
            }
            if ($this->taxes !== null) {
                $data['taxes'] = array_map(function($item) { return $item->asArray(); }, $this->taxes);
            }
            if ($this->totalAmount !== null) {
                $data['totalAmount'] = $this->totalAmount->asArray();
            }
            if ($this->totalDiscountAmountAfterTaxes !== null) {
                $data['totalDiscountAmountAfterTaxes'] = $this->totalDiscountAmountAfterTaxes->asArray();
            }
            if ($this->totalDiscountAmountBeforeTaxes !== null) {
                $data['totalDiscountAmountBeforeTaxes'] = $this->totalDiscountAmountBeforeTaxes->asArray();
            }
            if ($this->totalTaxAmount !== null) {
                $data['totalTaxAmount'] = $this->totalTaxAmount->asArray();
            }
            return $data;
        }
}
