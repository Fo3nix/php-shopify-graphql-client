<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DiscountRedeemCodeBulkCreationCodeQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountRedeemCodeBulkCreationCode";

    public function selectCode()
    {
        $this->selectField("code");

        return $this;
    }

    public function selectDiscountRedeemCode(DiscountRedeemCodeBulkCreationCodeDiscountRedeemCodeArgumentsObject $argsObject = null)
    {
        $object = new DiscountRedeemCodeQueryObject("discountRedeemCode");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectErrors(DiscountRedeemCodeBulkCreationCodeErrorsArgumentsObject $argsObject = null)
    {
        $object = new DiscountUserErrorQueryObject("errors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
