<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * A product variant component that is included within a bundle.
 *
 * These are the individual product variants that make up a bundle product,
 * where each component has a specific required quantity.
 */
class ShopifyProductVariantComponentQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductVariantComponent";

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The product variant associated with the component.
     */
    public function selectProductVariant(?ShopifyProductVariantComponentProductVariantArgumentsObject $argsObject = null): ShopifyProductVariantQueryObject
    {
        $object = new ShopifyProductVariantQueryObject("productVariant");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The required quantity of the component.
     */
    public function selectQuantity(): static
    {
        $this->selectField("quantity");

        return $this;
    }
}
