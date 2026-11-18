<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * A result of a discount redeem code creation operation created by a bulk creation.
 */
class ShopifyDiscountRedeemCodeBulkCreationCodeQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountRedeemCodeBulkCreationCode";

    /**
     * The code to use in the discount redeem code creation operation.
     */
    public function selectCode(): static
    {
        $this->selectField("code");

        return $this;
    }

    /**
     * The successfully created discount redeem code.
     *
     * If the discount redeem code couldn't be created, then this field is `null``.
     */
    public function selectDiscountRedeemCode(?ShopifyDiscountRedeemCodeBulkCreationCodeDiscountRedeemCodeArgumentsObject $argsObject = null): ShopifyDiscountRedeemCodeQueryObject
    {
        $object = new ShopifyDiscountRedeemCodeQueryObject("discountRedeemCode");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of errors that occurred during the creation operation of the discount redeem code.
     */
    public function selectErrors(?ShopifyDiscountRedeemCodeBulkCreationCodeErrorsArgumentsObject $argsObject = null): ShopifyDiscountUserErrorQueryObject
    {
        $object = new ShopifyDiscountUserErrorQueryObject("errors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
