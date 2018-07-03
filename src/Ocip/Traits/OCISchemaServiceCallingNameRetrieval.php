<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\SystemCallingNameRetrievalGetRequest20;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallingNameRetrievalGetResponse20;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallingNameRetrievalModifyRequest20;
use CWM\BroadWorksConnector\Ocip\Models\UserCallingNameRetrievalGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCallingNameRetrievalGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserCallingNameRetrievalModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;

trait OCISchemaServiceCallingNameRetrieval
{

    /**
     * @param SystemCallingNameRetrievalGetRequest20 $request
     * @return SystemCallingNameRetrievalGetResponse20|ErrorResponse
     */
    public function systemCallingNameRetrievalGetRequest20(\CWM\BroadWorksConnector\Ocip\Models\SystemCallingNameRetrievalGetRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemCallingNameRetrievalModifyRequest20 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function systemCallingNameRetrievalModifyRequest20(\CWM\BroadWorksConnector\Ocip\Models\SystemCallingNameRetrievalModifyRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallingNameRetrievalGetRequest $request
     * @return UserCallingNameRetrievalGetResponse
     */
    public function userCallingNameRetrievalGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallingNameRetrievalGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallingNameRetrievalModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userCallingNameRetrievalModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallingNameRetrievalModifyRequest $request)
    {
        return $this->call($request);
    }


}
