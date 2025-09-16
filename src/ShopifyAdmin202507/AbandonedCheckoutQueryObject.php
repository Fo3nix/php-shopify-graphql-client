<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class AbandonedCheckoutQueryObject extends QueryObject
{
    const OBJECT_NAME = "AbandonedCheckout";

    public function selectAbandonedCheckoutUrl()
    {
        $this->selectField("abandonedCheckoutUrl");

        return $this;
    }

    public function selectBillingAddress(AbandonedCheckoutBillingAddressArgumentsObject $argsObject = null)
    {
        $object = new MailingAddressQueryObject("billingAddress");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCompletedAt()
    {
        $this->selectField("completedAt");

        return $this;
    }

    public function selectCreatedAt()
    {
        $this->selectField("createdAt");

        return $this;
    }

    public function selectCustomAttributes(AbandonedCheckoutCustomAttributesArgumentsObject $argsObject = null)
    {
        $object = new AttributeQueryObject("customAttributes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCustomer(AbandonedCheckoutCustomerArgumentsObject $argsObject = null)
    {
        $object = new CustomerQueryObject("customer");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDefaultCursor()
    {
        $this->selectField("defaultCursor");

        return $this;
    }

    public function selectDiscountCodes()
    {
        $this->selectField("discountCodes");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectLineItems(AbandonedCheckoutLineItemsArgumentsObject $argsObject = null)
    {
        $object = new AbandonedCheckoutLineItemConnectionQueryObject("lineItems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use [AbandonedCheckoutLineItem.quantity](https://shopify.dev/api/admin-graphql/unstable/objects/AbandonedCheckoutLineItem#field-quantity) instead.
     */
    public function selectLineItemsQuantity()
    {
        $this->selectField("lineItemsQuantity");

        return $this;
    }

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }

    public function selectNote()
    {
        $this->selectField("note");

        return $this;
    }

    public function selectShippingAddress(AbandonedCheckoutShippingAddressArgumentsObject $argsObject = null)
    {
        $object = new MailingAddressQueryObject("shippingAddress");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSubtotalPriceSet(AbandonedCheckoutSubtotalPriceSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("subtotalPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTaxLines(AbandonedCheckoutTaxLinesArgumentsObject $argsObject = null)
    {
        $object = new TaxLineQueryObject("taxLines");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTaxesIncluded()
    {
        $this->selectField("taxesIncluded");

        return $this;
    }

    public function selectTotalDiscountSet(AbandonedCheckoutTotalDiscountSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("totalDiscountSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalDutiesSet(AbandonedCheckoutTotalDutiesSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("totalDutiesSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalLineItemsPriceSet(AbandonedCheckoutTotalLineItemsPriceSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("totalLineItemsPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalPriceSet(AbandonedCheckoutTotalPriceSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("totalPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalTaxSet(AbandonedCheckoutTotalTaxSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("totalTaxSet");
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
}
