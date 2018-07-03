<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseCallCenterEnhancedReportingScheduledReportGetReportTemplateUsageListResponse
 *
 * Response to
 * EnterpriseCallCenterEnhancedReportingScheduledReportGetReportTemplateUsageListRequest.
 *
 *         Contains a table with column headings: "Schedule Name", "Created By",
 * "Created By Supervisor", and
 *         "Is Active".
 *         The "Created By" can be either "Administrator" or user id if created by
 * supervisor.
 *
 * @see
 * EnterpriseCallCenterEnhancedReportingScheduledReportGetReportTemplateUsageListRequest
 */
class EnterpriseCallCenterEnhancedReportingScheduledReportGetReportTemplateUsageListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName scheduleReportTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $scheduleReportTable = null;

    /**
     * Getter for scheduleReportTable
     *
     * @ElementName scheduleReportTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getScheduleReportTable()
    {
        return $this->scheduleReportTable;
    }

    /**
     * Setter for scheduleReportTable
     *
     * @ElementName scheduleReportTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $scheduleReportTable
     * @return $this
     */
    public function setScheduleReportTable($scheduleReportTable)
    {
        $this->scheduleReportTable = $scheduleReportTable;
        return $this;
    }


}

