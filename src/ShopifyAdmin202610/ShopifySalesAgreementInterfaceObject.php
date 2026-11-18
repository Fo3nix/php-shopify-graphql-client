<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InterfaceObject;

/**
 * A contract between a merchant and a customer to do business. Shopify creates a sales agreement whenever an order is placed, edited, or refunded. A sales agreement has one or more sales records, which provide itemized details about the initial agreement or subsequent changes made to the order. For example, when a customer places an order, Shopify creates the order, generates a sales agreement, and records a sale for each line item purchased in the order. A sale record is specific to a type of order line. Order lines can represent different things such as a purchased product, a tip added by a customer, shipping costs collected at checkout, and more.
 */
class ShopifySalesAgreementInterfaceObject extends InterfaceObject
{
    const OBJECT_NAME = "SalesAgreement";

    /**
     * The application that created the agreement.
     */
    public function selectApp(?ShopifySalesAgreementAppArgumentsObject $argsObject = null): ShopifyAppQueryObject
    {
        $object = new ShopifyAppQueryObject("app");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The date and time at which the agreement occurred.
     */
    public function selectHappenedAt(): static
    {
        $this->selectField("happenedAt");

        return $this;
    }

    /**
     * The unique ID for the agreement.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The reason the agreement was created.
     */
    public function selectReason(): static
    {
        $this->selectField("reason");

        return $this;
    }

    /**
     * The sales associated with the agreement.
     */
    public function selectSales(?ShopifySalesAgreementSalesArgumentsObject $argsObject = null): ShopifySaleConnectionQueryObject
    {
        $object = new ShopifySaleConnectionQueryObject("sales");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The staff member associated with the agreement.
     */
    public function selectUser(?ShopifySalesAgreementUserArgumentsObject $argsObject = null): ShopifyStaffMemberQueryObject
    {
        $object = new ShopifyStaffMemberQueryObject("user");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function onOrderAgreement(): ShopifyOrderAgreementQueryObject
    {
        $object = new ShopifyOrderAgreementQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onOrderEditAgreement(): ShopifyOrderEditAgreementQueryObject
    {
        $object = new ShopifyOrderEditAgreementQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onRefundAgreement(): ShopifyRefundAgreementQueryObject
    {
        $object = new ShopifyRefundAgreementQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onReturnAgreement(): ShopifyReturnAgreementQueryObject
    {
        $object = new ShopifyReturnAgreementQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
