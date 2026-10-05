<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDiscountCodeBxgyQueryObject extends QueryObject
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

    public function selectCodes(ShopifyDiscountCodeBxgyCodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDiscountRedeemCodeConnectionQueryObject("codes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCodesCount(ShopifyDiscountCodeBxgyCodesCountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCountQueryObject("codesCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCombinesWith(ShopifyDiscountCodeBxgyCombinesWithArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDiscountCombinesWithQueryObject("combinesWith");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectContext(ShopifyDiscountCodeBxgyContextArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDiscountContextUnionObject("context");
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

    public function selectCustomerBuys(ShopifyDiscountCodeBxgyCustomerBuysArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDiscountCustomerBuysQueryObject("customerBuys");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCustomerGets(ShopifyDiscountCodeBxgyCustomerGetsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDiscountCustomerGetsQueryObject("customerGets");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `context` instead.
     */
    public function selectCustomerSelection(ShopifyDiscountCodeBxgyCustomerSelectionArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDiscountCustomerSelectionUnionObject("customerSelection");
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

    public function selectShareableUrls(ShopifyDiscountCodeBxgyShareableUrlsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDiscountShareableUrlQueryObject("shareableUrls");
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

    public function selectTags()
    {
        $this->selectField("tags");

        return $this;
    }

    public function selectTitle()
    {
        $this->selectField("title");

        return $this;
    }

    public function selectTotalSales(ShopifyDiscountCodeBxgyTotalSalesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("totalSales");
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
