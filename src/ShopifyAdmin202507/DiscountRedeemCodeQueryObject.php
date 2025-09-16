<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DiscountRedeemCodeQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountRedeemCode";

    public function selectAsyncUsageCount()
    {
        $this->selectField("asyncUsageCount");

        return $this;
    }

    public function selectCode()
    {
        $this->selectField("code");

        return $this;
    }

    public function selectCreatedBy(DiscountRedeemCodeCreatedByArgumentsObject $argsObject = null)
    {
        $object = new AppQueryObject("createdBy");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }
}
