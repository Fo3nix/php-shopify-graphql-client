<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMetafieldDefinitionType;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMetafieldDefinitionValidation;

/**
 * Common fields exposed by every metafield definition usable as a collection condition.
 */
interface ShopifyCollectionConditionMetafieldDefinitionInterface
{
    
    /**
     * The description of the metafield definition.
     *
     * @return string
     */
    public function getDescription(): ?string;

    
    /**
     * The ID of the underlying metafield definition.
     *
     * @return string
     */
    public function getId(): ?string;

    
    /**
     * The unique identifier for the metafield definition within its namespace.
     *
     * @return string
     */
    public function getKey(): ?string;

    
    /**
     * The human-readable name of the metafield definition.
     *
     * @return string
     */
    public function getName(): ?string;

    
    /**
     * The container for a group of metafields that the metafield definition is associated with.
     *
     * @return string
     */
    public function getNamespace(): ?string;

    
    /**
     * The resource type that the metafield definition is attached to.
     *
     * @return string A ShopifyMetafieldOwnerTypeEnumObject value
     */
    public function getOwnerType(): ?string;

    
    /**
     * The data type of the metafield definition.
     *
     * @return ShopifyMetafieldDefinitionType
     */
    public function getType(): ?ShopifyMetafieldDefinitionType;

    
    /**
     * A list of validation options for the metafields that belong to the metafield definition.
     *
     * @return ShopifyMetafieldDefinitionValidation[]
     */
    public function getValidations(): ?array;

    /**
     * Converts this object to an array.
     * @return array
     */
    public function asArray(): array;
}
