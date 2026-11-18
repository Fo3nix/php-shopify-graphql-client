<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCustomerPaymentMethodRemoteCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["customerId", "remoteReference"];

    protected $customerId;
    protected $remoteReference;

    /**
     * The ID of the customer.
     */
    public function setCustomerId($customerId): static
    {
        $this->customerId = $customerId;

        return $this;
    }

    /**
     * Remote gateway payment method details.
     */
    public function setRemoteReference(ShopifyCustomerPaymentMethodRemoteInputInputObject $shopifyCustomerPaymentMethodRemoteInputInputObject): static
    {
        $this->remoteReference = $shopifyCustomerPaymentMethodRemoteInputInputObject;

        return $this;
    }
}
