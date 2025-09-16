<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class AppFeedbackQueryObject extends QueryObject
{
    const OBJECT_NAME = "AppFeedback";

    public function selectApp(AppFeedbackAppArgumentsObject $argsObject = null)
    {
        $object = new AppQueryObject("app");
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

    public function selectLink(AppFeedbackLinkArgumentsObject $argsObject = null)
    {
        $object = new LinkQueryObject("link");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMessages(AppFeedbackMessagesArgumentsObject $argsObject = null)
    {
        $object = new UserErrorQueryObject("messages");
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
