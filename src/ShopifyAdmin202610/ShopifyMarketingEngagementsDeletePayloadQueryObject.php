<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `marketingEngagementsDelete` mutation.
 */
class ShopifyMarketingEngagementsDeletePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketingEngagementsDeletePayload";

    /**
     * Informational message about the engagement data that has been marked for deletion.
     */
    public function selectResult(): static
    {
        $this->selectField("result");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyMarketingEngagementsDeletePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyMarketingActivityUserErrorQueryObject
    {
        $object = new ShopifyMarketingActivityUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
