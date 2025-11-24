<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyOrderPaymentCollectionDetailsQueryObject extends QueryObject
{
    const OBJECT_NAME = "OrderPaymentCollectionDetails";

    public function selectAdditionalPaymentCollectionUrl()
    {
        $this->selectField("additionalPaymentCollectionUrl");

        return $this;
    }

    public function selectVaultedPaymentMethods(ShopifyOrderPaymentCollectionDetailsVaultedPaymentMethodsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPaymentMandateQueryObject("vaultedPaymentMethods");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
