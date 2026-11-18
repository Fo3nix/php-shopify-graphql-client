<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCustomerPaymentMethodGetDuplicationDataArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["customerPaymentMethodId", "targetShopId", "targetCustomerId"];

    protected $customerPaymentMethodId;
    protected $targetShopId;
    protected $targetCustomerId;

    /**
     * The payment method to be duplicated.
     */
    public function setCustomerPaymentMethodId($customerPaymentMethodId): static
    {
        $this->customerPaymentMethodId = $customerPaymentMethodId;

        return $this;
    }

    /**
     * The shop the payment method will be duplicated into.
     */
    public function setTargetShopId($targetShopId): static
    {
        $this->targetShopId = $targetShopId;

        return $this;
    }

    /**
     * The customer the payment method will be duplicated into.
     */
    public function setTargetCustomerId($targetCustomerId): static
    {
        $this->targetCustomerId = $targetCustomerId;

        return $this;
    }
}
