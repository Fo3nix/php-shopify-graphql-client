<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCheckoutBrandingHeaderCartLinkQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingHeaderCartLink";

    public function selectContentType()
    {
        $this->selectField("contentType");

        return $this;
    }

    public function selectImage(ShopifyCheckoutBrandingHeaderCartLinkImageArgumentsObject $argsObject = null)
    {
        $object = new ShopifyImageQueryObject("image");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
