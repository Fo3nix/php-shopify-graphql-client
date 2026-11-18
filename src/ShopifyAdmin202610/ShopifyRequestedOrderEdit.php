<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyRequestedOrderEditLineItems;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyOrder;

/**
 * A buyer-initiated request to edit unfulfilled line items on an order.
 */
class ShopifyRequestedOrderEdit implements ShopifyNode
{
    protected $createdAt;
    protected $id;
    protected $lineItems;
    protected $order;
    protected $requestDeclinedAt;
    protected $requestResolvedAt;
    protected $requestedAt;
    protected $status;
    protected $updatedAt;

    
    /**
     * The date and time when the requested order edit was created.
     *
     * @return Carbon
     */
    public function getCreatedAt(): ?Carbon
    {
        return $this->createdAt;
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
     * The line item changes included in this requested order edit, grouped by the type of change.
     *
     * @return ShopifyRequestedOrderEditLineItems
     */
    public function getLineItems(): ?ShopifyRequestedOrderEditLineItems
    {
        return $this->lineItems;
    }

    
    /**
     * The order associated with this requested order edit.
     *
     * @return ShopifyOrder
     */
    public function getOrder(): ?ShopifyOrder
    {
        return $this->order;
    }

    
    /**
     * The date and time when the requested order edit was declined.
     *
     * @return Carbon
     */
    public function getRequestDeclinedAt(): ?Carbon
    {
        return $this->requestDeclinedAt;
    }

    
    /**
     * The date and time when the requested order edit was resolved.
     *
     * @return Carbon
     */
    public function getRequestResolvedAt(): ?Carbon
    {
        return $this->requestResolvedAt;
    }

    
    /**
     * The date and time when the edit was requested by the buyer.
     *
     * @return Carbon
     */
    public function getRequestedAt(): ?Carbon
    {
        return $this->requestedAt;
    }

    
    /**
     * The status of this requested order edit.
     *
     * @return string A ShopifyRequestedOrderEditStatusEnumObject value
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    
    /**
     * The date and time when the requested order edit was last updated.
     *
     * @return Carbon
     */
    public function getUpdatedAt(): ?Carbon
    {
        return $this->updatedAt;
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
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['lineItems']) && $data['lineItems'] !== null) {
                $instance->lineItems = ShopifyRequestedOrderEditLineItems::fromArray($data['lineItems']);
            }
            if (isset($data['order']) && $data['order'] !== null) {
                $instance->order = ShopifyOrder::fromArray($data['order']);
            }
            if (isset($data['requestDeclinedAt']) && $data['requestDeclinedAt'] !== null) {
                $instance->requestDeclinedAt = new Carbon($data['requestDeclinedAt']);
            }
            if (isset($data['requestResolvedAt']) && $data['requestResolvedAt'] !== null) {
                $instance->requestResolvedAt = new Carbon($data['requestResolvedAt']);
            }
            if (isset($data['requestedAt']) && $data['requestedAt'] !== null) {
                $instance->requestedAt = new Carbon($data['requestedAt']);
            }
            if (isset($data['status']) && $data['status'] !== null) {
                $instance->status = $data['status'];
            }
            if (isset($data['updatedAt']) && $data['updatedAt'] !== null) {
                $instance->updatedAt = new Carbon($data['updatedAt']);
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
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->lineItems !== null) {
                $data['lineItems'] = $this->lineItems->asArray();
            }
            if ($this->order !== null) {
                $data['order'] = $this->order->asArray();
            }
            if ($this->requestDeclinedAt !== null) {
                $data['requestDeclinedAt'] = $this->requestDeclinedAt->toIso8601String();
            }
            if ($this->requestResolvedAt !== null) {
                $data['requestResolvedAt'] = $this->requestResolvedAt->toIso8601String();
            }
            if ($this->requestedAt !== null) {
                $data['requestedAt'] = $this->requestedAt->toIso8601String();
            }
            if ($this->status !== null) {
                $data['status'] = $this->status;
            }
            if ($this->updatedAt !== null) {
                $data['updatedAt'] = $this->updatedAt->toIso8601String();
            }
            return $data;
        }
}
