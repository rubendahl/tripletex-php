# Customer

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**version** | **int** |  | [optional] 
**changes** | [**\Tripletex\Model\Change[]**](Change.md) |  | [optional] 
**url** | **string** |  | [optional] 
**name** | **string** |  | 
**organization_number** | **string** |  | [optional] 
**supplier_number** | **int** |  | [optional] 
**customer_number** | **int** |  | [optional] 
**is_supplier** | **bool** |  | [optional] [default to false]
**is_customer** | **bool** |  | [optional] [default to false]
**is_inactive** | **bool** |  | [optional] [default to false]
**account_manager** | [**\Tripletex\Model\Employee**](Employee.md) |  | [optional] 
**email** | **string** |  | [optional] 
**invoice_email** | **string** |  | [optional] 
**bank_accounts** | **string[]** | List of the bank account numbers for this customer. Norwegian bank account numbers only. | [optional] 
**phone_number** | **string** |  | [optional] 
**phone_number_mobile** | **string** |  | [optional] 
**description** | **string** |  | [optional] 
**is_private_individual** | **bool** |  | [optional] [default to false]
**single_customer_invoice** | **bool** | Enables various orders on one customer invoice. | [optional] [default to false]
**invoice_send_method** | **string** | Define the invoicing method for the customer.&lt;br&gt;EMAIL: Send invoices as email.&lt;br&gt;EHF: Send invoices as EHF.&lt;br&gt;EFAKTURA: Send invoices as EFAKTURA.&lt;br&gt;VIPPS: Send invoices through VIPPS.&lt;br&gt;PAPER: Send invoices as paper invoice.&lt;br&gt; | [optional] 
**email_attachment_type** | **string** | Define the invoice attachment type for emailing to the customer.&lt;br&gt;LINK: Send invoice as link in email.&lt;br&gt;ATTACHMENT: Send invoice as attachment in email.&lt;br&gt; | [optional] 
**postal_address** | [**\Tripletex\Model\Address**](Address.md) |  | [optional] 
**physical_address** | [**\Tripletex\Model\Address**](Address.md) |  | [optional] 
**delivery_address** | [**\Tripletex\Model\Address**](Address.md) |  | [optional] 
**category1** | [**\Tripletex\Model\CustomerCategory**](CustomerCategory.md) | Category 1 of this customer | [optional] 
**category2** | [**\Tripletex\Model\CustomerCategory**](CustomerCategory.md) | Category 2 of this customer | [optional] 
**category3** | [**\Tripletex\Model\CustomerCategory**](CustomerCategory.md) | Category 3 of this customer | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


