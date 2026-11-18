<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Settings describing the behavior of checkout for a B2B buyer.
 */
class ShopifyBuyerExperienceConfigurationQueryObject extends QueryObject
{
    const OBJECT_NAME = "BuyerExperienceConfiguration";

    /**
     * Whether to checkout to draft order for merchant review.
     */
    public function selectCheckoutToDraft(): static
    {
        $this->selectField("checkoutToDraft");

        return $this;
    }

    /**
     * The portion required to be paid at checkout.
     */
    public function selectDeposit(?ShopifyBuyerExperienceConfigurationDepositArgumentsObject $argsObject = null): ShopifyDepositConfigurationUnionObject
    {
        $object = new ShopifyDepositConfigurationUnionObject("deposit");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether to allow customers to use editable shipping addresses.
     */
    public function selectEditableShippingAddress(): static
    {
        $this->selectField("editableShippingAddress");

        return $this;
    }

    /**
     * Whether a buyer must pay at checkout or they can also choose to pay
     * later using net terms.
     *
     * @deprecated Please use `checkoutToDraft`(must be false) and `paymentTermsTemplate`(must be nil) to derive this instead.
     */
    public function selectPayNowOnly(): static
    {
        $this->selectField("payNowOnly");

        return $this;
    }

    /**
     * Represents the merchant configured payment terms.
     */
    public function selectPaymentTermsTemplate(?ShopifyBuyerExperienceConfigurationPaymentTermsTemplateArgumentsObject $argsObject = null): ShopifyPaymentTermsTemplateQueryObject
    {
        $object = new ShopifyPaymentTermsTemplateQueryObject("paymentTermsTemplate");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
