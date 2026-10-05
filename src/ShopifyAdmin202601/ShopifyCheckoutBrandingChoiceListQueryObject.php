<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCheckoutBrandingChoiceListQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingChoiceList";

    public function selectGroup(ShopifyCheckoutBrandingChoiceListGroupArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutBrandingChoiceListGroupQueryObject("group");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
