<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CustomerPaymentMethodQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerPaymentMethod";

    public function selectCustomer(CustomerPaymentMethodCustomerArgumentsObject $argsObject = null)
    {
        $object = new CustomerQueryObject("customer");
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

    public function selectInstrument(CustomerPaymentMethodInstrumentArgumentsObject $argsObject = null)
    {
        $object = new CustomerPaymentInstrumentUnionObject("instrument");
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

    public function selectSubscriptionContracts(CustomerPaymentMethodSubscriptionContractsArgumentsObject $argsObject = null)
    {
        $object = new SubscriptionContractConnectionQueryObject("subscriptionContracts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
