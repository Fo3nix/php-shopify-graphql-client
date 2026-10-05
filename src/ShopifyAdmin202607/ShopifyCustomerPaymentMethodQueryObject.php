<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCustomerPaymentMethodQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerPaymentMethod";

    public function selectCustomer(ShopifyCustomerPaymentMethodCustomerArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCustomerQueryObject("customer");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectInstrument(ShopifyCustomerPaymentMethodInstrumentArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCustomerPaymentInstrumentUnionObject("instrument");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMandates(ShopifyCustomerPaymentMethodMandatesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPaymentMandateResourceConnectionQueryObject("mandates");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectRevokedAt()
    {
        $this->selectField("revokedAt");

        return $this;
    }

    public function selectRevokedReason()
    {
        $this->selectField("revokedReason");

        return $this;
    }

    public function selectSubscriptionContracts(ShopifyCustomerPaymentMethodSubscriptionContractsArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionContractConnectionQueryObject("subscriptionContracts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
