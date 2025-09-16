<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DiscountRedeemCodeBulkCreationQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountRedeemCodeBulkCreation";

    public function selectCodes(DiscountRedeemCodeBulkCreationCodesArgumentsObject $argsObject = null)
    {
        $object = new DiscountRedeemCodeBulkCreationCodeConnectionQueryObject("codes");
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

    public function selectDiscountCode(DiscountRedeemCodeBulkCreationDiscountCodeArgumentsObject $argsObject = null)
    {
        $object = new DiscountCodeNodeQueryObject("discountCode");
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
