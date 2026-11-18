<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * An agreement between the merchant and customer for a return.
 */
class ShopifyReturnAgreementQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReturnAgreement";

    /**
     * The application that created the agreement.
     */
    public function selectApp(?ShopifyReturnAgreementAppArgumentsObject $argsObject = null): ShopifyAppQueryObject
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
     * The return associated with the agreement.
     */
    public function selectReturn(?ShopifyReturnAgreementReturnArgumentsObject $argsObject = null): ShopifyReturnQueryObject
    {
        $object = new ShopifyReturnQueryObject("return");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The sales associated with the agreement.
     */
    public function selectSales(?ShopifyReturnAgreementSalesArgumentsObject $argsObject = null): ShopifySaleConnectionQueryObject
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
    public function selectUser(?ShopifyReturnAgreementUserArgumentsObject $argsObject = null): ShopifyStaffMemberQueryObject
    {
        $object = new ShopifyStaffMemberQueryObject("user");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
