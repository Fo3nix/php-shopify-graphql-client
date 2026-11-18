<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationPaymentInstrumentSendAddEmailArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["mandate"];

    protected $mandate;
    protected $email;

    /**
     * The mandate resource (subscription, order, or draft order) to add a payment instrument for.
     */
    public function setMandate(ShopifyPaymentInstrumentMandateInputInputObject $shopifyPaymentInstrumentMandateInputInputObject): static
    {
        $this->mandate = $shopifyPaymentInstrumentMandateInputInputObject;

        return $this;
    }

    /**
     * Specifies the payment instrument add email fields. Only the 'from' and 'bcc' fields are accepted for input.
     */
    public function setEmail(ShopifyEmailInputInputObject $shopifyEmailInputInputObject): static
    {
        $this->email = $shopifyEmailInputInputObject;

        return $this;
    }
}
