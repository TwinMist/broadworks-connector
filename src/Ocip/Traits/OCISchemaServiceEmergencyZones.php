<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\GroupEmergencyZonesAddHomeZoneListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupEmergencyZonesDeleteHomeZoneListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupEmergencyZonesGetHomeZoneListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupEmergencyZonesGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupEmergencyZonesGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupEmergencyZonesModifyHomeZoneListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupEmergencyZonesModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemEmergencyZonesGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemEmergencyZonesGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemEmergencyZonesModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;

trait OCISchemaServiceEmergencyZones
{

    /**
     * @param GroupEmergencyZonesAddHomeZoneListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupEmergencyZonesAddHomeZoneListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupEmergencyZonesAddHomeZoneListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupEmergencyZonesDeleteHomeZoneListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupEmergencyZonesDeleteHomeZoneListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupEmergencyZonesDeleteHomeZoneListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupEmergencyZonesGetHomeZoneListRequest $request
     * @return GroupEmergencyZonesGetResponse|ErrorResponse
     */
    public function groupEmergencyZonesGetHomeZoneListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupEmergencyZonesGetHomeZoneListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupEmergencyZonesGetRequest $request
     * @return GroupEmergencyZonesGetResponse|ErrorResponse
     */
    public function groupEmergencyZonesGetRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupEmergencyZonesGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupEmergencyZonesModifyHomeZoneListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupEmergencyZonesModifyHomeZoneListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupEmergencyZonesModifyHomeZoneListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupEmergencyZonesModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupEmergencyZonesModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupEmergencyZonesModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemEmergencyZonesGetRequest $request
     * @return SystemEmergencyZonesGetResponse
     */
    public function systemEmergencyZonesGetRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemEmergencyZonesGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemEmergencyZonesModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function systemEmergencyZonesModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemEmergencyZonesModifyRequest $request)
    {
        return $this->call($request);
    }


}

