<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Additional information included on a delivery method that will help during the delivery process.
 */
class ShopifyDeliveryMethodAdditionalInformationQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryMethodAdditionalInformation";

    /**
     * The delivery instructions to follow when performing the delivery.
     */
    public function selectInstructions(): static
    {
        $this->selectField("instructions");

        return $this;
    }

    /**
     * The phone number to contact when performing the delivery.
     */
    public function selectPhone(): static
    {
        $this->selectField("phone");

        return $this;
    }
}
