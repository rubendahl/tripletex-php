# Subscription

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**version** | **int** |  | [optional] 
**changes** | [**\Tripletex\Model\Change[]**](Change.md) |  | [optional] 
**url** | **string** |  | [optional] 
**event** | **string** | Event name (from v2/event) you wish to subscribe to. Form should be: *subject.verb*. | 
**target_url** | **string** | The callback URL used for subscriptions (including authentication tokens). Must be absolute and use HTTPS. | 
**fields** | **string** | The fields in the object delivered with the notification callback, nested as in other API calls. | [optional] 
**status** | **string** | The status of the subscription. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

