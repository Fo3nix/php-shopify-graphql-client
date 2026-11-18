<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for a customer to associate with an order. Allows creation of a new customer or specifying an existing one.
 */
class ShopifyOrderCreateCustomerInputInputObject extends InputObject
{
    protected $toAssociate;
    protected $toUpsert;

    /**
     * An existing customer to associate with the order, specified by ID.
     */
    public function setToAssociate(ShopifyOrderCreateAssociateCustomerAttributesInputInputObject $shopifyOrderCreateAssociateCustomerAttributesInputInputObject): static
    {
        $this->toAssociate = $shopifyOrderCreateAssociateCustomerAttributesInputInputObject;

        return $this;
    }

    /**
     * A new customer to create or update and associate with the order.
     */
    public function setToUpsert(ShopifyOrderCreateUpsertCustomerAttributesInputInputObject $shopifyOrderCreateUpsertCustomerAttributesInputInputObject): static
    {
        $this->toUpsert = $shopifyOrderCreateUpsertCustomerAttributesInputInputObject;

        return $this;
    }
}
