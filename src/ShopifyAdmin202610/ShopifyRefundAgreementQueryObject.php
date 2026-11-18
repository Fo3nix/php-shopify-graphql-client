<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * An agreement between the merchant and customer to refund all or a portion of the order.
 */
class ShopifyRefundAgreementQueryObject extends QueryObject
{
    const OBJECT_NAME = "RefundAgreement";

    /**
     * The application that created the agreement.
     */
    public function selectApp(?ShopifyRefundAgreementAppArgumentsObject $argsObject = null): ShopifyAppQueryObject
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
     * The refund associated with the agreement.
     */
    public function selectRefund(?ShopifyRefundAgreementRefundArgumentsObject $argsObject = null): ShopifyRefundQueryObject
    {
        $object = new ShopifyRefundQueryObject("refund");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The sales associated with the agreement.
     */
    public function selectSales(?ShopifyRefundAgreementSalesArgumentsObject $argsObject = null): ShopifySaleConnectionQueryObject
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
    public function selectUser(?ShopifyRefundAgreementUserArgumentsObject $argsObject = null): ShopifyStaffMemberQueryObject
    {
        $object = new ShopifyStaffMemberQueryObject("user");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
