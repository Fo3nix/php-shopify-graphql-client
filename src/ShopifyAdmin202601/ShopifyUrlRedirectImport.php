<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyUrlRedirectImportPreview;

/**
 * A request to import a [`URLRedirect`](https://shopify.dev/api/admin-graphql/latest/objects/UrlRedirect) object
 * into the Online Store channel. Apps can use this to query the state of an `UrlRedirectImport` request.
 *
 * For more information, see [`url-redirect`](https://help.shopify.com/en/manual/online-store/menus-and-links/url-redirect)s.
 */
class ShopifyUrlRedirectImport implements ShopifyNode
{
    protected $count;
    protected $createdCount;
    protected $failedCount;
    protected $finished;
    protected $finishedAt;
    protected $id;
    protected $previewRedirects;
    protected $updatedCount;

    
    /**
     * The number of rows in the file.
     *
     * @return int
     */
    public function getCount(): ?int
    {
        return $this->count;
    }

    
    /**
     * The number of redirects created from the import.
     *
     * @return int
     */
    public function getCreatedCount(): ?int
    {
        return $this->createdCount;
    }

    
    /**
     * The number of redirects that failed to be imported.
     *
     * @return int
     */
    public function getFailedCount(): ?int
    {
        return $this->failedCount;
    }

    
    /**
     * Whether the import is finished.
     *
     * @return bool
     */
    public function getFinished(): ?bool
    {
        return $this->finished;
    }

    
    /**
     * The date and time when the import finished.
     *
     * @return Carbon
     */
    public function getFinishedAt(): ?Carbon
    {
        return $this->finishedAt;
    }

    
    /**
     * The ID of the `UrlRedirectImport` object.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * A list of up to three previews of the URL redirects to be imported.
     *
     * @return ShopifyUrlRedirectImportPreview[]
     */
    public function getPreviewRedirects(): ?array
    {
        return $this->previewRedirects;
    }

    
    /**
     * The number of redirects updated during the import.
     *
     * @return int
     */
    public function getUpdatedCount(): ?int
    {
        return $this->updatedCount;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['count']) && $data['count'] !== null) {
                $instance->count = $data['count'];
            }
            if (isset($data['createdCount']) && $data['createdCount'] !== null) {
                $instance->createdCount = $data['createdCount'];
            }
            if (isset($data['failedCount']) && $data['failedCount'] !== null) {
                $instance->failedCount = $data['failedCount'];
            }
            if (isset($data['finished']) && $data['finished'] !== null) {
                $instance->finished = $data['finished'];
            }
            if (isset($data['finishedAt']) && $data['finishedAt'] !== null) {
                $instance->finishedAt = new Carbon($data['finishedAt']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['previewRedirects']) && $data['previewRedirects'] !== null) {
                $instance->previewRedirects = array_map(function($item) { return ShopifyUrlRedirectImportPreview::fromArray($item); }, $data['previewRedirects']);
            }
            if (isset($data['updatedCount']) && $data['updatedCount'] !== null) {
                $instance->updatedCount = $data['updatedCount'];
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
            if ($this->count !== null) {
                $data['count'] = $this->count;
            }
            if ($this->createdCount !== null) {
                $data['createdCount'] = $this->createdCount;
            }
            if ($this->failedCount !== null) {
                $data['failedCount'] = $this->failedCount;
            }
            if ($this->finished !== null) {
                $data['finished'] = $this->finished;
            }
            if ($this->finishedAt !== null) {
                $data['finishedAt'] = $this->finishedAt->toIso8601String();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->previewRedirects !== null) {
                $data['previewRedirects'] = array_map(function($item) { return $item->asArray(); }, $this->previewRedirects);
            }
            if ($this->updatedCount !== null) {
                $data['updatedCount'] = $this->updatedCount;
            }
            return $data;
        }
}
