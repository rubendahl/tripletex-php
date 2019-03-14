# ProjectInvoiceDetails

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**version** | **int** |  | [optional] 
**changes** | [**\Tripletex\Model\Change[]**](Change.md) |  | [optional] 
**url** | **string** |  | [optional] 
**project** | [**\Tripletex\Model\Project**](Project.md) |  | [optional] 
**fee_amount** | [**BigDecimal**](BigDecimal.md) | Fee amount of the project. For example: 100 NOK. | [optional] 
**fee_amount_currency** | [**BigDecimal**](BigDecimal.md) | Fee amount of the project in the invoice currency. | [optional] 
**markup_percent** | [**BigDecimal**](BigDecimal.md) | The percentage value of mark-up of amountFee. For example: 10%. | [optional] 
**markup_amount** | [**BigDecimal**](BigDecimal.md) | The amount value of mark-up of amountFee on the project invoice. For example: 10 NOK. | [optional] 
**markup_amount_currency** | [**BigDecimal**](BigDecimal.md) | The amount value of mark-up of amountFee on the project invoice, in the invoice currency. | [optional] 
**amount_order_lines_and_reinvoicing** | [**BigDecimal**](BigDecimal.md) | The amount of chargeable manual order lines and vendor invoices on the project invoice. | [optional] 
**amount_order_lines_and_reinvoicing_currency** | [**BigDecimal**](BigDecimal.md) | The amount of chargeable manual order lines and vendor invoices on the project invoice, in the invoice currency. | [optional] 
**amount_travel_reports_and_expenses** | [**BigDecimal**](BigDecimal.md) | The amount of travel costs and expenses on the project invoice. | [optional] 
**amount_travel_reports_and_expenses_currency** | [**BigDecimal**](BigDecimal.md) | The amount of travel costs and expenses on the project invoice, in the invoice currency. | [optional] 
**fee_invoice_text** | **string** | The fee comment on the project invoice. | 
**invoice_text** | **string** | The comment on the project invoice. | 
**include_order_lines_and_reinvoicing** | **bool** | Determines if extra costs should be included on the project invoice. | [optional] [default to false]
**include_hours** | **bool** | Determines if hours should be included on the project invoice. | [optional] [default to false]
**include_on_account_balance** | **bool** | Determines if akonto should be included on the project invoice. | [optional] [default to false]
**on_account_balance_amount** | [**BigDecimal**](BigDecimal.md) | The akonto amount on the project invoice. | [optional] 
**on_account_balance_amount_currency** | [**BigDecimal**](BigDecimal.md) | The akonto amount on the project invoice in the invoice currency. | [optional] 
**vat_type** | [**\Tripletex\Model\VatType**](VatType.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

