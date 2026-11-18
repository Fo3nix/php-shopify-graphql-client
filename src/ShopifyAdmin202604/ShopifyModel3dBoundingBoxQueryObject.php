<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Bounding box information of a 3d model.
 */
class ShopifyModel3dBoundingBoxQueryObject extends QueryObject
{
    const OBJECT_NAME = "Model3dBoundingBox";

    /**
     * Size in meters of the smallest volume which contains the 3d model.
     */
    public function selectSize(?ShopifyModel3dBoundingBoxSizeArgumentsObject $argsObject = null): ShopifyVector3QueryObject
    {
        $object = new ShopifyVector3QueryObject("size");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
