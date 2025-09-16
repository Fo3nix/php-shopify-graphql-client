<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CheckoutBrandingChoiceListQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingChoiceList";

    public function selectGroup(CheckoutBrandingChoiceListGroupArgumentsObject $argsObject = null)
    {
        $object = new CheckoutBrandingChoiceListGroupQueryObject("group");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
