<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `dataSaleOptOut` mutation.
 */
class ShopifyDataSaleOptOutPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "DataSaleOptOutPayload";

    /**
     * The ID of the customer whose email address has been opted out of data sale.
     */
    public function selectCustomerId(): static
    {
        $this->selectField("customerId");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyDataSaleOptOutPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyDataSaleOptOutUserErrorQueryObject
    {
        $object = new ShopifyDataSaleOptOutUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
