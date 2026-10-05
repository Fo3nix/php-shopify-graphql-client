<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDiscountRedeemCodeBulkCreationCodeQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountRedeemCodeBulkCreationCode";

    public function selectCode()
    {
        $this->selectField("code");

        return $this;
    }

    public function selectDiscountRedeemCode(ShopifyDiscountRedeemCodeBulkCreationCodeDiscountRedeemCodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDiscountRedeemCodeQueryObject("discountRedeemCode");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectErrors(ShopifyDiscountRedeemCodeBulkCreationCodeErrorsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDiscountUserErrorQueryObject("errors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
