# Tripletex\ProductApi

All URIs are relative to *//tripletex.no/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**get**](ProductApi.md#get) | **GET** /product/{id} | Get product by ID.
[**post**](ProductApi.md#post) | **POST** /product | Create new product.
[**put**](ProductApi.md#put) | **PUT** /product/{id} | Update product.
[**search**](ProductApi.md#search) | **GET** /product | Find products corresponding with sent data.

# **get**
> \Tripletex\Model\ResponseWrapperProduct get($id, $fields)

Get product by ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: tokenAuthScheme
$config = Tripletex\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Tripletex\Api\ProductApi(
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
    echo 'Exception when calling ProductApi->get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**int**](../Model/.md)| Element ID |
 **fields** | [**string**](../Model/.md)| Fields filter pattern | [optional]

### Return type

[**\Tripletex\Model\ResponseWrapperProduct**](../Model/ResponseWrapperProduct.md)

### Authorization

[tokenAuthScheme](../../README.md#tokenAuthScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **post**
> \Tripletex\Model\ResponseWrapperProduct post($body)

Create new product.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: tokenAuthScheme
$config = Tripletex\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Tripletex\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Tripletex\Model\Product(); // \Tripletex\Model\Product | JSON representing the new object to be created. Should not have ID and version set.

try {
    $result = $apiInstance->post($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Tripletex\Model\Product**](../Model/Product.md)| JSON representing the new object to be created. Should not have ID and version set. | [optional]

### Return type

[**\Tripletex\Model\ResponseWrapperProduct**](../Model/ResponseWrapperProduct.md)

### Authorization

[tokenAuthScheme](../../README.md#tokenAuthScheme)

### HTTP request headers

 - **Content-Type**: application/json; charset=utf-8
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **put**
> \Tripletex\Model\ResponseWrapperProduct put($id, $body)

Update product.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: tokenAuthScheme
$config = Tripletex\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Tripletex\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Element ID
$body = new \Tripletex\Model\Product(); // \Tripletex\Model\Product | Partial object describing what should be updated

try {
    $result = $apiInstance->put($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->put: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**int**](../Model/.md)| Element ID |
 **body** | [**\Tripletex\Model\Product**](../Model/Product.md)| Partial object describing what should be updated | [optional]

### Return type

[**\Tripletex\Model\ResponseWrapperProduct**](../Model/ResponseWrapperProduct.md)

### Authorization

[tokenAuthScheme](../../README.md#tokenAuthScheme)

### HTTP request headers

 - **Content-Type**: application/json; charset=utf-8
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **search**
> \Tripletex\Model\ListResponseProduct search($number, $product_number, $name, $is_inactive, $is_stock_item, $currency_id, $vat_type_id, $product_unit_id, $department_id, $account_id, $cost_excluding_vat_currency_from, $cost_excluding_vat_currency_to, $price_excluding_vat_currency_from, $price_excluding_vat_currency_to, $price_including_vat_currency_from, $price_including_vat_currency_to, $from, $count, $sorting, $fields)

Find products corresponding with sent data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: tokenAuthScheme
$config = Tripletex\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Tripletex\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$number = "number_example"; // string | DEPRECATED. List of product numbers (Integer only)
$product_number = array("product_number_example"); // string[] | List of valid product numbers
$name = "name_example"; // string | Containing
$is_inactive = True; // bool | Equals
$is_stock_item = True; // bool | Equals
$currency_id = "currency_id_example"; // string | Equals
$vat_type_id = "vat_type_id_example"; // string | Equals
$product_unit_id = "product_unit_id_example"; // string | Equals
$department_id = "department_id_example"; // string | Equals
$account_id = "account_id_example"; // string | Equals
$cost_excluding_vat_currency_from = 3.4; // float | From and including
$cost_excluding_vat_currency_to = 3.4; // float | To and excluding
$price_excluding_vat_currency_from = 3.4; // float | From and including
$price_excluding_vat_currency_to = 3.4; // float | To and excluding
$price_including_vat_currency_from = 3.4; // float | From and including
$price_including_vat_currency_to = 3.4; // float | To and excluding
$from = 56; // int | From index
$count = 56; // int | Number of elements to return
$sorting = "sorting_example"; // string | Sorting pattern
$fields = "fields_example"; // string | Fields filter pattern

try {
    $result = $apiInstance->search($number, $product_number, $name, $is_inactive, $is_stock_item, $currency_id, $vat_type_id, $product_unit_id, $department_id, $account_id, $cost_excluding_vat_currency_from, $cost_excluding_vat_currency_to, $price_excluding_vat_currency_from, $price_excluding_vat_currency_to, $price_including_vat_currency_from, $price_including_vat_currency_to, $from, $count, $sorting, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->search: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | [**string**](../Model/.md)| DEPRECATED. List of product numbers (Integer only) | [optional]
 **product_number** | [**string[]**](../Model/string.md)| List of valid product numbers | [optional]
 **name** | [**string**](../Model/.md)| Containing | [optional]
 **is_inactive** | [**bool**](../Model/.md)| Equals | [optional]
 **is_stock_item** | [**bool**](../Model/.md)| Equals | [optional]
 **currency_id** | [**string**](../Model/.md)| Equals | [optional]
 **vat_type_id** | [**string**](../Model/.md)| Equals | [optional]
 **product_unit_id** | [**string**](../Model/.md)| Equals | [optional]
 **department_id** | [**string**](../Model/.md)| Equals | [optional]
 **account_id** | [**string**](../Model/.md)| Equals | [optional]
 **cost_excluding_vat_currency_from** | [**float**](../Model/.md)| From and including | [optional]
 **cost_excluding_vat_currency_to** | [**float**](../Model/.md)| To and excluding | [optional]
 **price_excluding_vat_currency_from** | [**float**](../Model/.md)| From and including | [optional]
 **price_excluding_vat_currency_to** | [**float**](../Model/.md)| To and excluding | [optional]
 **price_including_vat_currency_from** | [**float**](../Model/.md)| From and including | [optional]
 **price_including_vat_currency_to** | [**float**](../Model/.md)| To and excluding | [optional]
 **from** | [**int**](../Model/.md)| From index | [optional]
 **count** | [**int**](../Model/.md)| Number of elements to return | [optional]
 **sorting** | [**string**](../Model/.md)| Sorting pattern | [optional]
 **fields** | [**string**](../Model/.md)| Fields filter pattern | [optional]

### Return type

[**\Tripletex\Model\ListResponseProduct**](../Model/ListResponseProduct.md)

### Authorization

[tokenAuthScheme](../../README.md#tokenAuthScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

