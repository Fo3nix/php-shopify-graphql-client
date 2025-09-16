<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class LineItemGroupQueryObject extends QueryObject
{
    const OBJECT_NAME = "LineItemGroup";

    public function selectCustomAttributes(LineItemGroupCustomAttributesArgumentsObject $argsObject = null)
    {
        $object = new AttributeQueryObject("customAttributes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectProductId()
    {
        $this->selectField("productId");

        return $this;
    }

    public function selectQuantity()
    {
        $this->selectField("quantity");

        return $this;
    }

    public function selectTitle()
    {
        $this->selectField("title");

        return $this;
    }

    public function selectVariantId()
    {
        $this->selectField("variantId");

        return $this;
    }

    public function selectVariantSku()
    {
        $this->selectField("variantSku");

        return $this;
    }
}
