<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class PaymentTermsTemplateQueryObject extends QueryObject
{
    const OBJECT_NAME = "PaymentTermsTemplate";

    public function selectDescription()
    {
        $this->selectField("description");

        return $this;
    }

    public function selectDueInDays()
    {
        $this->selectField("dueInDays");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }

    public function selectPaymentTermsType()
    {
        $this->selectField("paymentTermsType");

        return $this;
    }

    public function selectTranslatedName()
    {
        $this->selectField("translatedName");

        return $this;
    }
}
