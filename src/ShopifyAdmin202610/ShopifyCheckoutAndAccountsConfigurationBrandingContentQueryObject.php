<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * The content customizations.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingContentQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutAndAccountsConfigurationBrandingContent";

    /**
     * The divider style and visibility.
     */
    public function selectDivider(?ShopifyCheckoutAndAccountsConfigurationBrandingContentDividerArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingContainerDividerQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingContainerDividerQueryObject("divider");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
