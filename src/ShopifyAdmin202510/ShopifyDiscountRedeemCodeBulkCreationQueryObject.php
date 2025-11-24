<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDiscountRedeemCodeBulkCreationQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountRedeemCodeBulkCreation";

    public function selectCodes(ShopifyDiscountRedeemCodeBulkCreationCodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDiscountRedeemCodeBulkCreationCodeConnectionQueryObject("codes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCodesCount()
    {
        $this->selectField("codesCount");

        return $this;
    }

    public function selectCreatedAt()
    {
        $this->selectField("createdAt");

        return $this;
    }

    public function selectDiscountCode(ShopifyDiscountRedeemCodeBulkCreationDiscountCodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDiscountCodeNodeQueryObject("discountCode");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDone()
    {
        $this->selectField("done");

        return $this;
    }

    public function selectFailedCount()
    {
        $this->selectField("failedCount");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectImportedCount()
    {
        $this->selectField("importedCount");

        return $this;
    }
}
