<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationDraftOrderCompleteArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id"];

    protected $id;
    protected $paymentGatewayId;
    protected $sourceName;

    /**
     * The draft order to complete.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The gateway for the completed draft order.
     */
    public function setPaymentGatewayId($paymentGatewayId): static
    {
        $this->paymentGatewayId = $paymentGatewayId;

        return $this;
    }

    /**
     * A channel definition handle used for sales channel attribution.
     */
    public function setSourceName($sourceName): static
    {
        $this->sourceName = $sourceName;

        return $this;
    }
}
