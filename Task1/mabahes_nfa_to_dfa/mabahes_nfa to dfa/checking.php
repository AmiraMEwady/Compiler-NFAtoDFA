<?php
	require_once ("include/feature_error.php");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>nfa to dfa</title>
		<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
		<link href="css/example.css" media="screen" rel="stylesheet" type="text/css" />
		<script src="lib/jquery.js" type="text/javascript"></script>
		<script src="src/facebox.js" type="text/javascript"></script>

		<style type="text/css">
			.dfa{
				background-color:#76a014
			}
			
			.Q{
				background-color:#ed1313
			}
		</style>
	</head>

	<body>

		<div id="main">
			<div id="shadow">
				<div id="content">
					<div class="example">
						<h2>RB(REZA BOJNORDI)</h2>
						<div class="code">
							<h3>&nbsp;</h3>
							<center>

								<table border="2">
					<?php
								

									//---------------------------------------------------
									$q0q1a = (isset($_GET['aq0q1'])) ? trim($_GET['aq0q1']) : "Q";
									$q0q1b = (isset($_GET['bq0q1'])) ? trim($_GET['bq0q1']) : "Q";
									//------------------------------------------------------
									//-------------------------------------------------------
									$q0q2a = (isset($_GET['aq0q2'])) ? trim($_GET['aq0q2']) : "Q";
									$q0q2b = (isset($_GET['bq0q2'])) ? trim($_GET['bq0q2']) : "Q";
									//------------------------------------------------------
									//------------------------------------------------------
									$q2q1a = (isset($_GET['aq2q1'])) ? trim($_GET['aq2q1']) : "Q";
									$q2q1b = (isset($_GET['bq2q1'])) ? trim($_GET['bq2q1']) : "Q";
									
									//------------------------------------------------------
									
									//-------------------------------------------------------
									$aq2q2 = (isset($_GET['aq2q2'])) ? trim($_GET['aq2q2']) : "Q";
									$bq2q2 = (isset($_GET['bq2q2'])) ? trim($_GET['bq2q2']) : "Q";
									
									
									//-------------------------------------------------------
									$aq0q0 = (isset($_GET['aq0q0'])) ? trim($_GET['aq0q0']) : "Q";
									$bq0q0 = (isset($_GET['bq0q0'])) ? trim($_GET['bq0q0']) : "Q";
									
									
									//--------------------------------------------------------
									
									$aq1q1 = (isset($_GET['aq1q1'])) ? trim($_GET['aq1q1']) : "Q";
									$bq1q1 = (isset($_GET['bq1q1'])) ? trim($_GET['bq1q1']) : "Q";
									
									//--------------------------------------------------------
									
													
									//--------------------------------------------------------
									
									$aq1q0 = (isset($_GET['aq1q0'])) ? trim($_GET['aq1q0']) : "Q";
									$bq1q0 = (isset($_GET['bq1q0'])) ? trim($_GET['bq1q0']) : "Q";
									
									//--------------------------------------------------------
									
													
									//--------------------------------------------------------
									
									$aq1q2= (isset($_GET['aq1q2'])) ? trim($_GET['aq1q2']) : "Q";
									$bq1q2 = (isset($_GET['bq1q2'])) ? trim($_GET['bq1q2']) : "Q";
									
									//--------------------------------------------------------
									
							

						
					
					?>

							
								<tr>
									<td></td>
									<td>a</td>
							
									<td>b</td>
								
								</tr>
								
								
										<tr>
									<td>q0</td>
							<?php
									if($aq0q0=="a"){
									echo'
									<td class="dfa">q0</td>';
									}else{
										
									echo'
									<td class="Q">Q</td>';
										
									}
							?>
							<?php
					
								if($bq0q0=="b"){
									echo'
									<td class="dfa">q0</td>';
									}else{
										
									echo'
									<td class="Q">Q</td>';
										
									}
								?>
								<td>q0</td>
								</tr>
								
								
								
								
								
								
								
								
								
								<tr>
									<td>q0</td>
							<?php
									if($q0q1a=="a"){
									echo'
									<td class="dfa">q1</td>';
									}else{
										
									echo'
									<td class="Q">Q</td>';
										
									}
							?>
							<?php
					
								if($q0q1b=="b"){
									echo'
									<td class="dfa">q1</td>';
									}else{
										
									echo'
									<td class="Q">Q</td>';
										
									}
								?>
								<td>q1</td>
								</tr>
								
								
								<tr>
									<td>q0</td>
							<?php
									if($q0q2a=="a"){
									echo'
									<td class="dfa">q2</td>';
									}else{
										
									echo'
									<td class="Q">Q</td>';
										
									}
								
							?>
						
							<?php
					
								if($q0q2b=="b"){
									echo'
									<td class="dfa">q2</td>';
									}else{
										
									echo'
									<td class="Q">Q</td>';
										
									}
								?>
									<td>q2</td>
								</tr>
								
								<td>q1</td>
							<?php
									if($aq1q1=="a"){
									echo'
									<td class="dfa">q1</td>';
									}else{
										
									echo'
									<td class="Q">Q</td>';
										
									}
								
							?>
						
							<?php
					
								if($bq1q1=="b"){
									echo'
									<td class="dfa">q1</td>';
									}else{
										
									echo'
									<td class="Q">Q</td>';
										
									}
								?>
								
				
									<td>q1</td>
									
								</tr>
								
								
								
								
								<tr>
									<td>q2</td>
							<?php
									if($q2q1a=="a"){
									echo'
									<td class="dfa">q1</td>';
									}else{
										
									echo'
									<td class="Q">Q</td>';
										
									}
								
							?>
						
							<?php
					
								if($q2q1b=="b"){
									echo'
									<td class="dfa">q1</td>';
									}else{
										
									echo'
									<td class="Q">Q</td>';
										
									}
								?>
									<td>q1</td>
								</tr>
								
								
									<tr>
									<td>q2</td>
							<?php
							
									if($aq2q2=="a"){
									echo'
									<td class="dfa">q2</td>';
									}else{
										
									echo'
									<td class="Q">Q</td>';
										
									}
								
							?>
						
							<?php
					
								if($bq2q2=="b"){
									echo'
									<td class="dfa">q2</td>';
									}else{
										
									echo'
									<td class="Q">Q</td>';
										
									}
								?>
								
				
									<td>q2</td>
									
								</tr>
								
								<tr>
									<td>q1</td>
							<?php
							
									if($aq1q0=="a"){
									echo'
									<td class="dfa">q0</td>';
									}else{
										
									echo'
									<td class="Q">Q</td>';
										
									}
								
							?>
						
							<?php
					
								if($bq1q0=="b"){
									echo'
									<td class="dfa">q0</td>';
									}else{
										
									echo'
									<td class="Q">Q</td>';
										
									}
								?>
								
				
									<td>q0</td>
									
								</tr>
								
								
								
							<tr>
								
								
										<tr>
									<td>q1</td>
							<?php
							
									if($aq1q2=="a"){
									echo'
									<td class="dfa">q2</td>';
									}else{
										
									echo'
									<td class="Q">Q</td>';
										
									}
								
							?>
						
							<?php
					
								if($bq1q2=="b"){
									echo'
									<td class="dfa">q2</td>';
									}else{
										
									echo'
									<td class="Q">Q</td>';
										
									}
								?>
								
				
									<td>q2</td>
									
								</tr>
								
								
								
							<tr>
							
							
												
							<?php
							//$q1$q1
							
									if($aq1q1=="a"){
									
									$aq1q1="q1";
									
									}else{
										
									$aq1q1="";
									
										
									}
									//---------------------------------
									if($bq1q1=="b"){
									
									$bq1q1="q1";
									
									}else{
										
									$bq1q1="";
									
										
									}
									//--------------------------------------------
							
							?>
							
											<?php
							//$q1$q1
							
									if($aq1q0=="a"){
									
									$aq1q0="q0";
									
									}else{
										
									$aq1q0="";
									
										
									}
									//---------------------------------
									if($bq1q0=="b"){
									
									$bq1q0="q0";
									
									}else{
										
									$bq1q0="";
									
										
									}
									//--------------------------------------------
									
									if($aq1q2=="a"){
									
									$aq1q2="q2";
									
									}else{
										
									$aq1q2="";
									
										
									}
									//---------------------------------
									if($bq1q2=="b"){
									
									$bq1q2="q2";
									
									}else{
										
									$bq1q2="";
									
										
									}
									//--------------------------------------------
									
							
							?>
								
								</table>
								<br/><br/><br/>
								
								<table border="2">
									<tr>
										<td></td>
										<td>a</td>
										<td>b</td>
									</tr>
									<tr>
										
										<td>q0</td>
										<?php
										//------------------------
										if($q0q1a=="a" ){
										
										$q0q1a="q1";
										
											
										}
										else
										{
											
										$q0q1a="";
												
										}
										
										//---------------------------
										if($q0q2a=="a"){
											
											$q0q2a="q2";
											
										}
										else
										{
											$q0q2a="";
											
										}
										//------------------------
										if($aq0q0=="a"){
											
											$aq0q0="q0";
										}else{
											
											$aq0q0="";
										}
										
										//------------------
										
										if($aq2q2=="a"){
											$aq2q2="q2";
											
										}else{
											$aq2q2="";
										}
										
										//---------------------------
										if($aq1q1=="a"){
											$aq1q1="q1";
										}
										else{
											$aq1q1="";
										}
									//-------------------------------
									if($q2q1a=="a"){
									$q2q1a="q1";
										
										
									}else{
										$q2q1a="";
										
									}
							
									//q0 for b
									//------------------------
										if($q0q1b=="b" ){
										
										$q0q1b="q1";
										
											
										}
										else
										{
											
										$q0q1b="";
												
										}
										
									//----------------------------------
										if($q0q2b=="b"){
											
											$q0q2b="q2";
											
										}
										else
										{
											$q0q2b="";
											
										}
									//---------------------------
										if($bq0q0=="b"){
											
											
											$bq0q0="q0";
											
											
										}else{
											
											$bq0q0="";
										}
									//-------------------
										if($bq2q2=="b"){
											$bq2q2="q2";
											
										}else{
											$bq2q2="";
										}
									//------------------
										if($bq1q1=="b"){
											$bq1q1="q1";
										}
										else{
											$bq1q1="";
										}
									
									//----------------
									//------------------
										if($q2q1b=="b"){
											$q2q1b="q1";
										}
										
										else{
											
											$q2q1b="";
										}
									
									//----------------

									
									
									
									
									
										
								 	$q0= $q0q1a.','.$q0q2a.','.$aq0q0.''; 
				
								
									$q0b= $q0q1b.','.$q0q2b.','.$bq0q0.''; 
									echo "<td>$q0</td>";
									echo "<td>$q0b</td>";
								
									
								
						?>
						
						<?php
						
						///******************************************************item2
						?>
						
						
										
									</tr>
									<tr>
							<?php
										
								echo"
								<td>$q0</td>";

					//		$q0= $q0q1a.','.$q0q2a.','.$aq0q0.''; 
						//------------------------------item2a
							if($q0q1a==$aq1q1 && $aq1q1=="q1"){
								$item1q0q1a="q1";
							}else{
								
								$item1q0q1a="";
							}
							//
							if($q0q2a==$aq2q2 && $aq2q2=="q2"){
								
								$item1q0q2a="q2";
							}else{
								$item1q0q2a="";
							}
							
							///
							if($aq0q0=="q0"){
								
								$item1q0q0a="q0";
							}else{
								
								$item1q0q0a="";
							}
							////
							if($aq1q1=="q1"){
								
								$item1q1q1a="q1";
							}else
							{
								$item1q1q1a="";
								
							}
							/////
							if($q2q1a=="q1"){
								$item1q2q1a="q1";
							}else{
								$item1q2q1a="";
							}
							//////
							if($aq1q0=="q0"){
								$item1q1q0a="q0";
							
							}else{
								
								$item1q1q0a="";
							}
							
							////////
							
							if($aq1q2=="q2"){
								$item1q1q2a="q2";
							
							}else{
								
								$item1q1q2a="";
							}
							
							
							
						//-------------------------------------
						
	$_item2a=$item1q0q1a.','.$item1q0q2a.','.$item1q0q0a.','.$item1q1q1a.','.$item1q2q1a.','.$item1q1q0a.','.$item1q1q2a.'';

		//$q0= $q0q1a.','.$q0q2a.','.$aq0q0.''; 
							
					
								//a
								echo"
								<td>$_item2a</td>";
								
								
													
								
									
///////////////////////////////////////////////////////////////////////////////////item2b programer RB
		//$q0= $q0q1a.','.$q0q2a.','.$aq0q0.''; 

							
							
							
							
							
							
						//-------------------------------------
						
					//$_item2b=$item1q0q1b.','.$item1q0q2b.','.$item1q0q0b.','.$item1q1q1b.','.$item1q2q1b.'';

							if(!empty($q0q1a)){
								if($q0q1b=="q1" && $bq1q1=="q1"){
									$item2q0q1b="q1";
								}else{
										$item2q0q1b="";
									
								}
							}
							//
							if(!empty($q0q2a)){
								if($q0q2b=="q2" && $bq2q2=="q2"){
									
									$item2q0q2b="q2";
									
								}else{
									$item2q0q2b="";
								}
							}
							///
							if(!empty($aq0q0)){
								if($bq0q0=="q0"){
									
								$item2q0q0b="q0";
									
							}else{
								
									$item2q0q0b="";
							}
							
							}
							////
							//if(!empty($item1q1q1a)){
								if($bq1q1=="q1"){
									
									$item2q1q1b="q1";
									
								}else{
									
									$item2q1q1b="";
									
								}
						//	}
							
							/////
							//if(!empty($q2q1a)){
								if($q2q1b=="q1" ){
									
									$item2q2q1b="q1";
									
								}else{
									$item2q2q1b="";
									
								}
							//}
							//////
							if(!empty($aq2q2)){
								if($bq2q2=="q2"){
									$item2q2q2="q2";
							}else{
									$item2q2q2="";
								}
							}
							//////
							if(!empty($aq1q0)){
								if($bq1q0=="q0"){
									$item2q1q0="q0";
								}else{
									$item2q1q0="";
									
								}
							}
							///////////
							if(!empty($aq1q2)){
								if($bq1q2=="q2"){
									$item2q1q2="q2";
								}else{
									$item2q1q2="";
									
								}
							}
							
							
	$_item2b=$item2q0q1b.''.$item2q0q2b.','.$item2q0q0b.','.$item2q1q1b.','.$item2q2q1b.','.$item2q2q2.','.$item2q1q0.','.$item2q1q2.'';
							//b	
							echo"
							<td>$_item2b</td>";
						
									?>
										
									</tr>
										<tr>
										<?php
										
										echo"
										<td>$q0b</td>";
										
//----------------------------------------------------------------------------------------------------------------------------item3a---^--^|																	
					//$q0b= $q0q1b.','.$q0q2b.','.$bq0q0.''; 
										
							if(!empty($q0q1b)){
								if($q0q1a=="q1" && $aq1q1=="q1"){
									$item3q0q1a="q1";
								}else{
									$item3q0q1a="";
								}
							}
							//
							if(!empty($q0q2b)){
								if($q0q2a=="q2"){
									
									$item3q0q2a="q2";
									
								}else{
									$item3q0q2a="";
								}
							}
							///
							if(!empty($bq0q0)){
								if($aq0q0=="q0"){
									
									$item3q0q0a="q0";
									
								}else{
									$item3q0q0a="";
									
								}
							}
					////
					if(!empty($bq1q1)){
						if($aq1q1=="q1"){
							$item3q1q1a="q1";
							
							
						}else{
							$item3q1q1a="";
						}
					}
					/////
					if(!empty($bq2q2)){
						if($aq2q2=="q2"){
							
							$item3q2q2a="q2";
						}else{
							$item3q2q2a="";
							
						}
						
					}
					
					//////
					if(!empty($q2q1b)){
						if($q2q1a=="q1"){
							$item3q2q1a="q1";
						}else{
							$item3q2q1a="";
							
						}
								
					}
					
					///////
					if(!empty($bq1q0)){
						if($bq1q0=="q0"){
							$item3q1q0a="q0";
						}else{
							$item3q1q0a="";
							
						}
								
					}
					///////
					if(!empty($bq1q2)){
						if($bq1q2=="q2"){
							$item3q1q2a="q2";
						}else{
							$item3q1q2a="";
							
						}
								
					}
					
					
					
					
	
									
	$_item3a=$item3q0q1a.','.$item3q0q2a.''.$item3q0q0a.','.$item3q1q1a.','.$item3q2q2a.','.$item3q2q1a.','.$item3q1q0a.','.$item3q1q2a.'';

							
									
									echo"
									
									
								<td>$_item3a</td>";
///------------------------------------------------------------------------------------------------item3b
		
	//	$q0b= $q0q1b.','.$q0q2b.','.$bq0q0.''; 
					if($q0q1b=="q1"){
						$item3q0q1b="q1";
					}else{
						$item3q0q1="";
						
					}
					//
					if($q0q2b=="q2"){
						
						$item3q0q2b="q2";
						
					}else{
						$item3q0q2b="";
					}
					///
					if($bq0q0=="q0"){
						
						$item3q0q0b="q0";
					}else{
						$item3q0q0b="";
						
					}
					///
					if($bq2q2=="q2"){
						
					$item3q2q2b="q2";
						
						
					}else{
						
						$item3q2q2b="";
						
					}
					////
					if($bq1q1=="q1"){
						$item3q1q1b="q1";
						
					}else{
						
						$item3q1q1b="";
					}
					/////
					if($q2q1b=="q1"){
						$item3q2q1b="q1";
					}else{
						$item3q2q1b="";
						
					}
					
					//////
					if($bq1q0=="q0"){
						$item3q1q0b="q0";
					}else{
						$item3q1q0b="";
						
					}
					
					////////
					if($bq1q2=="q2"){
						$item3q1q2b="q2";
					}else{
						$item3q1q2b="";
						
					}
					
					
	$_item3b=$item3q0q1b.','.$item3q0q2b.','.$item3q0q0b.','.$item3q1q1b.','.$item3q2q2b.','.$item3q2q1b.','.$item3q1q0b.','.$item3q1q2b.'';
								echo"
								<td>$_item3b</td>";
										
									?>
										
									</tr>
									
									
								</table>
								

							</center>
						</div>
					</div>
				</div>
			</div>
			<div id="footer"></div>
		</div>

	</body>
</html>

