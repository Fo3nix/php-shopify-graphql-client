<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyTranslatableResourceConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyTranslatableContent;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyTranslation;

/**
 * A resource in Shopify that contains fields available for translation into different languages. Accesses the resource's translatable content, existing [`Translation`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Translation) objects, and any nested resources that can also be translated.
 *
 * The [`TranslatableContent`](https://shopify.dev/docs/api/admin-graphql/latest/objects/TranslatableContent) includes field keys, values, and digest hashes needed when [registering translations](https://shopify.dev/docs/api/admin-graphql/latest/mutations/translationsRegister).
 *
 * You can retrieve translations for specific [`Locale`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Locale) and [`Market`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Market) configurations. Each translation includes an `outdated` flag indicating whether the original content has changed since that translation was last updated.
 *
 * Learn more about [managing translated content](https://shopify.dev/docs/apps/build/markets/manage-translated-content).
 */
class ShopifyTranslatableResource
{
    protected $nestedTranslatableResources;
    protected $resourceId;
    protected $translatableContent;
    protected $translations;

    
    /**
     * Nested translatable resources under the current resource.
     *
     * @return ShopifyTranslatableResourceConnection
     */
    public function getNestedTranslatableResources(): ?ShopifyTranslatableResourceConnection
    {
        return $this->nestedTranslatableResources;
    }

    
    /**
     * GID of the resource.
     *
     * @return string
     */
    public function getResourceId(): ?string
    {
        return $this->resourceId;
    }

    
    /**
     * Translatable content.
     *
     * @return ShopifyTranslatableContent[]
     */
    public function getTranslatableContent(): ?array
    {
        return $this->translatableContent;
    }

    
    /**
     * Translatable content translations (includes unpublished locales).
     *
     * @return ShopifyTranslation[]
     */
    public function getTranslations(): ?array
    {
        return $this->translations;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['nestedTranslatableResources']) && $data['nestedTranslatableResources'] !== null) {
                $instance->nestedTranslatableResources = ShopifyTranslatableResourceConnection::fromArray($data['nestedTranslatableResources']);
            }
            if (isset($data['resourceId']) && $data['resourceId'] !== null) {
                $instance->resourceId = $data['resourceId'];
            }
            if (isset($data['translatableContent']) && $data['translatableContent'] !== null) {
                $instance->translatableContent = array_map(function($item) { return ShopifyTranslatableContent::fromArray($item); }, $data['translatableContent']);
            }
            if (isset($data['translations']) && $data['translations'] !== null) {
                $instance->translations = array_map(function($item) { return ShopifyTranslation::fromArray($item); }, $data['translations']);
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
            if ($this->nestedTranslatableResources !== null) {
                $data['nestedTranslatableResources'] = $this->nestedTranslatableResources->asArray();
            }
            if ($this->resourceId !== null) {
                $data['resourceId'] = $this->resourceId;
            }
            if ($this->translatableContent !== null) {
                $data['translatableContent'] = array_map(function($item) { return $item->asArray(); }, $this->translatableContent);
            }
            if ($this->translations !== null) {
                $data['translations'] = array_map(function($item) { return $item->asArray(); }, $this->translations);
            }
            return $data;
        }
}
