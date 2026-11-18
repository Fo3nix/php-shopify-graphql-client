<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields used to create a payment schedule for payment terms.
 */
class ShopifyPaymentScheduleInputInputObject extends InputObject
{
    protected $issuedAt;
    protected $dueAt;

    /**
     * Specifies the date and time that the payment schedule was issued. This field must be provided for net type payment terms.
     */
    public function setIssuedAt($issuedAt): static
    {
        $this->issuedAt = $issuedAt;

        return $this;
    }

    /**
     * Specifies the date and time when the payment schedule is due. This field must be provided for fixed type payment terms.
     */
    public function setDueAt($dueAt): static
    {
        $this->dueAt = $dueAt;

        return $this;
    }
}
