<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for the information needed to create an order transaction.
 */
class ShopifyOrderTransactionInputInputObject extends InputObject
{
    const REQUIRED = ["amount", "gateway", "kind", "orderId"];

    protected $amount;
    protected $gateway;
    protected $kind;
    protected $orderId;
    protected $parentId;

    /**
     * The amount of money for this transaction.
     */
    public function setAmount($amount): static
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * The payment gateway to use for this transaction.
     */
    public function setGateway($gateway): static
    {
        $this->gateway = $gateway;

        return $this;
    }

    /**
     * The kind of transaction.
     */
    public function setKind($shopifyOrderTransactionKind): static
    {
        $this->kind = new RawObject($shopifyOrderTransactionKind);

        return $this;
    }

    /**
     * The ID of the order associated with the transaction.
     */
    public function setOrderId($orderId): static
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * The ID of the optional parent transaction, for example the authorization of a capture.
     */
    public function setParentId($parentId): static
    {
        $this->parentId = $parentId;

        return $this;
    }
}
