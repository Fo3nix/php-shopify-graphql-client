<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Reports the status of shops and their resources and displays this information
 * within Shopify admin. AppFeedback is used to notify merchants about steps they need to take
 * to set up an app on their store.
 */
class ShopifyAppFeedbackQueryObject extends QueryObject
{
    const OBJECT_NAME = "AppFeedback";

    /**
     * The application associated to the feedback.
     */
    public function selectApp(?ShopifyAppFeedbackAppArgumentsObject $argsObject = null): ShopifyAppQueryObject
    {
        $object = new ShopifyAppQueryObject("app");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The date and time when the app feedback was generated.
     */
    public function selectFeedbackGeneratedAt(): static
    {
        $this->selectField("feedbackGeneratedAt");

        return $this;
    }

    /**
     * A link to where merchants can resolve errors.
     */
    public function selectLink(?ShopifyAppFeedbackLinkArgumentsObject $argsObject = null): ShopifyLinkQueryObject
    {
        $object = new ShopifyLinkQueryObject("link");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The feedback message presented to the merchant.
     */
    public function selectMessages(?ShopifyAppFeedbackMessagesArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("messages");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Conveys the state of the feedback and whether it requires merchant action or not.
     */
    public function selectState(): static
    {
        $this->selectField("state");

        return $this;
    }
}
