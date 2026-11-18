<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * The store logo customizations.
 */
class ShopifyCheckoutBrandingLogoQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingLogo";

    /**
     * The logo image.
     */
    public function selectImage(?ShopifyCheckoutBrandingLogoImageArgumentsObject $argsObject = null): ShopifyImageQueryObject
    {
        $object = new ShopifyImageQueryObject("image");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The maximum width of the logo.
     */
    public function selectMaxWidth(): static
    {
        $this->selectField("maxWidth");

        return $this;
    }

    /**
     * The visibility of the logo.
     */
    public function selectVisibility(): static
    {
        $this->selectField("visibility");

        return $this;
    }
}
