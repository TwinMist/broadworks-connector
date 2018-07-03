<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantModifyInstanceExecutionServerRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupVoiceMessagingGroupModifyVoicePortalBrandingExecutionServerRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserMeetMeConferencingModifyConferenceGreetingExecutionServerRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserVoiceMessagingUserModifyGreetingExecutionServerRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserVoiceMessagingUserModifyVoicePortalExecutionServerRequest;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;

trait XSOCI
{

    /**
     * @param GroupAutoAttendantModifyInstanceExecutionServerRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupAutoAttendantModifyInstanceExecutionServerRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantModifyInstanceExecutionServerRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupVoiceMessagingGroupModifyVoicePortalBrandingExecutionServerRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupVoiceMessagingGroupModifyVoicePortalBrandingExecutionServerRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupVoiceMessagingGroupModifyVoicePortalBrandingExecutionServerRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserMeetMeConferencingModifyConferenceGreetingExecutionServerRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userMeetMeConferencingModifyConferenceGreetingExecutionServerRequest(\CWM\BroadWorksConnector\Ocip\Models\UserMeetMeConferencingModifyConferenceGreetingExecutionServerRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserVoiceMessagingUserModifyGreetingExecutionServerRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userVoiceMessagingUserModifyGreetingExecutionServerRequest(\CWM\BroadWorksConnector\Ocip\Models\UserVoiceMessagingUserModifyGreetingExecutionServerRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserVoiceMessagingUserModifyVoicePortalExecutionServerRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userVoiceMessagingUserModifyVoicePortalExecutionServerRequest(\CWM\BroadWorksConnector\Ocip\Models\UserVoiceMessagingUserModifyVoicePortalExecutionServerRequest $request)
    {
        return $this->call($request);
    }


}

