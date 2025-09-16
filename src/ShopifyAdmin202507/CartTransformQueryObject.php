<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CartTransformQueryObject extends QueryObject
{
    const OBJECT_NAME = "CartTransform";

    public function selectBlockOnFailure()
    {
        $this->selectField("blockOnFailure");

        return $this;
    }

    public function selectFunctionId()
    {
        $this->selectField("functionId");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectMetafield(CartTransformMetafieldArgumentsObject $argsObject = null)
    {
        $object = new MetafieldQueryObject("metafield");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMetafields(CartTransformMetafieldsArgumentsObject $argsObject = null)
    {
        $object = new MetafieldConnectionQueryObject("metafields");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
