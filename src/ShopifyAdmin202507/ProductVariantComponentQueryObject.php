<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ProductVariantComponentQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductVariantComponent";

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectProductVariant(ProductVariantComponentProductVariantArgumentsObject $argsObject = null)
    {
        $object = new ProductVariantQueryObject("productVariant");
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
