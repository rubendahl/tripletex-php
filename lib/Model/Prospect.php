<?php
/**
 * Prospect
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
 * Prospect Class Doc Comment
 *
 * @category Class
 * @package  Tripletex
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Prospect implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Prospect';

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
        'description' => 'string',
        'created_date' => 'string',
        'customer' => '\Tripletex\Model\Customer',
        'sales_employee' => '\Tripletex\Model\Employee',
        'is_closed' => 'bool',
        'closed_reason' => 'int',
        'closed_date' => 'string',
        'competitor' => 'string',
        'prospect_type' => 'int',
        'project' => '\Tripletex\Model\Project',
        'project_offer' => '\Tripletex\Model\Project',
        'final_income_date' => 'string',
        'final_initial_value' => 'float',
        'final_monthly_value' => 'float',
        'final_additional_services_value' => 'float',
        'total_value' => 'float'
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
        'description' => null,
        'created_date' => null,
        'customer' => null,
        'sales_employee' => null,
        'is_closed' => null,
        'closed_reason' => 'int32',
        'closed_date' => null,
        'competitor' => null,
        'prospect_type' => 'int32',
        'project' => null,
        'project_offer' => null,
        'final_income_date' => null,
        'final_initial_value' => null,
        'final_monthly_value' => null,
        'final_additional_services_value' => null,
        'total_value' => null
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
        'description' => 'description',
        'created_date' => 'createdDate',
        'customer' => 'customer',
        'sales_employee' => 'salesEmployee',
        'is_closed' => 'isClosed',
        'closed_reason' => 'closedReason',
        'closed_date' => 'closedDate',
        'competitor' => 'competitor',
        'prospect_type' => 'prospectType',
        'project' => 'project',
        'project_offer' => 'projectOffer',
        'final_income_date' => 'finalIncomeDate',
        'final_initial_value' => 'finalInitialValue',
        'final_monthly_value' => 'finalMonthlyValue',
        'final_additional_services_value' => 'finalAdditionalServicesValue',
        'total_value' => 'totalValue'
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
        'description' => 'setDescription',
        'created_date' => 'setCreatedDate',
        'customer' => 'setCustomer',
        'sales_employee' => 'setSalesEmployee',
        'is_closed' => 'setIsClosed',
        'closed_reason' => 'setClosedReason',
        'closed_date' => 'setClosedDate',
        'competitor' => 'setCompetitor',
        'prospect_type' => 'setProspectType',
        'project' => 'setProject',
        'project_offer' => 'setProjectOffer',
        'final_income_date' => 'setFinalIncomeDate',
        'final_initial_value' => 'setFinalInitialValue',
        'final_monthly_value' => 'setFinalMonthlyValue',
        'final_additional_services_value' => 'setFinalAdditionalServicesValue',
        'total_value' => 'setTotalValue'
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
        'description' => 'getDescription',
        'created_date' => 'getCreatedDate',
        'customer' => 'getCustomer',
        'sales_employee' => 'getSalesEmployee',
        'is_closed' => 'getIsClosed',
        'closed_reason' => 'getClosedReason',
        'closed_date' => 'getClosedDate',
        'competitor' => 'getCompetitor',
        'prospect_type' => 'getProspectType',
        'project' => 'getProject',
        'project_offer' => 'getProjectOffer',
        'final_income_date' => 'getFinalIncomeDate',
        'final_initial_value' => 'getFinalInitialValue',
        'final_monthly_value' => 'getFinalMonthlyValue',
        'final_additional_services_value' => 'getFinalAdditionalServicesValue',
        'total_value' => 'getTotalValue'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['created_date'] = isset($data['created_date']) ? $data['created_date'] : null;
        $this->container['customer'] = isset($data['customer']) ? $data['customer'] : null;
        $this->container['sales_employee'] = isset($data['sales_employee']) ? $data['sales_employee'] : null;
        $this->container['is_closed'] = isset($data['is_closed']) ? $data['is_closed'] : false;
        $this->container['closed_reason'] = isset($data['closed_reason']) ? $data['closed_reason'] : null;
        $this->container['closed_date'] = isset($data['closed_date']) ? $data['closed_date'] : null;
        $this->container['competitor'] = isset($data['competitor']) ? $data['competitor'] : null;
        $this->container['prospect_type'] = isset($data['prospect_type']) ? $data['prospect_type'] : null;
        $this->container['project'] = isset($data['project']) ? $data['project'] : null;
        $this->container['project_offer'] = isset($data['project_offer']) ? $data['project_offer'] : null;
        $this->container['final_income_date'] = isset($data['final_income_date']) ? $data['final_income_date'] : null;
        $this->container['final_initial_value'] = isset($data['final_initial_value']) ? $data['final_initial_value'] : null;
        $this->container['final_monthly_value'] = isset($data['final_monthly_value']) ? $data['final_monthly_value'] : null;
        $this->container['final_additional_services_value'] = isset($data['final_additional_services_value']) ? $data['final_additional_services_value'] : null;
        $this->container['total_value'] = isset($data['total_value']) ? $data['total_value'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
        }

        if ($this->container['created_date'] === null) {
            $invalidProperties[] = "'created_date' can't be null";
        }
        if (!is_null($this->container['closed_reason']) && ($this->container['closed_reason'] < 0)) {
            $invalidProperties[] = "invalid value for 'closed_reason', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['competitor']) && (mb_strlen($this->container['competitor']) > 255)) {
            $invalidProperties[] = "invalid value for 'competitor', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['prospect_type']) && ($this->container['prospect_type'] < 1)) {
            $invalidProperties[] = "invalid value for 'prospect_type', must be bigger than or equal to 1.";
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
        if (!is_null($name) && (mb_strlen($name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $name when calling Prospect., must be smaller than or equal to 255.');
        }

        $this->container['name'] = $name;

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
     * Gets created_date
     *
     * @return string
     */
    public function getCreatedDate()
    {
        return $this->container['created_date'];
    }

    /**
     * Sets created_date
     *
     * @param string $created_date created_date
     *
     * @return $this
     */
    public function setCreatedDate($created_date)
    {
        $this->container['created_date'] = $created_date;

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
     * @param \Tripletex\Model\Customer $customer customer
     *
     * @return $this
     */
    public function setCustomer($customer)
    {
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets sales_employee
     *
     * @return \Tripletex\Model\Employee
     */
    public function getSalesEmployee()
    {
        return $this->container['sales_employee'];
    }

    /**
     * Sets sales_employee
     *
     * @param \Tripletex\Model\Employee $sales_employee sales_employee
     *
     * @return $this
     */
    public function setSalesEmployee($sales_employee)
    {
        $this->container['sales_employee'] = $sales_employee;

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
     * Gets closed_reason
     *
     * @return int
     */
    public function getClosedReason()
    {
        return $this->container['closed_reason'];
    }

    /**
     * Sets closed_reason
     *
     * @param int $closed_reason closed_reason
     *
     * @return $this
     */
    public function setClosedReason($closed_reason)
    {

        if (!is_null($closed_reason) && ($closed_reason < 0)) {
            throw new \InvalidArgumentException('invalid value for $closed_reason when calling Prospect., must be bigger than or equal to 0.');
        }

        $this->container['closed_reason'] = $closed_reason;

        return $this;
    }

    /**
     * Gets closed_date
     *
     * @return string
     */
    public function getClosedDate()
    {
        return $this->container['closed_date'];
    }

    /**
     * Sets closed_date
     *
     * @param string $closed_date closed_date
     *
     * @return $this
     */
    public function setClosedDate($closed_date)
    {
        $this->container['closed_date'] = $closed_date;

        return $this;
    }

    /**
     * Gets competitor
     *
     * @return string
     */
    public function getCompetitor()
    {
        return $this->container['competitor'];
    }

    /**
     * Sets competitor
     *
     * @param string $competitor competitor
     *
     * @return $this
     */
    public function setCompetitor($competitor)
    {
        if (!is_null($competitor) && (mb_strlen($competitor) > 255)) {
            throw new \InvalidArgumentException('invalid length for $competitor when calling Prospect., must be smaller than or equal to 255.');
        }

        $this->container['competitor'] = $competitor;

        return $this;
    }

    /**
     * Gets prospect_type
     *
     * @return int
     */
    public function getProspectType()
    {
        return $this->container['prospect_type'];
    }

    /**
     * Sets prospect_type
     *
     * @param int $prospect_type prospect_type
     *
     * @return $this
     */
    public function setProspectType($prospect_type)
    {

        if (!is_null($prospect_type) && ($prospect_type < 1)) {
            throw new \InvalidArgumentException('invalid value for $prospect_type when calling Prospect., must be bigger than or equal to 1.');
        }

        $this->container['prospect_type'] = $prospect_type;

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
     * @param \Tripletex\Model\Project $project The project connected to this prospect.
     *
     * @return $this
     */
    public function setProject($project)
    {
        $this->container['project'] = $project;

        return $this;
    }

    /**
     * Gets project_offer
     *
     * @return \Tripletex\Model\Project
     */
    public function getProjectOffer()
    {
        return $this->container['project_offer'];
    }

    /**
     * Sets project_offer
     *
     * @param \Tripletex\Model\Project $project_offer The project offer connected to this prospect.
     *
     * @return $this
     */
    public function setProjectOffer($project_offer)
    {
        $this->container['project_offer'] = $project_offer;

        return $this;
    }

    /**
     * Gets final_income_date
     *
     * @return string
     */
    public function getFinalIncomeDate()
    {
        return $this->container['final_income_date'];
    }

    /**
     * Sets final_income_date
     *
     * @param string $final_income_date The estimated start date for income on the prospect.
     *
     * @return $this
     */
    public function setFinalIncomeDate($final_income_date)
    {
        $this->container['final_income_date'] = $final_income_date;

        return $this;
    }

    /**
     * Gets final_initial_value
     *
     * @return float
     */
    public function getFinalInitialValue()
    {
        return $this->container['final_initial_value'];
    }

    /**
     * Sets final_initial_value
     *
     * @param float $final_initial_value The estimated startup fee on this prospect.
     *
     * @return $this
     */
    public function setFinalInitialValue($final_initial_value)
    {
        $this->container['final_initial_value'] = $final_initial_value;

        return $this;
    }

    /**
     * Gets final_monthly_value
     *
     * @return float
     */
    public function getFinalMonthlyValue()
    {
        return $this->container['final_monthly_value'];
    }

    /**
     * Sets final_monthly_value
     *
     * @param float $final_monthly_value The estimated monthly fee on this prospect.
     *
     * @return $this
     */
    public function setFinalMonthlyValue($final_monthly_value)
    {
        $this->container['final_monthly_value'] = $final_monthly_value;

        return $this;
    }

    /**
     * Gets final_additional_services_value
     *
     * @return float
     */
    public function getFinalAdditionalServicesValue()
    {
        return $this->container['final_additional_services_value'];
    }

    /**
     * Sets final_additional_services_value
     *
     * @param float $final_additional_services_value Tripletex specific.
     *
     * @return $this
     */
    public function setFinalAdditionalServicesValue($final_additional_services_value)
    {
        $this->container['final_additional_services_value'] = $final_additional_services_value;

        return $this;
    }

    /**
     * Gets total_value
     *
     * @return float
     */
    public function getTotalValue()
    {
        return $this->container['total_value'];
    }

    /**
     * Sets total_value
     *
     * @param float $total_value The estimated total fee on this prospect.
     *
     * @return $this
     */
    public function setTotalValue($total_value)
    {
        $this->container['total_value'] = $total_value;

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


