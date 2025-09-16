<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CustomerMergeableQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerMergeable";

    public function selectErrorFields()
    {
        $this->selectField("errorFields");

        return $this;
    }

    public function selectIsMergeable()
    {
        $this->selectField("isMergeable");

        return $this;
    }

    public function selectMergeInProgress(CustomerMergeableMergeInProgressArgumentsObject $argsObject = null)
    {
        $object = new CustomerMergeRequestQueryObject("mergeInProgress");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectReason()
    {
        $this->selectField("reason");

        return $this;
    }
}
