<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * The charge descriptors for a payments account.
 */
class ShopifyShopifyPaymentsDefaultChargeStatementDescriptorQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyPaymentsDefaultChargeStatementDescriptor";

    /**
     * The default charge statement descriptor.
     */
    public function selectDefault(): static
    {
        $this->selectField("default");

        return $this;
    }

    /**
     * The prefix of the statement descriptor.
     */
    public function selectPrefix(): static
    {
        $this->selectField("prefix");

        return $this;
    }
}
