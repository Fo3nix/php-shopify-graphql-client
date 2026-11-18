<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Controls spacing customization for the grouped variant of choice list components in checkout forms.
 *
 * The `ChoiceList` object contains settings specifically for the 'group' variant styling through the [`ChoiceListGroup`](https://shopify.dev/docs/api/admin-graphql/latest/objects/CheckoutBrandingChoiceListGroup) field, which determines the spacing between choice options.
 */
class ShopifyCheckoutBrandingChoiceListQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingChoiceList";

    /**
     * The settings that apply to the 'group' variant of ChoiceList.
     */
    public function selectGroup(?ShopifyCheckoutBrandingChoiceListGroupArgumentsObject $argsObject = null): ShopifyCheckoutBrandingChoiceListGroupQueryObject
    {
        $object = new ShopifyCheckoutBrandingChoiceListGroupQueryObject("group");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
