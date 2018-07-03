<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\UserBasicCallLogsGetListRequest14sp4;
use CWM\BroadWorksConnector\Ocip\Models\UserBasicCallLogsGetListResponse14sp4;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;

trait OCISchemaServiceBasicCallLogs
{

    /**
     * @param UserBasicCallLogsGetListRequest14sp4 $request
     * @return UserBasicCallLogsGetListResponse14sp4|ErrorResponse
     */
    public function userBasicCallLogsGetListRequest14sp4(\CWM\BroadWorksConnector\Ocip\Models\UserBasicCallLogsGetListRequest14sp4 $request)
    {
        return $this->call($request);
    }


}

