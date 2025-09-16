<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CheckoutBrandingHeaderCartLinkQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingHeaderCartLink";

    public function selectContentType()
    {
        $this->selectField("contentType");

        return $this;
    }

    public function selectImage(CheckoutBrandingHeaderCartLinkImageArgumentsObject $argsObject = null)
    {
        $object = new ImageQueryObject("image");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
