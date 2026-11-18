<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMoneyBag;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyLineItem;

/**
 * A line item from an [`Order`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Order) that's included in a [`Fulfillment`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Fulfillment). Links the fulfillment to specific items from the original order, tracking how many units were fulfilled.
 *
 * > Note: The discounted total excludes order-level discounts, showing only line-item specific discount amounts.
 */
class ShopifyFulfillmentLineItem implements ShopifyNode
{
    protected $createdAt;
    protected $discountedTotal;
    protected $discountedTotalSet;
    protected $id;
    protected $lineItem;
    protected $originalTotal;
    protected $originalTotalSet;
    protected $quantity;

    
    /**
     * The date and time when the fulfillment line item was created.
     *
     * @return Carbon
     */
    public function getCreatedAt(): ?Carbon
    {
        return $this->createdAt;
    }

    
    /**
     * The total price after discounts are applied.
     *
     * @return string
     */
    public function getDiscountedTotal(): mixed
    {
        return $this->discountedTotal;
    }

    
    /**
     * The total price after discounts are applied in shop and presentment currencies. This value doesn't include order-level discounts.
     *
     * @return ShopifyMoneyBag
     */
    public function getDiscountedTotalSet(): ?ShopifyMoneyBag
    {
        return $this->discountedTotalSet;
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
     * The associated order's line item.
     *
     * @return ShopifyLineItem
     */
    public function getLineItem(): ?ShopifyLineItem
    {
        return $this->lineItem;
    }

    
    /**
     * The total price before discounts are applied.
     *
     * @return string
     */
    public function getOriginalTotal(): mixed
    {
        return $this->originalTotal;
    }

    
    /**
     * The total price before discounts are applied in shop and presentment currencies.
     *
     * @return ShopifyMoneyBag
     */
    public function getOriginalTotalSet(): ?ShopifyMoneyBag
    {
        return $this->originalTotalSet;
    }

    
    /**
     * Number of line items in the fulfillment.
     *
     * @return int
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['discountedTotal']) && $data['discountedTotal'] !== null) {
                $instance->discountedTotal = $data['discountedTotal'];
            }
            if (isset($data['discountedTotalSet']) && $data['discountedTotalSet'] !== null) {
                $instance->discountedTotalSet = ShopifyMoneyBag::fromArray($data['discountedTotalSet']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['lineItem']) && $data['lineItem'] !== null) {
                $instance->lineItem = ShopifyLineItem::fromArray($data['lineItem']);
            }
            if (isset($data['originalTotal']) && $data['originalTotal'] !== null) {
                $instance->originalTotal = $data['originalTotal'];
            }
            if (isset($data['originalTotalSet']) && $data['originalTotalSet'] !== null) {
                $instance->originalTotalSet = ShopifyMoneyBag::fromArray($data['originalTotalSet']);
            }
            if (isset($data['quantity']) && $data['quantity'] !== null) {
                $instance->quantity = $data['quantity'];
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
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->discountedTotal !== null) {
                $data['discountedTotal'] = $this->discountedTotal;
            }
            if ($this->discountedTotalSet !== null) {
                $data['discountedTotalSet'] = $this->discountedTotalSet->asArray();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->lineItem !== null) {
                $data['lineItem'] = $this->lineItem->asArray();
            }
            if ($this->originalTotal !== null) {
                $data['originalTotal'] = $this->originalTotal;
            }
            if ($this->originalTotalSet !== null) {
                $data['originalTotalSet'] = $this->originalTotalSet->asArray();
            }
            if ($this->quantity !== null) {
                $data['quantity'] = $this->quantity;
            }
            return $data;
        }
}
