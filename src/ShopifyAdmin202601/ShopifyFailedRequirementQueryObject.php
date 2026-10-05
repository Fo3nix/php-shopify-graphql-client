<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyFailedRequirementQueryObject extends QueryObject
{
    const OBJECT_NAME = "FailedRequirement";

    public function selectAction(ShopifyFailedRequirementActionArgumentsObject $argsObject = null)
    {
        $object = new ShopifyNavigationItemQueryObject("action");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMessage()
    {
        $this->selectField("message");

        return $this;
    }
}
