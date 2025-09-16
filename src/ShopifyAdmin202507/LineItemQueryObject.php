<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class LineItemQueryObject extends QueryObject
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

    public function selectContract(LineItemContractArgumentsObject $argsObject = null)
    {
        $object = new SubscriptionContractQueryObject("contract");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCurrentQuantity()
    {
        $this->selectField("currentQuantity");

        return $this;
    }

    public function selectCustomAttributes(LineItemCustomAttributesArgumentsObject $argsObject = null)
    {
        $object = new AttributeQueryObject("customAttributes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDiscountAllocations(LineItemDiscountAllocationsArgumentsObject $argsObject = null)
    {
        $object = new DiscountAllocationQueryObject("discountAllocations");
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

    public function selectDiscountedTotalSet(LineItemDiscountedTotalSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("discountedTotalSet");
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

    public function selectDiscountedUnitPriceAfterAllDiscountsSet(LineItemDiscountedUnitPriceAfterAllDiscountsSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("discountedUnitPriceAfterAllDiscountsSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDiscountedUnitPriceSet(LineItemDiscountedUnitPriceSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("discountedUnitPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDuties(LineItemDutiesArgumentsObject $argsObject = null)
    {
        $object = new DutyQueryObject("duties");
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
    public function selectFulfillmentService(LineItemFulfillmentServiceArgumentsObject $argsObject = null)
    {
        $object = new FulfillmentServiceQueryObject("fulfillmentService");
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

    public function selectImage(LineItemImageArgumentsObject $argsObject = null)
    {
        $object = new ImageQueryObject("image");
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

    public function selectLineItemGroup(LineItemLineItemGroupArgumentsObject $argsObject = null)
    {
        $object = new LineItemGroupQueryObject("lineItemGroup");
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

    public function selectOriginalTotalSet(LineItemOriginalTotalSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("originalTotalSet");
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

    public function selectOriginalUnitPriceSet(LineItemOriginalUnitPriceSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("originalUnitPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProduct(LineItemProductArgumentsObject $argsObject = null)
    {
        $object = new ProductQueryObject("product");
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

    public function selectSellingPlan(LineItemSellingPlanArgumentsObject $argsObject = null)
    {
        $object = new LineItemSellingPlanQueryObject("sellingPlan");
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

    public function selectStaffMember(LineItemStaffMemberArgumentsObject $argsObject = null)
    {
        $object = new StaffMemberQueryObject("staffMember");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTaxLines(LineItemTaxLinesArgumentsObject $argsObject = null)
    {
        $object = new TaxLineQueryObject("taxLines");
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

    public function selectTotalDiscountSet(LineItemTotalDiscountSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("totalDiscountSet");
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

    public function selectUnfulfilledDiscountedTotalSet(LineItemUnfulfilledDiscountedTotalSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("unfulfilledDiscountedTotalSet");
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

    public function selectUnfulfilledOriginalTotalSet(LineItemUnfulfilledOriginalTotalSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("unfulfilledOriginalTotalSet");
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

    public function selectVariant(LineItemVariantArgumentsObject $argsObject = null)
    {
        $object = new ProductVariantQueryObject("variant");
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
