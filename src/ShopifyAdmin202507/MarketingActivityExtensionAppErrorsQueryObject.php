<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class MarketingActivityExtensionAppErrorsQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketingActivityExtensionAppErrors";

    public function selectCode()
    {
        $this->selectField("code");

        return $this;
    }

    public function selectUserErrors(MarketingActivityExtensionAppErrorsUserErrorsArgumentsObject $argsObject = null)
    {
        $object = new UserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
