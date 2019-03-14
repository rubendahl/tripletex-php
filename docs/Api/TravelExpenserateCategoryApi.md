# Tripletex\TravelExpenserateCategoryApi

All URIs are relative to *//tripletex.no/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**get**](TravelExpenserateCategoryApi.md#get) | **GET** /travelExpense/rateCategory/{id} | [BETA] Get travel expense rate category by ID.
[**search**](TravelExpenserateCategoryApi.md#search) | **GET** /travelExpense/rateCategory | [BETA] Find rate categories corresponding with sent data.

# **get**
> \Tripletex\Model\ResponseWrapperTravelExpenseRateCategory get($id, $fields)

[BETA] Get travel expense rate category by ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: tokenAuthScheme
$config = Tripletex\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Tripletex\Api\TravelExpenserateCategoryApi(
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
    echo 'Exception when calling TravelExpenserateCategoryApi->get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**int**](../Model/.md)| Element ID |
 **fields** | [**string**](../Model/.md)| Fields filter pattern | [optional]

### Return type

[**\Tripletex\Model\ResponseWrapperTravelExpenseRateCategory**](../Model/ResponseWrapperTravelExpenseRateCategory.md)

### Authorization

[tokenAuthScheme](../../README.md#tokenAuthScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **search**
> \Tripletex\Model\ListResponseTravelExpenseRateCategory search($type, $name, $travel_report_rate_category_group_id, $amelding_wage_code, $wage_code_number, $is_valid_day_trip, $is_valid_accommodation, $is_valid_domestic, $requires_zone, $is_requires_overnight_accommodation, $date_from, $date_to, $from, $count, $sorting, $fields)

[BETA] Find rate categories corresponding with sent data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: tokenAuthScheme
$config = Tripletex\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Tripletex\Api\TravelExpenserateCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = "type_example"; // string | Equals
$name = "name_example"; // string | Containing
$travel_report_rate_category_group_id = 56; // int | Equals
$amelding_wage_code = "amelding_wage_code_example"; // string | Containing
$wage_code_number = "wage_code_number_example"; // string | Equals
$is_valid_day_trip = True; // bool | Equals
$is_valid_accommodation = True; // bool | Equals
$is_valid_domestic = True; // bool | Equals
$requires_zone = True; // bool | Equals
$is_requires_overnight_accommodation = True; // bool | Equals
$date_from = "date_from_example"; // string | From and including
$date_to = "date_to_example"; // string | To and excluding
$from = 56; // int | From index
$count = 56; // int | Number of elements to return
$sorting = "sorting_example"; // string | Sorting pattern
$fields = "fields_example"; // string | Fields filter pattern

try {
    $result = $apiInstance->search($type, $name, $travel_report_rate_category_group_id, $amelding_wage_code, $wage_code_number, $is_valid_day_trip, $is_valid_accommodation, $is_valid_domestic, $requires_zone, $is_requires_overnight_accommodation, $date_from, $date_to, $from, $count, $sorting, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TravelExpenserateCategoryApi->search: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | [**string**](../Model/.md)| Equals | [optional]
 **name** | [**string**](../Model/.md)| Containing | [optional]
 **travel_report_rate_category_group_id** | [**int**](../Model/.md)| Equals | [optional]
 **amelding_wage_code** | [**string**](../Model/.md)| Containing | [optional]
 **wage_code_number** | [**string**](../Model/.md)| Equals | [optional]
 **is_valid_day_trip** | [**bool**](../Model/.md)| Equals | [optional]
 **is_valid_accommodation** | [**bool**](../Model/.md)| Equals | [optional]
 **is_valid_domestic** | [**bool**](../Model/.md)| Equals | [optional]
 **requires_zone** | [**bool**](../Model/.md)| Equals | [optional]
 **is_requires_overnight_accommodation** | [**bool**](../Model/.md)| Equals | [optional]
 **date_from** | [**string**](../Model/.md)| From and including | [optional]
 **date_to** | [**string**](../Model/.md)| To and excluding | [optional]
 **from** | [**int**](../Model/.md)| From index | [optional]
 **count** | [**int**](../Model/.md)| Number of elements to return | [optional]
 **sorting** | [**string**](../Model/.md)| Sorting pattern | [optional]
 **fields** | [**string**](../Model/.md)| Fields filter pattern | [optional]

### Return type

[**\Tripletex\Model\ListResponseTravelExpenseRateCategory**](../Model/ListResponseTravelExpenseRateCategory.md)

### Authorization

[tokenAuthScheme](../../README.md#tokenAuthScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

