<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ProductOptionValueSwatchQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductOptionValueSwatch";

    public function selectColor()
    {
        $this->selectField("color");

        return $this;
    }

    public function selectImage(ProductOptionValueSwatchImageArgumentsObject $argsObject = null)
    {
        $object = new MediaImageQueryObject("image");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
