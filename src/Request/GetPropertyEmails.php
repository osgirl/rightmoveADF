<?php
/**
*	This file contains the Get Property Emails Request model class.
*
*	@package		RightmoveADF
*	@version		@@RELEASE_VERSION@@
*	@author			Jacob Wyke <jacob@frozensheep.com>
*	@copyright		@@COPYRIGHT@@
*	@file			@@FILE@@
*	@file_Version	$Rev: 1937 $
*	@Last_Change	$LastChangedDate: 2014-11-27 10:18:05 +0000 (Thu, 27 Nov 2014) $
*
*/

namespace Frozensheep\RightmoveADF\Request;

use Frozensheep\RightmoveADF\Request\RequestInterface;
use Frozensheep\Synthesize\Synthesizer;
use Frozensheep\RightmoveADF\Groups\Network;
use Frozensheep\RightmoveADF\Groups\Branch;
use Frozensheep\RightmoveADF\Groups\PropertyFeature;
use Frozensheep\RightmoveADF\Groups\ExportPeriod;

/**
*	Get Property Emails Class
*
*	Class for the get property emails request.
*
*	@package		Frozensheep\RightmoveADF\Request
*
*/
class GetPropertyEmails implements RequestInterface, \JsonSerializable  {

	use Synthesizer;

	protected $arrSynthesize = array(
		'network' => array('type' => 'object', 'class' => 'Frozensheep\RightmoveADF\Groups\Network', 'required' => true),
		'branch' => array('type' => 'object', 'class' => 'Frozensheep\RightmoveADF\Groups\Branch', 'required' => true),
		'property' => array('type' => 'object', 'class' => 'Frozensheep\RightmoveADF\Groups\PropertyFeature', 'required' => true),
		'export_period' => array('type' => 'object', 'class' => 'Frozensheep\RightmoveADF\Groups\ExportPeriod', 'required' => true)
	);
}