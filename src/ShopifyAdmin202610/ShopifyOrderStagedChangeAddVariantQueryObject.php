<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A change to the order representing the addition of an existing product variant.
 */
class ShopifyOrderStagedChangeAddVariantQueryObject extends QueryObject
{
    const OBJECT_NAME = "OrderStagedChangeAddVariant";

    /**
     * The quantity of the product variant that was added.
     */
    public function selectQuantity(): static
    {
        $this->selectField("quantity");

        return $this;
    }

    /**
     * The product variant that was added.
     */
    public function selectVariant(?ShopifyOrderStagedChangeAddVariantVariantArgumentsObject $argsObject = null): ShopifyProductVariantQueryObject
    {
        $object = new ShopifyProductVariantQueryObject("variant");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
