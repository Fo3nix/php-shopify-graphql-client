<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * A checkout branding image.
 */
class ShopifyCheckoutBrandingImageQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingImage";

    /**
     * The image details.
     */
    public function selectImage(?ShopifyCheckoutBrandingImageImageArgumentsObject $argsObject = null): ShopifyImageQueryObject
    {
        $object = new ShopifyImageQueryObject("image");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
