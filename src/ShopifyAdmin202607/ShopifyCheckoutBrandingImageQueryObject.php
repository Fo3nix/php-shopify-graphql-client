<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCheckoutBrandingImageQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingImage";

    public function selectImage(ShopifyCheckoutBrandingImageImageArgumentsObject $argsObject = null)
    {
        $object = new ShopifyImageQueryObject("image");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
