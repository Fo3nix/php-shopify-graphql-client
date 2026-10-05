<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyAppFeedbackQueryObject extends QueryObject
{
    const OBJECT_NAME = "AppFeedback";

    public function selectApp(ShopifyAppFeedbackAppArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAppQueryObject("app");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectChannel(ShopifyAppFeedbackChannelArgumentsObject $argsObject = null)
    {
        $object = new ShopifyChannelQueryObject("channel");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFeedbackGeneratedAt()
    {
        $this->selectField("feedbackGeneratedAt");

        return $this;
    }

    public function selectLink(ShopifyAppFeedbackLinkArgumentsObject $argsObject = null)
    {
        $object = new ShopifyLinkQueryObject("link");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMessages(ShopifyAppFeedbackMessagesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyUserErrorQueryObject("messages");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectState()
    {
        $this->selectField("state");

        return $this;
    }
}
