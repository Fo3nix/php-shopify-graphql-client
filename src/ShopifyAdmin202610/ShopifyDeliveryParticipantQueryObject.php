<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A participant defines carrier-calculated rates for shipping services
 * with a possible merchant-defined fixed fee or a percentage-of-rate fee.
 */
class ShopifyDeliveryParticipantQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryParticipant";

    /**
     * Whether to display new shipping services automatically to the customer when the service becomes available.
     */
    public function selectAdaptToNewServicesFlag(): static
    {
        $this->selectField("adaptToNewServicesFlag");

        return $this;
    }

    /**
     * The carrier used for this participant.
     */
    public function selectCarrierService(?ShopifyDeliveryParticipantCarrierServiceArgumentsObject $argsObject = null): ShopifyDeliveryCarrierServiceQueryObject
    {
        $object = new ShopifyDeliveryCarrierServiceQueryObject("carrierService");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The merchant-defined fixed fee for this participant.
     */
    public function selectFixedFee(?ShopifyDeliveryParticipantFixedFeeArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("fixedFee");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
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
     * The carrier-specific services offered by the participant, and whether each service is active.
     */
    public function selectParticipantServices(?ShopifyDeliveryParticipantParticipantServicesArgumentsObject $argsObject = null): ShopifyDeliveryParticipantServiceQueryObject
    {
        $object = new ShopifyDeliveryParticipantServiceQueryObject("participantServices");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The merchant-defined percentage-of-rate fee for this participant.
     */
    public function selectPercentageOfRateFee(): static
    {
        $this->selectField("percentageOfRateFee");

        return $this;
    }
}
