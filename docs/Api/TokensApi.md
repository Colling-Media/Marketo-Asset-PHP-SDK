# CollingMedia\Client\TokensApi

All URIs are relative to *https://052-SXI-468.mktorest.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addTokenTOFolderUsingPOST**](TokensApi.md#addTokenTOFolderUsingPOST) | **POST** /rest/asset/v1/folder/{id}/tokens.json | Create Token
[**deleteTokenByNameUsingPOST**](TokensApi.md#deleteTokenByNameUsingPOST) | **POST** /rest/asset/v1/folder/{id}/tokens/delete.json | Delete Token by Name
[**getTokensByFolderIdUsingGET**](TokensApi.md#getTokensByFolderIdUsingGET) | **GET** /rest/asset/v1/folder/{id}/tokens.json | Get Tokens by Folder Id


# **addTokenTOFolderUsingPOST**
> \CollingMedia\Client\Model\ResponseOfTokenResponse addTokenTOFolderUsingPOST($id, $create_token_request)

Create Token

Creates a new token in the parent folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Client\Api\TokensApi();
$id = 56; // int | id
$create_token_request = new \CollingMedia\Client\Model\CreateTokenRequest(); // \CollingMedia\Client\Model\CreateTokenRequest | createTokenRequest

try {
    $result = $api_instance->addTokenTOFolderUsingPOST($id, $create_token_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->addTokenTOFolderUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **create_token_request** | [**\CollingMedia\Client\Model\CreateTokenRequest**](../Model/\CollingMedia\Client\Model\CreateTokenRequest.md)| createTokenRequest |

### Return type

[**\CollingMedia\Client\Model\ResponseOfTokenResponse**](../Model/ResponseOfTokenResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTokenByNameUsingPOST**
> \CollingMedia\Client\Model\ResponseOfIdResponse deleteTokenByNameUsingPOST($id, $delete_token_request)

Delete Token by Name

Deletes a token with the given name from the parent folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Client\Api\TokensApi();
$id = 56; // int | id
$delete_token_request = new \CollingMedia\Client\Model\DeleteTokenRequest(); // \CollingMedia\Client\Model\DeleteTokenRequest | deleteTokenRequest

try {
    $result = $api_instance->deleteTokenByNameUsingPOST($id, $delete_token_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->deleteTokenByNameUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **delete_token_request** | [**\CollingMedia\Client\Model\DeleteTokenRequest**](../Model/\CollingMedia\Client\Model\DeleteTokenRequest.md)| deleteTokenRequest |

### Return type

[**\CollingMedia\Client\Model\ResponseOfIdResponse**](../Model/ResponseOfIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTokensByFolderIdUsingGET**
> \CollingMedia\Client\Model\ResponseOfTokenResponse getTokensByFolderIdUsingGET($id, $folder_type)

Get Tokens by Folder Id

Retrieves the list of available My Tokens in the target folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Client\Api\TokensApi();
$id = 56; // int | id
$folder_type = "Folder"; // string | Type of folder.  'Folder' or 'Program'

try {
    $result = $api_instance->getTokensByFolderIdUsingGET($id, $folder_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->getTokensByFolderIdUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **folder_type** | **string**| Type of folder.  &#39;Folder&#39; or &#39;Program&#39; | [optional] [default to Folder]

### Return type

[**\CollingMedia\Client\Model\ResponseOfTokenResponse**](../Model/ResponseOfTokenResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

