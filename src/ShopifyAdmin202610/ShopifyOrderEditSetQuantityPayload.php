<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCalculatedLineItem;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCalculatedOrder;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyOrderEditSession;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyUserError;

/**
 * Return type for `orderEditSetQuantity` mutation.
 */
class ShopifyOrderEditSetQuantityPayload
{
    protected $calculatedLineItem;
    protected $calculatedOrder;
    protected $orderEditSession;
    protected $userErrors;

    
    /**
     * The calculated line item with the edits applied but not saved.
     *
     * @return ShopifyCalculatedLineItem
     */
    public function getCalculatedLineItem(): ?ShopifyCalculatedLineItem
    {
        return $this->calculatedLineItem;
    }

    
    /**
     * The calculated order with the edits applied but not saved.
     *
     * @return ShopifyCalculatedOrder
     */
    public function getCalculatedOrder(): ?ShopifyCalculatedOrder
    {
        return $this->calculatedOrder;
    }

    
    /**
     * The order edit session with the edits applied but not saved.
     *
     * @return ShopifyOrderEditSession
     */
    public function getOrderEditSession(): ?ShopifyOrderEditSession
    {
        return $this->orderEditSession;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyUserError[]
     */
    public function getUserErrors(): ?array
    {
        return $this->userErrors;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['calculatedLineItem']) && $data['calculatedLineItem'] !== null) {
                $instance->calculatedLineItem = ShopifyCalculatedLineItem::fromArray($data['calculatedLineItem']);
            }
            if (isset($data['calculatedOrder']) && $data['calculatedOrder'] !== null) {
                $instance->calculatedOrder = ShopifyCalculatedOrder::fromArray($data['calculatedOrder']);
            }
            if (isset($data['orderEditSession']) && $data['orderEditSession'] !== null) {
                $instance->orderEditSession = ShopifyOrderEditSession::fromArray($data['orderEditSession']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->calculatedLineItem !== null) {
                $data['calculatedLineItem'] = $this->calculatedLineItem->asArray();
            }
            if ($this->calculatedOrder !== null) {
                $data['calculatedOrder'] = $this->calculatedOrder->asArray();
            }
            if ($this->orderEditSession !== null) {
                $data['orderEditSession'] = $this->orderEditSession->asArray();
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
