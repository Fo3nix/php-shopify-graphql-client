<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * The sign-in store logo customizations.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingSignInLogoQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutAndAccountsConfigurationBrandingSignInLogo";

    /**
     * The logo image.
     */
    public function selectImage(?ShopifyCheckoutAndAccountsConfigurationBrandingSignInLogoImageArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingImageValueUnionObject
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
}
