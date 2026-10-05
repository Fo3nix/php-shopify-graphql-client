<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyModel3dBoundingBoxQueryObject extends QueryObject
{
    const OBJECT_NAME = "Model3dBoundingBox";

    public function selectSize(ShopifyModel3dBoundingBoxSizeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyVector3QueryObject("size");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
