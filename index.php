<?php
require_once 'head.php';
require_once './config/config.php';

	session_start();

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone  = $_POST['phone'];
	$class = $_POST['classes'];
	$arrival = $_POST['arrival'];
	$desti = $_POST['desti'];
	$family  = $_POST['family'];
	$child = $_POST['child'];
	$adult = $_POST['adult'];
	$from_date = $_POST['from'];
	$to_date = $_POST['to'];

	$sql = "INSERT INTO `tickets`(`Name`, `Email`, `Phone_Number`,`class`, `Arriva`, `Destination`, `family`, `children`, `Adults`, `from_date`, `to_date`) VALUES ('$name','$email','$phone','$class','$arrival','$desti','$family','$child','$adult','$from_date','$to_date')";

	$res = mysqli_query($conn, $sql);
	if ($res) {
		echo "inserted";
		echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
		echo "<script>
Swal.fire({
title: 'Success',
text: 'Someone from our side will contact you...',
icon: 'success',
showConfirmButton: false,
timerProgressBar: true,
timer: 4000,
onBeforeOpen: () => {
Swal.showLoading();
}
}).then(function() {
window.location.href = 'index.php';
});
</script>";
	} else {
		echo "not inserted";
	}
}
?>

<style>
	label {
		padding-left: 50px;
	}

	/* #nextBtn {
		text-align: right;

	} */
	
        .message-popup {
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-family: Arial, sans-serif;
            text-align: center;
        }
  
</style>

<body>


	<!-- main-menu Start -->
	<?php  include "./nav.php" ?>


	<!--about-us start -->
	<div class="row">
	
		<div class="col-md-6" style="z-index: 100;position: absolute;left: 7%;top: 2%;">
						<div class="single-about-us" style="background-color: #ffffff73;border-radius:20px;">
							<div class="form-wrap">
								<div class="tab">

									<div class="tab-content">
										<div class="tab-content-inner active" data-content="signup">
											<h3 style="text-align:center;padding-top:20px;font-weight:700">Book Your Trip</h3>
											<form action="" method="post" autocomplete="on" id="ticketForm">
												<div class="row form-group" style="display: flex;padding-top:15px">
													<div class="col-md-12" style="display: flex;flex-direction: column;align-items: flex-start; padding-left:40px">
														<label for="name" style=" padding:0">Your Full Name</label>
														<input type="text" id="name" name="name" style="width: 70%;" placeholder="Your full name">
													</div>


													<div class="col-md-12" style="display: flex;flex-direction: column;align-items: flex-start; padding-left:40px">
														<label for="Email" style=" padding:0">Your Email</label>
														<input type="email" id="email" name="email" style="width: 70%;" placeholder="Your Email">
													</div>
												</div>
												<div class="row form-group" style="padding-left:57px;display:flex;">
													<div class="row form-group">
														<label for="phone" style="padding: 0;">Phone Number</label>
														<input type="number" id="phone" name="phone" class="form-control" name="phone" style="width: 100%;">
													</div>
													<div class="row form-group" style="  display: flex;flex-direction: column;padding-left:175px">
													<label for="myOption" style="padding: 0;">Class</label>
																<input type="select" placeholder="class" id="abc" name="classes" list="air" style="
																display: inline-block;
																width: 80%;
																padding: 8px;
																margin-bottom: 10px;
																border: 1px solid #ccc;
																border-radius: 4px;
																vertical-align: middle;
																font-size: 12px;">
																</select>
																<datalist id ="air">
																	<option value="">Select Class</option>
																	<option value="Business"> Business-Class</option>
																	<option value="Economy">Economy-Class</option>
																	<option value="First">First-Class</option>

																</datalist>
														<br />
													</div>
												</div>


												<div style="display: flex;flex-direction: row;justify-content: space-between;flex-wrap: nowrap;">
													<div style=" display: flex; flex-direction: column; margin-top:-30px">
														<div class="row form-group">
															<div class="col-md-4" style="margin-right: 190px;display:flex;flex-direction: column;align-content: flex-start; align-items: flex-start;padding-left:40px">
																<label for="myOption" style="padding: 0;">Flying From</label>
																<input type="select" placeholder="From" id="from" name="arrival" list="list" style="
																display: inline-block;
																width: 240%;
																padding: 8px;
																margin-bottom: 10px;
																border: 1px solid #ccc;
																border-radius: 4px;
																vertical-align: middle;
																font-size: 12px;">
																<datalist id="list">

																	<option value="">Select your option</option>
																	<option value="Adelaide - ADL">Adelaide - ADL</option>
																	<option value="Agana - GUM">Agana - GUM</option>
																	<option value="Brisbane - BNE"> Brisbane - BNE</option>
																	<option value="Christchurch - CHC"> Christchurch - CHC</option>
																	<option value="Dunedin - DUD"> Dunedin - DUD</option>
																	<option value=" Georgetown - GEO">Georgetown - GEO</option>
																	<option value="Gold-Coast - OOL">Gold-Coast - OOL</option>
																	<option value="Hamilton (BDA)">Hamilton (BDA)</option>
																	<option value="Kathmandu - KTM">Kathmandu - KTM</option>
																	<option value="La Paz - LPB">La Paz - LPB</option>
																	<option value="Mexico City - AZP">Mexico City - AZP</option>
																	<option value="Nelson - NSN">Nelson - NSN</option>
																	<option value="Panama-City - PTY">Panama-City - PTY</option>
																	<option value="Papeete - PPT">Papeete - PPT</option>
																	<option value="Queenstown - ZQN">Queenstown - ZQN</option>
																	<option value="Rio de Janeiro - GIG"> Rio de Janeiro - GIG</option>
																	<option value="Sao Paulo - GRU">Sao Paulo - GRU</option>
																	<option value="St Georges - GND">St Georges - GND</option>
																	<option value="Toronto - YYZ">Toronto - YYZ</option>
																	<option value="Vancouver - YVR">Vancouver - YVR</option>
																	<option value="Abidjan - ABJ">Abidjan - ABJ</option>
																	<option value="Abuja - ABV">Abuja - ABV</option>
																	<option value="ACCRA - ACC">ACCRA - ACC</option>
																	<option value="Addis Ababa - ADD">Addis Ababa - ADD</option>
																	<option value="Agadir - AGA">Agadir - AGA</option>
																	<option value="Algiers - ALG">Algiers - ALG</option>
																	<option value="Antananarivo - TNR">Antananarivo - TNR</option>
																	<option value="Antigua - ANU">Antigua - ANU</option>
																	<option value="Asmara - ASM">Asmara - ASM</option>
																	<option value="Asuncion - ASU">Asuncion - ASU</option>
																	<option value="Auckland - AKL">Auckland - AKL</option>
																	<option value="Bahrain - BAH">Bahrain - BAH</option>
																	<option value="Bamako - BKO">Bamako - BKO</option>
																	<option value="Bandar Seri Begawan">Bandar Seri Begawan</option>
																	<option value="BANGKOK-BKK"> BANGKOK-BKK</option>
																	<option value="Banjul - BJL">Banjul - BJL</option>
																	<option value="Beijing - BJS">Beijing - BJS</option>
																	<option value="Beira - BEW">Beira - BEW</option>
																	<option value="Benghazi - BEN">Benghazi - BEN</option>
																	<option value="Bloemfontein - BFN">Bloemfontein - BFN</option>
																	<option value="Bogota - BOG">Bogota - BOG</option>
																	<option value="Boston - BOS">Boston - BOS</option>
																	<option value="Brasilia - BSB">Brasilia - BSB</option>
																	<option value="Bridgetown - BGI">Bridgetown - BGI</option>
																	<option value="Buenos-Aires - BUE">Buenos-Aires - BUE</option>
																	<option value="Bujumbura - BJM">Bujumbura - BJM</option>
																	<option value="Cairns - CNS">Cairns - CNS</option>
																	<option value="Cali - CLO">Cali - CLO</option>
																	<option value="Canberra - CBR">Canberra - CBR</option>
																	<option value="Cape Town - CPT">Cape Town - CPT</option>
																	<option value="Casablanca - CMN">Casablanca - CMN</option>
																	<option value="Cebu - CEB">Cebu - CEB</option>
																	<option value="Chittagong - CGP">Chittagong - CGP</option>
																	<option value="Conakry - CKY">Conakry - CKY</option>
																	<option value="Cordoba - COR">Cordoba - COR</option>
																	<option value="Dakar - DKR">Dakar - DKR</option>
																	<option value="Darwin - DRW">Darwin - DRW</option>
																	<option value="Denpasar - DPS">Denpasar - DPS</option>
																	<option value="Dhaka - DAC">Dhaka - DAC</option>
																	<option value="Djibouti - JIB">Djibouti - JIB</option>
																	<option value="Douala - DLA">Douala - DLA</option>
																	<option value="Dubai - DXB">Dubai - DXB</option>
																	<option value="Durban - DUR">Durban - DUR</option>
																	<option value="East London - ELS">East London - ELS</option>
																	<option value="Essaouira - ESU">Essaouira - ESU</option>
																	<option value="Fez - FEZ">Fez - FEZ</option>
																	<option value="Freetown - FNA">Freetown - FNA</option>
																	<option value="Gaborone - GBE">Gaborone - GBE</option>
																	<option value="George-Town-KYÂ">George-Town-KYÂ</option>
																	<option value="Goa - GOI">Goa - GOI</option>
																	<option value="Guayaquil - GYE">Guayaquil - GYE</option>
																	<option value="Hargeisa - HGA">Hargeisa - HGA</option>
																	<option value="Ho Chi Minh City - S">Ho Chi Minh City - S</option>
																	<option value="Hong Kong - HKG">Hong Kong - HKG</option>
																	<option value="Jeddah - JED">Jeddah - JED</option>
																	<option value="Johannesburg - JNB">Johannesburg - JNB</option>
																	<option value="Kabul - KBL">Kabul - KBL</option>
																	<option value="Kano - KAN">Kano - KAN</option>
																	<option value="Karachi - KHI">Karachi - KHI</option>
																	<option value="Kigali - KGL">Kigali - KGL</option>
																	<option value="Kimberley - KIM">Kimberley - KIM</option>
																	<option value="Kingston - KIN">Kingston - KIN</option>
																	<option value="Kisumu - KIS">Kisumu - KIS</option>
																	<option value="Kuala Lumpur - KUL">Kuala Lumpur - KUL</option>
																	<option value="LAGOS - LOS">LAGOS - LOS</option>
																	<option value="Lahore - LHE">Lahore - LHE</option>
																	<option value="Las Vegas - LAS">Las Vegas - LAS</option>
																	<option value="Liberia - LIR">Liberia - LIR</option>
																	<option value="Libreville - LBV">Libreville - LBV</option>
																	<option value="Lilongwe - LLW">Lilongwe - LLW</option>
																	<option value="Lima - LIM">Lima - LIM</option>
																	<option value="Luanda - LAD">Luanda - LAD</option>
																	<option value="Maiquetia - CCS">Maiquetia - CCS</option>
																	<option value="Malabo - SSG">Malabo - SSG</option>
																	<option value="Malindi - MYD">Malindi - MYD</option>
																	<option value="Manila - MNL">Manila - MNL</option>
																	<option value="Maputo - MPM">Maputo - MPM</option>
																	<option value="Marrakech - RAK">Marrakech - RAK</option>
																	<option value="Maseru - MSU">Maseru - MSU</option>
																	<option value="Mombasa - MBA">Mombasa - MBA</option>
																	<option value="Monrovia - ROB">Monrovia - ROB</option>
																	<option value="Montevideo - MVD">Montevideo - MVD</option>
																	<option value="Moroni - YVA">Moroni - YVA</option>
																	<option value="Mumbai - BOM">Mumbai - BOM</option>
																	<option value="Nadi - NAN">Nadi - NAN</option>
																	<option value="Nairobi - NBO">Nairobi - NBO</option>
																	<option value="Napier - NPE">Napier - NPE</option>
																	<option value="Nassau - NAS">Nassau - NAS</option>
																	<option value="NDjamena - NDJ">NDjamena - NDJ</option>
																	<option value="New York - JFK">New York - JFK</option>
																	<option value="Niamey - NIM">Niamey - NIM</option>
																	<option value="Nouakchott - NKC">Nouakchott - NKC</option>
																	<option value="Noumea - GEA">Noumea - GEA</option>
																	<option value="Ouarzazate - OZZ">Ouarzazate - OZZ</option>
																	<option value="Oujda - OUD">Oujda - OUD</option>
																	<option value="Paramaribo - PBM">Paramaribo - PBM</option>
																	<option value="Perth - PER">Perth - PER</option>
																	<option value="Philipsburg - SXM">Philipsburg - SXM</option>
																	<option value="Phnom Penh - PNH">Phnom Penh - PNH</option>
																	<option value="Port Harcourt - PHC\r">Port Harcourt - PHC\r</option>
																	<option value="Port louis - MRU">Port louis - MRU</option>
																	<option value="Quebec - YQB">Quebec - YQB</option>
																	<option value="Quito - UIO">Quito - UIO</option>
																	<option value="Wellington - WLG">Wellington - WLG</option>
																	<option value="Rabat - RBA">Rabat - RBA</option>
																	<option value="Rarotonga - RAR">Rarotonga - RAR</option>
																	<option value="Rodrigues Island - R">Rodrigues Island - R</option>
																	<option value="Salvador - SSA">Salvador - SSA</option>
																	<option value="San Francisco - SFO\r">San Francisco - SFO\r</option>
																	<option value="San-Salvador - SAL">San-Salvador - SAL</option>
																	<option value="Santa Cruz - SRZ">Santa Cruz - SRZ</option>
																	<option value="Santiago - SCL">Santiago - SCL</option>
																	<option value="Seoul - ICN">Seoul - ICN</option>
																	<option value="Siem Reap - REP">Siem Reap - REP</option>
																	<option value="Singapore - SIN">Singapore - SIN</option>
																	<option value="St-Lucia - UVF">St-Lucia - UVF</option>
																	<option value="Sydney - SYD">Sydney - SYD</option>
																	<option value="Taipei - TPE">Taipei - TPE</option>
																	<option value="Tangier - TNG">Tangier - TNG</option>
																	<option value="Tokyo - HND">Tokyo - HND</option>
																	<option value="Tripoli - TIP">Tripoli - TIP</option>
																	<option value="Walvis Bay - WVB">Walvis Bay - WVB</option>
																	<option value="Washington - DCA">Washington - DCA</option>
																	<option value="Windhoek - WDH">Windhoek - WDH</option>
																	<option value="Yaounde - NSI">Yaounde - NSI</option>
																	<option value="Aalborg - AAL">Aalborg - AAL</option>
																	<option value="Aalesund - AES">Aalesund - AES</option>
																	<option value="Alicante - ALC">Alicante - ALC</option>
																	<option value="Alta - ALS">Alta - ALS</option>
																	<option value="Amsterdam - AMS">Amsterdam - AMS</option>
																	<option value="Arad - ARW">Arad - ARW</option>
																	<option value="Athens - ATH">Athens - ATH</option>
																	<option value="Bacau - BCM">Bacau - BCM</option>
																	<option value="Baia Mare - BAY">Baia Mare - BAY</option>
																	<option value="Baku - BAK">Baku - BAK</option>
																	<option value="Barcelona - BCM">Barcelona - BCM</option>
																	<option value="Bergen - BGO">Bergen - BGO</option>
																	<option value="Bergerac - EGC">Bergerac - EGC</option>
																	<option value="Billund - BLL">Billund - BLL</option>
																	<option value="Bodo - BOO">Bodo - BOO</option>
																	<option value="Bordeaux - BOD">Bordeaux - BOD</option>
																	<option value="Bourgas - DOJ">Bourgas - DOJ</option>
																	<option value="Bratislava - BTS">Bratislava - BTS</option>
																	<option value="Brno - BRQ">Brno - BRQ</option>
																	<option value="Brussels - BRU">Brussels - BRU</option>
																	<option value="Bucharest - BBU">Bucharest - BBU</option>
																	<option value="Budapest - BUD">Budapest - BUD</option>
																	<option value="Cagliari - CAG">Cagliari - CAG</option>
																	<option value="Chisinau - KIV">Chisinau - KIV</option>
																	<option value="Cologne - CGN">Cologne - CGN</option>
																	<option value="Copenhagen - CPH">Copenhagen - CPH</option>
																	<option value="Dortmund - DTM">Dortmund - DTM</option>
																	<option value="Dublin - DUB">Dublin - DUB</option>
																	<option value="Dubrovnik - DBV">Dubrovnik - DBV</option>
																	<option value="Dusseldorf - DUS">Dusseldorf - DUS</option>
																	<option value="EaSt london-ELS">EaSt london-ELS</option>
																	<option value="Eindhoven - EIN">Eindhoven - EIN</option>
																	<option value="Entebbe -Ebb">Entebbe -Ebb</option>
																	<option value="Ercan - ECN">Ercan - ECN</option>
																	<option value="Florence - FLR">Florence - FLR</option>
																	<option value="Frankfurt - FRA">Frankfurt - FRA</option>
																	<option value="Gdansk - GDN">Gdansk - GDN</option>
																	<option value="Gothenburg - GOT">Gothenburg - GOT</option>
																	<option value="Graz - GRZ">Graz - GRZ</option>
																	<option value="Hamburg - HAM">Hamburg - HAM</option>
																	<option value="Hanover - HAJ">Hanover - HAJ</option>
																	<option value="Harare-Hre'">Harare-Hre'</option>
																	<option value="Haugesund - HAU">Haugesund - HAU</option>
																	<option value="Helsinki - HEL">Helsinki - HEL</option>
																	<option value="Ibiza - IBZ">Ibiza - IBZ </option>
																	<option value="Innsbruck - INN">Innsbruck - INN</option>
																	<option value="Kajaani - KAJ">Kajaani - KAJ</option>
																	<option value="kano-Kan">kano-Kan</option>
																	<option value="Katowice - KTW">Katowice - KTW</option>
																	<option value="Kaunas - KUN">Kaunas - KUN</option>
																	<option value="Kefalonia - EFL">Kefalonia - EFL</option>
																	<option value="Knock - NOC">Knock - NOC</option>
																	<option value="Kos - KGS">Kos - KGS</option>
																	<option value="" Kosice - KSC>Kosice - KSC</option>
																	<option value="Krakow - KRK">Krakow - KRK</option>
																	<option value="Kuopio - KUO">Kuopio - KUO</option>
																	<option value="La Rochelle - LRH">La Rochelle - LRH</option>
																	<option value="Larnaca - LCA">Larnaca - LCA</option>
																	<option value="Las Palmas - LPA">Las Palmas - LPA</option>
																	<option value="Linz - LNZ">Linz - LNZ</option>
																	<option value="Lisbon - LIS">Lisbon - LIS</option>
																	<option value="Ljubljana - LJU">Ljubljana - LJU</option>
																	<option value="Lusaka -Lun">Lusaka -Lun</option>
																	<option value="Luxembourg - LUX">Luxembourg - LUX</option>
																	<option value="Madrid - MAD">Madrid - MAD</option>
																	<option value="Mikonos - JMK">Mikonos - JMK</option>
																	<option value="Milan - LIN">Milan - LIN</option>
																	<option value="Naples - NAP">Naples - NAP</option>
																	<option value="Nice - NCE">Nice - NCE</option>
																	<option value="Olbia - OLB">Olbia - OLB</option>
																	<option value="Oslo - OSL">Oslo - OSL</option>
																	<option value="Ostrava - OSR">Ostrava - OSR</option>
																	<option value="Oulu - OUL">Oulu - OUL</option>
																	<option value="Palermo - PMO">Palermo - PMO</option>
																	<option value="Paphos - PFO">Paphos - PFO</option>
																	<option value="Paris - CDE">Paris - CDE</option>
																	<option value="Poznan - POZ">Poznan - POZ</option>
																	<option value="Prague - PRG">Prague - PRG</option>
																	<option value="Pula - PUY">Pula - PUY</option>
																	<option value="Rennes - RMS">Rennes - RMS</option>
																	<option value="Reykjavik- KEF">Reykjavik- KEF</option>
																	<option value="Rhodes - RHO">Rhodes - RHO</option>
																	<option value="Riga - RIX">Riga - RIX</option>
																	<option value="Rome - FCO">Rome - FCO</option>
																	<option value="Rotterdam - RTM">Rotterdam - RTM</option>
																	<option value="Rzeszow - RZE">Rzeszow - RZE</option>
																	<option value="Samos - SMI">Samos - SMI </option>
																	<option value="Shannon - SNN"> Shannon - SNN</option>
																	<option value="Sibiu - SBZ">Sibiu - SBZ</option>
																	<option value="Skopje - SKP">Skopje - SKP</option>
																	<option value="Sofia - SOF">Sofia - SOF</option>
																	<option value="Split - SPU">Split - SPU</option>
																	<option value="Stuttgart - STR">Stuttgart - STR</option>
																	<option value="Tallinn - TTL">Tallinn - TTL</option>
																	<option value="Tampere - TMP">Tampere - TMP</option>
																	<option value="Tbilisi - TBS">Tbilisi - TBS</option>
																	<option value="Tenerife - TFN">Tenerife - TFN</option>
																	<option value="Thessaloniki - SKG">Thessaloniki - SKG</option>
																	<option value="Thira - JTR">Thira - JTR</option>
																	<option value="Tirana - TIA'">Tirana - TIA'</option>
																	<option value="Toulouse - TLS">Toulouse - TLS</option>
																	<option value="Trondheim - TRD">Trondheim - TRD</option>
																	<option value="Varna - VAR">Varna - VAR</option>
																	<option value="Venice - VCE">Venice - VCE</option>
																	<option value="Verona - VRN">Verona - VRN</option>
																	<option value="Vienna - VIE">Vienna - VIE</option>
																	<option value="Vilnius - VNO">Vilnius - VNO</option>
																	<option value="Warsaw - WAW">Warsaw - WAW</option>
																	<option value="Wroclaw - WRO">Wroclaw - WRO</option>
																	<option value="Yerevan - EVN">Yerevan - EVN</option>
																	<option value="Zadar - ZAD">Zadar - ZAD</option>
																	<option value="Zagreb - ZAG">Zagreb - ZAG</option>
																	<option value="Dar es Salaa">Dar es Salaa</option>
																	<option value="Islamabad - ISB">Islamabad - ISB</option>
																	<option value="Abu Dhabi - AUH">Abu Dhabi - AUH</option>
																	<option value="Amritsar - ATQ">Amritsar - ATQ</option>
																	<option value="Cairo - CAI">Cairo - CAI</option>
																	<option value="Colombo - CMB">Colombo - CMB</option>
																	<option value="Doha - DOH">Doha - DOH</option>
																	<option value="Delhi - DEL">Delhi - DEL</option>
																	<option value="Guangzhou - CAN">Guangzhou - CAN</option>
																	<option value="Hyderabad - HYD">Hyderabad - HYD</option>
																	<option value="Istanbol - IST">Istanbol - IST</option>
																	<option value="Kuwait - KWI">Kuwait - KWI</option>
																	<option value="Zurich - ZRH">Zurich - ZRH</option>
																	<option value="Kinhasa - FIH">Kinhasa - FIH</option>
																	<option value="Quetta - UET">Quetta - UET</option>
																	<option value="Sialkot - SKT">Sialkot - SKT</option>
																	<option value="Faisalabad - LYP">Faisalabad - LYP</option>
																	<option value="Multan - MUX">Multan - MUX</option>
																	<option value="Peshawar - PEW">Peshawar - PEW</option>

																</datalist>
																</select>
															</div>
														</div>
														<div class="row form-group">
															<div class="col-md-4" style="margin-right: 160px;display:flex;flex-direction: column;align-content: flex-start; align-items: flex-start;padding-left:40px">
																<label for="myOption" style="padding: 0;">Flying TO</label>
																<input type="select" placeholder="TO" id="from" name="desti" list="list" style="
																display: inline-block;
																width: 240%;
																padding: 8px;
																margin-bottom: 10px;
																border: 1px solid #ccc;
																border-radius: 4px;
																vertical-align: middle;
																font-size: 12px;">
																<datalist id="list">

																	<option value="">Select your option</option>
																	<option value="Adelaide - ADL">Adelaide - ADL</option>
																	<option value="Agana - GUM">Agana - GUM</option>
																	<option value="Brisbane - BNE"> Brisbane - BNE</option>
																	<option value="Christchurch - CHC"> Christchurch - CHC</option>
																	<option value="Dunedin - DUD"> Dunedin - DUD</option>
																	<option value=" Georgetown - GEO">Georgetown - GEO</option>
																	<option value="Gold-Coast - OOL">Gold-Coast - OOL</option>
																	<option value="Hamilton (BDA)">Hamilton (BDA)</option>
																	<option value="Kathmandu - KTM">Kathmandu - KTM</option>
																	<option value="La Paz - LPB">La Paz - LPB</option>
																	<option value="Mexico City - AZP">Mexico City - AZP</option>
																	<option value="Nelson - NSN">Nelson - NSN</option>
																	<option value="Panama-City - PTY">Panama-City - PTY</option>
																	<option value="Papeete - PPT">Papeete - PPT</option>
																	<option value="Queenstown - ZQN">Queenstown - ZQN</option>
																	<option value="Rio de Janeiro - GIG"> Rio de Janeiro - GIG</option>
																	<option value="Sao Paulo - GRU">Sao Paulo - GRU</option>
																	<option value="St Georges - GND">St Georges - GND</option>
																	<option value="Toronto - YYZ">Toronto - YYZ</option>
																	<option value="Vancouver - YVR">Vancouver - YVR</option>
																	<option value="Abidjan - ABJ">Abidjan - ABJ</option>
																	<option value="Abuja - ABV">Abuja - ABV</option>
																	<option value="ACCRA - ACC">ACCRA - ACC</option>
																	<option value="Addis Ababa - ADD">Addis Ababa - ADD</option>
																	<option value="Agadir - AGA">Agadir - AGA</option>
																	<option value="Algiers - ALG">Algiers - ALG</option>
																	<option value="Antananarivo - TNR">Antananarivo - TNR</option>
																	<option value="Antigua - ANU">Antigua - ANU</option>
																	<option value="Asmara - ASM">Asmara - ASM</option>
																	<option value="Asuncion - ASU">Asuncion - ASU</option>
																	<option value="Auckland - AKL">Auckland - AKL</option>
																	<option value="Bahrain - BAH">Bahrain - BAH</option>
																	<option value="Bamako - BKO">Bamako - BKO</option>
																	<option value="Bandar Seri Begawan">Bandar Seri Begawan</option>
																	<option value="BANGKOK-BKK"> BANGKOK-BKK</option>
																	<option value="Banjul - BJL">Banjul - BJL</option>
																	<option value="Beijing - BJS">Beijing - BJS</option>
																	<option value="Beira - BEW">Beira - BEW</option>
																	<option value="Benghazi - BEN">Benghazi - BEN</option>
																	<option value="Bloemfontein - BFN">Bloemfontein - BFN</option>
																	<option value="Bogota - BOG">Bogota - BOG</option>
																	<option value="Boston - BOS">Boston - BOS</option>
																	<option value="Brasilia - BSB">Brasilia - BSB</option>
																	<option value="Bridgetown - BGI">Bridgetown - BGI</option>
																	<option value="Buenos-Aires - BUE">Buenos-Aires - BUE</option>
																	<option value="Bujumbura - BJM">Bujumbura - BJM</option>
																	<option value="Cairns - CNS">Cairns - CNS</option>
																	<option value="Cali - CLO">Cali - CLO</option>
																	<option value="Canberra - CBR">Canberra - CBR</option>
																	<option value="Cape Town - CPT">Cape Town - CPT</option>
																	<option value="Casablanca - CMN">Casablanca - CMN</option>
																	<option value="Cebu - CEB">Cebu - CEB</option>
																	<option value="Chittagong - CGP">Chittagong - CGP</option>
																	<option value="Conakry - CKY">Conakry - CKY</option>
																	<option value="Cordoba - COR">Cordoba - COR</option>
																	<option value="Dakar - DKR">Dakar - DKR</option>
																	<option value="Darwin - DRW">Darwin - DRW</option>
																	<option value="Denpasar - DPS">Denpasar - DPS</option>
																	<option value="Dhaka - DAC">Dhaka - DAC</option>
																	<option value="Djibouti - JIB">Djibouti - JIB</option>
																	<option value="Douala - DLA">Douala - DLA</option>
																	<option value="Dubai - DXB">Dubai - DXB</option>
																	<option value="Durban - DUR">Durban - DUR</option>
																	<option value="East London - ELS">East London - ELS</option>
																	<option value="Essaouira - ESU">Essaouira - ESU</option>
																	<option value="Fez - FEZ">Fez - FEZ</option>
																	<option value="Freetown - FNA">Freetown - FNA</option>
																	<option value="Gaborone - GBE">Gaborone - GBE</option>
																	<option value="George-Town-KYÂ">George-Town-KYÂ</option>
																	<option value="Goa - GOI">Goa - GOI</option>
																	<option value="Guayaquil - GYE">Guayaquil - GYE</option>
																	<option value="Hargeisa - HGA">Hargeisa - HGA</option>
																	<option value="Ho Chi Minh City - S">Ho Chi Minh City - S</option>
																	<option value="Hong Kong - HKG">Hong Kong - HKG</option>
																	<option value="Jeddah - JED">Jeddah - JED</option>
																	<option value="Johannesburg - JNB">Johannesburg - JNB</option>
																	<option value="Kabul - KBL">Kabul - KBL</option>
																	<option value="Kano - KAN">Kano - KAN</option>
																	<option value="Karachi - KHI">Karachi - KHI</option>
																	<option value="Kigali - KGL">Kigali - KGL</option>
																	<option value="Kimberley - KIM">Kimberley - KIM</option>
																	<option value="Kingston - KIN">Kingston - KIN</option>
																	<option value="Kisumu - KIS">Kisumu - KIS</option>
																	<option value="Kuala Lumpur - KUL">Kuala Lumpur - KUL</option>
																	<option value="LAGOS - LOS">LAGOS - LOS</option>
																	<option value="Lahore - LHE">Lahore - LHE</option>
																	<option value="Las Vegas - LAS">Las Vegas - LAS</option>
																	<option value="Liberia - LIR">Liberia - LIR</option>
																	<option value="Libreville - LBV">Libreville - LBV</option>
																	<option value="Lilongwe - LLW">Lilongwe - LLW</option>
																	<option value="Lima - LIM">Lima - LIM</option>
																	<option value="Luanda - LAD">Luanda - LAD</option>
																	<option value="Maiquetia - CCS">Maiquetia - CCS</option>
																	<option value="Malabo - SSG">Malabo - SSG</option>
																	<option value="Malindi - MYD">Malindi - MYD</option>
																	<option value="Manila - MNL">Manila - MNL</option>
																	<option value="Maputo - MPM">Maputo - MPM</option>
																	<option value="Marrakech - RAK">Marrakech - RAK</option>
																	<option value="Maseru - MSU">Maseru - MSU</option>
																	<option value="Mombasa - MBA">Mombasa - MBA</option>
																	<option value="Monrovia - ROB">Monrovia - ROB</option>
																	<option value="Montevideo - MVD">Montevideo - MVD</option>
																	<option value="Moroni - YVA">Moroni - YVA</option>
																	<option value="Mumbai - BOM">Mumbai - BOM</option>
																	<option value="Nadi - NAN">Nadi - NAN</option>
																	<option value="Nairobi - NBO">Nairobi - NBO</option>
																	<option value="Napier - NPE">Napier - NPE</option>
																	<option value="Nassau - NAS">Nassau - NAS</option>
																	<option value="NDjamena - NDJ">NDjamena - NDJ</option>
																	<option value="New York - JFK">New York - JFK</option>
																	<option value="Niamey - NIM">Niamey - NIM</option>
																	<option value="Nouakchott - NKC">Nouakchott - NKC</option>
																	<option value="Noumea - GEA">Noumea - GEA</option>
																	<option value="Ouarzazate - OZZ">Ouarzazate - OZZ</option>
																	<option value="Oujda - OUD">Oujda - OUD</option>
																	<option value="Paramaribo - PBM">Paramaribo - PBM</option>
																	<option value="Perth - PER">Perth - PER</option>
																	<option value="Philipsburg - SXM">Philipsburg - SXM</option>
																	<option value="Phnom Penh - PNH">Phnom Penh - PNH</option>
																	<option value="Port Harcourt - PHC\r">Port Harcourt - PHC\r</option>
																	<option value="Port louis - MRU">Port louis - MRU</option>
																	<option value="Quebec - YQB">Quebec - YQB</option>
																	<option value="Quito - UIO">Quito - UIO</option>
																	<option value="Wellington - WLG">Wellington - WLG</option>
																	<option value="Rabat - RBA">Rabat - RBA</option>
																	<option value="Rarotonga - RAR">Rarotonga - RAR</option>
																	<option value="Rodrigues Island - R">Rodrigues Island - R</option>
																	<option value="Salvador - SSA">Salvador - SSA</option>
																	<option value="San Francisco - SFO\r">San Francisco - SFO\r</option>
																	<option value="San-Salvador - SAL">San-Salvador - SAL</option>
																	<option value="Santa Cruz - SRZ">Santa Cruz - SRZ</option>
																	<option value="Santiago - SCL">Santiago - SCL</option>
																	<option value="Seoul - ICN">Seoul - ICN</option>
																	<option value="Siem Reap - REP">Siem Reap - REP</option>
																	<option value="Singapore - SIN">Singapore - SIN</option>
																	<option value="St-Lucia - UVF">St-Lucia - UVF</option>
																	<option value="Sydney - SYD">Sydney - SYD</option>
																	<option value="Taipei - TPE">Taipei - TPE</option>
																	<option value="Tangier - TNG">Tangier - TNG</option>
																	<option value="Tokyo - HND">Tokyo - HND</option>
																	<option value="Tripoli - TIP">Tripoli - TIP</option>
																	<option value="Walvis Bay - WVB">Walvis Bay - WVB</option>
																	<option value="Washington - DCA">Washington - DCA</option>
																	<option value="Windhoek - WDH">Windhoek - WDH</option>
																	<option value="Yaounde - NSI">Yaounde - NSI</option>
																	<option value="Aalborg - AAL">Aalborg - AAL</option>
																	<option value="Aalesund - AES">Aalesund - AES</option>
																	<option value="Alicante - ALC">Alicante - ALC</option>
																	<option value="Alta - ALS">Alta - ALS</option>
																	<option value="Amsterdam - AMS">Amsterdam - AMS</option>
																	<option value="Arad - ARW">Arad - ARW</option>
																	<option value="Athens - ATH">Athens - ATH</option>
																	<option value="Bacau - BCM">Bacau - BCM</option>
																	<option value="Baia Mare - BAY">Baia Mare - BAY</option>
																	<option value="Baku - BAK">Baku - BAK</option>
																	<option value="Barcelona - BCM">Barcelona - BCM</option>
																	<option value="Bergen - BGO">Bergen - BGO</option>
																	<option value="Bergerac - EGC">Bergerac - EGC</option>
																	<option value="Billund - BLL">Billund - BLL</option>
																	<option value="Bodo - BOO">Bodo - BOO</option>
																	<option value="Bordeaux - BOD">Bordeaux - BOD</option>
																	<option value="Bourgas - DOJ">Bourgas - DOJ</option>
																	<option value="Bratislava - BTS">Bratislava - BTS</option>
																	<option value="Brno - BRQ">Brno - BRQ</option>
																	<option value="Brussels - BRU">Brussels - BRU</option>
																	<option value="Bucharest - BBU">Bucharest - BBU</option>
																	<option value="Budapest - BUD">Budapest - BUD</option>
																	<option value="Cagliari - CAG">Cagliari - CAG</option>
																	<option value="Chisinau - KIV">Chisinau - KIV</option>
																	<option value="Cologne - CGN">Cologne - CGN</option>
																	<option value="Copenhagen - CPH">Copenhagen - CPH</option>
																	<option value="Dortmund - DTM">Dortmund - DTM</option>
																	<option value="Dublin - DUB">Dublin - DUB</option>
																	<option value="Dubrovnik - DBV">Dubrovnik - DBV</option>
																	<option value="Dusseldorf - DUS">Dusseldorf - DUS</option>
																	<option value="EaSt london-ELS">EaSt london-ELS</option>
																	<option value="Eindhoven - EIN">Eindhoven - EIN</option>
																	<option value="Entebbe -Ebb">Entebbe -Ebb</option>
																	<option value="Ercan - ECN">Ercan - ECN</option>
																	<option value="Florence - FLR">Florence - FLR</option>
																	<option value="Frankfurt - FRA">Frankfurt - FRA</option>
																	<option value="Gdansk - GDN">Gdansk - GDN</option>
																	<option value="Gothenburg - GOT">Gothenburg - GOT</option>
																	<option value="Graz - GRZ">Graz - GRZ</option>
																	<option value="Hamburg - HAM">Hamburg - HAM</option>
																	<option value="Hanover - HAJ">Hanover - HAJ</option>
																	<option value="Harare-Hre'">Harare-Hre'</option>
																	<option value="Haugesund - HAU">Haugesund - HAU</option>
																	<option value="Helsinki - HEL">Helsinki - HEL</option>
																	<option value="Ibiza - IBZ">Ibiza - IBZ </option>
																	<option value="Innsbruck - INN">Innsbruck - INN</option>
																	<option value="Kajaani - KAJ">Kajaani - KAJ</option>
																	<option value="kano-Kan">kano-Kan</option>
																	<option value="Katowice - KTW">Katowice - KTW</option>
																	<option value="Kaunas - KUN">Kaunas - KUN</option>
																	<option value="Kefalonia - EFL">Kefalonia - EFL</option>
																	<option value="Knock - NOC">Knock - NOC</option>
																	<option value="Kos - KGS">Kos - KGS</option>
																	<option value="" Kosice - KSC>Kosice - KSC</option>
																	<option value="Krakow - KRK">Krakow - KRK</option>
																	<option value="Kuopio - KUO">Kuopio - KUO</option>
																	<option value="La Rochelle - LRH">La Rochelle - LRH</option>
																	<option value="Larnaca - LCA">Larnaca - LCA</option>
																	<option value="Las Palmas - LPA">Las Palmas - LPA</option>
																	<option value="Linz - LNZ">Linz - LNZ</option>
																	<option value="Lisbon - LIS">Lisbon - LIS</option>
																	<option value="Ljubljana - LJU">Ljubljana - LJU</option>
																	<option value="Lusaka -Lun">Lusaka -Lun</option>
																	<option value="Luxembourg - LUX">Luxembourg - LUX</option>
																	<option value="Madrid - MAD">Madrid - MAD</option>
																	<option value="Mikonos - JMK">Mikonos - JMK</option>
																	<option value="Milan - LIN">Milan - LIN</option>
																	<option value="Naples - NAP">Naples - NAP</option>
																	<option value="Nice - NCE">Nice - NCE</option>
																	<option value="Olbia - OLB">Olbia - OLB</option>
																	<option value="Oslo - OSL">Oslo - OSL</option>
																	<option value="Ostrava - OSR">Ostrava - OSR</option>
																	<option value="Oulu - OUL">Oulu - OUL</option>
																	<option value="Palermo - PMO">Palermo - PMO</option>
																	<option value="Paphos - PFO">Paphos - PFO</option>
																	<option value="Paris - CDE">Paris - CDE</option>
																	<option value="Poznan - POZ">Poznan - POZ</option>
																	<option value="Prague - PRG">Prague - PRG</option>
																	<option value="Pula - PUY">Pula - PUY</option>
																	<option value="Rennes - RMS">Rennes - RMS</option>
																	<option value="Reykjavik- KEF">Reykjavik- KEF</option>
																	<option value="Rhodes - RHO">Rhodes - RHO</option>
																	<option value="Riga - RIX">Riga - RIX</option>
																	<option value="Rome - FCO">Rome - FCO</option>
																	<option value="Rotterdam - RTM">Rotterdam - RTM</option>
																	<option value="Rzeszow - RZE">Rzeszow - RZE</option>
																	<option value="Samos - SMI">Samos - SMI </option>
																	<option value="Shannon - SNN"> Shannon - SNN</option>
																	<option value="Sibiu - SBZ">Sibiu - SBZ</option>
																	<option value="Skopje - SKP">Skopje - SKP</option>
																	<option value="Sofia - SOF">Sofia - SOF</option>
																	<option value="Split - SPU">Split - SPU</option>
																	<option value="Stuttgart - STR">Stuttgart - STR</option>
																	<option value="Tallinn - TTL">Tallinn - TTL</option>
																	<option value="Tampere - TMP">Tampere - TMP</option>
																	<option value="Tbilisi - TBS">Tbilisi - TBS</option>
																	<option value="Tenerife - TFN">Tenerife - TFN</option>
																	<option value="Thessaloniki - SKG">Thessaloniki - SKG</option>
																	<option value="Thira - JTR">Thira - JTR</option>
																	<option value="Tirana - TIA'">Tirana - TIA'</option>
																	<option value="Toulouse - TLS">Toulouse - TLS</option>
																	<option value="Trondheim - TRD">Trondheim - TRD</option>
																	<option value="Varna - VAR">Varna - VAR</option>
																	<option value="Venice - VCE">Venice - VCE</option>
																	<option value="Verona - VRN">Verona - VRN</option>
																	<option value="Vienna - VIE">Vienna - VIE</option>
																	<option value="Vilnius - VNO">Vilnius - VNO</option>
																	<option value="Warsaw - WAW">Warsaw - WAW</option>
																	<option value="Wroclaw - WRO">Wroclaw - WRO</option>
																	<option value="Yerevan - EVN">Yerevan - EVN</option>
																	<option value="Zadar - ZAD">Zadar - ZAD</option>
																	<option value="Zagreb - ZAG">Zagreb - ZAG</option>
																	<option value="Dar es Salaa">Dar es Salaa</option>
																	<option value="Islamabad - ISB">Islamabad - ISB</option>
																	<option value="Abu Dhabi - AUH">Abu Dhabi - AUH</option>
																	<option value="Amritsar - ATQ">Amritsar - ATQ</option>
																	<option value="Cairo - CAI">Cairo - CAI</option>
																	<option value="Colombo - CMB">Colombo - CMB</option>
																	<option value="Doha - DOH">Doha - DOH</option>
																	<option value="Delhi - DEL">Delhi - DEL</option>
																	<option value="Guangzhou - CAN">Guangzhou - CAN</option>
																	<option value="Hyderabad - HYD">Hyderabad - HYD</option>
																	<option value="Istanbol - IST">Istanbol - IST</option>
																	<option value="Kuwait - KWI">Kuwait - KWI</option>
																	<option value="Zurich - ZRH">Zurich - ZRH</option>
																	<option value="Kinhasa - FIH">Kinhasa - FIH</option>
																	<option value="Quetta - UET">Quetta - UET</option>
																	<option value="Sialkot - SKT">Sialkot - SKT</option>
																	<option value="Faisalabad - LYP">Faisalabad - LYP</option>
																	<option value="Multan - MUX">Multan - MUX</option>
																	<option value="Peshawar - PEW">Peshawar - PEW</option>

																</datalist>
																</select>

															</div>
														</div>
													</div>

													<div class="row form-group" style="margin-right: 130px;">
														<div style="margin-bottom:28px;margin-top:-29px">

															<label for="from" style="padding: 0;">Departure Date</label>
															<input type="date" class="form-control" name="from" id="fromdate" placeholder="Departure Date" style="width: 135%;">
														</div>
														<label for="to" style="padding: 0;">Return Date</label>
														<input type="date" class="form-control" name="to" id="todate" style="width: 135%;">
													</div>
												</div>
												<div class="row form-group" style="display: flex;justify-content: space-around;flex-wrap: nowrap;margin-left: -130px;">
													<div class="row form-group" style="margin-left:-50px">

														<label for="family" style="padding: 0;">No. of family</label><br />
														<input type="number" id="family" class="form-control" name="family" required min="0" style="width: 50%;">
													</div>

													<div class="row form-group" style="margin-left: -180px;">
														<label for="children" style="padding: 0;">Childrens</label><br />
														<input type="number" id="children" class="form-control" name="child" required min="0" style="width: 50%;">
													</div>

													<div class="row form-group" style="margin-left: -180px;">
														<label for="adults" style="padding: 0;">Adults</label><br />
														<input type="number" id="adults" class="form-control" name="adult" required min="0" style="width: 50%;">
													</div>
												</div>

												<div class="row form-group">
													<div class="col-md-9">
														<div class="qwe" style="padding-bottom: 40px;position:relative;right:380px">

															<button type="submit" class="btn btn-primary" name="submit" value="submit">Confirm</button>
														</div>
													</div>


												</div>
											</form>
										</div>

									</div>
								</div>
							</div>
						</div>
					</div><!--/.single-about-us-->
		</div>
		<div class="col">
			
			<?php include "silder.php" ?>
		</div>
	</div>

	<!--service start-->
	<section id="service" class="service">
		<div class="container">

			<div class="service-counter text-center">

				<div class="col-md-4 col-sm-4">
					<div class="single-service-box">
						<div class="service-img">
							<img src="assets/images/travel-luggage.png" alt="service-icon" width="100" />
						</div><!--/.service-img-->
						<div class="service-content">
							<h2>
								<a href="#">
									amazing tour packages
								</a>
							</h2>
							<p>Duis aute irure dolor in velit esse cillum dolore eu fugiat nulla.</p>
						</div><!--/.service-content-->
					</div><!--/.single-service-box-->
				</div><!--/.col-->

				<div class="col-md-4 col-sm-4">
					<div class="single-service-box">
						<div class="service-img">
							<img src="assets/images/hotel.png" alt="service-icon" width="100" />
						</div><!--/.service-img-->
						<div class="service-content">
							<h2>
								<a href="#">
									book top class hotel
								</a>
							</h2>
							<p>Duis aute irure dolor in velit esse cillum dolore eu fugiat nulla.</p>
						</div><!--/.service-content-->
					</div><!--/.single-service-box-->
				</div><!--/.col-->

				<div class="col-md-4 col-sm-4">
					<div class="single-service-box">
						<div class="statistics-img">
							<img src="assets/images/direct-flight.png" alt="service-icon" width="100d" />
						</div><!--/.service-img-->
						<div class="service-content">

							<h2>
								<a href="#">
									online flight booking
								</a>
							</h2>
							<p>Duis aute irure dolor in velit esse cillum dolore eu fugiat nulla.</p>
						</div><!--/.service-content-->
					</div><!--/.single-service-box-->
				</div><!--/.col-->

			</div><!--/.statistics-counter-->
		</div><!--/.container-->

	</section><!--/.service-->
	<!--service end-->

	<!--galley start-->
	<section id="gallery" class="gallery" >
		<div class="container">
			<div class="gallery-details">
				<div class="gallary-header text-center">
					<h2 style="color:#000">
						top destination
					</h2>
					<p style="padding-left:75px; padding-right:75px; color:#a6a6a6">
						At Zistravels , we aim to facilitate our customers with incomparable rates and flexible payment plans. You may want to explore further, and can 'contact us' any time to learn more on the fares to your preferred top destination.
					</p>
				</div><!--/.gallery-header-->
				<div class="gallery-box">
					<div class="gallery-content">
						<div class="filtr-container">
							<div class="row">

								<div class="col-md-6">
									<div class="filtr-item" style="width:97%; ">
										<img src="assets/images/china_.jpg" alt="portfolio image" />
										<div class="item-title">
											<a href="#">
												china
											</a>
											<p><span>$200/-</span></p>
										</div><!-- /.item-title -->
									</div><!-- /.filtr-item -->
								</div><!-- /.col -->

								<div class="col-md-6">
									<div class="filtr-item">
										<img src="assets/images/Venuzuala.jpg" alt="portfolio image" />
										<div class="item-title">
											<a href="#">
												venuzuala
											</a>
											<p><span>$200/-</span></p>
										</div> <!-- /.item-title-->
									</div><!-- /.filtr-item -->
								</div><!-- /.col -->
								</div>
                            	<div class="row">`
								<div class="col-md-4">
									<div class="filtr-item" style="height: 240px;">
										<img src="assets/images/brazil_1.jpg" alt="portfolio image" />
										<div class="item-title">
											<a href="#">
												brazil
											</a>
											<p><span>$200/-</span></p>
										</div><!-- /.item-title -->
									</div><!-- /.filtr-item -->
								</div><!-- /.col -->
								
								<div class="col-md-4">
									<div class="filtr-item" style="height: 240px;">
										<img src="assets/images/islamabad.jpeg" alt="portfolio image" />
										<div class="item-title">
											<a href="#">
												Islamabad
											</a>
											<p><span>$200/-</span></p>
										</div><!-- /.item-title -->
									</div><!-- /.filtr-item -->
								</div><!-- /.col -->

								<div class="col-md-4">
									<div class="filtr-item">
										<img src="assets/images/kaghan.jpeg" alt="portfolio image" />
										<div class="item-title">
											<a href="#">
												kaghan Valley
											</a>
											<p><span>$200/-</span></p>
										</div> <!-- /.item-title-->
									</div><!-- /.filtr-item -->
								</div><!-- /.col -->
								</div>
								<div class="row">
								    

								<div class="col-md-4">
								
									<div class="filtr-item" style="height: 409px;">
										<img src="assets/images/lahore.jpeg" alt="portfolio image" style="object-fit: cover;"/>
										<div class="item-title">
											<a href="#">
												Lahore
											</a>
											<p><span>$200/-</span></p>
										</div> <!-- /.item-title-->
									</div><!-- /.filtr-item -->
								</div><!-- /.col -->

								<div class="col-md-8">
									<div class="filtr-item">
										<img src="assets/images/tur.jpg" alt="portfolio image" />
										<div class="item-title">
											<a href="#">
												turkey
											</a>
											<p><span>$200/-</span></p>
										</div> <!-- /.item-title-->
									</div><!-- /.filtr-item -->
								</div><!-- /.col -->

							</div><!-- /.row -->

						</div><!-- /.filtr-container-->
					</div><!-- /.gallery-content -->
				</div><!--/.galley-box-->
			</div><!--/.gallery-details-->
		</div><!--/.container-->

	</section><!--/.gallery-->
	<!--gallery end-->



	<!--packages start-->
	<section id="pack" class="packages" style="background-color: #f2f2f2;">
		<div class="container">
			<div class="gallary-header text-center">
				<h2 style="color:#000">
					special packages
				</h2>
				<p style="color:#a6a6a6">
					Duis aute irure dolor in velit esse cillum dolore eu fugiat nulla.
				</p>
			</div><!--/.gallery-header-->
			<div class="packages-content">
				<div class="row">

					<div class="col-md-4 col-sm-6">
						<div class="single-package-item" >
							<img src="assets/images/italy.jpg" alt="package-place">
							<div class="single-package-item-txt">
								<h3>italy <span class="pull-right">$499</span></h3>
								<div class="packages-para">
									<p>
										<span>
											<i class="fa fa-angle-right"></i> 5 daays 6 nights
										</span>
										<i class="fa fa-angle-right"></i> 5 star accomodation
									</p>
									<p>
										<span>
											<i class="fa fa-angle-right"></i> transportation
										</span>
										<i class="fa fa-angle-right"></i> food facilities
									</p>
								</div><!--/.packages-para-->
								<div class="packages-review">
									<p>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<span>2544 review</span>
									</p>
								</div><!--/.packages-review-->
								<div class="about-btn">
									<button class="about-view packages-btn">
										book now
									</button>
								</div><!--/.about-btn-->
							</div><!--/.single-package-item-txt-->
						</div><!--/.single-package-item-->

					</div><!--/.col-->

					<div class="col-md-4 col-sm-6">
						<div class="single-package-item">
							<img src="assets/images/england.jpg" alt="package-place">
							<div class="single-package-item-txt">
								<h3>england <span class="pull-right">$1499</span></h3>
								<div class="packages-para">
									<p>
										<span>
											<i class="fa fa-angle-right"></i> 5 daays 6 nights
										</span>
										<i class="fa fa-angle-right"></i> 5 star accomodation
									</p>
									<p>
										<span>
											<i class="fa fa-angle-right"></i> transportation
										</span>
										<i class="fa fa-angle-right"></i> food facilities
									</p>
								</div><!--/.packages-para-->
								<div class="packages-review">
									<p>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<span>2544 review</span>
									</p>
								</div><!--/.packages-review-->
								<div class="about-btn">
									<button class="about-view packages-btn">
										book now
									</button>
								</div><!--/.about-btn-->
							</div><!--/.single-package-item-txt-->
						</div><!--/.single-package-item-->

					</div><!--/.col-->

					<div class="col-md-4 col-sm-6">
						<div class="single-package-item">
							<img src="assets/images/france.jpg" alt="package-place">
							<div class="single-package-item-txt">
								<h3>france <span class="pull-right">$1199</span></h3>
								<div class="packages-para">
									<p>
										<span>
											<i class="fa fa-angle-right"></i> 5 daays 6 nights
										</span>
										<i class="fa fa-angle-right"></i> 5 star accomodation
									</p>
									<p>
										<span>
											<i class="fa fa-angle-right"></i> transportation
										</span>
										<i class="fa fa-angle-right"></i> food facilities
									</p>
								</div><!--/.packages-para-->
								<div class="packages-review">
									<p>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<span>2544 review</span>
									</p>
								</div><!--/.packages-review-->
								<div class="about-btn">
									<button class="about-view packages-btn">
										book now
									</button>
								</div><!--/.about-btn-->
							</div><!--/.single-package-item-txt-->
						</div><!--/.single-package-item-->

					</div><!--/.col-->

					<div class="col-md-4 col-sm-6">
						<div class="single-package-item">
							<img src="assets/images/india.jpg" alt="package-place">
							<div class="single-package-item-txt">
								<h3>india <span class="pull-right">$799</span></h3>
								<div class="packages-para">
									<p>
										<span>
											<i class="fa fa-angle-right"></i> 5 daays 6 nights
										</span>
										<i class="fa fa-angle-right"></i> 5 star accomodation
									</p>
									<p>
										<span>
											<i class="fa fa-angle-right"></i> transportation
										</span>
										<i class="fa fa-angle-right"></i> food facilities
									</p>
								</div><!--/.packages-para-->
								<div class="packages-review">
									<p>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<span>2544 review</span>
									</p>
								</div><!--/.packages-review-->
								<div class="about-btn">
									<button class="about-view packages-btn">
										book now
									</button>
								</div><!--/.about-btn-->
							</div><!--/.single-package-item-txt-->
						</div><!--/.single-package-item-->

					</div><!--/.col-->

					<div class="col-md-4 col-sm-6">
						<div class="single-package-item">
							<img src="assets/images/spai.jpg" alt="package-place">
							<div class="single-package-item-txt">
								<h3>spain <span class="pull-right">$999</span></h3>
								<div class="packages-para">
									<p>
										<span>
											<i class="fa fa-angle-right"></i> 5 daays 6 nights
										</span>
										<i class="fa fa-angle-right"></i> 5 star accomodation
									</p>
									<p>
										<span>
											<i class="fa fa-angle-right"></i> transportation
										</span>
										<i class="fa fa-angle-right"></i> food facilities
									</p>
								</div><!--/.packages-para-->
								<div class="packages-review">
									<p>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<span>2544 review</span>
									</p>
								</div><!--/.packages-review-->
								<div class="about-btn">
									<button class="about-view packages-btn">
										book now
									</button>
								</div><!--/.about-btn-->
							</div><!--/.single-package-item-txt-->
						</div><!--/.single-package-item-->

					</div><!--/.col-->

					<div class="col-md-4 col-sm-6">
						<div class="single-package-item">
							<img src="assets/images/tau.jpg" alt="package-place">
							<div class="single-package-item-txt">
								<h3>thailand <span class="pull-right">$799</span></h3>
								<div class="packages-para">
									<p>
										<span>
											<i class="fa fa-angle-right"></i> 5 daays 6 nights
										</span>
										<i class="fa fa-angle-right"></i> 5 star accomodation
									</p>
									<p>
										<span>
											<i class="fa fa-angle-right"></i> transportation
										</span>
										<i class="fa fa-angle-right"></i> food facilities
									</p>
								</div><!--/.packages-para-->
								<div class="packages-review">
									<p>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<span>2544 review</span>
									</p>
								</div><!--/.packages-review-->
								<div class="about-btn">
									<button class="about-view packages-btn">
										book now
									</button>
								</div><!--/.about-btn-->
							</div><!--/.single-package-item-txt-->
						</div><!--/.single-package-item-->

					</div><!--/.col-->

				</div><!--/.row-->
			</div><!--/.packages-content-->
		</div><!--/.container-->

	</section><!--/.packages-->
	<!--packages end-->

	<!-- testemonial Start -->
	<section class="testemonial">
		<div class="container">

			<div class="gallary-header text-center">
				<h2 style="color: #000;">
					clients reviews
				</h2>
				<p style="color: #a6a6a6;">
					Duis aute irure dolor in velit esse cillum dolore eu fugiat nulla.
				</p>

			</div><!--/.gallery-header-->

			<div class="owl-carousel owl-theme" id="testemonial-carousel">

				<div class="home1-testm item">
					<div class="home1-testm-single text-center">
						<div class="home1-testm-img">
							<img src="assets/images/men.png" alt="img">
						</div><!--/.home1-testm-img-->
						<div class="home1-testm-txt">
							<span class="icon section-icon">
								<i class="fa fa-quote-left" aria-hidden="true"></i>
							</span>
							<p>
								Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam.
							</p>
							<h3>
								<a href="#">
									kevin watson
								</a>
							</h3>
							<h4>london, england</h4>
						</div><!--/.home1-testm-txt-->
					</div><!--/.home1-testm-single-->

				</div><!--/.item-->

				<div class="home1-testm item">
					<div class="home1-testm-single text-center">
						<div class="home1-testm-img">
							<img src="assets/images/men.png" alt="img" />
						</div><!--/.home1-testm-img-->
						<div class="home1-testm-txt">
							<span class="icon section-icon">
								<i class="fa fa-quote-left" aria-hidden="true"></i>
							</span>
							<p>
								Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam.
							</p>
							<h3>
								<a href="#">
									kevin watson
								</a>
							</h3>
							<h4>london, england</h4>
						</div><!--/.home1-testm-txt-->
					</div><!--/.home1-testm-single-->

				</div><!--/.item-->

				<div class="home1-testm item">
					<div class="home1-testm-single text-center">
						<div class="home1-testm-img">
							<img src="assets/images/men.png" alt="img" />
						</div><!--/.home1-testm-img-->
						<div class="home1-testm-txt">
							<span class="icon section-icon">
								<i class="fa fa-quote-left" aria-hidden="true"></i>
							</span>
							<p>
								Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam.
							</p>
							<h3>
								<a href="#">
									kevin watson
								</a>
							</h3>
							<h4>london, england</h4>
						</div><!--/.home1-testm-txt-->
					</div><!--/.home1-testm-single-->

				</div><!--/.item-->

				<div class="home1-testm item">
					<div class="home1-testm-single text-center">
						<div class="home1-testm-img">
							<img src="assets/images/men.png" alt="img" />
						</div><!--/.home1-testm-img-->
						<div class="home1-testm-txt">
							<span class="icon section-icon">
								<i class="fa fa-quote-left" aria-hidden="true"></i>
							</span>
							<p>
								Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam.
							</p>
							<h3>
								<a href="#">
									kevin watson
								</a>
							</h3>
							<h4>london, england</h4>
						</div><!--/.home1-testm-txt-->
					</div><!--/.home1-testm-single-->

				</div><!--/.item-->

				<div class="home1-testm item">
					<div class="home1-testm-single text-center">
						<div class="home1-testm-img">
							<img src="assets/images/men.png" alt="img" />
						</div><!--/.home1-testm-img-->
						<div class="home1-testm-txt">
							<span class="icon section-icon">
								<i class="fa fa-quote-left" aria-hidden="true"></i>
							</span>
							<p>
								Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam.
							</p>
							<h3>
								<a href="#">
									kevin watson
								</a>
							</h3>
							<h4>london, england</h4>
						</div><!--/.home1-testm-txt-->
					</div><!--/.home1-testm-single-->

				</div><!--/.item-->

				<div class="home1-testm item">
					<div class="home1-testm-single text-center">
						<div class="home1-testm-img">
							<img src="assets/images/men.png" alt="img" />
						</div><!--/.home1-testm-img-->
						<div class="home1-testm-txt">
							<span class="icon section-icon">
								<i class="fa fa-quote-left" aria-hidden="true"></i>
							</span>
							<p>
								Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam.
							</p>
							<h3>
								<a href="#">
									kevin watson
								</a>
							</h3>
							<h4>london, england</h4>
						</div><!--/.home1-testm-txt-->
					</div><!--/.home1-testm-single-->

				</div><!--/.item-->

				<div class="home1-testm item">
					<div class="home1-testm-single text-center">
						<div class="home1-testm-img">
							<img src="assets/images/men.png" alt="img" />
						</div><!--/.home1-testm-img-->
						<div class="home1-testm-txt">
							<span class="icon section-icon">
								<i class="fa fa-quote-left" aria-hidden="true"></i>
							</span>
							<p>
								Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam.
							</p>
							<h3>
								<a href="#">
									kevin watson
								</a>
							</h3>
							<h4>london, england</h4>
						</div><!--/.home1-testm-txt-->
					</div><!--/.home1-testm-single-->

				</div><!--/.item-->

				<div class="home1-testm item">
					<div class="home1-testm-single text-center">
						<div class="home1-testm-img">
							<img src="assets/images/men.png" alt="img" />
						</div><!--/.home1-testm-img-->
						<div class="home1-testm-txt">
							<span class="icon section-icon">
								<i class="fa fa-quote-left" aria-hidden="true"></i>
							</span>
							<p>
								Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam.
							</p>
							<h3>
								<a href="#">
									kevin watson
								</a>
							</h3>
							<h4>london, england</h4>
						</div><!--/.home1-testm-txt-->
					</div><!--/.home1-testm-single-->

				</div><!--/.item-->

				<div class="home1-testm item">
					<div class="home1-testm-single text-center">
						<div class="home1-testm-img">
							<img src="assets/images/men.png" alt="img" />
						</div><!--/.home1-testm-img-->
						<div class="home1-testm-txt">
							<span class="icon section-icon">
								<i class="fa fa-quote-left" aria-hidden="true"></i>
							</span>
							<p>
								Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam.
							</p>
							<h3>
								<a href="#">
									kevin watson
								</a>
							</h3>
							<h4>london, england</h4>
						</div><!--/.home1-testm-txt-->
					</div><!--/.home1-testm-single-->

				</div><!--/.item-->

			</div><!--/.testemonial-carousel-->
		</div><!--/.container-->

	</section><!--/.testimonial-->
	<!-- testemonial End -->


	<!--special-offer start-->


<?php
 include "form.php";

?>

<?php
 include "footer.php";
?>

	
	<!--subscribe end-->

	<!-- footer-copyright start -->
	
	<!-- code for form 
		<!DOCTYPE html>
<html>
<head>
  <title>Inline Form Example</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
  <form class="form-inline">
    <div class="form-group mx-sm-3 mb-2">
      <label for="name" class="sr-only">Name</label>
      <input type="text" class="form-control" id="name" placeholder="Name">
    </div>
    <div class="form-group mx-sm-3 mb-2">
      <label for="from" class="sr-only">From</label>
      <input type="text" class="form-control" id="from" placeholder="From">
    </div>
    <div class="form-group mx-sm-3 mb-2">
      <label for="to" class="sr-only">To</label>
      <input type="text" class="form-control" id="to" placeholder="To">
    </div>
    <div class="form-group mx-sm-3 mb-2">
      <label for="adult" class="sr-only">Adults</label>
      <input type="number" class="form-control" id="adult" placeholder="Adults">
    </div>
    <div class="form-group mx-sm-3 mb-2">
      <label for="child" class="sr-only">Children</label>
      <input type="number" class="form-control" id="child" placeholder="Children">
    </div>
    <div class="form-group mx-sm-3 mb-2">
      <label for="dateArrival" class="sr-only">Date of Arrival</label>
      <input type="date" class="form-control" id="dateArrival" placeholder="Date of Arrival">
    </div>
    <div class="form-group mx-sm-3 mb-2">
      <label for="dateReturn" class="sr-only">Date of Return</label>
      <input type="date" class="form-control" id="dateReturn" placeholder="Date of Return">
    </div>
    <div class="form-group mx-sm-3 mb-2">
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="tripType" id="oneWay" value="oneWay">
        <label class="form-check-label" for="oneWay">One-way</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="tripType" id="return" value="return">
        <label class="form-check-label" for="return">Return</label>
      </div>
    </div>
    <button type="submit" class="btn btn-primary mb-2">Submit</button>
  </form>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

 #
// $name = $_POST['name'];

// $conn = new mysqli('host', 'username', 'password', 'dbname');
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// $stmt = $conn->prepare("INSERT INTO table_name (name, ...) VALUES (?, ...)");
// $stmt->bind_param("s", $name);
// $stmt->execute();

// if ($stmt->affected_rows > 0) {
//     echo "Data inserted successfully.";
// } else {
//     echo "Error inserting data.";
// }

// $stmt->close();
// $conn->close();
// ?>


			 <script>
				document.getElementById("form").addEventListener("submit", function(event) {
  event.preventDefault(); // Prevent form submission

  // Get the values from the form
  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var to = document.getElementById("to").value;
  var from = document.getElementById("from").value;;
  var child = docment.getElementById("child").value;

  // Display the values in an alert box
  var message = "Name: " + name + "\nEmail: " + email + "\nTo: " + to + "\nFrom: " + from + "\nChild: " + child;
  
  alert(message);
});
			</script> -->


	<!-- <script src="asset/js/form.js"></script>	 -->
	
		<script src="https://kit.fontawesome.com/5283ea73ed.js" crossorigin="anonymous"></script>


	<script src="assets/js/jquery.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->

	<!--modernizr.min.js-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>


	<!--bootstrap.min.js-->
	<script src="assets/js/bootstrap.min.js"></script>

	<!-- bootsnav js -->
	<script src="assets/js/bootsnav.js"></script>

	<!-- jquery.filterizr.min.js -->
	<script src="assets/js/jquery.filterizr.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

	<!--jquery-ui.min.js-->
	<script src="assets/js/jquery-ui.min.js"></script>



	<!--owl.carousel.js-->
	<script src="assets/js/owl.carousel.min.js"></script>

	<!-- jquery.sticky.js -->
	<script src="assets/js/jquery.sticky.js"></script>

	<!--datepicker.js-->
	<script src="assets/js/datepicker.js"></script>

	<!--Custom JS-->
	<script src="assets/js/custom.js"></script>
	<script src="assets/js/slider.js"></script>
	<script>
	
//   $(document).ready(function() {
//             $('#ticketForm').submit(function(e) {
//                 e.preventDefault();

//                 // Show the message popup
//                 $('#messagePopup').modal('show');
//             });
//         });
        
		$(document).ready(function() {
			var currentStep = 1;

			$("#nextBtn1").click(function() {
				// Move to next step
				$("#step1").hide();
				$("#step2").show();
				currentStep = 2;
			});

			$("#nextBtn2").click(function() {
				// Move to next step
				$("#step2").hide();
				$("#step3").show();
				currentStep = 3;

				// Display confirmation details
				var name = $("#name").val();
				var email = $("#email").val();
				var phone = $("#phone").val();
				var address = $("#address").val();
				var from = $("#from").val();
				var to = $("#to").val();
				var family = $("#family").val();
				var children = $("#children").val();
				var adults = $("#adults").val();
				var fromdate = $("#fromdate").val();
				var todate = $("#todate").val();



				var confirmationHtml = `
		<div class = "para" id = "para" >
				<div style="display:flex; gap:5rem">
						<div class = "first_info">
							<p style="font-size : 15px;margin-top:10px"><b style="padding-right:10px">Name:</b>${name}</p>
							<p style="font-size : 15px;margin-top:10px"><b style="padding-right:10px">Email:</b> ${email}</p>
							<p style="font-size : 15px;margin-top:10px"><b style="padding-right:10px">Phone Number:</b> ${phone}</p>
						</div>
					
						<div class = "second_info">
							<p style="font-size : 15px;margin-top:10px"><b style="padding-right:10px">Address:</b> ${address}</p>
							<p style="font-size : 15px;margin-top:10px"><b style="padding-right:10px">Arrival:</b> ${from}</p>
							<p style="font-size : 15px;margin-top:10px"><b style="padding-right:10px">Destinatio :</b> ${to}</p>
							<p style="font-size : 15px;margin-top:10px"><b style="padding-right:10px">Total Number of Family:</b> ${family}</p>
						</div>
						<div class = "third_info">
							<p style="font-size : 15px;margin-top:10px"><b style="padding-right:10px">Number of Children:</b> ${children}</p>
							<p style="font-size : 15px;margin-top:10px"><b style="padding-right:10px">Number of Adults:</b> ${adults}</p>
							<p style="font-size : 15px;margin-top:10px"><b style="padding-right:10px">From date:</b> ${fromdate}</p>
							<p style="font-size : 15px;margin-top:10px"><b style="padding-right:10px">To date: </b>${todate}</p>
						</div>
				</div>
			</div>

        `;

				$("#confirmation").html(confirmationHtml);
			});

			$("#prevBtn2").click(function() {
				// Move to previous step
				$("#step2").hide();
				$("#step1").show();
				currentStep = 1;
			});

			$("#prevBtn3").click(function() {
				// Move to previous step
				$("#step3").hide();
				$("#step2").show();
				currentStep = 2;
			});

			$("#multiStepForm").submit(function(e) {
				e.preventDefault();

				// Submit the form
				// ...

				// Reset the form
				$("#multiStepForm")[0].reset();
				currentStep = 1;
				$("#step3").hide();
				$("#step1").show();
			});
		});
	</script>

	<style>
		.btn {
			margin-left: 3px;
			padding-bottom: 4px !important;
		}
	</style>
</body>

</html>