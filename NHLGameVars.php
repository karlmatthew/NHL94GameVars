<?php

/*
 * NHL94GameVars.php
 *
 * Copyright 2013 Karl Haines <karl@hainesconsulting.com>
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions are
 * met:
 *
 * * Redistributions of source code must retain the above copyright
 *   notice, this list of conditions and the following disclaimer.
 * * Redistributions in binary form must reproduce the above
 *   copyright notice, this list of conditions and the following disclaimer
 *   in the documentation and/or other materials provided with the
 *   distribution.
 * * Neither the name of the Haines Consulting nor the names of its
 *   contributors may be used to endorse or promote products derived from
 *   this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 */

class NHL94GameVars {


  public $offsets = array();

	public function __construct() {
		$this->offsets['HomeTeam']              = 59304;
		$this->offsets['HomeGoals']             = 60242;
		$this->offsets['HomeShots']             = 60230;
		$this->offsets['HomeGoalsPeriod1']      = 61064;
		$this->offsets['HomeGoalsPeriod2']      = 61066;
		$this->offsets['HomeGoalsPeriod3']      = 61068;
		$this->offsets['HomeGoalsPeriod4']      = 61070;
		$this->offsets['HomeShotsPeriod1']      = 61072;
		$this->offsets['HomeShotsPeriod2']      = 61074;
		$this->offsets['HomeShotsPeriod3']      = 61076;
		$this->offsets['HomeShotsPeriod4']      = 61078;
		$this->offsets['HomePowerPlays']        = 60234;
		$this->offsets['HomePPGoals']           = 60232;
		$this->offsets['HomePPShots']           = 61082;
		$this->offsets['HomePPSeconds']         = 61080;
		$this->offsets['HomeSHGoals']           = 61084;
		$this->offsets['HomeBreakaways']        = 61086;
		$this->offsets['HomeBreakawayGoals']    = 61088;
		$this->offsets['HomeOneTimers']         = 61090;
		$this->offsets['HomeOneTimerGoals']     = 61092;
		$this->offsets['HomePenaltyShots']      = 61094;
		$this->offsets['HomePenaltyShotGoals']  = 61096;
		$this->offsets['HomeFaceoffsWon']       = 60244;
		$this->offsets['HomeBodyChecks']        = 60246;
		$this->offsets['HomePenalties']         = 60236;
		$this->offsets['HomePenaltyMinutes']    = 60238;
		$this->offsets['HomeAZSeconds']         = 60240;
		$this->offsets['HomePassesAttempted']   = 60248;
		$this->offsets['HomePassesCompleted']   = 60250;

		$this->offsets['AwayTeam']              = 59306;
		$this->offsets['AwayGoals']             = 61110;
		$this->offsets['AwayShots']             = 61098;
		$this->offsets['AwayGoalsPeriod1']      = 61932;
		$this->offsets['AwayGoalsPeriod2']      = 61934;
		$this->offsets['AwayGoalsPeriod3']      = 61936;
		$this->offsets['AwayGoalsPeriod4']      = 61938;
		$this->offsets['AwayShotsPeriod1']      = 61940;
		$this->offsets['AwayShotsPeriod2']      = 61942;
		$this->offsets['AwayShotsPeriod3']      = 61944;
		$this->offsets['AwayShotsPeriod4']      = 61946;
		$this->offsets['AwayPowerPlays']        = 61102;
		$this->offsets['AwayPPGoals']           = 61100;
		$this->offsets['AwayPPShots']           = 61950;
		$this->offsets['AwayPPSeconds']         = 61948;
		$this->offsets['AwaySHGoals']           = 61952;
		$this->offsets['AwayBreakaways']        = 61954;
		$this->offsets['AwayBreakawayGoals']    = 61956;
		$this->offsets['AwayOneTimers']         = 61958;
		$this->offsets['AwayOneTimerGoals']     = 61960;
		$this->offsets['AwayPenaltyShots']      = 61962;
		$this->offsets['AwayPenaltyShotGoals']  = 61964;
		$this->offsets['AwayFaceoffsWon']       = 61112;
		$this->offsets['AwayBodyChecks']        = 61114;
		$this->offsets['AwayPenalties']         = 61104;
		$this->offsets['AwayPenaltyMinutes']    = 61106;
		$this->offsets['AwayAZSeconds']         = 61108;
		$this->offsets['AwayPassesAttempted']   = 61116;
		$this->offsets['AwayPassesCompleted']   = 61118;

		$this->offsets['PeakCrowdLevel']        = 59276;

		$this->offsets['HomeGoalsStart']        = 60410;
		$this->offsets['HomeAssistsStart']      = 60436;
		$this->offsets['HomeShotsStart']        = 60462;
		$this->offsets['HomePIMorChkStart']     = 60488;	// this is form PIM in the original ROM and Chk in my wgt+Chk stat hack
		$this->offsets['HomeChkOrCkAStart']     = 60514;	// this is form PIM in the original ROM and Chk in my wgt+Chk stat hack
		$this->offsets['HomeTOIStart']          = 60540;	// Time On Ice (accurate to about 10 seconds)

		$this->offsets['AwayGoalsStart']        = 61278;
		$this->offsets['AwayAssistsStart']      = 61304;
		$this->offsets['AwayShotsStart']        = 61330;
		$this->offsets['AwayPIMorChkStart']     = 61356;	// this is form PIM in the original ROM and Chk in my wgt+Chk stat hack
		$this->offsets['AwayChkOrCkAStart']     = 61382;	// this is form PIM in the original ROM and Chk in my wgt+Chk stat hack
		$this->offsets['AwayTOIStart']          = 61408;	// Time On Ice (accurate to about 10 seconds)
	}

	// Read the variables into a monstster array form a string, not file (see below)
	//
	// i knew i wouldn't be reading these vars from files over and over, so I wrote
	// the class to be able read the vars from a string, as the files uploaded will be
	// written to the database, not kept as files, and I would need to be able to read 
	// them this way no matter what.
	//
	// Also, if any SNES player wants to use my code he just needs to edit the offsets
	// which are posted on the web, and should be easy to find.
	// *** Note that for an SNES some of the commented vars at the bottom may not exists
	//     in your ROM ***
	
	/**
	/*
	/* function get_variables_from_string($str)
	/*  * reads the 16big big endian variable from the offsets provided and returns them in
	/*  * a big, beautiful monster array
	/* returns arrosciative array
	/*
	/**								*/
	public function get_variables_from_str($str) {
		foreach($this->offsets as $k => $v) {
			$bin = mb_substr($str, $v, 2);
			$vars[$k] = implode(unpack("n",$bin));
		}
		return $vars;
	}
}

// Test functionality, 

$filename = './nhl94.gs0';
$fstr = file_get_contents($filename);

$o = new NHL94GameVars();
print_r($o->get_variables_from_str($fstr));

?>



