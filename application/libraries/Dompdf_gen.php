<?php
require_once APPPATH . 'third_party/dompdf/autoload.inc.php';

use Dompdf\Dompdf;

class Dompdf_gen extends Dompdf
{
	public function __construct()
	{
		parent::__construct();
	}
}
