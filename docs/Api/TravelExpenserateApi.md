# Tripletex\TravelExpenserateApi

All URIs are relative to *//tripletex.no/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**get**](TravelExpenserateApi.md#get) | **GET** /travelExpense/rate/{id} | [BETA] Get travel expense rate by ID.
[**search**](TravelExpenserateApi.md#search) | **GET** /travelExpense/rate | [BETA] Find rates corresponding with sent data.

# **get**
> \Tripletex\Model\ResponseWrapperTravelExpenseRate get($id, $fields)

[BETA] Get travel expense rate by ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: tokenAuthScheme
$config = Tripletex\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Tripletex\Api\TravelExpenserateApi(
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
    echo 'Exception when calling TravelExpenserateApi->get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**int**](../Model/.md)| Element ID |
 **fields** | [**string**](../Model/.md)| Fields filter pattern | [optional]

### Return type

[**\Tripletex\Model\ResponseWrapperTravelExpenseRate**](../Model/ResponseWrapperTravelExpenseRate.md)

### Authorization

[tokenAuthScheme](../../README.md#tokenAuthScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **search**
> \Tripletex\Model\ListResponseTravelExpenseRate search($rate_category_id, $type, $is_valid_day_trip, $is_valid_accommodation, $is_valid_domestic, $is_valid_foreign_travel, $requires_zone, $requires_overnight_accommodation, $date_from, $date_to, $from, $count, $sorting, $fields)

[BETA] Find rates corresponding with sent data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: tokenAuthScheme
$config = Tripletex\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Tripletex\Api\TravelExpenserateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rate_category_id = "rate_category_id_example"; // string | Equals
$type = "type_example"; // string | Equals
$is_valid_day_trip = True; // bool | Equals
$is_valid_accommodation = True; // bool | Equals
$is_valid_domestic = True; // bool | Equals
$is_valid_foreign_travel = True; // bool | Equals
$requires_zone = True; // bool | Equals
$requires_overnight_accommodation = True; // bool | Equals
$date_from = "date_from_example"; // string | From and including
$date_to = "date_to_example"; // string | To and excluding
$from = 56; // int | From index
$count = 56; // int | Number of elements to return
$sorting = "sorting_example"; // string | Sorting pattern
$fields = "fields_example"; // string | Fields filter pattern

try {
    $result = $apiInstance->search($rate_category_id, $type, $is_valid_day_trip, $is_valid_accommodation, $is_valid_domestic, $is_valid_foreign_travel, $requires_zone, $requires_overnight_accommodation, $date_from, $date_to, $from, $count, $sorting, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TravelExpenserateApi->search: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rate_category_id** | [**string**](../Model/.md)| Equals | [optional]
 **type** | [**string**](../Model/.md)| Equals | [optional]
 **is_valid_day_trip** | [**bool**](../Model/.md)| Equals | [optional]
 **is_valid_accommodation** | [**bool**](../Model/.md)| Equals | [optional]
 **is_valid_domestic** | [**bool**](../Model/.md)| Equals | [optional]
 **is_valid_foreign_travel** | [**bool**](../Model/.md)| Equals | [optional]
 **requires_zone** | [**bool**](../Model/.md)| Equals | [optional]
 **requires_overnight_accommodation** | [**bool**](../Model/.md)| Equals | [optional]
 **date_from** | [**string**](../Model/.md)| From and including | [optional]
 **date_to** | [**string**](../Model/.md)| To and excluding | [optional]
 **from** | [**int**](../Model/.md)| From index | [optional]
 **count** | [**int**](../Model/.md)| Number of elements to return | [optional]
 **sorting** | [**string**](../Model/.md)| Sorting pattern | [optional]
 **fields** | [**string**](../Model/.md)| Fields filter pattern | [optional]

### Return type

[**\Tripletex\Model\ListResponseTravelExpenseRate**](../Model/ListResponseTravelExpenseRate.md)

### Authorization

[tokenAuthScheme](../../README.md#tokenAuthScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

