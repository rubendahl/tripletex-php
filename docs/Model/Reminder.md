# Reminder

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**version** | **int** |  | [optional] 
**changes** | [**\Tripletex\Model\Change[]**](Change.md) |  | [optional] 
**url** | **string** |  | [optional] 
**reminder_date** | **string** | Creation date of the invoice reminder. | 
**charge** | [**BigDecimal**](BigDecimal.md) | The fee part of the reminder, in the company&#x27;s currency. | [optional] 
**charge_currency** | [**BigDecimal**](BigDecimal.md) | The fee part of the reminder, in the invoice currency. | [optional] 
**total_charge** | [**BigDecimal**](BigDecimal.md) | The total fee part of all reminders, in the company&#x27;s currency. | [optional] 
**total_charge_currency** | [**BigDecimal**](BigDecimal.md) | The total fee part of all reminders, in the invoice currency. | [optional] 
**total_amount_currency** | [**BigDecimal**](BigDecimal.md) | The total amount to pay in reminder&#x27;s currency. | [optional] 
**interests** | [**BigDecimal**](BigDecimal.md) | The interests part of the reminder. | [optional] 
**interest_rate** | [**BigDecimal**](BigDecimal.md) | The reminder interest rate. | [optional] 
**term_of_payment** | **string** | The reminder term of payment date. | 
**currency** | [**\Tripletex\Model\Currency**](Currency.md) |  | [optional] 
**type** | **string** |  | 
**comment** | **string** |  | [optional] 
**kid** | **string** | KID - Kundeidentifikasjonsnummer. | [optional] 
**bank_account_number** | **string** |  | [optional] 
**bank_account_iban** | **string** |  | [optional] 
**bank_account_swift** | **string** |  | [optional] 
**bank** | **string** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

