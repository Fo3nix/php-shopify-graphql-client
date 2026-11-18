<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents feedback from apps about a resource, and the steps required to set up the apps on the shop.
 */
class ShopifyResourceFeedbackQueryObject extends QueryObject
{
    const OBJECT_NAME = "ResourceFeedback";

    /**
     * Feedback from an app about the steps a merchant needs to take to set up the app on their store.
     *
     * @deprecated Use `details` instead.
     */
    public function selectAppFeedback(?ShopifyResourceFeedbackAppFeedbackArgumentsObject $argsObject = null): ShopifyAppFeedbackQueryObject
    {
        $object = new ShopifyAppFeedbackQueryObject("appFeedback");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * List of AppFeedback detailing issues regarding a resource.
     */
    public function selectDetails(?ShopifyResourceFeedbackDetailsArgumentsObject $argsObject = null): ShopifyAppFeedbackQueryObject
    {
        $object = new ShopifyAppFeedbackQueryObject("details");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Summary of resource feedback pertaining to the resource.
     */
    public function selectSummary(): static
    {
        $this->selectField("summary");

        return $this;
    }
}
