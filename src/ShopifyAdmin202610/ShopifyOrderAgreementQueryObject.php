<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * An agreement associated with an order placement.
 */
class ShopifyOrderAgreementQueryObject extends QueryObject
{
    const OBJECT_NAME = "OrderAgreement";

    /**
     * The application that created the agreement.
     */
    public function selectApp(?ShopifyOrderAgreementAppArgumentsObject $argsObject = null): ShopifyAppQueryObject
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
     * The order associated with the agreement.
     */
    public function selectOrder(?ShopifyOrderAgreementOrderArgumentsObject $argsObject = null): ShopifyOrderQueryObject
    {
        $object = new ShopifyOrderQueryObject("order");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
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
    public function selectSales(?ShopifyOrderAgreementSalesArgumentsObject $argsObject = null): ShopifySaleConnectionQueryObject
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
    public function selectUser(?ShopifyOrderAgreementUserArgumentsObject $argsObject = null): ShopifyStaffMemberQueryObject
    {
        $object = new ShopifyStaffMemberQueryObject("user");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
