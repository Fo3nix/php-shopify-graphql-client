<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DiscountCodeBxgyQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountCodeBxgy";

    public function selectAppliesOncePerCustomer()
    {
        $this->selectField("appliesOncePerCustomer");

        return $this;
    }

    public function selectAsyncUsageCount()
    {
        $this->selectField("asyncUsageCount");

        return $this;
    }

    public function selectCodes(DiscountCodeBxgyCodesArgumentsObject $argsObject = null)
    {
        $object = new DiscountRedeemCodeConnectionQueryObject("codes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCodesCount(DiscountCodeBxgyCodesCountArgumentsObject $argsObject = null)
    {
        $object = new CountQueryObject("codesCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCombinesWith(DiscountCodeBxgyCombinesWithArgumentsObject $argsObject = null)
    {
        $object = new DiscountCombinesWithQueryObject("combinesWith");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCreatedAt()
    {
        $this->selectField("createdAt");

        return $this;
    }

    public function selectCustomerBuys(DiscountCodeBxgyCustomerBuysArgumentsObject $argsObject = null)
    {
        $object = new DiscountCustomerBuysQueryObject("customerBuys");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCustomerGets(DiscountCodeBxgyCustomerGetsArgumentsObject $argsObject = null)
    {
        $object = new DiscountCustomerGetsQueryObject("customerGets");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `context` instead.
     */
    public function selectCustomerSelection(DiscountCodeBxgyCustomerSelectionArgumentsObject $argsObject = null)
    {
        $object = new DiscountCustomerSelectionUnionObject("customerSelection");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `discountClasses` instead.
     */
    public function selectDiscountClass()
    {
        $this->selectField("discountClass");

        return $this;
    }

    public function selectDiscountClasses()
    {
        $this->selectField("discountClasses");

        return $this;
    }

    public function selectEndsAt()
    {
        $this->selectField("endsAt");

        return $this;
    }

    public function selectHasTimelineComment()
    {
        $this->selectField("hasTimelineComment");

        return $this;
    }

    public function selectShareableUrls(DiscountCodeBxgyShareableUrlsArgumentsObject $argsObject = null)
    {
        $object = new DiscountShareableUrlQueryObject("shareableUrls");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectStartsAt()
    {
        $this->selectField("startsAt");

        return $this;
    }

    public function selectStatus()
    {
        $this->selectField("status");

        return $this;
    }

    public function selectSummary()
    {
        $this->selectField("summary");

        return $this;
    }

    public function selectTitle()
    {
        $this->selectField("title");

        return $this;
    }

    public function selectTotalSales(DiscountCodeBxgyTotalSalesArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("totalSales");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectUpdatedAt()
    {
        $this->selectField("updatedAt");

        return $this;
    }

    public function selectUsageLimit()
    {
        $this->selectField("usageLimit");

        return $this;
    }

    public function selectUsesPerOrderLimit()
    {
        $this->selectField("usesPerOrderLimit");

        return $this;
    }
}
