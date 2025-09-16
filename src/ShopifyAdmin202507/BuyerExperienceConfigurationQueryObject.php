<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class BuyerExperienceConfigurationQueryObject extends QueryObject
{
    const OBJECT_NAME = "BuyerExperienceConfiguration";

    public function selectCheckoutToDraft()
    {
        $this->selectField("checkoutToDraft");

        return $this;
    }

    public function selectDeposit(BuyerExperienceConfigurationDepositArgumentsObject $argsObject = null)
    {
        $object = new DepositConfigurationUnionObject("deposit");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectEditableShippingAddress()
    {
        $this->selectField("editableShippingAddress");

        return $this;
    }

    /**
     * @deprecated Please use `checkoutToDraft`(must be false) and `paymentTermsTemplate`(must be nil) to derive this instead.
     */
    public function selectPayNowOnly()
    {
        $this->selectField("payNowOnly");

        return $this;
    }

    public function selectPaymentTermsTemplate(BuyerExperienceConfigurationPaymentTermsTemplateArgumentsObject $argsObject = null)
    {
        $object = new PaymentTermsTemplateQueryObject("paymentTermsTemplate");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
