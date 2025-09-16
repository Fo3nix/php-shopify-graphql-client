<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ProductResourceFeedbackQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductResourceFeedback";

    public function selectFeedbackGeneratedAt()
    {
        $this->selectField("feedbackGeneratedAt");

        return $this;
    }

    public function selectMessages()
    {
        $this->selectField("messages");

        return $this;
    }

    public function selectProductId()
    {
        $this->selectField("productId");

        return $this;
    }

    public function selectProductUpdatedAt()
    {
        $this->selectField("productUpdatedAt");

        return $this;
    }

    public function selectState()
    {
        $this->selectField("state");

        return $this;
    }
}
