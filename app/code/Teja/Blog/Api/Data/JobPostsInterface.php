<?php
namespace Teja\Blog\Api\Data;

interface JobPostsInterface
{
    /**#@+
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const JOB_ID                   = 'job_id';
    const JOB_NAME                 = 'job_name';
    const JOB_PLACE                = 'job_place';
    const CREATED_AT               = 'created_at';
    /**#@-*/


    public function getJobId();
    public function getJobName();
    public function getJobPlace();
    public function getCreatedAt();
    

    public function setJobId($job_id);
    public function setJobName($job_name);
    public function setJobPlace($job_place);
    public function setCreatedAt($created_at);
}