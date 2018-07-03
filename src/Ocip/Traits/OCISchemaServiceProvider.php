<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAccessDeviceAddRequest14;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAccessDeviceCustomTagAddRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAccessDeviceCustomTagDeleteListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAccessDeviceCustomTagGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAccessDeviceCustomTagGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAccessDeviceCustomTagModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAccessDeviceDeleteRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAccessDeviceFileGetListRequest14sp8;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAccessDeviceFileGetListResponse14sp8;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAccessDeviceFileGetRequest20;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAccessDeviceFileGetResponse20;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAccessDeviceFileModifyRequest14sp8;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAccessDeviceGetEnhancedConfigurationTypeListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAccessDeviceGetEnhancedConfigurationTypeListResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAccessDeviceGetEnhancedConfigurationTypeRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAccessDeviceGetEnhancedConfigurationTypeResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAccessDeviceGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAccessDeviceGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAccessDeviceGetRequest18sp1;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAccessDeviceGetResponse18sp1;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAccessDeviceGetUserListRequest21sp1;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAccessDeviceGetResponse21sp1;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAccessDeviceModifyRequest14;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAccessDeviceModifyUserRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAccessDeviceResetRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAccessDeviceTagSetGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAccessDeviceTagSetGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAccessDeviceTagSetModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAddRequest13mp2;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminAddRequest14;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminDeleteRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminGetListRequest14;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminGetListResponse14;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminGetPolicyRequest20;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminGetPolicyResponse20;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminGetRequest21sp1;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminGetResponse21sp1;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdministratorPasswordRulesGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdministratorPasswordRulesGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminModifyPolicyRequest14;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAnswerConfirmationGetRequest16;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAnswerConfirmationGetResponse16;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAnswerConfirmationModifyRequest16;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderApplicationServerSetGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderApplicationServerSetGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderApplicationServerSetModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCallProcessingGetPolicyRequest22;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCallProcessingModifyPolicyRequest15;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringCriteriaAssignListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringCriteriaGetAssignedListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringCriteriaGetAssignedListResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringCriteriaUnassignListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringDigitPatternCriteriaAddRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringDigitPatternCriteriaDeleteRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringDigitPatternCriteriaGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringDigitPatternCriteriaGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringDigitPatternCriteriaGetPatternListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringDigitPatternCriteriaGetPatternListResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringDigitPatternCriteriaGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringDigitPatternCriteriaGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringDigitPatternCriteriaModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringIncomingCriteriaAssignListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringIncomingCriteriaGetAssignedListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringIncomingCriteriaGetAssignedListResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringIncomingCriteriaUnassignListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringProfileAddRequest19sp1;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringProfileDeleteRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringProfileGetAssignedGroupListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringProfileGetAssignedGroupListResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringProfileGetCriteriaUsageListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ProfileGetCriteriaUsageListResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringProfileGetDigitPatternCriteriaUsageListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringProfileGetDigitPatternCriteriaUsageListResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringProfileGetIncomingCriteriaUsageListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ProfileGetIncomingCriteriaUsageListResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringProfileGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringProfileGetRequest19sp1V2;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringProfileGetResponse19sp1;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringProfileModifyDefaultRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringProfileModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCPEConfigRebuildConfigFileRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCPEConfigRebuildDeviceConfigFileRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCPEConfigReorderDeviceLinePortsRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCPEConfigResetDeviceRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCPEConfigResetDeviceTypeRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCPEConfigSetConfigFileRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDeleteRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDeviceManagementEventGetListRequest22;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDeviceManagementEventGetListResponse22;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDeviceManagementGetAccessDeviceCountForDeviceTypeServiceProviderRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDeviceManagementGetAccessDeviceCountForDeviceTypeServiceProviderResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDeviceManagementInProgressAndPendingEventCancelRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDeviceProfileAuthenticationPasswordRulesGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDeviceProfileAuthenticationPasswordRulesGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDeviceProfileAuthenticationPasswordRulesModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDeviceTypeCustomTagAddRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDeviceTypeCustomTagDeleteListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDeviceTypeCustomTagGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDeviceTypeCustomTagGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDeviceTypeCustomTagModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDeviceTypeFileGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDeviceTypeFileGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDeviceTypeFileGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDeviceTypeFileGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDeviceTypeFileModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDeviceTypeTagSetGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDeviceTypeTagSetGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDeviceTypeTagSetModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDialableCallerIDCriteriaAddRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDialableCallerIDCriteriaDeleteRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDialableCallerIDCriteriaGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDialableCallerIDCriteriaModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDialableCallerIDGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDialableCallerIDModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDialPlanPolicyAddAccessCodeRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDialPlanPolicyDeleteAccessCodeRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDialPlanPolicyGetAccessCodeListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDialPlanPolicyGetAccessCodeListResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDialPlanPolicyGetAccessCodeRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDialPlanPolicyGetAccessCodeResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDialPlanPolicyGetRequest17;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDialPlanPolicyGetResponse17;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDialPlanPolicyModifyAccessCodeRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDialPlanPolicyModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDigitCollectionGetRequest13mp4;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDigitCollectionGetResponse13mp4;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDigitCollectionModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDnAddListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDnDeleteListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDnGetAvailableListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDnGetAvailableListResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDnGetSummaryListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDnGetSummaryListResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDomainAssignListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDomainGetAssignedGroupListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDomainGetAssignedGroupListResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDomainGetAssignedListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDomainGetAssignedListResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDomainUnassignListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderEndpointGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderEndpointGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderFeatureAccessCodeGetListRequest21;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderFeatureAccessCodeGetListResponse21;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderFeatureAccessCodeModifyListRequest21;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderFileRepositoryDeviceUserAddRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderFileRepositoryDeviceUserDeleteRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderFileRepositoryDeviceUserGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderFileRepositoryDeviceUserGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderFileRepositoryDeviceUserModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderGetDefaultRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderGetDefaultResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderGetRequest22V2;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderGetResponse22;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderHPBXAlternateCarrierSelectionGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderHPBXAlternateCarrierSelectionGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderHPBXAlternateCarrierSelectionModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderIMRNAssignListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderIMRNGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderIMRNGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderIMRNUnassignListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderLanguageAddRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderLanguageDeleteRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderLanguageGetAvailableListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderLanguageGetAvailableListResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderLanguageGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderLanguageGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderLanguageModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderNetworkClassOfServiceAssignListRequest21;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderNetworkClassOfServiceAssignListToAllGroupsRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderNetworkClassOfServiceAssignToAllUsersRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderNetworkClassOfServiceGetAssignedGroupListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderNetworkClassOfServiceGetAssignedGroupListResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderNetworkClassOfServiceGetAssignedListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderNetworkClassOfServiceGetAssignedListResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderNetworkClassOfServiceModifyDefaultRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderNetworkClassOfServiceUnassignListRequest21;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderNumberPortabilityQueryAddListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderNumberPortabilityQueryGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderNumberPortabilityQueryGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderNumberPortabilityQueryModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderOfficeZoneAssignListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderOfficeZoneGetAssignedGroupListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderOfficeZoneGetAssignedGroupListResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderOfficeZoneGetAssignedListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderOfficeZoneGetAssignedListResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderOfficeZoneUnassignListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderPasswordRulesGetRequest22;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderPasswordRulesGetResponse22;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderPasswordRulesModifyRequest14sp3;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderPortalPasscodeRulesGetRequest19;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderPortalPasscodeRulesGetResponse19;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderPortalPasscodeRulesModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderRoutePointExternalSystemAssignListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderRoutePointExternalSystemGetAssignedGroupListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderRoutePointExternalSystemGetAssignedGroupListResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderRoutePointExternalSystemGetAssignedListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderRoutePointExternalSystemGetAssignedListResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderRoutePointExternalSystemUnassignListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderRoutingProfileGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderRoutingProfileGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderRoutingProfileModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderScheduleAddEventRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderScheduleAddRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderScheduleDeleteEventListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderScheduleDeleteListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderScheduleGetEventDetailListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderScheduleGetEventDetailListResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderScheduleGetEventListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderScheduleGetEventListResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderScheduleGetEventRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderScheduleGetEventResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderScheduleGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderScheduleGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderScheduleModifyEventRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderScheduleModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServiceGetAuthorizationListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServiceGetAuthorizationListResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServiceGetAuthorizationRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServiceGetAuthorizationResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServiceGetUserAssignableListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServiceGetUserAssignableListResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServiceModifyAuthorizationListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServicePackAddRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServicePackAddServiceListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServicePackDeleteRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServicePackGetDetailListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServicePackGetDetailListResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServicePackGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServicePackGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServicePackGetServiceUsageListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServicePackGetServiceUsageListResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServicePackGetUtilizationListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServicePackGetUtilizationListResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServicePackMigrationTaskAddRequest21;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServicePackMigrationTaskCopyRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServicePackMigrationTaskDeleteRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServicePackMigrationTaskGetAvailableGroupListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServicePackMigrationTaskGetAvailabeGroupListResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServicePackMigrationTaskGetListRequest21;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServicePackMigrationTaskGetListResponse21;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServicePackMigrationTaskGetRequest21;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServicePackMigrationTaskGetResponse21;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServicePackMigrationTaskModifyAssignmentListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServicePackMigrationTaskModifyGroupListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServicePackMigrationTaskModifyRemovalListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServicePackMigrationTaskModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServicePackMigrationTaskModifyUserSelectionRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServicePackMigrationTaskTerminateRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServicePackModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServicePhoneNumberLookupRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServicePhoneNumberLookupResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderSessionAdmissionControlGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderSessionAdmissionControlGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderSessionAdmissionControlModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderSessionAdmissionControlWhiteListGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderSessionAdmissionControlWhiteListGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderSessionAdmissionControlWhiteListModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderSIPAuthenticationPasswordRulesGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderSIPAuthenticationPasswordRulesGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderSIPAuthenticationPasswordRulesModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;

trait OCISchemaServiceProvider
{

    /**
     * @param ServiceProviderAccessDeviceAddRequest14 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderAccessDeviceAddRequest14(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAccessDeviceAddRequest14 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderAccessDeviceCustomTagAddRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderAccessDeviceCustomTagAddRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAccessDeviceCustomTagAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderAccessDeviceCustomTagDeleteListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderAccessDeviceCustomTagDeleteListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAccessDeviceCustomTagDeleteListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderAccessDeviceCustomTagGetListRequest $request
     * @return ServiceProviderAccessDeviceCustomTagGetListResponse|ErrorResponse
     */
    public function serviceProviderAccessDeviceCustomTagGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAccessDeviceCustomTagGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderAccessDeviceCustomTagModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderAccessDeviceCustomTagModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAccessDeviceCustomTagModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderAccessDeviceDeleteRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderAccessDeviceDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAccessDeviceDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderAccessDeviceFileGetListRequest14sp8 $request
     * @return ServiceProviderAccessDeviceFileGetListResponse14sp8|ErrorResponse
     */
    public function serviceProviderAccessDeviceFileGetListRequest14sp8(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAccessDeviceFileGetListRequest14sp8 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderAccessDeviceFileGetRequest20 $request
     * @return ServiceProviderAccessDeviceFileGetResponse20|ErrorResponse
     */
    public function serviceProviderAccessDeviceFileGetRequest20(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAccessDeviceFileGetRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderAccessDeviceFileModifyRequest14sp8 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderAccessDeviceFileModifyRequest14sp8(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAccessDeviceFileModifyRequest14sp8 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderAccessDeviceGetEnhancedConfigurationTypeListRequest $request
     * @return ServiceProviderAccessDeviceGetEnhancedConfigurationTypeListResponse
     */
    public function serviceProviderAccessDeviceGetEnhancedConfigurationTypeListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAccessDeviceGetEnhancedConfigurationTypeListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderAccessDeviceGetEnhancedConfigurationTypeRequest $request
     * @return ServiceProviderAccessDeviceGetEnhancedConfigurationTypeResponse
     */
    public function serviceProviderAccessDeviceGetEnhancedConfigurationTypeRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAccessDeviceGetEnhancedConfigurationTypeRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderAccessDeviceGetListRequest $request
     * @return ServiceProviderAccessDeviceGetListResponse|ErrorResponse
     */
    public function serviceProviderAccessDeviceGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAccessDeviceGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderAccessDeviceGetRequest18sp1 $request
     * @return ServiceProviderAccessDeviceGetResponse18sp1|ErrorResponse
     */
    public function serviceProviderAccessDeviceGetRequest18sp1(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAccessDeviceGetRequest18sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderAccessDeviceGetUserListRequest21sp1 $request
     * @return ServiceProviderAccessDeviceGetResponse21sp1|ErrorResponse
     */
    public function serviceProviderAccessDeviceGetUserListRequest21sp1(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAccessDeviceGetUserListRequest21sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderAccessDeviceModifyRequest14 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderAccessDeviceModifyRequest14(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAccessDeviceModifyRequest14 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderAccessDeviceModifyUserRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderAccessDeviceModifyUserRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAccessDeviceModifyUserRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderAccessDeviceResetRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderAccessDeviceResetRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAccessDeviceResetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderAccessDeviceTagSetGetRequest $request
     * @return ServiceProviderAccessDeviceTagSetGetResponse|ErrorResponse
     */
    public function serviceProviderAccessDeviceTagSetGetRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAccessDeviceTagSetGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderAccessDeviceTagSetModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderAccessDeviceTagSetModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAccessDeviceTagSetModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderAddRequest13mp2 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderAddRequest13mp2(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAddRequest13mp2 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderAdminAddRequest14 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderAdminAddRequest14(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminAddRequest14 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderAdminDeleteRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderAdminDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderAdminGetListRequest14 $request
     * @return ServiceProviderAdminGetListResponse14|ErrorResponse
     */
    public function serviceProviderAdminGetListRequest14(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminGetListRequest14 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderAdminGetPolicyRequest20 $request
     * @return ServiceProviderAdminGetPolicyResponse20|ErrorResponse
     */
    public function serviceProviderAdminGetPolicyRequest20(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminGetPolicyRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderAdminGetRequest21sp1 $request
     * @return ServiceProviderAdminGetResponse21sp1|ErrorResponse
     */
    public function serviceProviderAdminGetRequest21sp1(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminGetRequest21sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderAdministratorPasswordRulesGetRequest $request
     * @return ServiceProviderAdministratorPasswordRulesGetResponse
     */
    public function serviceProviderAdministratorPasswordRulesGetRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdministratorPasswordRulesGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderAdminModifyPolicyRequest14 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderAdminModifyPolicyRequest14(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminModifyPolicyRequest14 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderAdminModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderAdminModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderAnswerConfirmationGetRequest16 $request
     * @return ServiceProviderAnswerConfirmationGetResponse16|ErrorResponse
     */
    public function serviceProviderAnswerConfirmationGetRequest16(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAnswerConfirmationGetRequest16 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderAnswerConfirmationModifyRequest16 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderAnswerConfirmationModifyRequest16(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAnswerConfirmationModifyRequest16 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderApplicationServerSetGetRequest $request
     * @return ServiceProviderApplicationServerSetGetResponse|ErrorResponse
     */
    public function serviceProviderApplicationServerSetGetRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderApplicationServerSetGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderApplicationServerSetModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderApplicationServerSetModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderApplicationServerSetModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderCallProcessingGetPolicyRequest22 $request
     * @return
     */
    public function serviceProviderCallProcessingGetPolicyRequest22(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCallProcessingGetPolicyRequest22 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderCallProcessingModifyPolicyRequest15 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderCallProcessingModifyPolicyRequest15(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCallProcessingModifyPolicyRequest15 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderCommunicationBarringCriteriaAssignListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderCommunicationBarringCriteriaAssignListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringCriteriaAssignListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderCommunicationBarringCriteriaGetAssignedListRequest $request
     * @return ServiceProviderCommunicationBarringCriteriaGetAssignedListResponse
     */
    public function serviceProviderCommunicationBarringCriteriaGetAssignedListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringCriteriaGetAssignedListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderCommunicationBarringCriteriaUnassignListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderCommunicationBarringCriteriaUnassignListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringCriteriaUnassignListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderCommunicationBarringDigitPatternCriteriaAddRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderCommunicationBarringDigitPatternCriteriaAddRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringDigitPatternCriteriaAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderCommunicationBarringDigitPatternCriteriaDeleteRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderCommunicationBarringDigitPatternCriteriaDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringDigitPatternCriteriaDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderCommunicationBarringDigitPatternCriteriaGetListRequest $request
     * @return ServiceProviderCommunicationBarringDigitPatternCriteriaGetListResponse|ErrorResponse
     */
    public function serviceProviderCommunicationBarringDigitPatternCriteriaGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringDigitPatternCriteriaGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderCommunicationBarringDigitPatternCriteriaGetPatternListRequest $request
     * @return ServiceProviderCommunicationBarringDigitPatternCriteriaGetPatternListResponse|ErrorResponse
     */
    public function serviceProviderCommunicationBarringDigitPatternCriteriaGetPatternListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringDigitPatternCriteriaGetPatternListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderCommunicationBarringDigitPatternCriteriaGetRequest $request
     * @return ServiceProviderCommunicationBarringDigitPatternCriteriaGetResponse|ErrorResponse
     */
    public function serviceProviderCommunicationBarringDigitPatternCriteriaGetRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringDigitPatternCriteriaGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderCommunicationBarringDigitPatternCriteriaModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderCommunicationBarringDigitPatternCriteriaModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringDigitPatternCriteriaModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderCommunicationBarringIncomingCriteriaAssignListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderCommunicationBarringIncomingCriteriaAssignListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringIncomingCriteriaAssignListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderCommunicationBarringIncomingCriteriaGetAssignedListRequest $request
     * @return ServiceProviderCommunicationBarringIncomingCriteriaGetAssignedListResponse
     */
    public function serviceProviderCommunicationBarringIncomingCriteriaGetAssignedListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringIncomingCriteriaGetAssignedListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderCommunicationBarringIncomingCriteriaUnassignListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderCommunicationBarringIncomingCriteriaUnassignListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringIncomingCriteriaUnassignListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderCommunicationBarringProfileAddRequest19sp1 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderCommunicationBarringProfileAddRequest19sp1(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringProfileAddRequest19sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderCommunicationBarringProfileDeleteRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderCommunicationBarringProfileDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringProfileDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderCommunicationBarringProfileGetAssignedGroupListRequest $request
     * @return ServiceProviderCommunicationBarringProfileGetAssignedGroupListResponse
     */
    public function serviceProviderCommunicationBarringProfileGetAssignedGroupListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringProfileGetAssignedGroupListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderCommunicationBarringProfileGetCriteriaUsageListRequest $request
     * @return ProfileGetCriteriaUsageListResponse
     */
    public function serviceProviderCommunicationBarringProfileGetCriteriaUsageListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringProfileGetCriteriaUsageListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderCommunicationBarringProfileGetDigitPatternCriteriaUsageListRequest $request
     * @return ServiceProviderCommunicationBarringProfileGetDigitPatternCriteriaUsageListResponse
     */
    public function serviceProviderCommunicationBarringProfileGetDigitPatternCriteriaUsageListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringProfileGetDigitPatternCriteriaUsageListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderCommunicationBarringProfileGetIncomingCriteriaUsageListRequest $request
     * @return ProfileGetIncomingCriteriaUsageListResponse
     */
    public function serviceProviderCommunicationBarringProfileGetIncomingCriteriaUsageListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringProfileGetIncomingCriteriaUsageListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderCommunicationBarringProfileGetListRequest $request
     * @return
     */
    public function serviceProviderCommunicationBarringProfileGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringProfileGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderCommunicationBarringProfileGetRequest19sp1V2 $request
     * @return ServiceProviderCommunicationBarringProfileGetResponse19sp1
     */
    public function serviceProviderCommunicationBarringProfileGetRequest19sp1V2(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringProfileGetRequest19sp1V2 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderCommunicationBarringProfileModifyDefaultRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderCommunicationBarringProfileModifyDefaultRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringProfileModifyDefaultRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderCommunicationBarringProfileModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderCommunicationBarringProfileModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringProfileModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderCPEConfigRebuildConfigFileRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderCPEConfigRebuildConfigFileRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCPEConfigRebuildConfigFileRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderCPEConfigRebuildDeviceConfigFileRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderCPEConfigRebuildDeviceConfigFileRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCPEConfigRebuildDeviceConfigFileRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderCPEConfigReorderDeviceLinePortsRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderCPEConfigReorderDeviceLinePortsRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCPEConfigReorderDeviceLinePortsRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderCPEConfigResetDeviceRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderCPEConfigResetDeviceRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCPEConfigResetDeviceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderCPEConfigResetDeviceTypeRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderCPEConfigResetDeviceTypeRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCPEConfigResetDeviceTypeRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderCPEConfigSetConfigFileRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderCPEConfigSetConfigFileRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCPEConfigSetConfigFileRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderDeleteRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderDeviceManagementEventGetListRequest22 $request
     * @return ServiceProviderDeviceManagementEventGetListResponse22|ErrorResponse
     */
    public function serviceProviderDeviceManagementEventGetListRequest22(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDeviceManagementEventGetListRequest22 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderDeviceManagementGetAccessDeviceCountForDeviceTypeServiceProviderRequest $request
     * @return ServiceProviderDeviceManagementGetAccessDeviceCountForDeviceTypeServiceProviderResponse|ErrorResponse
     */
    public function serviceProviderDeviceManagementGetAccessDeviceCountForDeviceTypeServiceProviderRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDeviceManagementGetAccessDeviceCountForDeviceTypeServiceProviderRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderDeviceManagementInProgressAndPendingEventCancelRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderDeviceManagementInProgressAndPendingEventCancelRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDeviceManagementInProgressAndPendingEventCancelRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderDeviceProfileAuthenticationPasswordRulesGetRequest $request
     * @return ServiceProviderDeviceProfileAuthenticationPasswordRulesGetResponse|ErrorResponse
     */
    public function serviceProviderDeviceProfileAuthenticationPasswordRulesGetRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDeviceProfileAuthenticationPasswordRulesGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderDeviceProfileAuthenticationPasswordRulesModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderDeviceProfileAuthenticationPasswordRulesModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDeviceProfileAuthenticationPasswordRulesModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderDeviceTypeCustomTagAddRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderDeviceTypeCustomTagAddRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDeviceTypeCustomTagAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderDeviceTypeCustomTagDeleteListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderDeviceTypeCustomTagDeleteListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDeviceTypeCustomTagDeleteListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderDeviceTypeCustomTagGetListRequest $request
     * @return ServiceProviderDeviceTypeCustomTagGetListResponse|ErrorResponse
     */
    public function serviceProviderDeviceTypeCustomTagGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDeviceTypeCustomTagGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderDeviceTypeCustomTagModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderDeviceTypeCustomTagModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDeviceTypeCustomTagModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderDeviceTypeFileGetListRequest $request
     * @return ServiceProviderDeviceTypeFileGetListResponse|ErrorResponse
     */
    public function serviceProviderDeviceTypeFileGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDeviceTypeFileGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderDeviceTypeFileGetRequest $request
     * @return ServiceProviderDeviceTypeFileGetResponse|ErrorResponse
     */
    public function serviceProviderDeviceTypeFileGetRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDeviceTypeFileGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderDeviceTypeFileModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderDeviceTypeFileModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDeviceTypeFileModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderDeviceTypeTagSetGetRequest $request
     * @return ServiceProviderDeviceTypeTagSetGetResponse|ErrorResponse
     */
    public function serviceProviderDeviceTypeTagSetGetRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDeviceTypeTagSetGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderDeviceTypeTagSetModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderDeviceTypeTagSetModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDeviceTypeTagSetModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderDialableCallerIDCriteriaAddRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderDialableCallerIDCriteriaAddRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDialableCallerIDCriteriaAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderDialableCallerIDCriteriaDeleteRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderDialableCallerIDCriteriaDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDialableCallerIDCriteriaDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderDialableCallerIDCriteriaGetRequest $request
     * @return
     */
    public function serviceProviderDialableCallerIDCriteriaGetRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDialableCallerIDCriteriaGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderDialableCallerIDCriteriaModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderDialableCallerIDCriteriaModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDialableCallerIDCriteriaModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderDialableCallerIDGetRequest $request
     * @return
     */
    public function serviceProviderDialableCallerIDGetRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDialableCallerIDGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderDialableCallerIDModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderDialableCallerIDModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDialableCallerIDModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderDialPlanPolicyAddAccessCodeRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderDialPlanPolicyAddAccessCodeRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDialPlanPolicyAddAccessCodeRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderDialPlanPolicyDeleteAccessCodeRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderDialPlanPolicyDeleteAccessCodeRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDialPlanPolicyDeleteAccessCodeRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderDialPlanPolicyGetAccessCodeListRequest $request
     * @return ServiceProviderDialPlanPolicyGetAccessCodeListResponse
     */
    public function serviceProviderDialPlanPolicyGetAccessCodeListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDialPlanPolicyGetAccessCodeListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderDialPlanPolicyGetAccessCodeRequest $request
     * @return ServiceProviderDialPlanPolicyGetAccessCodeResponse|ErrorResponse
     */
    public function serviceProviderDialPlanPolicyGetAccessCodeRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDialPlanPolicyGetAccessCodeRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderDialPlanPolicyGetRequest17 $request
     * @return ServiceProviderDialPlanPolicyGetResponse17
     */
    public function serviceProviderDialPlanPolicyGetRequest17(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDialPlanPolicyGetRequest17 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderDialPlanPolicyModifyAccessCodeRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderDialPlanPolicyModifyAccessCodeRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDialPlanPolicyModifyAccessCodeRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderDialPlanPolicyModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderDialPlanPolicyModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDialPlanPolicyModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderDigitCollectionGetRequest13mp4 $request
     * @return ServiceProviderDigitCollectionGetResponse13mp4|ErrorResponse
     */
    public function serviceProviderDigitCollectionGetRequest13mp4(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDigitCollectionGetRequest13mp4 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderDigitCollectionModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderDigitCollectionModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDigitCollectionModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderDnAddListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderDnAddListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDnAddListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderDnDeleteListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderDnDeleteListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDnDeleteListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderDnGetAvailableListRequest $request
     * @return ServiceProviderDnGetAvailableListResponse|ErrorResponse
     */
    public function serviceProviderDnGetAvailableListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDnGetAvailableListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderDnGetSummaryListRequest $request
     * @return ServiceProviderDnGetSummaryListResponse|ErrorResponse
     */
    public function serviceProviderDnGetSummaryListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDnGetSummaryListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderDomainAssignListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderDomainAssignListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDomainAssignListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderDomainGetAssignedGroupListRequest $request
     * @return ServiceProviderDomainGetAssignedGroupListResponse|ErrorResponse
     */
    public function serviceProviderDomainGetAssignedGroupListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDomainGetAssignedGroupListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderDomainGetAssignedListRequest $request
     * @return ServiceProviderDomainGetAssignedListResponse|ErrorResponse
     */
    public function serviceProviderDomainGetAssignedListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDomainGetAssignedListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderDomainUnassignListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderDomainUnassignListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDomainUnassignListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderEndpointGetListRequest $request
     * @return ServiceProviderEndpointGetListResponse|ErrorResponse
     */
    public function serviceProviderEndpointGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderEndpointGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderFeatureAccessCodeGetListRequest21 $request
     * @return ServiceProviderFeatureAccessCodeGetListResponse21
     */
    public function serviceProviderFeatureAccessCodeGetListRequest21(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderFeatureAccessCodeGetListRequest21 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderFeatureAccessCodeModifyListRequest21 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderFeatureAccessCodeModifyListRequest21(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderFeatureAccessCodeModifyListRequest21 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderFileRepositoryDeviceUserAddRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderFileRepositoryDeviceUserAddRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderFileRepositoryDeviceUserAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderFileRepositoryDeviceUserDeleteRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderFileRepositoryDeviceUserDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderFileRepositoryDeviceUserDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderFileRepositoryDeviceUserGetListRequest $request
     * @return ServiceProviderFileRepositoryDeviceUserGetListResponse|ErrorResponse
     */
    public function serviceProviderFileRepositoryDeviceUserGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderFileRepositoryDeviceUserGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderFileRepositoryDeviceUserModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderFileRepositoryDeviceUserModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderFileRepositoryDeviceUserModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderGetDefaultRequest $request
     * @return ServiceProviderGetDefaultResponse|ErrorResponse
     */
    public function serviceProviderGetDefaultRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderGetDefaultRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderGetListRequest $request
     * @return ServiceProviderGetListResponse|ErrorResponse
     */
    public function serviceProviderGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderGetRequest22V2 $request
     * @return ServiceProviderGetResponse22|ErrorResponse
     */
    public function serviceProviderGetRequest22V2(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderGetRequest22V2 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderHPBXAlternateCarrierSelectionGetRequest $request
     * @return ServiceProviderHPBXAlternateCarrierSelectionGetResponse|ErrorResponse
     */
    public function serviceProviderHPBXAlternateCarrierSelectionGetRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderHPBXAlternateCarrierSelectionGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderHPBXAlternateCarrierSelectionModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderHPBXAlternateCarrierSelectionModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderHPBXAlternateCarrierSelectionModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderIMRNAssignListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderIMRNAssignListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderIMRNAssignListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderIMRNGetListRequest $request
     * @return ServiceProviderIMRNGetListResponse|ErrorResponse
     */
    public function serviceProviderIMRNGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderIMRNGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderIMRNUnassignListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderIMRNUnassignListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderIMRNUnassignListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderLanguageAddRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderLanguageAddRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderLanguageAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderLanguageDeleteRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderLanguageDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderLanguageDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderLanguageGetAvailableListRequest $request
     * @return ServiceProviderLanguageGetAvailableListResponse|ErrorResponse
     */
    public function serviceProviderLanguageGetAvailableListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderLanguageGetAvailableListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderLanguageGetListRequest $request
     * @return ServiceProviderLanguageGetListResponse|ErrorResponse
     */
    public function serviceProviderLanguageGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderLanguageGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderLanguageModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderLanguageModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderLanguageModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderNetworkClassOfServiceAssignListRequest21 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderNetworkClassOfServiceAssignListRequest21(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderNetworkClassOfServiceAssignListRequest21 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderNetworkClassOfServiceAssignListToAllGroupsRequest $request
     * @return
     */
    public function serviceProviderNetworkClassOfServiceAssignListToAllGroupsRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderNetworkClassOfServiceAssignListToAllGroupsRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderNetworkClassOfServiceAssignToAllUsersRequest $request
     * @return SuccessResponse
     */
    public function serviceProviderNetworkClassOfServiceAssignToAllUsersRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderNetworkClassOfServiceAssignToAllUsersRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderNetworkClassOfServiceGetAssignedGroupListRequest $request
     * @return ServiceProviderNetworkClassOfServiceGetAssignedGroupListResponse
     */
    public function serviceProviderNetworkClassOfServiceGetAssignedGroupListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderNetworkClassOfServiceGetAssignedGroupListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderNetworkClassOfServiceGetAssignedListRequest $request
     * @return ServiceProviderNetworkClassOfServiceGetAssignedListResponse
     */
    public function serviceProviderNetworkClassOfServiceGetAssignedListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderNetworkClassOfServiceGetAssignedListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderNetworkClassOfServiceModifyDefaultRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderNetworkClassOfServiceModifyDefaultRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderNetworkClassOfServiceModifyDefaultRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderNetworkClassOfServiceUnassignListRequest21 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderNetworkClassOfServiceUnassignListRequest21(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderNetworkClassOfServiceUnassignListRequest21 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderNumberPortabilityQueryAddListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderNumberPortabilityQueryAddListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderNumberPortabilityQueryAddListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderNumberPortabilityQueryGetRequest $request
     * @return ServiceProviderNumberPortabilityQueryGetResponse|ErrorResponse
     */
    public function serviceProviderNumberPortabilityQueryGetRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderNumberPortabilityQueryGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderNumberPortabilityQueryModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderNumberPortabilityQueryModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderNumberPortabilityQueryModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderOfficeZoneAssignListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderOfficeZoneAssignListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderOfficeZoneAssignListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderOfficeZoneGetAssignedGroupListRequest $request
     * @return ServiceProviderOfficeZoneGetAssignedGroupListResponse
     */
    public function serviceProviderOfficeZoneGetAssignedGroupListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderOfficeZoneGetAssignedGroupListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderOfficeZoneGetAssignedListRequest $request
     * @return ServiceProviderOfficeZoneGetAssignedListResponse
     */
    public function serviceProviderOfficeZoneGetAssignedListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderOfficeZoneGetAssignedListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderOfficeZoneUnassignListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderOfficeZoneUnassignListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderOfficeZoneUnassignListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderPasswordRulesGetRequest22 $request
     * @return ServiceProviderPasswordRulesGetResponse22|ErrorResponse
     */
    public function serviceProviderPasswordRulesGetRequest22(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderPasswordRulesGetRequest22 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderPasswordRulesModifyRequest14sp3 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderPasswordRulesModifyRequest14sp3(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderPasswordRulesModifyRequest14sp3 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderPortalPasscodeRulesGetRequest19 $request
     * @return ServiceProviderPortalPasscodeRulesGetResponse19|ErrorResponse
     */
    public function serviceProviderPortalPasscodeRulesGetRequest19(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderPortalPasscodeRulesGetRequest19 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderPortalPasscodeRulesModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderPortalPasscodeRulesModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderPortalPasscodeRulesModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderRoutePointExternalSystemAssignListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderRoutePointExternalSystemAssignListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderRoutePointExternalSystemAssignListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderRoutePointExternalSystemGetAssignedGroupListRequest $request
     * @return ServiceProviderRoutePointExternalSystemGetAssignedGroupListResponse|ErrorResponse
     */
    public function serviceProviderRoutePointExternalSystemGetAssignedGroupListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderRoutePointExternalSystemGetAssignedGroupListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderRoutePointExternalSystemGetAssignedListRequest $request
     * @return ServiceProviderRoutePointExternalSystemGetAssignedListResponse|ErrorResponse
     */
    public function serviceProviderRoutePointExternalSystemGetAssignedListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderRoutePointExternalSystemGetAssignedListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderRoutePointExternalSystemUnassignListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderRoutePointExternalSystemUnassignListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderRoutePointExternalSystemUnassignListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderRoutingProfileGetRequest $request
     * @return ServiceProviderRoutingProfileGetResponse|ErrorResponse
     */
    public function serviceProviderRoutingProfileGetRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderRoutingProfileGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderRoutingProfileModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderRoutingProfileModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderRoutingProfileModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderScheduleAddEventRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderScheduleAddEventRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderScheduleAddEventRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderScheduleAddRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderScheduleAddRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderScheduleAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderScheduleDeleteEventListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderScheduleDeleteEventListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderScheduleDeleteEventListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderScheduleDeleteListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderScheduleDeleteListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderScheduleDeleteListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderScheduleGetEventDetailListRequest $request
     * @return ServiceProviderScheduleGetEventDetailListResponse|ErrorResponse
     */
    public function serviceProviderScheduleGetEventDetailListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderScheduleGetEventDetailListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderScheduleGetEventListRequest $request
     * @return ServiceProviderScheduleGetEventListResponse|ErrorResponse
     */
    public function serviceProviderScheduleGetEventListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderScheduleGetEventListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderScheduleGetEventRequest $request
     * @return ServiceProviderScheduleGetEventResponse|ErrorResponse
     */
    public function serviceProviderScheduleGetEventRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderScheduleGetEventRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderScheduleGetListRequest $request
     * @return ServiceProviderScheduleGetListResponse|ErrorResponse
     */
    public function serviceProviderScheduleGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderScheduleGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderScheduleModifyEventRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderScheduleModifyEventRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderScheduleModifyEventRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderScheduleModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderScheduleModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderScheduleModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderServiceGetAuthorizationListRequest $request
     * @return ServiceProviderServiceGetAuthorizationListResponse|ErrorResponse
     */
    public function serviceProviderServiceGetAuthorizationListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServiceGetAuthorizationListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderServiceGetAuthorizationRequest $request
     * @return ServiceProviderServiceGetAuthorizationResponse|ErrorResponse
     */
    public function serviceProviderServiceGetAuthorizationRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServiceGetAuthorizationRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderServiceGetUserAssignableListRequest $request
     * @return ServiceProviderServiceGetUserAssignableListResponse|ErrorResponse
     */
    public function serviceProviderServiceGetUserAssignableListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServiceGetUserAssignableListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderServiceModifyAuthorizationListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderServiceModifyAuthorizationListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServiceModifyAuthorizationListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderServicePackAddRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderServicePackAddRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServicePackAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderServicePackAddServiceListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderServicePackAddServiceListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServicePackAddServiceListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderServicePackDeleteRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderServicePackDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServicePackDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderServicePackGetDetailListRequest $request
     * @return ServiceProviderServicePackGetDetailListResponse|ErrorResponse
     */
    public function serviceProviderServicePackGetDetailListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServicePackGetDetailListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderServicePackGetListRequest $request
     * @return ServiceProviderServicePackGetListResponse|ErrorResponse
     */
    public function serviceProviderServicePackGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServicePackGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderServicePackGetServiceUsageListRequest $request
     * @return ServiceProviderServicePackGetServiceUsageListResponse|ErrorResponse
     */
    public function serviceProviderServicePackGetServiceUsageListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServicePackGetServiceUsageListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderServicePackGetUtilizationListRequest $request
     * @return ServiceProviderServicePackGetUtilizationListResponse|ErrorResponse
     */
    public function serviceProviderServicePackGetUtilizationListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServicePackGetUtilizationListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderServicePackMigrationTaskAddRequest21 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderServicePackMigrationTaskAddRequest21(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServicePackMigrationTaskAddRequest21 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderServicePackMigrationTaskCopyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderServicePackMigrationTaskCopyRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServicePackMigrationTaskCopyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderServicePackMigrationTaskDeleteRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderServicePackMigrationTaskDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServicePackMigrationTaskDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderServicePackMigrationTaskGetAvailableGroupListRequest $request
     * @return ServiceProviderServicePackMigrationTaskGetAvailabeGroupListResponse
     */
    public function serviceProviderServicePackMigrationTaskGetAvailableGroupListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServicePackMigrationTaskGetAvailableGroupListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderServicePackMigrationTaskGetListRequest21 $request
     * @return ServiceProviderServicePackMigrationTaskGetListResponse21
     */
    public function serviceProviderServicePackMigrationTaskGetListRequest21(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServicePackMigrationTaskGetListRequest21 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderServicePackMigrationTaskGetRequest21 $request
     * @return ServiceProviderServicePackMigrationTaskGetResponse21
     */
    public function serviceProviderServicePackMigrationTaskGetRequest21(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServicePackMigrationTaskGetRequest21 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderServicePackMigrationTaskModifyAssignmentListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderServicePackMigrationTaskModifyAssignmentListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServicePackMigrationTaskModifyAssignmentListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderServicePackMigrationTaskModifyGroupListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderServicePackMigrationTaskModifyGroupListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServicePackMigrationTaskModifyGroupListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderServicePackMigrationTaskModifyRemovalListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderServicePackMigrationTaskModifyRemovalListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServicePackMigrationTaskModifyRemovalListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderServicePackMigrationTaskModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderServicePackMigrationTaskModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServicePackMigrationTaskModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderServicePackMigrationTaskModifyUserSelectionRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderServicePackMigrationTaskModifyUserSelectionRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServicePackMigrationTaskModifyUserSelectionRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderServicePackMigrationTaskTerminateRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderServicePackMigrationTaskTerminateRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServicePackMigrationTaskTerminateRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderServicePackModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderServicePackModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServicePackModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderServicePhoneNumberLookupRequest $request
     * @return ServiceProviderServicePhoneNumberLookupResponse
     */
    public function serviceProviderServicePhoneNumberLookupRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServicePhoneNumberLookupRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderSessionAdmissionControlGetRequest $request
     * @return ServiceProviderSessionAdmissionControlGetResponse|ErrorResponse
     */
    public function serviceProviderSessionAdmissionControlGetRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderSessionAdmissionControlGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderSessionAdmissionControlModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderSessionAdmissionControlModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderSessionAdmissionControlModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderSessionAdmissionControlWhiteListGetRequest $request
     * @return ServiceProviderSessionAdmissionControlWhiteListGetResponse|ErrorResponse
     */
    public function serviceProviderSessionAdmissionControlWhiteListGetRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderSessionAdmissionControlWhiteListGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderSessionAdmissionControlWhiteListModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderSessionAdmissionControlWhiteListModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderSessionAdmissionControlWhiteListModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderSIPAuthenticationPasswordRulesGetRequest $request
     * @return ServiceProviderSIPAuthenticationPasswordRulesGetResponse|ErrorResponse
     */
    public function serviceProviderSIPAuthenticationPasswordRulesGetRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderSIPAuthenticationPasswordRulesGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderSIPAuthenticationPasswordRulesModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderSIPAuthenticationPasswordRulesModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderSIPAuthenticationPasswordRulesModifyRequest $request)
    {
        return $this->call($request);
    }


}

