<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCheckoutBrandingLogoQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingLogo";

    public function selectImage(ShopifyCheckoutBrandingLogoImageArgumentsObject $argsObject = null)
    {
        $object = new ShopifyImageQueryObject("image");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMaxWidth()
    {
        $this->selectField("maxWidth");

        return $this;
    }

    public function selectVisibility()
    {
        $this->selectField("visibility");

        return $this;
    }
}
