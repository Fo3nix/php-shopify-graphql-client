<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * This type returns the information about the product and product variant from a customer visit.
 */
class ShopifyCustomerVisitProductInfoQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerVisitProductInfo";

    /**
     * The product information. If `null`, then the product was deleted from the store.
     */
    public function selectProduct(?ShopifyCustomerVisitProductInfoProductArgumentsObject $argsObject = null): ShopifyProductQueryObject
    {
        $object = new ShopifyProductQueryObject("product");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The quantity of the product that the customer requested.
     */
    public function selectQuantity(): static
    {
        $this->selectField("quantity");

        return $this;
    }

    /**
     * The product variant information, if the product variant exists.
     */
    public function selectVariant(?ShopifyCustomerVisitProductInfoVariantArgumentsObject $argsObject = null): ShopifyProductVariantQueryObject
    {
        $object = new ShopifyProductVariantQueryObject("variant");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
