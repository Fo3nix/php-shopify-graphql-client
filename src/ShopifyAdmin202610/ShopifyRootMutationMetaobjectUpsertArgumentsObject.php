<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationMetaobjectUpsertArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["handle"];

    protected $handle;
    protected $metaobject;
    protected $values;

    /**
     * The identifier of the metaobject to upsert.
     */
    public function setHandle(ShopifyMetaobjectHandleInputInputObject $shopifyMetaobjectHandleInputInputObject): static
    {
        $this->handle = $shopifyMetaobjectHandleInputInputObject;

        return $this;
    }

    /**
     * The parameters to upsert the metaobject. Only the fields you provide are updated. Cannot be used in conjunction with `values`.
     */
    public function setMetaobject(ShopifyMetaobjectUpsertInputInputObject $shopifyMetaobjectUpsertInputInputObject): static
    {
        $this->metaobject = $shopifyMetaobjectUpsertInputInputObject;

        return $this;
    }

    /**
     * The values of the metaobject as a JSON object keyed by field definition key. This is a full replacement — omitted keys are cleared on an existing record. Cannot be used in conjunction with `metaobject`.
     */
    public function setValues($values): static
    {
        $this->values = $values;

        return $this;
    }
}
