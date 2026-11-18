<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyOnlineStoreTheme;

/**
 * A rollout treatment change that publishes a theme for the buyers the treatment serves, without changing the shop's globally published theme. Returned by [`RolloutTreatment.changes`](https://shopify.dev/docs/api/admin-graphql/latest/objects/RolloutTreatment#field-RolloutTreatment.fields.changes).
 */
class ShopifyRolloutThemePublishChange implements ShopifyRolloutChange, ShopifyRolloutThemeChange
{
    protected $id;
    protected $theme;

    
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
     * The theme that the change applies to. Returns `null` when the theme has been deleted or the caller can't read it.
     *
     * @return ShopifyOnlineStoreTheme
     */
    public function getTheme(): ?ShopifyOnlineStoreTheme
    {
        return $this->theme;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['theme']) && $data['theme'] !== null) {
                $instance->theme = ShopifyOnlineStoreTheme::fromArray($data['theme']);
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
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->theme !== null) {
                $data['theme'] = $this->theme->asArray();
            }
            return $data;
        }
}
