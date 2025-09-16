<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CheckoutBrandingContentQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingContent";

    public function selectDivider(CheckoutBrandingContentDividerArgumentsObject $argsObject = null)
    {
        $object = new CheckoutBrandingContainerDividerQueryObject("divider");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
