<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCheckoutAndAccountsConfigurationBrandingHeadingLevelQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutAndAccountsConfigurationBrandingHeadingLevel";

    public function selectTypography(ShopifyCheckoutAndAccountsConfigurationBrandingHeadingLevelTypographyArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingTypographyStyleQueryObject("typography");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
