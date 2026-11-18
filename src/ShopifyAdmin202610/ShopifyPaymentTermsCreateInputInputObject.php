<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields used to create a payment terms.
 */
class ShopifyPaymentTermsCreateInputInputObject extends InputObject
{
    const REQUIRED = ["paymentTermsTemplateId"];

    protected $paymentTermsTemplateId;
    protected $paymentSchedules;

    /**
     * Specifies the payment terms template ID used to generate payment terms.
     */
    public function setPaymentTermsTemplateId($paymentTermsTemplateId): static
    {
        $this->paymentTermsTemplateId = $paymentTermsTemplateId;

        return $this;
    }

    /**
     * Specifies the payment schedules for the payment terms.
     */
    public function setPaymentSchedules(array $paymentSchedules): static
    {
        $this->paymentSchedules = $paymentSchedules;

        return $this;
    }
}
