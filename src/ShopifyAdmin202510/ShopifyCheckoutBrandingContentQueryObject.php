<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCheckoutBrandingContentQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingContent";

    public function selectDivider(ShopifyCheckoutBrandingContentDividerArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutBrandingContainerDividerQueryObject("divider");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
