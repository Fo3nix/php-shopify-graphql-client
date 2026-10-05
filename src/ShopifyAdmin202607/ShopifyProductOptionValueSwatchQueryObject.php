<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyProductOptionValueSwatchQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductOptionValueSwatch";

    public function selectColor()
    {
        $this->selectField("color");

        return $this;
    }

    public function selectImage(ShopifyProductOptionValueSwatchImageArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMediaImageQueryObject("image");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
