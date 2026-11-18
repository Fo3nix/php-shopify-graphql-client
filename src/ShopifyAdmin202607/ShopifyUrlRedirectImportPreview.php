<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

/**
 * A preview of a URL redirect import row.
 */
class ShopifyUrlRedirectImportPreview
{
    protected $path;
    protected $target;

    
    /**
     * The old path to be redirected from. When the user visits this path, they will be redirected to the target location.
     *
     * @return string
     */
    public function getPath(): ?string
    {
        return $this->path;
    }

    
    /**
     * The target location where the user will be redirected to.
     *
     * @return string
     */
    public function getTarget(): ?string
    {
        return $this->target;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['path']) && $data['path'] !== null) {
                $instance->path = $data['path'];
            }
            if (isset($data['target']) && $data['target'] !== null) {
                $instance->target = $data['target'];
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
            if ($this->path !== null) {
                $data['path'] = $this->path;
            }
            if ($this->target !== null) {
                $data['target'] = $this->target;
            }
            return $data;
        }
}
