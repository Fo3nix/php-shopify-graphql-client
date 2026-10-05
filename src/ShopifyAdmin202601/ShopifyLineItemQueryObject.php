<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyLineItemQueryObject extends QueryObject
{
    const OBJECT_NAME = "LineItem";

    /**
     * @deprecated Use `restockable` instead.
     */
    public function selectCanRestock()
    {
        $this->selectField("canRestock");

        return $this;
    }

    public function selectContract(ShopifyLineItemContractArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionContractQueryObject("contract");
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

    public function selectCurrentQuantity()
    {
        $this->selectField("currentQuantity");

        return $this;
    }

    public function selectCustomAttributes(ShopifyLineItemCustomAttributesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAttributeQueryObject("customAttributes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDiscountAllocations(ShopifyLineItemDiscountAllocationsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDiscountAllocationQueryObject("discountAllocations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `discountedTotalSet` instead.
     */
    public function selectDiscountedTotal()
    {
        $this->selectField("discountedTotal");

        return $this;
    }

    public function selectDiscountedTotalSet(ShopifyLineItemDiscountedTotalSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("discountedTotalSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `discountedUnitPriceSet` instead.
     */
    public function selectDiscountedUnitPrice()
    {
        $this->selectField("discountedUnitPrice");

        return $this;
    }

    public function selectDiscountedUnitPriceAfterAllDiscountsSet(ShopifyLineItemDiscountedUnitPriceAfterAllDiscountsSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("discountedUnitPriceAfterAllDiscountsSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDiscountedUnitPriceSet(ShopifyLineItemDiscountedUnitPriceSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("discountedUnitPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDuties(ShopifyLineItemDutiesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDutyQueryObject("duties");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use [FulfillmentOrderLineItem#remainingQuantity](https://shopify.dev/api/admin-graphql/latest/objects/FulfillmentOrderLineItem#field-fulfillmentorderlineitem-remainingquantity) instead.
     */
    public function selectFulfillableQuantity()
    {
        $this->selectField("fulfillableQuantity");

        return $this;
    }

    /**
     * @deprecated 
    The [relationship between a product variant and a fulfillment service was changed](/changelog/fulfillment-service-sku-sharing). A [ProductVariant](/api/admin-graphql/latest/objects/ProductVariant) can be stocked by multiple fulfillment services. As a result, we recommend that you use the [inventoryItem field](/api/admin-graphql/latest/objects/ProductVariant#field-productvariant-inventoryitem) if you need to determine where a product variant is stocked.

    If you need to determine whether a product is a gift card, then you should continue to use this field until an alternative is available.

    Altering the locations which stock a product variant won't change the value of this field for existing orders.

    Learn about [managing inventory quantities and states](/apps/fulfillment/inventory-management-apps/quantities-states).

     */
    public function selectFulfillmentService(ShopifyLineItemFulfillmentServiceArgumentsObject $argsObject = null)
    {
        $object = new ShopifyFulfillmentServiceQueryObject("fulfillmentService");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use [FulfillmentOrderLineItem#remainingQuantity](https://shopify.dev/api/admin-graphql/latest/objects/FulfillmentOrderLineItem#field-fulfillmentorderlineitem-remainingquantity) instead
     */
    public function selectFulfillmentStatus()
    {
        $this->selectField("fulfillmentStatus");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectImage(ShopifyLineItemImageArgumentsObject $argsObject = null)
    {
        $object = new ShopifyImageQueryObject("image");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectIsGiftCard()
    {
        $this->selectField("isGiftCard");

        return $this;
    }

    public function selectLineItemGroup(ShopifyLineItemLineItemGroupArgumentsObject $argsObject = null)
    {
        $object = new ShopifyLineItemGroupQueryObject("lineItemGroup");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMerchantEditable()
    {
        $this->selectField("merchantEditable");

        return $this;
    }

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }

    public function selectNonFulfillableQuantity()
    {
        $this->selectField("nonFulfillableQuantity");

        return $this;
    }

    /**
     * @deprecated Use `originalTotalSet` instead.
     */
    public function selectOriginalTotal()
    {
        $this->selectField("originalTotal");

        return $this;
    }

    public function selectOriginalTotalSet(ShopifyLineItemOriginalTotalSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("originalTotalSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `originalUnitPriceSet` instead.
     */
    public function selectOriginalUnitPrice()
    {
        $this->selectField("originalUnitPrice");

        return $this;
    }

    public function selectOriginalUnitPriceSet(ShopifyLineItemOriginalUnitPriceSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("originalUnitPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProduct(ShopifyLineItemProductArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductQueryObject("product");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectQuantity()
    {
        $this->selectField("quantity");

        return $this;
    }

    public function selectRefundableQuantity()
    {
        $this->selectField("refundableQuantity");

        return $this;
    }

    public function selectRequiresShipping()
    {
        $this->selectField("requiresShipping");

        return $this;
    }

    public function selectRestockable()
    {
        $this->selectField("restockable");

        return $this;
    }

    public function selectSellingPlan(ShopifyLineItemSellingPlanArgumentsObject $argsObject = null)
    {
        $object = new ShopifyLineItemSellingPlanQueryObject("sellingPlan");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSku()
    {
        $this->selectField("sku");

        return $this;
    }

    public function selectStaffMember(ShopifyLineItemStaffMemberArgumentsObject $argsObject = null)
    {
        $object = new ShopifyStaffMemberQueryObject("staffMember");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSuggestedReturnReasonDefinitions(ShopifyLineItemSuggestedReturnReasonDefinitionsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyReturnReasonDefinitionConnectionQueryObject("suggestedReturnReasonDefinitions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTaxLines(ShopifyLineItemTaxLinesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyTaxLineQueryObject("taxLines");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTaxable()
    {
        $this->selectField("taxable");

        return $this;
    }

    public function selectTitle()
    {
        $this->selectField("title");

        return $this;
    }

    /**
     * @deprecated Use `totalDiscountSet` instead.
     */
    public function selectTotalDiscount()
    {
        $this->selectField("totalDiscount");

        return $this;
    }

    public function selectTotalDiscountSet(ShopifyLineItemTotalDiscountSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("totalDiscountSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `unfulfilledDiscountedTotalSet` instead.
     */
    public function selectUnfulfilledDiscountedTotal()
    {
        $this->selectField("unfulfilledDiscountedTotal");

        return $this;
    }

    public function selectUnfulfilledDiscountedTotalSet(ShopifyLineItemUnfulfilledDiscountedTotalSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("unfulfilledDiscountedTotalSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `unfulfilledOriginalTotalSet` instead.
     */
    public function selectUnfulfilledOriginalTotal()
    {
        $this->selectField("unfulfilledOriginalTotal");

        return $this;
    }

    public function selectUnfulfilledOriginalTotalSet(ShopifyLineItemUnfulfilledOriginalTotalSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("unfulfilledOriginalTotalSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectUnfulfilledQuantity()
    {
        $this->selectField("unfulfilledQuantity");

        return $this;
    }

    public function selectVariant(ShopifyLineItemVariantArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductVariantQueryObject("variant");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectVariantTitle()
    {
        $this->selectField("variantTitle");

        return $this;
    }

    public function selectVendor()
    {
        $this->selectField("vendor");

        return $this;
    }
}
