<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InterfaceObject;

/**
 * The charge descriptors for a payments account.
 */
class ShopifyShopifyPaymentsChargeStatementDescriptorInterfaceObject extends InterfaceObject
{
    const OBJECT_NAME = "ShopifyPaymentsChargeStatementDescriptor";

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

    public function onShopifyPaymentsDefaultChargeStatementDescriptor(): ShopifyShopifyPaymentsDefaultChargeStatementDescriptorQueryObject
    {
        $object = new ShopifyShopifyPaymentsDefaultChargeStatementDescriptorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyPaymentsJpChargeStatementDescriptor(): ShopifyShopifyPaymentsJpChargeStatementDescriptorQueryObject
    {
        $object = new ShopifyShopifyPaymentsJpChargeStatementDescriptorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
