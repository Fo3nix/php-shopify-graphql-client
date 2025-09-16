<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CheckoutBrandingLogoQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingLogo";

    public function selectImage(CheckoutBrandingLogoImageArgumentsObject $argsObject = null)
    {
        $object = new ImageQueryObject("image");
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
