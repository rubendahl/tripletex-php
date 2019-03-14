# Tripletex\ActivityApi

All URIs are relative to *//tripletex.no/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**get**](ActivityApi.md#get) | **GET** /activity/{id} | Find activity by ID.
[**getForTimeSheet**](ActivityApi.md#getForTimeSheet) | **GET** /activity/&gt;forTimeSheet | Find applicable time sheet activities for an employee on a specific day.
[**search**](ActivityApi.md#search) | **GET** /activity | Find activities corresponding with sent data.

# **get**
> \Tripletex\Model\ResponseWrapperActivity get($id, $fields)

Find activity by ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: tokenAuthScheme
$config = Tripletex\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Tripletex\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Element ID
$fields = "fields_example"; // string | Fields filter pattern

try {
    $result = $apiInstance->get($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**int**](../Model/.md)| Element ID |
 **fields** | [**string**](../Model/.md)| Fields filter pattern | [optional]

### Return type

[**\Tripletex\Model\ResponseWrapperActivity**](../Model/ResponseWrapperActivity.md)

### Authorization

[tokenAuthScheme](../../README.md#tokenAuthScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getForTimeSheet**
> \Tripletex\Model\ListResponseActivity getForTimeSheet($project_id, $employee_id, $date, $from, $count, $sorting, $fields)

Find applicable time sheet activities for an employee on a specific day.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: tokenAuthScheme
$config = Tripletex\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Tripletex\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 56; // int | Project ID
$employee_id = 56; // int | Employee ID. Defaults to ID of token owner.
$date = "date_example"; // string | yyyy-MM-dd. Defaults to today.
$from = 56; // int | From index
$count = 56; // int | Number of elements to return
$sorting = "sorting_example"; // string | Sorting pattern
$fields = "fields_example"; // string | Fields filter pattern

try {
    $result = $apiInstance->getForTimeSheet($project_id, $employee_id, $date, $from, $count, $sorting, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->getForTimeSheet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | [**int**](../Model/.md)| Project ID |
 **employee_id** | [**int**](../Model/.md)| Employee ID. Defaults to ID of token owner. | [optional]
 **date** | [**string**](../Model/.md)| yyyy-MM-dd. Defaults to today. | [optional]
 **from** | [**int**](../Model/.md)| From index | [optional]
 **count** | [**int**](../Model/.md)| Number of elements to return | [optional]
 **sorting** | [**string**](../Model/.md)| Sorting pattern | [optional]
 **fields** | [**string**](../Model/.md)| Fields filter pattern | [optional]

### Return type

[**\Tripletex\Model\ListResponseActivity**](../Model/ListResponseActivity.md)

### Authorization

[tokenAuthScheme](../../README.md#tokenAuthScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **search**
> \Tripletex\Model\ListResponseActivity search($id, $name, $number, $description, $is_project_activity, $is_general, $is_chargeable, $is_task, $from, $count, $sorting, $fields)

Find activities corresponding with sent data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: tokenAuthScheme
$config = Tripletex\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Tripletex\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | List of IDs
$name = "name_example"; // string | Containing
$number = "number_example"; // string | Equals
$description = "description_example"; // string | Containing
$is_project_activity = True; // bool | Equals
$is_general = True; // bool | Equals
$is_chargeable = True; // bool | Equals
$is_task = True; // bool | Equals
$from = 56; // int | From index
$count = 56; // int | Number of elements to return
$sorting = "sorting_example"; // string | Sorting pattern
$fields = "fields_example"; // string | Fields filter pattern

try {
    $result = $apiInstance->search($id, $name, $number, $description, $is_project_activity, $is_general, $is_chargeable, $is_task, $from, $count, $sorting, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->search: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| List of IDs | [optional]
 **name** | [**string**](../Model/.md)| Containing | [optional]
 **number** | [**string**](../Model/.md)| Equals | [optional]
 **description** | [**string**](../Model/.md)| Containing | [optional]
 **is_project_activity** | [**bool**](../Model/.md)| Equals | [optional]
 **is_general** | [**bool**](../Model/.md)| Equals | [optional]
 **is_chargeable** | [**bool**](../Model/.md)| Equals | [optional]
 **is_task** | [**bool**](../Model/.md)| Equals | [optional]
 **from** | [**int**](../Model/.md)| From index | [optional]
 **count** | [**int**](../Model/.md)| Number of elements to return | [optional]
 **sorting** | [**string**](../Model/.md)| Sorting pattern | [optional]
 **fields** | [**string**](../Model/.md)| Fields filter pattern | [optional]

### Return type

[**\Tripletex\Model\ListResponseActivity**](../Model/ListResponseActivity.md)

### Authorization

[tokenAuthScheme](../../README.md#tokenAuthScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

