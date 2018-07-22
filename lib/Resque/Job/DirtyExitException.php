<?php
/**
 * Runtime exception class for a job that does not exit cleanly.
 *
 * @package		Resque/Job
 * @author		Chris Boulton <chris@bigcommerce.com>
 * @license		http://www.opensource.org/licenses/mit-license.php
 */
namespace resque\lib\Resque\Job;
use resque\lib\Resque;

class Resque_Job_DirtyExitException extends \RuntimeException
{

}
