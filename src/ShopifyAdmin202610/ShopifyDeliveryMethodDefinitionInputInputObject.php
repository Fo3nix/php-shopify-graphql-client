<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for a method definition.
 */
class ShopifyDeliveryMethodDefinitionInputInputObject extends InputObject
{
    protected $id;
    protected $name;
    protected $description;
    protected $active;
    protected $rateDefinition;
    protected $participant;
    protected $weightConditionsToCreate;
    protected $priceConditionsToCreate;
    protected $conditionsToUpdate;

    /**
     * A globally-unique ID of the method definition. Use only when updating a method definition.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The name of the method definition.
     */
    public function setName($name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * The description of the method definition.
     */
    public function setDescription($description): static
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Whether to use this method definition during rate calculation.
     */
    public function setActive($active): static
    {
        $this->active = $active;

        return $this;
    }

    /**
     * A rate definition to apply to the method definition.
     */
    public function setRateDefinition(ShopifyDeliveryRateDefinitionInputInputObject $shopifyDeliveryRateDefinitionInputInputObject): static
    {
        $this->rateDefinition = $shopifyDeliveryRateDefinitionInputInputObject;

        return $this;
    }

    /**
     * A participant to apply to the method definition.
     */
    public function setParticipant(ShopifyDeliveryParticipantInputInputObject $shopifyDeliveryParticipantInputInputObject): static
    {
        $this->participant = $shopifyDeliveryParticipantInputInputObject;

        return $this;
    }

    /**
     * A list of weight conditions on the method definition.
     */
    public function setWeightConditionsToCreate(array $weightConditionsToCreate): static
    {
        $this->weightConditionsToCreate = $weightConditionsToCreate;

        return $this;
    }

    /**
     * A list of price conditions on the method definition.
     */
    public function setPriceConditionsToCreate(array $priceConditionsToCreate): static
    {
        $this->priceConditionsToCreate = $priceConditionsToCreate;

        return $this;
    }

    /**
     * A list of conditions to update on the method definition.
     */
    public function setConditionsToUpdate(array $conditionsToUpdate): static
    {
        $this->conditionsToUpdate = $conditionsToUpdate;

        return $this;
    }
}
