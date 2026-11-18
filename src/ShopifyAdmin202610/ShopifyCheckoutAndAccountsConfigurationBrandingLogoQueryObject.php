<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * The store logo customizations.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingLogoQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutAndAccountsConfigurationBrandingLogo";

    /**
     * The logo image.
     */
    public function selectImage(?ShopifyCheckoutAndAccountsConfigurationBrandingLogoImageArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingImageValueUnionObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingImageValueUnionObject("image");
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
