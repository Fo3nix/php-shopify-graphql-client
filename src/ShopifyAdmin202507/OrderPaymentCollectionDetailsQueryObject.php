<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class OrderPaymentCollectionDetailsQueryObject extends QueryObject
{
    const OBJECT_NAME = "OrderPaymentCollectionDetails";

    public function selectAdditionalPaymentCollectionUrl()
    {
        $this->selectField("additionalPaymentCollectionUrl");

        return $this;
    }

    public function selectVaultedPaymentMethods(OrderPaymentCollectionDetailsVaultedPaymentMethodsArgumentsObject $argsObject = null)
    {
        $object = new PaymentMandateQueryObject("vaultedPaymentMethods");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
