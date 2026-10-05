<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyProductVariantComponentQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductVariantComponent";

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectProductVariant(ShopifyProductVariantComponentProductVariantArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductVariantQueryObject("productVariant");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectQuantity()
    {
        $this->selectField("quantity");

        return $this;
    }
}
