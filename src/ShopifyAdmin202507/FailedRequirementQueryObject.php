<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class FailedRequirementQueryObject extends QueryObject
{
    const OBJECT_NAME = "FailedRequirement";

    public function selectAction(FailedRequirementActionArgumentsObject $argsObject = null)
    {
        $object = new NavigationItemQueryObject("action");
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
