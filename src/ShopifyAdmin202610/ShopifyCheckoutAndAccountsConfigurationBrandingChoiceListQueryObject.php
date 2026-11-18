<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * The choice list customizations.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingChoiceListQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutAndAccountsConfigurationBrandingChoiceList";

    /**
     * The 'group' variant of ChoiceList.
     */
    public function selectGroup(?ShopifyCheckoutAndAccountsConfigurationBrandingChoiceListGroupArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingChoiceListGroupQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingChoiceListGroupQueryObject("group");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
