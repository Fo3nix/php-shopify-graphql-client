<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyReturnReasonDefinition;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMoneyV2;

/**
 * An unverified return line item.
 */
class ShopifyUnverifiedReturnLineItem implements ShopifyNode, ShopifyReturnLineItemType
{
    protected $customerNote;
    protected $id;
    protected $processableQuantity;
    protected $processedQuantity;
    protected $quantity;
    protected $refundableQuantity;
    protected $refundedQuantity;
    protected $returnReason;
    protected $returnReasonDefinition;
    protected $returnReasonNote;
    protected $unitPrice;
    protected $unprocessedQuantity;

    
    /**
     * A note from the customer that describes the item to be returned. Maximum length: 300 characters.
     *
     * @return string
     */
    public function getCustomerNote(): ?string
    {
        return $this->customerNote;
    }

    
    /**
     * A globally-unique ID.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * The quantity that can be processed.
     *
     * @return int
     */
    public function getProcessableQuantity(): ?int
    {
        return $this->processableQuantity;
    }

    
    /**
     * The quantity that has been processed.
     *
     * @return int
     */
    public function getProcessedQuantity(): ?int
    {
        return $this->processedQuantity;
    }

    
    /**
     * The quantity being returned.
     *
     * @return int
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    
    /**
     * The quantity that can be refunded.
     *
     * @return int
     */
    public function getRefundableQuantity(): ?int
    {
        return $this->refundableQuantity;
    }

    
    /**
     * The quantity that was refunded.
     *
     * @return int
     */
    public function getRefundedQuantity(): ?int
    {
        return $this->refundedQuantity;
    }

    
    /**
     * The reason for returning the item.
     *
     * @return string A ShopifyReturnReasonEnumObject value
     */
    public function getReturnReason(): ?string
    {
        return $this->returnReason;
    }

    
    /**
     * The standardized reason for why the item is being returned.
     *
     * @return ShopifyReturnReasonDefinition
     */
    public function getReturnReasonDefinition(): ?ShopifyReturnReasonDefinition
    {
        return $this->returnReasonDefinition;
    }

    
    /**
     * Additional information about the reason for the return. Maximum length: 255 characters.
     *
     * @return string
     */
    public function getReturnReasonNote(): ?string
    {
        return $this->returnReasonNote;
    }

    
    /**
     * The unit price of the unverified return line item.
     *
     * @return ShopifyMoneyV2
     */
    public function getUnitPrice(): ?ShopifyMoneyV2
    {
        return $this->unitPrice;
    }

    
    /**
     * The quantity that hasn't been processed.
     *
     * @return int
     */
    public function getUnprocessedQuantity(): ?int
    {
        return $this->unprocessedQuantity;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['customerNote']) && $data['customerNote'] !== null) {
                $instance->customerNote = $data['customerNote'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['processableQuantity']) && $data['processableQuantity'] !== null) {
                $instance->processableQuantity = $data['processableQuantity'];
            }
            if (isset($data['processedQuantity']) && $data['processedQuantity'] !== null) {
                $instance->processedQuantity = $data['processedQuantity'];
            }
            if (isset($data['quantity']) && $data['quantity'] !== null) {
                $instance->quantity = $data['quantity'];
            }
            if (isset($data['refundableQuantity']) && $data['refundableQuantity'] !== null) {
                $instance->refundableQuantity = $data['refundableQuantity'];
            }
            if (isset($data['refundedQuantity']) && $data['refundedQuantity'] !== null) {
                $instance->refundedQuantity = $data['refundedQuantity'];
            }
            if (isset($data['returnReason']) && $data['returnReason'] !== null) {
                $instance->returnReason = $data['returnReason'];
            }
            if (isset($data['returnReasonDefinition']) && $data['returnReasonDefinition'] !== null) {
                $instance->returnReasonDefinition = ShopifyReturnReasonDefinition::fromArray($data['returnReasonDefinition']);
            }
            if (isset($data['returnReasonNote']) && $data['returnReasonNote'] !== null) {
                $instance->returnReasonNote = $data['returnReasonNote'];
            }
            if (isset($data['unitPrice']) && $data['unitPrice'] !== null) {
                $instance->unitPrice = ShopifyMoneyV2::fromArray($data['unitPrice']);
            }
            if (isset($data['unprocessedQuantity']) && $data['unprocessedQuantity'] !== null) {
                $instance->unprocessedQuantity = $data['unprocessedQuantity'];
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
            if ($this->customerNote !== null) {
                $data['customerNote'] = $this->customerNote;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->processableQuantity !== null) {
                $data['processableQuantity'] = $this->processableQuantity;
            }
            if ($this->processedQuantity !== null) {
                $data['processedQuantity'] = $this->processedQuantity;
            }
            if ($this->quantity !== null) {
                $data['quantity'] = $this->quantity;
            }
            if ($this->refundableQuantity !== null) {
                $data['refundableQuantity'] = $this->refundableQuantity;
            }
            if ($this->refundedQuantity !== null) {
                $data['refundedQuantity'] = $this->refundedQuantity;
            }
            if ($this->returnReason !== null) {
                $data['returnReason'] = $this->returnReason;
            }
            if ($this->returnReasonDefinition !== null) {
                $data['returnReasonDefinition'] = $this->returnReasonDefinition->asArray();
            }
            if ($this->returnReasonNote !== null) {
                $data['returnReasonNote'] = $this->returnReasonNote;
            }
            if ($this->unitPrice !== null) {
                $data['unitPrice'] = $this->unitPrice->asArray();
            }
            if ($this->unprocessedQuantity !== null) {
                $data['unprocessedQuantity'] = $this->unprocessedQuantity;
            }
            return $data;
        }
}
