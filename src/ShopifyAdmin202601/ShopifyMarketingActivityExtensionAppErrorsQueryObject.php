<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMarketingActivityExtensionAppErrorsQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketingActivityExtensionAppErrors";

    public function selectCode()
    {
        $this->selectField("code");

        return $this;
    }

    public function selectUserErrors(ShopifyMarketingActivityExtensionAppErrorsUserErrorsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
