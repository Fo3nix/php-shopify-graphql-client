<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCatalogHydrator;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCatalog;

/**
 * A rollout treatment change that sets a catalog to draft for the buyers the treatment serves, without changing the catalog's native status. Returned by [`RolloutTreatment.changes`](https://shopify.dev/docs/api/admin-graphql/latest/objects/RolloutTreatment#field-RolloutTreatment.fields.changes).
 */
class ShopifyRolloutCatalogDraftChange implements ShopifyRolloutCatalogChange, ShopifyRolloutChange
{
    protected $catalog;
    protected $id;

    
    /**
     * The catalog that the change applies to. Returns `null` when the catalog has been deleted or the caller can't read it.
     *
     * @return ShopifyCatalog
     */
    public function getCatalog(): ?ShopifyCatalog
    {
        return $this->catalog;
    }

    
    /**
     * A globally unique ID for this change, not the resource it affects.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['catalog']) && $data['catalog'] !== null) {
                $instance->catalog = ShopifyCatalogHydrator::fromArray($data['catalog']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            return $instance;
        }

        /**
         * @param string $json
         * @return self
         */
        public static function fromJson(string $json): self
        {
            $data = json_decode($json, true);
            if ($data === null && json_last_error() !== JSON_ERROR_NONE) {
                throw new \InvalidArgumentException('Invalid JSON provided to fromJson method: ' . json_last_error_msg());
            }
            return self::fromArray($data);
        }

        /**
         * Converts this object to an array.
         * @return array
         */
        public function asArray(): array
        {
            $data = [];
            if ($this->catalog !== null) {
                $data['catalog'] = ShopifyCatalogHydrator::toArray($this->catalog);
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            return $data;
        }
}
