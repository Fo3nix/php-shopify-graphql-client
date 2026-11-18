<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * A swatch associated with a product option value.
 */
class ShopifyProductOptionValueSwatchQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductOptionValueSwatch";

    /**
     * The color representation of the swatch.
     */
    public function selectColor(): static
    {
        $this->selectField("color");

        return $this;
    }

    /**
     * An image representation of the swatch.
     */
    public function selectImage(?ShopifyProductOptionValueSwatchImageArgumentsObject $argsObject = null): ShopifyMediaImageQueryObject
    {
        $object = new ShopifyMediaImageQueryObject("image");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
