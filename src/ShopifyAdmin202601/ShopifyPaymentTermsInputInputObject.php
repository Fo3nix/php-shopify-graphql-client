<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields to create payment terms. Payment terms set the date that payment is due.
 */
class ShopifyPaymentTermsInputInputObject extends InputObject
{
    protected $paymentTermsTemplateId;
    protected $paymentSchedules;

    /**
     * Specifies the ID of the payment terms template.
     *         Payment terms templates provide preset configurations to create common payment terms.
     *         Refer to the
     *         [PaymentTermsTemplate](https://shopify.dev/api/admin-graphql/latest/objects/paymenttermstemplate)
     *         object for more details.
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
