<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCustomerMergeableQueryObject extends QueryObject
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

    public function selectMergeInProgress(ShopifyCustomerMergeableMergeInProgressArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCustomerMergeRequestQueryObject("mergeInProgress");
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
