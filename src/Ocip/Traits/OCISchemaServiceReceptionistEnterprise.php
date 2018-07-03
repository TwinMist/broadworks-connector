<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksReceptionistEnterpriseGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksReceptionistEnterpriseGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksReceptionistEnterpriseModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksReceptionistEnterpriseAddUserListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksReceptionistEnterpriseDeleteUserListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksReceptionistEnterpriseGetAvailableUserListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksReceptionistEnterpriseGetAvailableUserListResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksReceptionistEnterpriseGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksReceptionistEnterpriseGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksReceptionistEnterpriseModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksReceptionistEnterpriseNoteGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksReceptionistEnterpriseNoteGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksReceptionistEnterpriseNoteModifyListRequest;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;

trait OCISchemaServiceReceptionistEnterprise
{

    /**
     * @param SystemBroadWorksReceptionistEnterpriseGetRequest $request
     * @return SystemBroadWorksReceptionistEnterpriseGetResponse|ErrorResponse
     */
    public function systemBroadWorksReceptionistEnterpriseGetRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksReceptionistEnterpriseGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemBroadWorksReceptionistEnterpriseModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function systemBroadWorksReceptionistEnterpriseModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksReceptionistEnterpriseModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserBroadWorksReceptionistEnterpriseAddUserListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userBroadWorksReceptionistEnterpriseAddUserListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksReceptionistEnterpriseAddUserListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserBroadWorksReceptionistEnterpriseDeleteUserListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userBroadWorksReceptionistEnterpriseDeleteUserListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksReceptionistEnterpriseDeleteUserListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserBroadWorksReceptionistEnterpriseGetAvailableUserListRequest $request
     * @return UserBroadWorksReceptionistEnterpriseGetAvailableUserListResponse|ErrorResponse
     */
    public function userBroadWorksReceptionistEnterpriseGetAvailableUserListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksReceptionistEnterpriseGetAvailableUserListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserBroadWorksReceptionistEnterpriseGetRequest $request
     * @return UserBroadWorksReceptionistEnterpriseGetResponse|ErrorResponse
     */
    public function userBroadWorksReceptionistEnterpriseGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksReceptionistEnterpriseGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserBroadWorksReceptionistEnterpriseModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userBroadWorksReceptionistEnterpriseModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksReceptionistEnterpriseModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserBroadWorksReceptionistEnterpriseNoteGetRequest $request
     * @return UserBroadWorksReceptionistEnterpriseNoteGetResponse
     */
    public function userBroadWorksReceptionistEnterpriseNoteGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksReceptionistEnterpriseNoteGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserBroadWorksReceptionistEnterpriseNoteModifyListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userBroadWorksReceptionistEnterpriseNoteModifyListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksReceptionistEnterpriseNoteModifyListRequest $request)
    {
        return $this->call($request);
    }


}

