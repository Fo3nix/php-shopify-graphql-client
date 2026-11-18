<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for a transaction to create for an order.
 */
class ShopifyOrderCreateOrderTransactionInputInputObject extends InputObject
{
    const REQUIRED = ["amountSet"];

    protected $amountSet;
    protected $authorizationCode;
    protected $deviceId;
    protected $gateway;
    protected $giftCardId;
    protected $kind;
    protected $locationId;
    protected $processedAt;
    protected $receiptJson;
    protected $status;
    protected $test;
    protected $userId;

    /**
     * The amount of the transaction.
     */
    public function setAmountSet(ShopifyMoneyBagInputInputObject $shopifyMoneyBagInputInputObject): static
    {
        $this->amountSet = $shopifyMoneyBagInputInputObject;

        return $this;
    }

    /**
     * The authorization code associated with the transaction.
     */
    public function setAuthorizationCode($authorizationCode): static
    {
        $this->authorizationCode = $authorizationCode;

        return $this;
    }

    /**
     * The ID of the device used to process the transaction.
     */
    public function setDeviceId($deviceId): static
    {
        $this->deviceId = $deviceId;

        return $this;
    }

    /**
     * The name of the gateway the transaction was issued through.
     */
    public function setGateway($gateway): static
    {
        $this->gateway = $gateway;

        return $this;
    }

    /**
     * The ID of the gift card used for this transaction.
     */
    public function setGiftCardId($giftCardId): static
    {
        $this->giftCardId = $giftCardId;

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
     * The ID of the location where the transaction was processed.
     */
    public function setLocationId($locationId): static
    {
        $this->locationId = $locationId;

        return $this;
    }

    /**
     * The date and time when the transaction was processed.
     */
    public function setProcessedAt($processedAt): static
    {
        $this->processedAt = $processedAt;

        return $this;
    }

    /**
     * The transaction receipt that the payment gateway attaches to the transaction.
     * The value of this field depends on which payment gateway processed the transaction.
     */
    public function setReceiptJson($receiptJson): static
    {
        $this->receiptJson = $receiptJson;

        return $this;
    }

    /**
     * The status of the transaction.
     */
    public function setStatus($shopifyOrderTransactionStatus): static
    {
        $this->status = new RawObject($shopifyOrderTransactionStatus);

        return $this;
    }

    /**
     * Whether the transaction is a test transaction.
     */
    public function setTest($test): static
    {
        $this->test = $test;

        return $this;
    }

    /**
     * The ID of the user who processed the transaction.
     */
    public function setUserId($userId): static
    {
        $this->userId = $userId;

        return $this;
    }
}
