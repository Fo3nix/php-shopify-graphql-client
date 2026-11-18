<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `marketingActivitiesDeleteAllExternal` mutation.
 */
class ShopifyMarketingActivitiesDeleteAllExternalPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketingActivitiesDeleteAllExternalPayload";

    /**
     * The asynchronous job that performs the deletion. The status of the job may be used to determine when it's safe again to create new activities.
     */
    public function selectJob(?ShopifyMarketingActivitiesDeleteAllExternalPayloadJobArgumentsObject $argsObject = null): ShopifyJobQueryObject
    {
        $object = new ShopifyJobQueryObject("job");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyMarketingActivitiesDeleteAllExternalPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyMarketingActivityUserErrorQueryObject
    {
        $object = new ShopifyMarketingActivityUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
