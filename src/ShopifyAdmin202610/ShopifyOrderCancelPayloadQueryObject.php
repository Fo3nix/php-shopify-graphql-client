<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `orderCancel` mutation.
 */
class ShopifyOrderCancelPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "OrderCancelPayload";

    /**
     * The job that asynchronously cancels the order.
     */
    public function selectJob(?ShopifyOrderCancelPayloadJobArgumentsObject $argsObject = null): ShopifyJobQueryObject
    {
        $object = new ShopifyJobQueryObject("job");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The job result for tracking the order cancellation, including its `status`, any `errors`, and the affected `order`. Cancellation runs asynchronously, so query this result's `id` with the [`node`](https://shopify.dev/docs/api/admin-graphql/latest/queries/node) query until `done` is `true`.
     */
    public function selectJobResult(?ShopifyOrderCancelPayloadJobResultArgumentsObject $argsObject = null): ShopifyOrderCancelJobResultQueryObject
    {
        $object = new ShopifyOrderCancelJobResultQueryObject("jobResult");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectOrderCancelUserErrors(?ShopifyOrderCancelPayloadOrderCancelUserErrorsArgumentsObject $argsObject = null): ShopifyOrderCancelUserErrorQueryObject
    {
        $object = new ShopifyOrderCancelUserErrorQueryObject("orderCancelUserErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @deprecated Use `orderCancelUserErrors` instead.
     */
    public function selectUserErrors(?ShopifyOrderCancelPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
