<?php
/**
 * Project
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
 * OpenAPI spec version: 2.33.2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.2
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
 * Project Class Doc Comment
 *
 * @category Class
 * @package  Tripletex
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Project implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Project';

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
        'name' => 'string',
        'number' => 'string',
        'display_name' => 'string',
        'description' => 'string',
        'project_manager' => '\Tripletex\Model\Employee',
        'department' => '\Tripletex\Model\Department',
        'main_project' => '\Tripletex\Model\Project',
        'start_date' => 'string',
        'end_date' => 'string',
        'customer' => '\Tripletex\Model\Customer',
        'is_closed' => 'bool',
        'is_ready_for_invoicing' => 'bool',
        'is_internal' => 'bool',
        'is_offer' => 'bool',
        'project_category' => '\Tripletex\Model\ProjectCategory',
        'delivery_address' => '\Tripletex\Model\Address',
        'display_name_format' => 'string',
        'external_accounts_number' => 'string',
        'discount_percentage' => 'float',
        'order_lines' => '\Tripletex\Model\ProjectOrderLine[]',
        'participants' => '\Tripletex\Model\ProjectParticipant[]'
    ];

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
        'name' => null,
        'number' => null,
        'display_name' => null,
        'description' => null,
        'project_manager' => null,
        'department' => null,
        'main_project' => null,
        'start_date' => null,
        'end_date' => null,
        'customer' => null,
        'is_closed' => null,
        'is_ready_for_invoicing' => null,
        'is_internal' => null,
        'is_offer' => null,
        'project_category' => null,
        'delivery_address' => null,
        'display_name_format' => null,
        'external_accounts_number' => null,
        'discount_percentage' => null,
        'order_lines' => null,
        'participants' => null
    ];

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
        'name' => 'name',
        'number' => 'number',
        'display_name' => 'displayName',
        'description' => 'description',
        'project_manager' => 'projectManager',
        'department' => 'department',
        'main_project' => 'mainProject',
        'start_date' => 'startDate',
        'end_date' => 'endDate',
        'customer' => 'customer',
        'is_closed' => 'isClosed',
        'is_ready_for_invoicing' => 'isReadyForInvoicing',
        'is_internal' => 'isInternal',
        'is_offer' => 'isOffer',
        'project_category' => 'projectCategory',
        'delivery_address' => 'deliveryAddress',
        'display_name_format' => 'displayNameFormat',
        'external_accounts_number' => 'externalAccountsNumber',
        'discount_percentage' => 'discountPercentage',
        'order_lines' => 'orderLines',
        'participants' => 'participants'
    ];

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
        'name' => 'setName',
        'number' => 'setNumber',
        'display_name' => 'setDisplayName',
        'description' => 'setDescription',
        'project_manager' => 'setProjectManager',
        'department' => 'setDepartment',
        'main_project' => 'setMainProject',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'customer' => 'setCustomer',
        'is_closed' => 'setIsClosed',
        'is_ready_for_invoicing' => 'setIsReadyForInvoicing',
        'is_internal' => 'setIsInternal',
        'is_offer' => 'setIsOffer',
        'project_category' => 'setProjectCategory',
        'delivery_address' => 'setDeliveryAddress',
        'display_name_format' => 'setDisplayNameFormat',
        'external_accounts_number' => 'setExternalAccountsNumber',
        'discount_percentage' => 'setDiscountPercentage',
        'order_lines' => 'setOrderLines',
        'participants' => 'setParticipants'
    ];

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
        'name' => 'getName',
        'number' => 'getNumber',
        'display_name' => 'getDisplayName',
        'description' => 'getDescription',
        'project_manager' => 'getProjectManager',
        'department' => 'getDepartment',
        'main_project' => 'getMainProject',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'customer' => 'getCustomer',
        'is_closed' => 'getIsClosed',
        'is_ready_for_invoicing' => 'getIsReadyForInvoicing',
        'is_internal' => 'getIsInternal',
        'is_offer' => 'getIsOffer',
        'project_category' => 'getProjectCategory',
        'delivery_address' => 'getDeliveryAddress',
        'display_name_format' => 'getDisplayNameFormat',
        'external_accounts_number' => 'getExternalAccountsNumber',
        'discount_percentage' => 'getDiscountPercentage',
        'order_lines' => 'getOrderLines',
        'participants' => 'getParticipants'
    ];

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

    const DISPLAY_NAME_FORMAT_STANDARD = 'NAME_STANDARD';
    const DISPLAY_NAME_FORMAT_INCL_CUSTOMER_NAME = 'NAME_INCL_CUSTOMER_NAME';
    const DISPLAY_NAME_FORMAT_INCL_PARENT_NAME = 'NAME_INCL_PARENT_NAME';
    const DISPLAY_NAME_FORMAT_INCL_PARENT_NUMBER = 'NAME_INCL_PARENT_NUMBER';
    const DISPLAY_NAME_FORMAT_INCL_PARENT_NAME_AND_NUMBER = 'NAME_INCL_PARENT_NAME_AND_NUMBER';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDisplayNameFormatAllowableValues()
    {
        return [
            self::DISPLAY_NAME_FORMAT_STANDARD,
            self::DISPLAY_NAME_FORMAT_INCL_CUSTOMER_NAME,
            self::DISPLAY_NAME_FORMAT_INCL_PARENT_NAME,
            self::DISPLAY_NAME_FORMAT_INCL_PARENT_NUMBER,
            self::DISPLAY_NAME_FORMAT_INCL_PARENT_NAME_AND_NUMBER,
        ];
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['display_name'] = isset($data['display_name']) ? $data['display_name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['project_manager'] = isset($data['project_manager']) ? $data['project_manager'] : null;
        $this->container['department'] = isset($data['department']) ? $data['department'] : null;
        $this->container['main_project'] = isset($data['main_project']) ? $data['main_project'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['customer'] = isset($data['customer']) ? $data['customer'] : null;
        $this->container['is_closed'] = isset($data['is_closed']) ? $data['is_closed'] : false;
        $this->container['is_ready_for_invoicing'] = isset($data['is_ready_for_invoicing']) ? $data['is_ready_for_invoicing'] : false;
        $this->container['is_internal'] = isset($data['is_internal']) ? $data['is_internal'] : false;
        $this->container['is_offer'] = isset($data['is_offer']) ? $data['is_offer'] : false;
        $this->container['project_category'] = isset($data['project_category']) ? $data['project_category'] : null;
        $this->container['delivery_address'] = isset($data['delivery_address']) ? $data['delivery_address'] : null;
        $this->container['display_name_format'] = isset($data['display_name_format']) ? $data['display_name_format'] : null;
        $this->container['external_accounts_number'] = isset($data['external_accounts_number']) ? $data['external_accounts_number'] : null;
        $this->container['discount_percentage'] = isset($data['discount_percentage']) ? $data['discount_percentage'] : null;
        $this->container['order_lines'] = isset($data['order_lines']) ? $data['order_lines'] : null;
        $this->container['participants'] = isset($data['participants']) ? $data['participants'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 255)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['number']) && (mb_strlen($this->container['number']) > 100)) {
            $invalidProperties[] = "invalid value for 'number', the character length must be smaller than or equal to 100.";
        }

        if ($this->container['project_manager'] === null) {
            $invalidProperties[] = "'project_manager' can't be null";
        }
        if ($this->container['start_date'] === null) {
            $invalidProperties[] = "'start_date' can't be null";
        }
        if ($this->container['is_internal'] === null) {
            $invalidProperties[] = "'is_internal' can't be null";
        }
        $allowedValues = $this->getDisplayNameFormatAllowableValues();
        if (!is_null($this->container['display_name_format']) && !in_array($this->container['display_name_format'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'display_name_format', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['external_accounts_number']) && (mb_strlen($this->container['external_accounts_number']) > 100)) {
            $invalidProperties[] = "invalid value for 'external_accounts_number', the character length must be smaller than or equal to 100.";
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        if ((mb_strlen($name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $name when calling Project., must be smaller than or equal to 255.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param string $number number
     *
     * @return $this
     */
    public function setNumber($number)
    {
        if (!is_null($number) && (mb_strlen($number) > 100)) {
            throw new \InvalidArgumentException('invalid length for $number when calling Project., must be smaller than or equal to 100.');
        }

        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets display_name
     *
     * @return string
     */
    public function getDisplayName()
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     *
     * @param string $display_name display_name
     *
     * @return $this
     */
    public function setDisplayName($display_name)
    {
        $this->container['display_name'] = $display_name;

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
     * Gets project_manager
     *
     * @return \Tripletex\Model\Employee
     */
    public function getProjectManager()
    {
        return $this->container['project_manager'];
    }

    /**
     * Sets project_manager
     *
     * @param \Tripletex\Model\Employee $project_manager project_manager
     *
     * @return $this
     */
    public function setProjectManager($project_manager)
    {
        $this->container['project_manager'] = $project_manager;

        return $this;
    }

    /**
     * Gets department
     *
     * @return \Tripletex\Model\Department
     */
    public function getDepartment()
    {
        return $this->container['department'];
    }

    /**
     * Sets department
     *
     * @param \Tripletex\Model\Department $department department
     *
     * @return $this
     */
    public function setDepartment($department)
    {
        $this->container['department'] = $department;

        return $this;
    }

    /**
     * Gets main_project
     *
     * @return \Tripletex\Model\Project
     */
    public function getMainProject()
    {
        return $this->container['main_project'];
    }

    /**
     * Sets main_project
     *
     * @param \Tripletex\Model\Project $main_project main_project
     *
     * @return $this
     */
    public function setMainProject($main_project)
    {
        $this->container['main_project'] = $main_project;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return string
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param string $start_date start_date
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return string
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param string $end_date end_date
     *
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets customer
     *
     * @return \Tripletex\Model\Customer
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     *
     * @param \Tripletex\Model\Customer $customer The project's customer
     *
     * @return $this
     */
    public function setCustomer($customer)
    {
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets is_closed
     *
     * @return bool
     */
    public function getIsClosed()
    {
        return $this->container['is_closed'];
    }

    /**
     * Sets is_closed
     *
     * @param bool $is_closed is_closed
     *
     * @return $this
     */
    public function setIsClosed($is_closed)
    {
        $this->container['is_closed'] = $is_closed;

        return $this;
    }

    /**
     * Gets is_ready_for_invoicing
     *
     * @return bool
     */
    public function getIsReadyForInvoicing()
    {
        return $this->container['is_ready_for_invoicing'];
    }

    /**
     * Sets is_ready_for_invoicing
     *
     * @param bool $is_ready_for_invoicing is_ready_for_invoicing
     *
     * @return $this
     */
    public function setIsReadyForInvoicing($is_ready_for_invoicing)
    {
        $this->container['is_ready_for_invoicing'] = $is_ready_for_invoicing;

        return $this;
    }

    /**
     * Gets is_internal
     *
     * @return bool
     */
    public function getIsInternal()
    {
        return $this->container['is_internal'];
    }

    /**
     * Sets is_internal
     *
     * @param bool $is_internal Must be set to true.
     *
     * @return $this
     */
    public function setIsInternal($is_internal)
    {
        $this->container['is_internal'] = $is_internal;

        return $this;
    }

    /**
     * Gets is_offer
     *
     * @return bool
     */
    public function getIsOffer()
    {
        return $this->container['is_offer'];
    }

    /**
     * Sets is_offer
     *
     * @param bool $is_offer is_offer
     *
     * @return $this
     */
    public function setIsOffer($is_offer)
    {
        $this->container['is_offer'] = $is_offer;

        return $this;
    }

    /**
     * Gets project_category
     *
     * @return \Tripletex\Model\ProjectCategory
     */
    public function getProjectCategory()
    {
        return $this->container['project_category'];
    }

    /**
     * Sets project_category
     *
     * @param \Tripletex\Model\ProjectCategory $project_category project_category
     *
     * @return $this
     */
    public function setProjectCategory($project_category)
    {
        $this->container['project_category'] = $project_category;

        return $this;
    }

    /**
     * Gets delivery_address
     *
     * @return \Tripletex\Model\Address
     */
    public function getDeliveryAddress()
    {
        return $this->container['delivery_address'];
    }

    /**
     * Sets delivery_address
     *
     * @param \Tripletex\Model\Address $delivery_address delivery_address
     *
     * @return $this
     */
    public function setDeliveryAddress($delivery_address)
    {
        $this->container['delivery_address'] = $delivery_address;

        return $this;
    }

    /**
     * Gets display_name_format
     *
     * @return string
     */
    public function getDisplayNameFormat()
    {
        return $this->container['display_name_format'];
    }

    /**
     * Sets display_name_format
     *
     * @param string $display_name_format Defines project name presentation in overviews.
     *
     * @return $this
     */
    public function setDisplayNameFormat($display_name_format)
    {
        $allowedValues = $this->getDisplayNameFormatAllowableValues();
        if (!is_null($display_name_format) && !in_array($display_name_format, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'display_name_format', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['display_name_format'] = $display_name_format;

        return $this;
    }

    /**
     * Gets external_accounts_number
     *
     * @return string
     */
    public function getExternalAccountsNumber()
    {
        return $this->container['external_accounts_number'];
    }

    /**
     * Sets external_accounts_number
     *
     * @param string $external_accounts_number external_accounts_number
     *
     * @return $this
     */
    public function setExternalAccountsNumber($external_accounts_number)
    {
        if (!is_null($external_accounts_number) && (mb_strlen($external_accounts_number) > 100)) {
            throw new \InvalidArgumentException('invalid length for $external_accounts_number when calling Project., must be smaller than or equal to 100.');
        }

        $this->container['external_accounts_number'] = $external_accounts_number;

        return $this;
    }

    /**
     * Gets discount_percentage
     *
     * @return float
     */
    public function getDiscountPercentage()
    {
        return $this->container['discount_percentage'];
    }

    /**
     * Sets discount_percentage
     *
     * @param float $discount_percentage Project discount percentage.
     *
     * @return $this
     */
    public function setDiscountPercentage($discount_percentage)
    {
        $this->container['discount_percentage'] = $discount_percentage;

        return $this;
    }

    /**
     * Gets order_lines
     *
     * @return \Tripletex\Model\ProjectOrderLine[]
     */
    public function getOrderLines()
    {
        return $this->container['order_lines'];
    }

    /**
     * Sets order_lines
     *
     * @param \Tripletex\Model\ProjectOrderLine[] $order_lines Order lines tied to the order
     *
     * @return $this
     */
    public function setOrderLines($order_lines)
    {
        $this->container['order_lines'] = $order_lines;

        return $this;
    }

    /**
     * Gets participants
     *
     * @return \Tripletex\Model\ProjectParticipant[]
     */
    public function getParticipants()
    {
        return $this->container['participants'];
    }

    /**
     * Sets participants
     *
     * @param \Tripletex\Model\ProjectParticipant[] $participants Link to individual project participants.
     *
     * @return $this
     */
    public function setParticipants($participants)
    {
        $this->container['participants'] = $participants;

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


