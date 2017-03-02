# Marketo Assets PHP SDK
Marketo Rest API

## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com//.git"
    }
  ],
  "require": {
    "/": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Client\Api\ChannelsApi();
$max_return = 56; // int | Maximum number of channels to return.  Max 200, default 20
$offset = 56; // int | Integer offset for paging

try {
    $result = $api_instance->getAllChannelsUsingGET($max_return, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->getAllChannelsUsingGET: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://052-SXI-468.mktorest.com/*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ChannelsApi* | [**getAllChannelsUsingGET**](docs/Api/ChannelsApi.md#getallchannelsusingget) | **GET** /rest/asset/v1/channels.json | Get Channels
*ChannelsApi* | [**getChannelByNameUsingGET**](docs/Api/ChannelsApi.md#getchannelbynameusingget) | **GET** /rest/asset/v1/channel/byName.json | Get Channel by Name
*EmailTemplatesApi* | [**approveDraftUsingPOST1**](docs/Api/EmailTemplatesApi.md#approvedraftusingpost1) | **POST** /rest/asset/v1/emailTemplate/{id}/approveDraft.json | Approve Email Template Draft
*EmailTemplatesApi* | [**cloneTemplateUsingPOST**](docs/Api/EmailTemplatesApi.md#clonetemplateusingpost) | **POST** /rest/asset/v1/emailTemplate/{id}/clone.json | Clone Email Template
*EmailTemplatesApi* | [**createEmailTemplateUsingPOST**](docs/Api/EmailTemplatesApi.md#createemailtemplateusingpost) | **POST** /rest/asset/v1/emailTemplates.json | Create Email Template
*EmailTemplatesApi* | [**deleteTemplateUsingPOST**](docs/Api/EmailTemplatesApi.md#deletetemplateusingpost) | **POST** /rest/asset/v1/emailTemplate/{id}/delete.json | Delete Email Template
*EmailTemplatesApi* | [**discardDraftUsingPOST1**](docs/Api/EmailTemplatesApi.md#discarddraftusingpost1) | **POST** /rest/asset/v1/emailTemplate/{id}/discardDraft.json | Discard Email Template Draft
*EmailTemplatesApi* | [**getEmailTemplatesUsingGET**](docs/Api/EmailTemplatesApi.md#getemailtemplatesusingget) | **GET** /rest/asset/v1/emailTemplates.json | Get Email Templates
*EmailTemplatesApi* | [**getTemplateByIdUsingGET**](docs/Api/EmailTemplatesApi.md#gettemplatebyidusingget) | **GET** /rest/asset/v1/emailTemplate/{id}.json | Get Email Template by Id
*EmailTemplatesApi* | [**getTemplateByNameUsingGET**](docs/Api/EmailTemplatesApi.md#gettemplatebynameusingget) | **GET** /rest/asset/v1/emailTemplate/byName.json | Get Email Template by Name
*EmailTemplatesApi* | [**getTemplateContentByIdUsingGET**](docs/Api/EmailTemplatesApi.md#gettemplatecontentbyidusingget) | **GET** /rest/asset/v1/emailTemplate/{id}/content | Get Email Template Content by Id
*EmailTemplatesApi* | [**unapproveDraftUsingPOST1**](docs/Api/EmailTemplatesApi.md#unapprovedraftusingpost1) | **POST** /rest/asset/v1/emailTemplate/{id}/unapprove.json | Unapprove Email Template Draft
*EmailTemplatesApi* | [**updateEmailTemplateContentUsingPOST**](docs/Api/EmailTemplatesApi.md#updateemailtemplatecontentusingpost) | **POST** /rest/asset/v1/emailTemplate/{id}/content.json | Update Email Template Content
*EmailTemplatesApi* | [**updateEmailTemplateUsingPOST**](docs/Api/EmailTemplatesApi.md#updateemailtemplateusingpost) | **POST** /rest/asset/v1/emailTemplate/{id}.json | Update Email Template Metadata
*EmailsApi* | [**addModuleUsingPOST**](docs/Api/EmailsApi.md#addmoduleusingpost) | **POST** /rest/asset/v1/email/{id}/content/{moduleId}/add.json | Add Email Module
*EmailsApi* | [**approveDraftUsingPOST**](docs/Api/EmailsApi.md#approvedraftusingpost) | **POST** /rest/asset/v1/email/{id}/approveDraft.json | Approve Email Draft
*EmailsApi* | [**cloneEmailUsingPOST**](docs/Api/EmailsApi.md#cloneemailusingpost) | **POST** /rest/asset/v1/email/{id}/clone.json | Clone Email
*EmailsApi* | [**createEmailUsingPOST**](docs/Api/EmailsApi.md#createemailusingpost) | **POST** /rest/asset/v1/emails.json | Create Email
*EmailsApi* | [**deleteEmailUsingPOST**](docs/Api/EmailsApi.md#deleteemailusingpost) | **POST** /rest/asset/v1/email/{id}/delete.json | Delete Email
*EmailsApi* | [**deleteModuleUsingPOST**](docs/Api/EmailsApi.md#deletemoduleusingpost) | **POST** /rest/asset/v1/email/{id}/content/{moduleId}/delete.json | Delete Module
*EmailsApi* | [**discardDraftUsingPOST**](docs/Api/EmailsApi.md#discarddraftusingpost) | **POST** /rest/asset/v1/email/{id}/discardDraft.json | Discard Email Draft
*EmailsApi* | [**duplicateModuleUsingPOST**](docs/Api/EmailsApi.md#duplicatemoduleusingpost) | **POST** /rest/asset/v1/email/{id}/content/{moduleId}/duplicate.json | Duplicate Email Module
*EmailsApi* | [**getEmailByIdUsingGET**](docs/Api/EmailsApi.md#getemailbyidusingget) | **GET** /rest/asset/v1/email/{id}.json | Get Email By Id
*EmailsApi* | [**getEmailByNameUsingGET**](docs/Api/EmailsApi.md#getemailbynameusingget) | **GET** /rest/asset/v1/email/byName.json | Get Email by Name
*EmailsApi* | [**getEmailContentByIdUsingGET**](docs/Api/EmailsApi.md#getemailcontentbyidusingget) | **GET** /rest/asset/v1/email/{id}/content | Get Email Content
*EmailsApi* | [**getEmailDynamicContentUsingGET**](docs/Api/EmailsApi.md#getemaildynamiccontentusingget) | **GET** /rest/asset/v1/email/{id}/dynamicContent/{dynamicContentId}.json | Get Email Dynamic Content
*EmailsApi* | [**getEmailUsingGET**](docs/Api/EmailsApi.md#getemailusingget) | **GET** /rest/asset/v1/emails.json | Get Emails
*EmailsApi* | [**getEmailVariablesUsingGET**](docs/Api/EmailsApi.md#getemailvariablesusingget) | **GET** /rest/asset/v1/email/{id}/variables.json | Get Email Variables
*EmailsApi* | [**rearrangeModulesUsingPOST**](docs/Api/EmailsApi.md#rearrangemodulesusingpost) | **POST** /rest/asset/v1/email/{id}/content/rearrange.json | Rearrange Email Modules
*EmailsApi* | [**renameUsingPOST**](docs/Api/EmailsApi.md#renameusingpost) | **POST** /rest/asset/v1/email/{id}/content/{moduleId}/rename.json | Rename Email Module
*EmailsApi* | [**sendSampleEmailUsingPOST**](docs/Api/EmailsApi.md#sendsampleemailusingpost) | **POST** /rest/asset/v1/email/{id}/sendSample.json | Send Sample Email
*EmailsApi* | [**unapproveDraftUsingPOST**](docs/Api/EmailsApi.md#unapprovedraftusingpost) | **POST** /rest/asset/v1/email/{id}/unapprove.json | Unapprove Email
*EmailsApi* | [**updateEmailComponentContentUsingPOST**](docs/Api/EmailsApi.md#updateemailcomponentcontentusingpost) | **POST** /rest/asset/v1/email/{id}/content/{htmlId}.json | Update Email Content Section
*EmailsApi* | [**updateEmailContentUsingPOST**](docs/Api/EmailsApi.md#updateemailcontentusingpost) | **POST** /rest/asset/v1/email/{id}/content.json | Update Email Content
*EmailsApi* | [**updateEmailDynamicContentUsingPOST**](docs/Api/EmailsApi.md#updateemaildynamiccontentusingpost) | **POST** /rest/asset/v1/email/{id}/dynamicContent/{dynamicContentId}.json | Update Email Dynamic Content Section
*EmailsApi* | [**updateEmailUsingPOST**](docs/Api/EmailsApi.md#updateemailusingpost) | **POST** /rest/asset/v1/email/{id}.json | Update Email Metadata
*EmailsApi* | [**updateVariableUsingPOST**](docs/Api/EmailsApi.md#updatevariableusingpost) | **POST** /rest/asset/v1/email/{id}/variable/{name}.json | Update Email Variable
*FileContentsApi* | [**updateContentUsingPOST**](docs/Api/FileContentsApi.md#updatecontentusingpost) | **POST** /rest/asset/v1/file/{id}/content.json | Update File Content
*FilesApi* | [**createFileUsingPOST**](docs/Api/FilesApi.md#createfileusingpost) | **POST** /rest/asset/v1/files.json | Create File
*FilesApi* | [**getFileByIdUsingGET**](docs/Api/FilesApi.md#getfilebyidusingget) | **GET** /rest/asset/v1/file/{id}.json | Get File by Id
*FilesApi* | [**getFileByNameUsingGET**](docs/Api/FilesApi.md#getfilebynameusingget) | **GET** /rest/asset/v1/file/byName.json | Get File by Name
*FilesApi* | [**getFilesUsingGET**](docs/Api/FilesApi.md#getfilesusingget) | **GET** /rest/asset/v1/files.json | Get Files
*FoldersApi* | [**createFolderUsingPOST**](docs/Api/FoldersApi.md#createfolderusingpost) | **POST** /rest/asset/v1/folders.json | Create Folder
*FoldersApi* | [**deleteFolderUsingPOST**](docs/Api/FoldersApi.md#deletefolderusingpost) | **POST** /rest/asset/v1/folder/{id}/delete.json | Delete Folder
*FoldersApi* | [**getFolderByIdUsingGET**](docs/Api/FoldersApi.md#getfolderbyidusingget) | **GET** /rest/asset/v1/folder/{id}.json | Get Folder by Id
*FoldersApi* | [**getFolderByNameUsingGET**](docs/Api/FoldersApi.md#getfolderbynameusingget) | **GET** /rest/asset/v1/folder/byName.json | Get Folder by Name
*FoldersApi* | [**getFolderContentUsingGET**](docs/Api/FoldersApi.md#getfoldercontentusingget) | **GET** /rest/asset/v1/folder/{id}/content.json | Get Folder Contents
*FoldersApi* | [**getFolderUsingGET**](docs/Api/FoldersApi.md#getfolderusingget) | **GET** /rest/asset/v1/folders.json | Get Folders
*FoldersApi* | [**updateFolderUsingPOST**](docs/Api/FoldersApi.md#updatefolderusingpost) | **POST** /rest/asset/v1/folder/{id}.json | Update Folder Metadata
*FormFieldsApi* | [**addFieldSetUsingPOST**](docs/Api/FormFieldsApi.md#addfieldsetusingpost) | **POST** /rest/asset/v1/form/{id}/fieldSet.json | Add Fieldset to Form
*FormFieldsApi* | [**addFieldToAFormUsingPOST**](docs/Api/FormFieldsApi.md#addfieldtoaformusingpost) | **POST** /rest/asset/v1/form/{id}/fields.json | Add Field to Form
*FormFieldsApi* | [**addFormFieldVisibilityRuleUsingPOST**](docs/Api/FormFieldsApi.md#addformfieldvisibilityruleusingpost) | **POST** /rest/asset/v1/form/{formId}/field/{fieldId}/visibility.json | Add Form Field Visibility Rules
*FormFieldsApi* | [**addRichTextFieldUsingPOST**](docs/Api/FormFieldsApi.md#addrichtextfieldusingpost) | **POST** /rest/asset/v1/form/{id}/richText.json | Add Rich Text Field
*FormFieldsApi* | [**deleteFormFieldFromFieldSetUsingPOST**](docs/Api/FormFieldsApi.md#deleteformfieldfromfieldsetusingpost) | **POST** /rest/asset/v1/form/{id}/fieldSet/{fieldSetId}/field/{fieldId}/delete.json | Delete Field from Fieldset
*FormFieldsApi* | [**deleteFormFieldUsingPOST**](docs/Api/FormFieldsApi.md#deleteformfieldusingpost) | **POST** /rest/asset/v1/form/{id}/field/{fieldId}/delete.json | Delete Form Field
*FormFieldsApi* | [**getAllFieldsUsingGET**](docs/Api/FormFieldsApi.md#getallfieldsusingget) | **GET** /rest/asset/v1/form/fields.json | Get Available Form Fields
*FormFieldsApi* | [**getFormFieldByFormVidUsingGET**](docs/Api/FormFieldsApi.md#getformfieldbyformvidusingget) | **GET** /rest/asset/v1/form/{id}/fields.json | Get Fields for Form
*FormFieldsApi* | [**updateFieldPositionsUsingPOST**](docs/Api/FormFieldsApi.md#updatefieldpositionsusingpost) | **POST** /rest/asset/v1/form/{id}/reArrange.json | Update Field Positions
*FormFieldsApi* | [**updateFormFieldUsingPOST**](docs/Api/FormFieldsApi.md#updateformfieldusingpost) | **POST** /rest/asset/v1/form/{id}/field/{fieldId}.json | Update Form Field
*FormsApi* | [**approveFromUsingPOST**](docs/Api/FormsApi.md#approvefromusingpost) | **POST** /rest/asset/v1/form/{id}/approveDraft.json | Approve Form Draft
*FormsApi* | [**browseForms2UsingGET**](docs/Api/FormsApi.md#browseforms2usingget) | **GET** /rest/asset/v1/forms.json | Get Forms
*FormsApi* | [**cloneLpFormsUsingPOST**](docs/Api/FormsApi.md#clonelpformsusingpost) | **POST** /rest/asset/v1/form/{id}/clone.json | Clone Form
*FormsApi* | [**createLpFormsUsingPOST**](docs/Api/FormsApi.md#createlpformsusingpost) | **POST** /rest/asset/v1/forms.json | Create Form
*FormsApi* | [**deleteFormByIdUsingPOST**](docs/Api/FormsApi.md#deleteformbyidusingpost) | **POST** /rest/asset/v1/form/{id}/delete.json | Delete Form
*FormsApi* | [**discardFormByIdUsingPOST**](docs/Api/FormsApi.md#discardformbyidusingpost) | **POST** /rest/asset/v1/form/{id}/discardDraft.json | Discard Form Draft
*FormsApi* | [**getLpFormByIdUsingGET**](docs/Api/FormsApi.md#getlpformbyidusingget) | **GET** /rest/asset/v1/form/{id}.json | Get Form By Id
*FormsApi* | [**getLpFormByNameUsingGET**](docs/Api/FormsApi.md#getlpformbynameusingget) | **GET** /rest/asset/v1/form/byName.json | Get Form by Name
*FormsApi* | [**getThankYouPageByIdUsingGET**](docs/Api/FormsApi.md#getthankyoupagebyidusingget) | **GET** /rest/asset/v1/form/{id}/thankYouPage.json | Get Thank You Page by Form Id
*FormsApi* | [**updateFormSubmitButtonUsingPOST**](docs/Api/FormsApi.md#updateformsubmitbuttonusingpost) | **POST** /rest/asset/v1/form/{id}/submitButton.json | Update Submit Button
*FormsApi* | [**updateFormsUsingPOST**](docs/Api/FormsApi.md#updateformsusingpost) | **POST** /rest/asset/v1/form/{id}.json | Update Form Metadata
*FormsApi* | [**updateThankYouPageByIdUsingPOST**](docs/Api/FormsApi.md#updatethankyoupagebyidusingpost) | **POST** /rest/asset/v1/form/{id}/thankYouPage.json | Update Thank You Page
*LandingPageContentApi* | [**addLandingPageContentUsingPOST**](docs/Api/LandingPageContentApi.md#addlandingpagecontentusingpost) | **POST** /rest/asset/v1/landingPage/{id}/content.json | Add Landing Page Content Section
*LandingPageContentApi* | [**getLandingPageContentUsingGET**](docs/Api/LandingPageContentApi.md#getlandingpagecontentusingget) | **GET** /rest/asset/v1/landingPage/{id}/content.json | Get Landing Page Content
*LandingPageContentApi* | [**getLandingPageDynamicContentsUsingGET**](docs/Api/LandingPageContentApi.md#getlandingpagedynamiccontentsusingget) | **GET** /rest/asset/v1/landingPage/{id}/dynamicContent/{content_id}.json | Get Landing Page Dynamic Content
*LandingPageContentApi* | [**removeLandingPageContentUsingPOST**](docs/Api/LandingPageContentApi.md#removelandingpagecontentusingpost) | **POST** /rest/asset/v1/landingPage/{id}/content/{contentId}/delete.json | Delete Landing Page Content Section
*LandingPageContentApi* | [**updateLandingPageContentUsingPOST**](docs/Api/LandingPageContentApi.md#updatelandingpagecontentusingpost) | **POST** /rest/asset/v1/landingPage/{id}/content/{contentId}.json | Update Landing Page Content Section
*LandingPageContentApi* | [**updateLandingPageDynamicContentUsingPOST**](docs/Api/LandingPageContentApi.md#updatelandingpagedynamiccontentusingpost) | **POST** /rest/asset/v1/landingPage/{id}/dynamicContent/{dynamicContentId}.json | Update Landing Page Dynamic Content Section
*LandingPageTemplatesApi* | [**approveLandingPageTemplateUsingPOST**](docs/Api/LandingPageTemplatesApi.md#approvelandingpagetemplateusingpost) | **POST** /rest/asset/v1/landingPageTemplate/{id}/approveDraft.json | Approve Landing Page Template Draft
*LandingPageTemplatesApi* | [**cloneLpTemplateUsingPOST**](docs/Api/LandingPageTemplatesApi.md#clonelptemplateusingpost) | **POST** /rest/asset/v1/landingPageTemplate/{id}/clone.json | Clone Landing Page Template
*LandingPageTemplatesApi* | [**createLpTemplateUsingPOST**](docs/Api/LandingPageTemplatesApi.md#createlptemplateusingpost) | **POST** /rest/asset/v1/landingPageTemplates.json | Create Landing Page Template
*LandingPageTemplatesApi* | [**deleteLpTemplateUsingPOST**](docs/Api/LandingPageTemplatesApi.md#deletelptemplateusingpost) | **POST** /rest/asset/v1/landingPageTemplate/{id}/delete.json | Delete Landing Page Template
*LandingPageTemplatesApi* | [**discardDraftUsingPOST2**](docs/Api/LandingPageTemplatesApi.md#discarddraftusingpost2) | **POST** /rest/asset/v1/landingPageTemplate/{id}/discardDraft.json | Discard Landing Page Template Draft
*LandingPageTemplatesApi* | [**getLandingPageTemplateByIdUsingGET**](docs/Api/LandingPageTemplatesApi.md#getlandingpagetemplatebyidusingget) | **GET** /rest/asset/v1/landingPageTemplate/{id}.json | Get Landing Page Template by Id
*LandingPageTemplatesApi* | [**getLandingPageTemplateByNameUsingGET**](docs/Api/LandingPageTemplatesApi.md#getlandingpagetemplatebynameusingget) | **GET** /rest/asset/v1/landingPageTemplate/byName.json | Get Landing Page Template by Name
*LandingPageTemplatesApi* | [**getLandingPageTemplateContentUsingGET**](docs/Api/LandingPageTemplatesApi.md#getlandingpagetemplatecontentusingget) | **GET** /rest/asset/v1/landingPageTemplate/{id}/content.json | Get Landing Page Template Content
*LandingPageTemplatesApi* | [**getLandingPageTemplatesUsingGET**](docs/Api/LandingPageTemplatesApi.md#getlandingpagetemplatesusingget) | **GET** /rest/asset/v1/landingPageTemplates.json | Get Landing Page Templates
*LandingPageTemplatesApi* | [**unapproveLandingPageTemplateUsingPOST**](docs/Api/LandingPageTemplatesApi.md#unapprovelandingpagetemplateusingpost) | **POST** /rest/asset/v1/landingPageTemplate/{id}/unapprove.json | Unapprove Landing Page Template
*LandingPageTemplatesApi* | [**updateLandingPageTemplateContentUsingPOST**](docs/Api/LandingPageTemplatesApi.md#updatelandingpagetemplatecontentusingpost) | **POST** /rest/asset/v1/landingPageTemplate/{id}/content | Update Landing Page Template Content
*LandingPageTemplatesApi* | [**updateLpTemplateUsingPOST**](docs/Api/LandingPageTemplatesApi.md#updatelptemplateusingpost) | **POST** /rest/asset/v1/landingPageTemplate/{id}.json | Update Landing Page Template Metadata
*LandingPagesApi* | [**approveLandingPageUsingPOST**](docs/Api/LandingPagesApi.md#approvelandingpageusingpost) | **POST** /rest/asset/v1/landingPage/{id}/approveDraft.json | Approve Landing Page Draft
*LandingPagesApi* | [**browseLandingPagesUsingGET**](docs/Api/LandingPagesApi.md#browselandingpagesusingget) | **GET** /rest/asset/v1/landingPages.json | Get Landing Pages
*LandingPagesApi* | [**cloneLandingPageUsingPOST**](docs/Api/LandingPagesApi.md#clonelandingpageusingpost) | **POST** /rest/asset/v1/landingPage/{id}/clone.json | Clone Landing Page
*LandingPagesApi* | [**createLandingPageUsingPOST**](docs/Api/LandingPagesApi.md#createlandingpageusingpost) | **POST** /rest/asset/v1/landingPages.json | Create Landing Page
*LandingPagesApi* | [**deleteLandingPageByIdUsingPOST**](docs/Api/LandingPagesApi.md#deletelandingpagebyidusingpost) | **POST** /rest/asset/v1/landingPage/{id}/delete.json | Delete Landing Page
*LandingPagesApi* | [**discardLandingPageByIdUsingPOST**](docs/Api/LandingPagesApi.md#discardlandingpagebyidusingpost) | **POST** /rest/asset/v1/landingPage/{id}/discardDraft.json | Discard Landing Page Draft
*LandingPagesApi* | [**getLandingPageByIdUsingGET**](docs/Api/LandingPagesApi.md#getlandingpagebyidusingget) | **GET** /rest/asset/v1/landingPage/{id}.json | Get Landing Page by Id
*LandingPagesApi* | [**getLandingPageByNameUsingGET**](docs/Api/LandingPagesApi.md#getlandingpagebynameusingget) | **GET** /rest/asset/v1/landingPage/byName.json | Get Landing Page by Name
*LandingPagesApi* | [**getVariablesUsingGET**](docs/Api/LandingPagesApi.md#getvariablesusingget) | **GET** /rest/asset/v1/landingPage/{id}/variables.json | getVariables
*LandingPagesApi* | [**unapproveLandingPageByIdUsingPOST**](docs/Api/LandingPagesApi.md#unapprovelandingpagebyidusingpost) | **POST** /rest/asset/v1/landingPage/{id}/unapprove.json | Unapprove Landing Page
*LandingPagesApi* | [**updateLandingPageUsingPOST**](docs/Api/LandingPagesApi.md#updatelandingpageusingpost) | **POST** /rest/asset/v1/landingPage/{id}.json | Update Landing Page Metadata
*LandingPagesApi* | [**updateLandingPageVariableUsingPOST**](docs/Api/LandingPagesApi.md#updatelandingpagevariableusingpost) | **POST** /rest/asset/v1/landingPage/{id}/variable/{variableId}.json | updateLandingPageVariable
*ProgramsApi* | [**approveProgramUsingPOST**](docs/Api/ProgramsApi.md#approveprogramusingpost) | **POST** /rest/asset/v1/program/{id}/approve.json | Approve Program
*ProgramsApi* | [**browseProgramsUsingGET**](docs/Api/ProgramsApi.md#browseprogramsusingget) | **GET** /rest/asset/v1/programs.json | Get Programs
*ProgramsApi* | [**cloneProgramUsingPOST**](docs/Api/ProgramsApi.md#cloneprogramusingpost) | **POST** /rest/asset/v1/program/{id}/clone.json | Clone Program
*ProgramsApi* | [**createProgramUsingPOST**](docs/Api/ProgramsApi.md#createprogramusingpost) | **POST** /rest/asset/v1/programs.json | Create Program
*ProgramsApi* | [**deleteProgramUsingPOST**](docs/Api/ProgramsApi.md#deleteprogramusingpost) | **POST** /rest/asset/v1/program/{id}/delete.json | Delete Program
*ProgramsApi* | [**getProgramByIdUsingGET**](docs/Api/ProgramsApi.md#getprogrambyidusingget) | **GET** /rest/asset/v1/program/{id}.json | Get Program by Id
*ProgramsApi* | [**getProgramByNameUsingGET**](docs/Api/ProgramsApi.md#getprogrambynameusingget) | **GET** /rest/asset/v1/program/byName.json | Get Program by Name
*ProgramsApi* | [**getProgramListByTagUsingGET**](docs/Api/ProgramsApi.md#getprogramlistbytagusingget) | **GET** /rest/asset/v1/program/byTag.json | Get Programs by Tag
*ProgramsApi* | [**unapproveProgramUsingPOST**](docs/Api/ProgramsApi.md#unapproveprogramusingpost) | **POST** /rest/asset/v1/program/{id}/unapprove.json | Unapprove Program
*ProgramsApi* | [**updateProgramUsingPOST**](docs/Api/ProgramsApi.md#updateprogramusingpost) | **POST** /rest/asset/v1/program/{id}.json | Update Program Metadata
*SegmentsApi* | [**getSegmentationUsingGET**](docs/Api/SegmentsApi.md#getsegmentationusingget) | **GET** /rest/asset/v1/segmentation.json | Get Segmentations
*SegmentsApi* | [**getSegmentsForSegmentationUsingGET**](docs/Api/SegmentsApi.md#getsegmentsforsegmentationusingget) | **GET** /rest/asset/v1/segmentation/{id}/segments.json | Get Segments For Segmentation
*SnippetsApi* | [**approveSnippetUsingPOST**](docs/Api/SnippetsApi.md#approvesnippetusingpost) | **POST** /rest/asset/v1/snippet/{id}/approveDraft.json | Approve Snippet Draft
*SnippetsApi* | [**cloneSnippetUsingPOST**](docs/Api/SnippetsApi.md#clonesnippetusingpost) | **POST** /rest/asset/v1/snippet/{id}/clone.json | Clone Snippet
*SnippetsApi* | [**createSnippetUsingPOST**](docs/Api/SnippetsApi.md#createsnippetusingpost) | **POST** /rest/asset/v1/snippets.json | Create Snippet
*SnippetsApi* | [**deleteSnippetUsingPOST**](docs/Api/SnippetsApi.md#deletesnippetusingpost) | **POST** /rest/asset/v1/snippet/{id}/delete.json | Delete Snippet
*SnippetsApi* | [**discardSnippetUsingPOST**](docs/Api/SnippetsApi.md#discardsnippetusingpost) | **POST** /rest/asset/v1/snippet/{id}/discardDraft.json | Discard Snippet Draft
*SnippetsApi* | [**getDynamicContentUsingGET**](docs/Api/SnippetsApi.md#getdynamiccontentusingget) | **GET** /rest/asset/v1/snippet/{id}/dynamicContent.json | Get Dynamic Content
*SnippetsApi* | [**getSnippetByIdUsingGET**](docs/Api/SnippetsApi.md#getsnippetbyidusingget) | **GET** /rest/asset/v1/snippet/{id}.json | Get Snippet by Id
*SnippetsApi* | [**getSnippetContentByIdUsingGET**](docs/Api/SnippetsApi.md#getsnippetcontentbyidusingget) | **GET** /rest/asset/v1/snippet/{id}/content.json | Get Snippet Content
*SnippetsApi* | [**getSnippetUsingGET**](docs/Api/SnippetsApi.md#getsnippetusingget) | **GET** /rest/asset/v1/snippets.json | Get Snippets
*SnippetsApi* | [**unapproveSnippetUsingPOST**](docs/Api/SnippetsApi.md#unapprovesnippetusingpost) | **POST** /rest/asset/v1/snippet/{id}/unapprove.json | Unapprove Snippet
*SnippetsApi* | [**updateContentUsingPOST1**](docs/Api/SnippetsApi.md#updatecontentusingpost1) | **POST** /rest/asset/v1/snippet/{id}/content.json | Update Snippet Content
*SnippetsApi* | [**updateDynamicContentUsingPOST**](docs/Api/SnippetsApi.md#updatedynamiccontentusingpost) | **POST** /rest/asset/v1/snippet/{id}/dynamicContent/{segmentId}.json | Update Snippet Dynamic Content
*SnippetsApi* | [**updateSnippetUsingPOST**](docs/Api/SnippetsApi.md#updatesnippetusingpost) | **POST** /rest/asset/v1/snippet/{id}.json | Update Snippet Metadata
*TagsApi* | [**getTagByNameUsingGET**](docs/Api/TagsApi.md#gettagbynameusingget) | **GET** /rest/asset/v1/tagType/byName.json | Get Tag By Name
*TagsApi* | [**getTagTypesUsingGET**](docs/Api/TagsApi.md#gettagtypesusingget) | **GET** /rest/asset/v1/tagTypes.json | Get Tag Types
*TokensApi* | [**addTokenTOFolderUsingPOST**](docs/Api/TokensApi.md#addtokentofolderusingpost) | **POST** /rest/asset/v1/folder/{id}/tokens.json | Create Token
*TokensApi* | [**deleteTokenByNameUsingPOST**](docs/Api/TokensApi.md#deletetokenbynameusingpost) | **POST** /rest/asset/v1/folder/{id}/tokens/delete.json | Delete Token by Name
*TokensApi* | [**getTokensByFolderIdUsingGET**](docs/Api/TokensApi.md#gettokensbyfolderidusingget) | **GET** /rest/asset/v1/folder/{id}/tokens.json | Get Tokens by Folder Id


## Documentation For Models

 - [AddFormFieldRequest](docs/Model/AddFormFieldRequest.md)
 - [AddFormFieldSetRequest](docs/Model/AddFormFieldSetRequest.md)
 - [AddFormFieldVisibilityRequest](docs/Model/AddFormFieldVisibilityRequest.md)
 - [AddRichTextRequest](docs/Model/AddRichTextRequest.md)
 - [BrowseAllPrograms](docs/Model/BrowseAllPrograms.md)
 - [ChannelProgression](docs/Model/ChannelProgression.md)
 - [ChannelResponse](docs/Model/ChannelResponse.md)
 - [CloneEmailRequest](docs/Model/CloneEmailRequest.md)
 - [CloneEmailTemplateRequest](docs/Model/CloneEmailTemplateRequest.md)
 - [CloneLandingPageRequest](docs/Model/CloneLandingPageRequest.md)
 - [CloneLpTemplateRequest](docs/Model/CloneLpTemplateRequest.md)
 - [CloneProgramRequest](docs/Model/CloneProgramRequest.md)
 - [CostRequest](docs/Model/CostRequest.md)
 - [Costs](docs/Model/Costs.md)
 - [CreateEmailRequest](docs/Model/CreateEmailRequest.md)
 - [CreateFileRequest](docs/Model/CreateFileRequest.md)
 - [CreateFolderRequest](docs/Model/CreateFolderRequest.md)
 - [CreateLandingPageContentRequest](docs/Model/CreateLandingPageContentRequest.md)
 - [CreateLandingPageRequest](docs/Model/CreateLandingPageRequest.md)
 - [CreateLpFormRequest](docs/Model/CreateLpFormRequest.md)
 - [CreateLpTemplateRequest](docs/Model/CreateLpTemplateRequest.md)
 - [CreateProgramRequest](docs/Model/CreateProgramRequest.md)
 - [CreateSnippetRequest](docs/Model/CreateSnippetRequest.md)
 - [CreateTokenRequest](docs/Model/CreateTokenRequest.md)
 - [DeleteTokenRequest](docs/Model/DeleteTokenRequest.md)
 - [EmailContentResponse](docs/Model/EmailContentResponse.md)
 - [EmailDynamicContentItem](docs/Model/EmailDynamicContentItem.md)
 - [EmailDynamicContentResponse](docs/Model/EmailDynamicContentResponse.md)
 - [EmailHeaderTypeValue](docs/Model/EmailHeaderTypeValue.md)
 - [EmailResponse](docs/Model/EmailResponse.md)
 - [EmailTemplateContentResponse](docs/Model/EmailTemplateContentResponse.md)
 - [EmailTemplateRequest](docs/Model/EmailTemplateRequest.md)
 - [EmailTemplateResponse](docs/Model/EmailTemplateResponse.md)
 - [Error](docs/Model/Error.md)
 - [FieldsMetaDataResponse](docs/Model/FieldsMetaDataResponse.md)
 - [FileFolder](docs/Model/FileFolder.md)
 - [FileResponse](docs/Model/FileResponse.md)
 - [Folder](docs/Model/Folder.md)
 - [FolderContentResponse](docs/Model/FolderContentResponse.md)
 - [FolderResponse](docs/Model/FolderResponse.md)
 - [FormFieldVisibilityRequest](docs/Model/FormFieldVisibilityRequest.md)
 - [FormFieldVisibilityRuleResponse](docs/Model/FormFieldVisibilityRuleResponse.md)
 - [FormKnownVisitorDTO](docs/Model/FormKnownVisitorDTO.md)
 - [FormThankYouPageDTO](docs/Model/FormThankYouPageDTO.md)
 - [FormVisibilityRuleDTO](docs/Model/FormVisibilityRuleDTO.md)
 - [FormVisibilityRuleResponse](docs/Model/FormVisibilityRuleResponse.md)
 - [GetFilesRequest](docs/Model/GetFilesRequest.md)
 - [GetTagByNameRequest](docs/Model/GetTagByNameRequest.md)
 - [IdResponse](docs/Model/IdResponse.md)
 - [JsonNode](docs/Model/JsonNode.md)
 - [LPDynamicContentResponse](docs/Model/LPDynamicContentResponse.md)
 - [LandingPageContentResponse](docs/Model/LandingPageContentResponse.md)
 - [LandingPageResponse](docs/Model/LandingPageResponse.md)
 - [LandingPageVariableResponse](docs/Model/LandingPageVariableResponse.md)
 - [LpFormFieldResponse](docs/Model/LpFormFieldResponse.md)
 - [LpFormResponse](docs/Model/LpFormResponse.md)
 - [LpTemplateGetContentResponse](docs/Model/LpTemplateGetContentResponse.md)
 - [LpTemplateResponse](docs/Model/LpTemplateResponse.md)
 - [ModelResponse](docs/Model/ModelResponse.md)
 - [MultipartFile](docs/Model/MultipartFile.md)
 - [PickListDTO](docs/Model/PickListDTO.md)
 - [ProgramResponse](docs/Model/ProgramResponse.md)
 - [ReArrangeRequest](docs/Model/ReArrangeRequest.md)
 - [ResponseOfBrowseAllPrograms](docs/Model/ResponseOfBrowseAllPrograms.md)
 - [ResponseOfChannelResponse](docs/Model/ResponseOfChannelResponse.md)
 - [ResponseOfEmailContentResponse](docs/Model/ResponseOfEmailContentResponse.md)
 - [ResponseOfEmailDynamicContentResponse](docs/Model/ResponseOfEmailDynamicContentResponse.md)
 - [ResponseOfEmailResponse](docs/Model/ResponseOfEmailResponse.md)
 - [ResponseOfEmailTemplateContentResponse](docs/Model/ResponseOfEmailTemplateContentResponse.md)
 - [ResponseOfEmailTemplateResponse](docs/Model/ResponseOfEmailTemplateResponse.md)
 - [ResponseOfFieldsMetaDataResponse](docs/Model/ResponseOfFieldsMetaDataResponse.md)
 - [ResponseOfFileResponse](docs/Model/ResponseOfFileResponse.md)
 - [ResponseOfFolderContentResponse](docs/Model/ResponseOfFolderContentResponse.md)
 - [ResponseOfFolderResponse](docs/Model/ResponseOfFolderResponse.md)
 - [ResponseOfFormVisibilityRuleResponse](docs/Model/ResponseOfFormVisibilityRuleResponse.md)
 - [ResponseOfIdResponse](docs/Model/ResponseOfIdResponse.md)
 - [ResponseOfLPDynamicContentResponse](docs/Model/ResponseOfLPDynamicContentResponse.md)
 - [ResponseOfLandingPageContentResponse](docs/Model/ResponseOfLandingPageContentResponse.md)
 - [ResponseOfLandingPageResponse](docs/Model/ResponseOfLandingPageResponse.md)
 - [ResponseOfLandingPageVariableResponse](docs/Model/ResponseOfLandingPageVariableResponse.md)
 - [ResponseOfLpFormFieldResponse](docs/Model/ResponseOfLpFormFieldResponse.md)
 - [ResponseOfLpFormResponse](docs/Model/ResponseOfLpFormResponse.md)
 - [ResponseOfLpTemplateGetContentResponse](docs/Model/ResponseOfLpTemplateGetContentResponse.md)
 - [ResponseOfLpTemplateResponse](docs/Model/ResponseOfLpTemplateResponse.md)
 - [ResponseOfProgramResponse](docs/Model/ResponseOfProgramResponse.md)
 - [ResponseOfSegmentationResponse](docs/Model/ResponseOfSegmentationResponse.md)
 - [ResponseOfSegmentsResponse](docs/Model/ResponseOfSegmentsResponse.md)
 - [ResponseOfSnippetContentResponse](docs/Model/ResponseOfSnippetContentResponse.md)
 - [ResponseOfSnippetResponse](docs/Model/ResponseOfSnippetResponse.md)
 - [ResponseOfTagResponse](docs/Model/ResponseOfTagResponse.md)
 - [ResponseOfTagResponseGetAll](docs/Model/ResponseOfTagResponseGetAll.md)
 - [ResponseOfThankYouPageResponse](docs/Model/ResponseOfThankYouPageResponse.md)
 - [ResponseOfTokenResponse](docs/Model/ResponseOfTokenResponse.md)
 - [ResponseOfobject](docs/Model/ResponseOfobject.md)
 - [SegmentContent](docs/Model/SegmentContent.md)
 - [SegmentationResponse](docs/Model/SegmentationResponse.md)
 - [SegmentsResponse](docs/Model/SegmentsResponse.md)
 - [SendSampleEmailRequest](docs/Model/SendSampleEmailRequest.md)
 - [SnippetContentResponse](docs/Model/SnippetContentResponse.md)
 - [SnippetResponse](docs/Model/SnippetResponse.md)
 - [SubmitButtonRequest](docs/Model/SubmitButtonRequest.md)
 - [TagRequest](docs/Model/TagRequest.md)
 - [TagResponse](docs/Model/TagResponse.md)
 - [TagResponseGetAll](docs/Model/TagResponseGetAll.md)
 - [Tags](docs/Model/Tags.md)
 - [ThankYouPageRequest](docs/Model/ThankYouPageRequest.md)
 - [ThankYouPageResponse](docs/Model/ThankYouPageResponse.md)
 - [TokenDTO](docs/Model/TokenDTO.md)
 - [TokenResponse](docs/Model/TokenResponse.md)
 - [UpdateEmailComponentContentRequest](docs/Model/UpdateEmailComponentContentRequest.md)
 - [UpdateEmailComponentDataRequest](docs/Model/UpdateEmailComponentDataRequest.md)
 - [UpdateEmailDynamicContentRequest](docs/Model/UpdateEmailDynamicContentRequest.md)
 - [UpdateEmailMetaDataRequest](docs/Model/UpdateEmailMetaDataRequest.md)
 - [UpdateEmailTemplateMetaDataRequest](docs/Model/UpdateEmailTemplateMetaDataRequest.md)
 - [UpdateFieldPosition](docs/Model/UpdateFieldPosition.md)
 - [UpdateFileContentRequest](docs/Model/UpdateFileContentRequest.md)
 - [UpdateFolderRequest](docs/Model/UpdateFolderRequest.md)
 - [UpdateFormFieldRequest](docs/Model/UpdateFormFieldRequest.md)
 - [UpdateFormMetaDataRequest](docs/Model/UpdateFormMetaDataRequest.md)
 - [UpdateLandingPageContentRequest](docs/Model/UpdateLandingPageContentRequest.md)
 - [UpdateLandingPageDynamicContentRequest](docs/Model/UpdateLandingPageDynamicContentRequest.md)
 - [UpdateLandingPageRequest](docs/Model/UpdateLandingPageRequest.md)
 - [UpdateLpTemplateRequest](docs/Model/UpdateLpTemplateRequest.md)
 - [UpdateProgramRequest](docs/Model/UpdateProgramRequest.md)
 - [UpdateSnippetContentRequest](docs/Model/UpdateSnippetContentRequest.md)
 - [UpdateSnippetDynamicContentRequest](docs/Model/UpdateSnippetDynamicContentRequest.md)
 - [UpdateSnippetRequest](docs/Model/UpdateSnippetRequest.md)
 - [UpdateThankYouPageRequest](docs/Model/UpdateThankYouPageRequest.md)
 - [VisibilityRuleRequest](docs/Model/VisibilityRuleRequest.md)


## Documentation For Authorization

 All endpoints do not require authorization.


## Author




