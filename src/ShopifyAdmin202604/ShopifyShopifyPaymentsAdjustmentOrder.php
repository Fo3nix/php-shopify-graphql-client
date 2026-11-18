<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMoneyV2;

/**
 * The adjustment order object.
 */
class ShopifyShopifyPaymentsAdjustmentOrder
{
    protected $amount;
    protected $fees;
    protected $link;
    protected $name;
    protected $net;
    protected $orderTransactionId;

    
    /**
     * The amount of the adjustment order.
     *
     * @return ShopifyMoneyV2
     */
    public function getAmount(): ?ShopifyMoneyV2
    {
        return $this->amount;
    }

    
    /**
     * The fee of the adjustment order.
     *
     * @return ShopifyMoneyV2
     */
    public function getFees(): ?ShopifyMoneyV2
    {
        return $this->fees;
    }

    
    /**
     * The link to the adjustment order.
     *
     * @return string
     */
    public function getLink(): mixed
    {
        return $this->link;
    }

    
    /**
     * The name of the adjustment order.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    
    /**
     * The net of the adjustment order.
     *
     * @return ShopifyMoneyV2
     */
    public function getNet(): ?ShopifyMoneyV2
    {
        return $this->net;
    }

    
    /**
     * The ID of the order transaction.
     *
     * @return string
     */
    public function getOrderTransactionId(): mixed
    {
        return $this->orderTransactionId;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['amount']) && $data['amount'] !== null) {
                $instance->amount = ShopifyMoneyV2::fromArray($data['amount']);
            }
            if (isset($data['fees']) && $data['fees'] !== null) {
                $instance->fees = ShopifyMoneyV2::fromArray($data['fees']);
            }
            if (isset($data['link']) && $data['link'] !== null) {
                $instance->link = $data['link'];
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['net']) && $data['net'] !== null) {
                $instance->net = ShopifyMoneyV2::fromArray($data['net']);
            }
            if (isset($data['orderTransactionId']) && $data['orderTransactionId'] !== null) {
                $instance->orderTransactionId = $data['orderTransactionId'];
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
                $data['amount'] = $this->amount->asArray();
            }
            if ($this->fees !== null) {
                $data['fees'] = $this->fees->asArray();
            }
            if ($this->link !== null) {
                $data['link'] = $this->link;
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            if ($this->net !== null) {
                $data['net'] = $this->net->asArray();
            }
            if ($this->orderTransactionId !== null) {
                $data['orderTransactionId'] = $this->orderTransactionId;
            }
            return $data;
        }
}
