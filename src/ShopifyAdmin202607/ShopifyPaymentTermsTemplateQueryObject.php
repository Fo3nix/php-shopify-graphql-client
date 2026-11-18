<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents the payment terms template object.
 */
class ShopifyPaymentTermsTemplateQueryObject extends QueryObject
{
    const OBJECT_NAME = "PaymentTermsTemplate";

    /**
     * The description of the payment terms template.
     */
    public function selectDescription(): static
    {
        $this->selectField("description");

        return $this;
    }

    /**
     * The number of days between the issued date and due date if this is the net type of payment terms.
     */
    public function selectDueInDays(): static
    {
        $this->selectField("dueInDays");

        return $this;
    }

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The name of the payment terms template.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }

    /**
     * The type of the payment terms template.
     */
    public function selectPaymentTermsType(): static
    {
        $this->selectField("paymentTermsType");

        return $this;
    }

    /**
     * The translated payment terms template name.
     */
    public function selectTranslatedName(): static
    {
        $this->selectField("translatedName");

        return $this;
    }
}
