<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ShopifyPaymentsTransactionSetQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyPaymentsTransactionSet";

    public function selectExtendedAuthorizationSet(ShopifyPaymentsTransactionSetExtendedAuthorizationSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPaymentsExtendedAuthorizationQueryObject("extendedAuthorizationSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectRefundSet(ShopifyPaymentsTransactionSetRefundSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPaymentsRefundSetQueryObject("refundSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
