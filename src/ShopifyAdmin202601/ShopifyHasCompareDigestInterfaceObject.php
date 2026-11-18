<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InterfaceObject;

/**
 * Represents a summary of the current version of data in a resource.
 *
 * The `compare_digest` field can be used as input for mutations that implement a compare-and-swap mechanism.
 */
class ShopifyHasCompareDigestInterfaceObject extends InterfaceObject
{
    const OBJECT_NAME = "HasCompareDigest";

    /**
     * The data stored in the resource, represented as a digest.
     */
    public function selectCompareDigest(): static
    {
        $this->selectField("compareDigest");

        return $this;
    }

    public function onMetafield(): ShopifyMetafieldQueryObject
    {
        $object = new ShopifyMetafieldQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
