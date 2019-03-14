<?php
/**
 * ProjectOrderLine
 *
 * PHP version 5
 *
 * @category Class
 * @package  Tripletex
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Tripletex API
 *
 * The Tripletex API is a **RESTful API**, which does not implement PATCH, but uses a PUT with optional fields.  **Actions** or commands are represented in our RESTful path with a prefixed `:`. Example: `/v2/hours/123/:approve`.  **Summaries** or aggregated results are represented in our RESTful path with a prefixed <code>&gt;</code>. Example: <code>/v2/hours/&gt;thisWeeksBillables</code>.  **\"requestID\"** is a key found in all validation and error responses. If additional log information is absolutely necessary, our support division can locate the key value.  **Download** the [swagger.json](/v2/swagger.json) file [OpenAPI Specification](https://github.com/OAI/OpenAPI-Specification) to [generate code](https://github.com/swagger-api/swagger-codegen). This document was generated from the Swagger JSON file.  **version:** This is a versioning number found on all DB records. If included, it will prevent your PUT/POST from overriding any updates to the record since your GET.  **Date & DateTime** follows the **ISO 8601** standard. Date: `YYYY-MM-DD`. DateTime: `YYYY-MM-DDThh:mm:ssZ`  **Sorting** is done by specifying a comma separated list, where a `-` prefix denotes descending. You can sort by sub object with the following format: `project.name, -date`.  **Searching:** is done by entering values in the optional fields for each API call. The values fall into the following categories: range, in, exact and like.  **Missing fields or even no response data** can occur because result objects and fields are filtered on authorization.  **See [FAQ](https://tripletex.no/execute/docViewer?articleId=906&language=0) for more additional information.**   ## Authentication: - **Tokens:** The Tripletex API uses 3 different tokens - **consumerToken**, **employeeToken** and **sessionToken**.  - **consumerToken** is a token provided to the consumer by Tripletex after the API 2.0 registration is completed.  - **employeeToken** is a token created by an administrator in your Tripletex account via the user settings and the tab \"API access\". Each employee token must be given a set of entitlements. [Read more here.](https://tripletex.no/execute/docViewer?articleId=853&language=0)  - **sessionToken** is the token from `/token/session/:create` which requires a consumerToken and an employeeToken created with the same consumer token, but not an authentication header. See how to create a sessionToken [here](https://tripletex.no/execute/docViewer?articleId=855&language=0). - The session token is used as the password in \"Basic Authentication Header\" for API calls.  - Use blank or `0` as username for accessing the account with regular employee token, or if a company owned employee token accesses <code>/company/&gt;withLoginAccess</code> or <code>/token/session/&gt;whoAmI</code>.  - For company owned employee tokens (accounting offices) the ID from <code>/company/&gt;withLoginAccess</code> can be used as username for accessing client accounts.  - If you need to create the header yourself use <code>Authorization: Basic &lt;base64encode('0:sessionToken')&gt;</code>.   ## Tags: - <div class=\"tag-icon-beta\"></div> **[BETA]** This is a beta endpoint and can be subject to change. - <div class=\"tag-icon-deprecated\"></div> **[DEPRECATED]** Deprecated means that we intend to remove/change this feature or capability in a future \"major\" API release. We therefore discourage all use of this feature/capability.  ## Fields: Use the `fields` parameter to specify which fields should be returned. This also supports fields from sub elements. Example values: - `project,activity,hours`  returns `{project:..., activity:...., hours:...}`. - just `project` returns `\"project\" : { \"id\": 12345, \"url\": \"tripletex.no/v2/projects/12345\"  }`. - `project(*)` returns `\"project\" : { \"id\": 12345 \"name\":\"ProjectName\" \"number.....startDate\": \"2013-01-07\" }`. - `project(name)` returns `\"project\" : { \"name\":\"ProjectName\" }`. - All elements and some subElements :  `*,activity(name),employee(*)`.  ## Changes: To get the changes for a resource, `changes` have to be explicitly specified as part of the `fields` parameter, e.g. `*,changes`. There are currently two types of change available:  - `CREATE` for when the resource was created - `UPDATE` for when the resource was updated  NOTE: For objects created prior to October 24th 2018 the list may be incomplete, but will always contain the CREATE and the last change (if the object has been changed after creation).  ## Rate limiting in each response header: Rate limiting is performed on the API calls for an employee for each API consumer. Status regarding the rate limit is returned as headers: - `X-Rate-Limit-Limit` - The number of allowed requests in the current period. - `X-Rate-Limit-Remaining` - The number of remaining requests. - `X-Rate-Limit-Reset` - The number of seconds left in the current period.  Once the rate limit is hit, all requests will return HTTP status code `429` for the remainder of the current period.   ## Response envelope: ``` {   \"fullResultSize\": ###,   \"from\": ###, // Paging starting from   \"count\": ###, // Paging count   \"versionDigest\": \"Hash of full result\",   \"values\": [...list of objects...] } {   \"value\": {...single object...} } ```   ## WebHook envelope: ``` {   \"subscriptionId\": ###,   \"event\": \"object.verb\", // As listed from /v2/event/   \"id\": ###, // Object id   \"value\": {... single object, null if object.deleted ...} } ```    ## Error/warning envelope: ``` {   \"status\": ###, // HTTP status code   \"code\": #####, // internal status code of event   \"message\": \"Basic feedback message in your language\",   \"link\": \"Link to doc\",   \"developerMessage\": \"More technical message\",   \"validationMessages\": [ // Will be null if Error     {       \"field\": \"Name of field\",       \"message\": \"Validation failure information\"     }   ],   \"requestId\": \"UUID used in any logs\" } ```   ## Status codes / Error codes: - **200 OK** - **201 Created** - From POSTs that create something new. - **204 No Content** - When there is no answer, ex: \"/:anAction\" or DELETE. - **400 Bad request** -   - **4000** Bad Request Exception   - **11000** Illegal Filter Exception   - **12000** Path Param Exception   - **24000**   Cryptography Exception - **401 Unauthorized** - When authentication is required and has failed or has not yet been provided   -  **3000** Authentication Exception   -  **9000** Security Exception - **403 Forbidden** - When AuthorisationManager says no. - **404 Not Found** - For content/IDs that does not exist.   -  **6000** Not Found Exception - **409 Conflict** - Such as an edit conflict between multiple simultaneous updates   -  **7000** Object Exists Exception   -  **8000** Revision Exception   - **10000** Locked Exception   - **14000** Duplicate entry - **422 Bad Request** - For Required fields or things like malformed payload.   - **15000** Value Validation Exception   - **16000** Mapping Exception   - **17000** Sorting Exception   - **18000** Validation Exception   - **21000** Param Exception   - **22000** Invalid JSON Exception   - **23000**   Result Set Too Large Exception - **429 Too Many Requests** - Request rate limit hit - **500 Internal Error** -  Unexpected condition was encountered and no more specific message is suitable   -  **1000** Exception
 *
 * OpenAPI spec version: 2.33.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.5
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Tripletex\Model;

use \ArrayAccess;
use \Tripletex\ObjectSerializer;

/**
 * ProjectOrderLine Class Doc Comment
 *
 * @category Class
 * @package  Tripletex
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProjectOrderLine implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProjectOrderLine';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'version' => 'int',
'changes' => '\Tripletex\Model\Change[]',
'url' => 'string',
'product' => '\Tripletex\Model\Product',
'inventory' => '\Tripletex\Model\Inventory',
'description' => 'string',
'count' => 'double',
'unit_cost_currency' => 'BigDecimal',
'unit_price_excluding_vat_currency' => 'BigDecimal',
'currency' => '\Tripletex\Model\Currency',
'markup' => 'double',
'discount' => 'double',
'vat_type' => '\Tripletex\Model\VatType',
'amount_excluding_vat_currency' => 'BigDecimal',
'amount_including_vat_currency' => 'BigDecimal',
'project' => '\Tripletex\Model\Project',
'date' => 'string',
'is_chargeable' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
'version' => 'int32',
'changes' => null,
'url' => null,
'product' => null,
'inventory' => null,
'description' => null,
'count' => 'double',
'unit_cost_currency' => null,
'unit_price_excluding_vat_currency' => null,
'currency' => null,
'markup' => 'double',
'discount' => 'double',
'vat_type' => null,
'amount_excluding_vat_currency' => null,
'amount_including_vat_currency' => null,
'project' => null,
'date' => null,
'is_chargeable' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
'version' => 'version',
'changes' => 'changes',
'url' => 'url',
'product' => 'product',
'inventory' => 'inventory',
'description' => 'description',
'count' => 'count',
'unit_cost_currency' => 'unitCostCurrency',
'unit_price_excluding_vat_currency' => 'unitPriceExcludingVatCurrency',
'currency' => 'currency',
'markup' => 'markup',
'discount' => 'discount',
'vat_type' => 'vatType',
'amount_excluding_vat_currency' => 'amountExcludingVatCurrency',
'amount_including_vat_currency' => 'amountIncludingVatCurrency',
'project' => 'project',
'date' => 'date',
'is_chargeable' => 'isChargeable'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'version' => 'setVersion',
'changes' => 'setChanges',
'url' => 'setUrl',
'product' => 'setProduct',
'inventory' => 'setInventory',
'description' => 'setDescription',
'count' => 'setCount',
'unit_cost_currency' => 'setUnitCostCurrency',
'unit_price_excluding_vat_currency' => 'setUnitPriceExcludingVatCurrency',
'currency' => 'setCurrency',
'markup' => 'setMarkup',
'discount' => 'setDiscount',
'vat_type' => 'setVatType',
'amount_excluding_vat_currency' => 'setAmountExcludingVatCurrency',
'amount_including_vat_currency' => 'setAmountIncludingVatCurrency',
'project' => 'setProject',
'date' => 'setDate',
'is_chargeable' => 'setIsChargeable'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'version' => 'getVersion',
'changes' => 'getChanges',
'url' => 'getUrl',
'product' => 'getProduct',
'inventory' => 'getInventory',
'description' => 'getDescription',
'count' => 'getCount',
'unit_cost_currency' => 'getUnitCostCurrency',
'unit_price_excluding_vat_currency' => 'getUnitPriceExcludingVatCurrency',
'currency' => 'getCurrency',
'markup' => 'getMarkup',
'discount' => 'getDiscount',
'vat_type' => 'getVatType',
'amount_excluding_vat_currency' => 'getAmountExcludingVatCurrency',
'amount_including_vat_currency' => 'getAmountIncludingVatCurrency',
'project' => 'getProject',
'date' => 'getDate',
'is_chargeable' => 'getIsChargeable'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['changes'] = isset($data['changes']) ? $data['changes'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['product'] = isset($data['product']) ? $data['product'] : null;
        $this->container['inventory'] = isset($data['inventory']) ? $data['inventory'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['unit_cost_currency'] = isset($data['unit_cost_currency']) ? $data['unit_cost_currency'] : null;
        $this->container['unit_price_excluding_vat_currency'] = isset($data['unit_price_excluding_vat_currency']) ? $data['unit_price_excluding_vat_currency'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['markup'] = isset($data['markup']) ? $data['markup'] : null;
        $this->container['discount'] = isset($data['discount']) ? $data['discount'] : null;
        $this->container['vat_type'] = isset($data['vat_type']) ? $data['vat_type'] : null;
        $this->container['amount_excluding_vat_currency'] = isset($data['amount_excluding_vat_currency']) ? $data['amount_excluding_vat_currency'] : null;
        $this->container['amount_including_vat_currency'] = isset($data['amount_including_vat_currency']) ? $data['amount_including_vat_currency'] : null;
        $this->container['project'] = isset($data['project']) ? $data['project'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['is_chargeable'] = isset($data['is_chargeable']) ? $data['is_chargeable'] : false;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['project'] === null) {
            $invalidProperties[] = "'project' can't be null";
        }
        if ($this->container['date'] === null) {
            $invalidProperties[] = "'date' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets version
     *
     * @return int
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param int $version version
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets changes
     *
     * @return \Tripletex\Model\Change[]
     */
    public function getChanges()
    {
        return $this->container['changes'];
    }

    /**
     * Sets changes
     *
     * @param \Tripletex\Model\Change[] $changes changes
     *
     * @return $this
     */
    public function setChanges($changes)
    {
        $this->container['changes'] = $changes;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets product
     *
     * @return \Tripletex\Model\Product
     */
    public function getProduct()
    {
        return $this->container['product'];
    }

    /**
     * Sets product
     *
     * @param \Tripletex\Model\Product $product product
     *
     * @return $this
     */
    public function setProduct($product)
    {
        $this->container['product'] = $product;

        return $this;
    }

    /**
     * Gets inventory
     *
     * @return \Tripletex\Model\Inventory
     */
    public function getInventory()
    {
        return $this->container['inventory'];
    }

    /**
     * Sets inventory
     *
     * @param \Tripletex\Model\Inventory $inventory inventory
     *
     * @return $this
     */
    public function setInventory($inventory)
    {
        $this->container['inventory'] = $inventory;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets count
     *
     * @return double
     */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
     * Sets count
     *
     * @param double $count count
     *
     * @return $this
     */
    public function setCount($count)
    {
        $this->container['count'] = $count;

        return $this;
    }

    /**
     * Gets unit_cost_currency
     *
     * @return BigDecimal
     */
    public function getUnitCostCurrency()
    {
        return $this->container['unit_cost_currency'];
    }

    /**
     * Sets unit_cost_currency
     *
     * @param BigDecimal $unit_cost_currency Unit price purchase (cost) excluding VAT in the order's currency
     *
     * @return $this
     */
    public function setUnitCostCurrency($unit_cost_currency)
    {
        $this->container['unit_cost_currency'] = $unit_cost_currency;

        return $this;
    }

    /**
     * Gets unit_price_excluding_vat_currency
     *
     * @return BigDecimal
     */
    public function getUnitPriceExcludingVatCurrency()
    {
        return $this->container['unit_price_excluding_vat_currency'];
    }

    /**
     * Sets unit_price_excluding_vat_currency
     *
     * @param BigDecimal $unit_price_excluding_vat_currency Unit price of purchase excluding VAT in the order's currency
     *
     * @return $this
     */
    public function setUnitPriceExcludingVatCurrency($unit_price_excluding_vat_currency)
    {
        $this->container['unit_price_excluding_vat_currency'] = $unit_price_excluding_vat_currency;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return \Tripletex\Model\Currency
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param \Tripletex\Model\Currency $currency currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets markup
     *
     * @return double
     */
    public function getMarkup()
    {
        return $this->container['markup'];
    }

    /**
     * Sets markup
     *
     * @param double $markup Markup given as a percentage (%)
     *
     * @return $this
     */
    public function setMarkup($markup)
    {
        $this->container['markup'] = $markup;

        return $this;
    }

    /**
     * Gets discount
     *
     * @return double
     */
    public function getDiscount()
    {
        return $this->container['discount'];
    }

    /**
     * Sets discount
     *
     * @param double $discount Discount given as a percentage (%)
     *
     * @return $this
     */
    public function setDiscount($discount)
    {
        $this->container['discount'] = $discount;

        return $this;
    }

    /**
     * Gets vat_type
     *
     * @return \Tripletex\Model\VatType
     */
    public function getVatType()
    {
        return $this->container['vat_type'];
    }

    /**
     * Sets vat_type
     *
     * @param \Tripletex\Model\VatType $vat_type vat_type
     *
     * @return $this
     */
    public function setVatType($vat_type)
    {
        $this->container['vat_type'] = $vat_type;

        return $this;
    }

    /**
     * Gets amount_excluding_vat_currency
     *
     * @return BigDecimal
     */
    public function getAmountExcludingVatCurrency()
    {
        return $this->container['amount_excluding_vat_currency'];
    }

    /**
     * Sets amount_excluding_vat_currency
     *
     * @param BigDecimal $amount_excluding_vat_currency Total amount on order line excluding VAT in the order's currency
     *
     * @return $this
     */
    public function setAmountExcludingVatCurrency($amount_excluding_vat_currency)
    {
        $this->container['amount_excluding_vat_currency'] = $amount_excluding_vat_currency;

        return $this;
    }

    /**
     * Gets amount_including_vat_currency
     *
     * @return BigDecimal
     */
    public function getAmountIncludingVatCurrency()
    {
        return $this->container['amount_including_vat_currency'];
    }

    /**
     * Sets amount_including_vat_currency
     *
     * @param BigDecimal $amount_including_vat_currency Total amount on order line including VAT in the order's currency
     *
     * @return $this
     */
    public function setAmountIncludingVatCurrency($amount_including_vat_currency)
    {
        $this->container['amount_including_vat_currency'] = $amount_including_vat_currency;

        return $this;
    }

    /**
     * Gets project
     *
     * @return \Tripletex\Model\Project
     */
    public function getProject()
    {
        return $this->container['project'];
    }

    /**
     * Sets project
     *
     * @param \Tripletex\Model\Project $project project
     *
     * @return $this
     */
    public function setProject($project)
    {
        $this->container['project'] = $project;

        return $this;
    }

    /**
     * Gets date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param string $date date
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets is_chargeable
     *
     * @return bool
     */
    public function getIsChargeable()
    {
        return $this->container['is_chargeable'];
    }

    /**
     * Sets is_chargeable
     *
     * @param bool $is_chargeable is_chargeable
     *
     * @return $this
     */
    public function setIsChargeable($is_chargeable)
    {
        $this->container['is_chargeable'] = $is_chargeable;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
