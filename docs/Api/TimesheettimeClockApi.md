# Tripletex\TimesheettimeClockApi

All URIs are relative to *//tripletex.no/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**get**](TimesheettimeClockApi.md#get) | **GET** /timesheet/timeClock/{id} | Find time clock entry by ID.
[**getPresent**](TimesheettimeClockApi.md#getPresent) | **GET** /timesheet/timeClock/present | Find a user’s present running time clock.
[**put**](TimesheettimeClockApi.md#put) | **PUT** /timesheet/timeClock/{id} | Update time clock by ID.
[**search**](TimesheettimeClockApi.md#search) | **GET** /timesheet/timeClock | Find time clock entries corresponding with sent data.
[**start**](TimesheettimeClockApi.md#start) | **PUT** /timesheet/timeClock/:start | Start time clock.
[**stop**](TimesheettimeClockApi.md#stop) | **PUT** /timesheet/timeClock/{id}/:stop | Stop time clock.

# **get**
> \Tripletex\Model\ResponseWrapperTimeClock get($id, $fields)

Find time clock entry by ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: tokenAuthScheme
$config = Tripletex\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Tripletex\Api\TimesheettimeClockApi(
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
    echo 'Exception when calling TimesheettimeClockApi->get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**int**](../Model/.md)| Element ID |
 **fields** | [**string**](../Model/.md)| Fields filter pattern | [optional]

### Return type

[**\Tripletex\Model\ResponseWrapperTimeClock**](../Model/ResponseWrapperTimeClock.md)

### Authorization

[tokenAuthScheme](../../README.md#tokenAuthScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPresent**
> \Tripletex\Model\ResponseWrapperTimeClock getPresent($employee_id, $fields)

Find a user’s present running time clock.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: tokenAuthScheme
$config = Tripletex\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Tripletex\Api\TimesheettimeClockApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employee_id = 56; // int | Employee ID. Defaults to ID of token owner.
$fields = "fields_example"; // string | Fields filter pattern

try {
    $result = $apiInstance->getPresent($employee_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheettimeClockApi->getPresent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **employee_id** | [**int**](../Model/.md)| Employee ID. Defaults to ID of token owner. | [optional]
 **fields** | [**string**](../Model/.md)| Fields filter pattern | [optional]

### Return type

[**\Tripletex\Model\ResponseWrapperTimeClock**](../Model/ResponseWrapperTimeClock.md)

### Authorization

[tokenAuthScheme](../../README.md#tokenAuthScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **put**
> \Tripletex\Model\ResponseWrapperTimeClock put($id, $body)

Update time clock by ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: tokenAuthScheme
$config = Tripletex\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Tripletex\Api\TimesheettimeClockApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Element ID
$body = new \Tripletex\Model\TimeClock(); // \Tripletex\Model\TimeClock | Partial object describing what should be updated

try {
    $result = $apiInstance->put($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheettimeClockApi->put: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**int**](../Model/.md)| Element ID |
 **body** | [**\Tripletex\Model\TimeClock**](../Model/TimeClock.md)| Partial object describing what should be updated | [optional]

### Return type

[**\Tripletex\Model\ResponseWrapperTimeClock**](../Model/ResponseWrapperTimeClock.md)

### Authorization

[tokenAuthScheme](../../README.md#tokenAuthScheme)

### HTTP request headers

 - **Content-Type**: application/json; charset=utf-8
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **search**
> \Tripletex\Model\ListResponseTimeClock search($id, $employee_id, $project_id, $activity_id, $date_from, $date_to, $hour_id, $is_running, $from, $count, $sorting, $fields)

Find time clock entries corresponding with sent data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: tokenAuthScheme
$config = Tripletex\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Tripletex\Api\TimesheettimeClockApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | List of IDs
$employee_id = "employee_id_example"; // string | List of IDs
$project_id = "project_id_example"; // string | List of IDs
$activity_id = "activity_id_example"; // string | List of IDs
$date_from = "date_from_example"; // string | From and including
$date_to = "date_to_example"; // string | To and excluding
$hour_id = "hour_id_example"; // string | List of IDs
$is_running = True; // bool | Equals
$from = 56; // int | From index
$count = 56; // int | Number of elements to return
$sorting = "sorting_example"; // string | Sorting pattern
$fields = "fields_example"; // string | Fields filter pattern

try {
    $result = $apiInstance->search($id, $employee_id, $project_id, $activity_id, $date_from, $date_to, $hour_id, $is_running, $from, $count, $sorting, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheettimeClockApi->search: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| List of IDs | [optional]
 **employee_id** | [**string**](../Model/.md)| List of IDs | [optional]
 **project_id** | [**string**](../Model/.md)| List of IDs | [optional]
 **activity_id** | [**string**](../Model/.md)| List of IDs | [optional]
 **date_from** | [**string**](../Model/.md)| From and including | [optional]
 **date_to** | [**string**](../Model/.md)| To and excluding | [optional]
 **hour_id** | [**string**](../Model/.md)| List of IDs | [optional]
 **is_running** | [**bool**](../Model/.md)| Equals | [optional]
 **from** | [**int**](../Model/.md)| From index | [optional]
 **count** | [**int**](../Model/.md)| Number of elements to return | [optional]
 **sorting** | [**string**](../Model/.md)| Sorting pattern | [optional]
 **fields** | [**string**](../Model/.md)| Fields filter pattern | [optional]

### Return type

[**\Tripletex\Model\ListResponseTimeClock**](../Model/ListResponseTimeClock.md)

### Authorization

[tokenAuthScheme](../../README.md#tokenAuthScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **start**
> \Tripletex\Model\ResponseWrapperTimeClock start($activity_id, $employee_id, $project_id, $date)

Start time clock.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: tokenAuthScheme
$config = Tripletex\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Tripletex\Api\TimesheettimeClockApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$activity_id = 56; // int | Activity ID
$employee_id = 56; // int | Employee ID. Defaults to ID of token owner.
$project_id = 56; // int | Project ID
$date = "date_example"; // string | Optional. Default is today’s date

try {
    $result = $apiInstance->start($activity_id, $employee_id, $project_id, $date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheettimeClockApi->start: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **activity_id** | [**int**](../Model/.md)| Activity ID |
 **employee_id** | [**int**](../Model/.md)| Employee ID. Defaults to ID of token owner. | [optional]
 **project_id** | [**int**](../Model/.md)| Project ID | [optional]
 **date** | [**string**](../Model/.md)| Optional. Default is today’s date | [optional]

### Return type

[**\Tripletex\Model\ResponseWrapperTimeClock**](../Model/ResponseWrapperTimeClock.md)

### Authorization

[tokenAuthScheme](../../README.md#tokenAuthScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stop**
> stop($id, $version)

Stop time clock.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: tokenAuthScheme
$config = Tripletex\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Tripletex\Api\TimesheettimeClockApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Element ID
$version = 56; // int | Number of current version

try {
    $apiInstance->stop($id, $version);
} catch (Exception $e) {
    echo 'Exception when calling TimesheettimeClockApi->stop: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**int**](../Model/.md)| Element ID |
 **version** | [**int**](../Model/.md)| Number of current version | [optional]

### Return type

void (empty response body)

### Authorization

[tokenAuthScheme](../../README.md#tokenAuthScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

