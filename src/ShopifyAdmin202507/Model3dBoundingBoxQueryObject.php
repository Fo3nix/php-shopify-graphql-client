<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class Model3dBoundingBoxQueryObject extends QueryObject
{
    const OBJECT_NAME = "Model3dBoundingBox";

    public function selectSize(Model3dBoundingBoxSizeArgumentsObject $argsObject = null)
    {
        $object = new Vector3QueryObject("size");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
