<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CustomerVisitProductInfoQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerVisitProductInfo";

    public function selectProduct(CustomerVisitProductInfoProductArgumentsObject $argsObject = null)
    {
        $object = new ProductQueryObject("product");
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

    public function selectVariant(CustomerVisitProductInfoVariantArgumentsObject $argsObject = null)
    {
        $object = new ProductVariantQueryObject("variant");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
