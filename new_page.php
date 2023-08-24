<?php
require_once 'head.php';
// session_start();

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone  = $_POST['phone'];
	$address = $_POST['address'];
	$arrival = $_POST['arrival'];
	$desti = $_POST['desti'];
	$family  = $_POST['family'];
	$child = $_POST['child'];
	$adult = $_POST['adult'];
	$from_date = $_POST['from'];
	$to_date = $_POST['to'];

	$sql = "INSERT INTO `tickets`(`Name`, `Email`, `Phone_Number`, `Address`, `Arriva`, `Destination`, `family`, `children`, `Adults`, `from_date`, `to_date`) VALUES ('$name','$email','$phone','$address','$arrival','$desti','$family','$child','$adult','$from_date','$to_date')";

	$res = mysqli_query($conn, $sql);
	if ($res) {
	    
		echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
		echo "<script>
Swal.fire({
title: 'Success',
text: 'Flight information added successfully Our agent will contact you soon',
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
	<header class="top-area">
		<div class="header-area">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="logo">
							<a href="index.html">
								<img src="assets/logo/logo.png" alt="logo" width="100" />
							</a>
						</div><!-- /.logo-->
					</div><!-- /.col-->
					<div class="col-sm-10">
						<div class="main-menu">

							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
									<i class="fa fa-bars"></i>
								</button><!-- / button-->
							</div><!-- /.navbar-header-->
							<div class="collapse navbar-collapse">
								<ul class="nav navbar-nav navbar-right">
									<li class="smooth-menu"><a href="#home">home</a></li>
									<li class="smooth-menu"><a href="#blog">About Us</a></li>
									<li class="smooth-menu"><a href="#gallery">Destination</a></li>
									<li class="smooth-menu"><a href="#pack">Packages </a></li>
									<li class="smooth-menu"><a href="#spo">Special Offers</a></li>
									<li class="smooth-menu"><a href="#subs">Contact Us</a></li>
									<li>
										<a href="#book"> Book now</a>
									</li><!--/.project-btn-->
								</ul>
							</div><!-- /.navbar-collapse -->
						</div><!-- /.main-menu-->
					</div><!-- /.col-->
				</div><!-- /.row -->
				<div class="home-border"></div><!-- /.home-border-->
			</div><!-- /.container-->
		</div><!-- /.header-area -->

	</header><!-- /.top-area-->
	<!-- main-menu End -->


	<!--about-us start -->
	<section id="home" class="about-us">
		<div class="container">
			<div class="about-us-content">
				<div class="row">
					<div class="col-sm-12">
						<div class="single-about-us">
							<div class="about-us-txt">
								<h2>
									Explore the Beauty of the <span style="color: #df9023;"> Beautiful World </span>

								</h2>
								<div class="about-btn">
									<button class="about-view">
										explore now
									</button>
								</div><!--/.about-btn-->
							</div><!--/.about-us-txt-->
						</div><!--/.single-about-us-->
					</div><!--/.col-->
					<div class="col-sm-0">
						<div class="single-about-us">

						</div><!--/.single-about-us-->
					</div><!--/.col-->
				</div><!--/.row-->
			</div><!--/.about-us-content-->
		</div><!--/.container-->

	</section><!--/.about-us-->
	<!--about-us end -->

	<!--travel-box start-->
	<section class="travel-box">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="single-travel-boxes">
						<div id="desc-tabs" class="desc-tabs">

							<ul class="nav nav-tabs" role="tablist">

								<!-- <li role="presentation" >
									 	<a href="#tours" aria-controls="tours" role="tab" data-toggle="tab">
									 		<i class="fa fa-tree"></i>
									 		tours
									 	</a>
									</li>

									<li role="presentation">
										<a href="#hotels" aria-controls="hotels" role="tab" data-toggle="tab">
											<i class="fa fa-building"></i>
											hotels
										</a>
									</li> -->

								<li role="presentation" class="active">
									<a href="#flights" aria-controls="flights" role="tab" data-toggle="tab" id="book">
										<i class="fa fa-plane"></i>
										flights
									</a>
								</li>
							</ul>



							<!-- -----------------------------------fligts from      -------------------------------------------                      -->

							<div role="tabpanel" class="tab-pane active fade in" id="flights">
								<div class="tab-para">
									<form action="" method="post" class="form-inline"  autocomplete="on" id="ticketForm">
										<div id="step1" class="form-group">


											<h3>Step 1: Booking Information</h3>
											<div class="step_1">
											    
											
											
												<label for="myOption">Flying From</label>
													<select  placeholder="From" id="from" name="arrival" list= "list"style="width: 20%;
                                                                                                display: inline-block;
                                                                                                /* width: auto; */
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
                          <option value=""Kosice - KSC>Kosice - KSC</option>
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

												<label for="to">Flying To</label>
														<select placeholder="TO" id="to" name="desti" list="list_2" style="width: 20%;
                                                                                                display: inline-block;
                                                                                                /* width: auto; */
                                                                                                padding: 8px;
                                                                                                margin-bottom: 10px;
                                                                                                border: 1px solid #ccc;
                                                                                                border-radius: 4px;
                                                                                                vertical-align: middle;
                                                                                                font-size: 12px;">	
                                                                                                <datalist id="list_2">
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
                          <option value=""Kosice - KSC>Kosice - KSC</option>
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
												<br/>
												<label for="family">Total Number of Family</label>
												<input type="number" id="family" class="form-control" name="family" required min="0">

												<label for="children">Number of Children</label>
												<input type="number" id="children" class="form-control" name="child" required min="0">
												<br/>
												<label for="adults">Number of Adults</label>
												<input type="number" id="adults" class="form-control" name="adult" required min="0">

												<label for="from">Departure Date</label>
												<input type="date" class="form-control" name="from" id="fromdate">
												<label for="to">Return Date</label>
												<input type="date" class="form-control" name="to" id="todate"> 
												<!-- <div class="invisible">
													<label for="from">From date:</label>
													<input type="text" class="form-control" name="from" id="fromdate1">
													<label for="to">To date:</label>
													<input type="text" class="form-control" name="to" id="todate1">
												</div> -->
											
												<div class="btn">
													<button type="button" id="nextBtn1" class="btn btn-primary" style="background-color : #df9023;">Next</button>
												</div>
											</div>

										</div>
										<!-- Step 2: Travel Details -->
										<div id="step2" class="form-group" style="display: none;">
											<h3>Step 2: Personal Information</h3>
											<div class="step_1">
											    	<label for="name">Name</label>
												<input type="text" id="name" class="form-control" name="name" required>

												<label for="email">Email</label>
												<input type="email" id="email" class="form-control" name="email" required>

												<label for="phone">Phone Number</label>
												<input type="text" id="phone" class="form-control" name="phone">
												<br />
												<label for="address" style="padding-top: 20px;">Address</label>
												<input type="text" id="address" class="form-control" name="address" required>
												<br />
												

												<div class="btn mb-5">
													<button type="button" id="prevBtn2" class="btn btn-secondary"  style="background-color :#6489ae; color:#fff">Previous</button>
													<button type="button" id="nextBtn2" class="btn btn-primary" style="margin-right:10px;background-color : #df9023;">Next</button>
												</div>
											</div>
										</div>

										<!-- Step 3: Confirmation -->
										<div id="step3" class="form-group" style="display: none;">
											<h3>Step 3: Confirmation</h3>
											<div id="confirmation"></div>


											<div class="abc" style=" float: right;">

												<button type="button" id="prevBtn3" class="btn btn-secondary" style="margin-left:20px" >Previous</button>
												<button type="submit" class="btn btn-primary" name="submit" style="background-color : #df9023;">Confirm</button>
											</div>
										</div>
									</form>
				<!--					 <div class="modal fade" id="messagePopup" tabindex="-1" role="dialog" aria-labelledby="messagePopupLabel" aria-hidden="true" data-dismiss="modal">-->
    <!--    <div class="modal-dialog" role="document">-->
    <!--        <div class="modal-content">-->
    <!--            <div class="modal-body message-popup">-->
    <!--                <p>Your data is saved. Our agent will contact you soon.</p>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
								</div>

							</div>
 

						</div>

					</div><!--/.tabpannel-->

				</div><!--/.tab content-->
			</div><!--/.desc-tabs-->
		</div><!--/.single-travel-box-->
		</div><!--/.col-->
		</div><!--/.row-->
		</div><!--/.container-->
	

	</section><!--/.travel-box-->
	<!--travel-box end-->

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
	<section id="gallery" class="gallery">
		<div class="container">
			<div class="gallery-details">
				<div class="gallary-header text-center">
					<h2>
						top destination
					</h2>
					<p style="padding-left:75px; padding-right:75px">
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
                            	<div class="row">
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
										<img src="assets/images/gilgit.jpeg" alt="portfolio image" />
										<div class="item-title">
											<a href="#">
												Gilgit
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
	<section id="pack" class="packages">
		<div class="container">
			<div class="gallary-header text-center">
				<h2>
					special packages
				</h2>
				<p>
					Duis aute irure dolor in velit esse cillum dolore eu fugiat nulla.
				</p>
			</div><!--/.gallery-header-->
			<div class="packages-content">
				<div class="row">

					<div class="col-md-4 col-sm-6">
						<div class="single-package-item">
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
				<h2>
					clients reviews
				</h2>
				<p>
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

<section class="form" style="padding-top:20px">
<div class="container">
    <div class="row">
      <div class="col-md-6 info">
        <h2 style="color: #fff; margin-top:30px;margin-bottom:20px;padding-left:10px">Company Information</h2>
			<div class="style">
				<div class="location">
					<i class="fa-solid fa-location-dot"></i>
					<p><span style="color:#000;
					font-size:18px;font-weight:700;">
					Address:
					</span><br/>123 Main St, City, State</p>
				</div>
				<div class="location">
				<i class="fa-solid fa-envelope"></i><p><span style="color:#000;
					font-size:18px;font-weight:700;">
					Email:
					</span><br/>info@example.com</p>
					
				</div>
				<div class="location">
				<i class="fa-solid fa-phone"></i>
					<p><span style="color:#000;
					font-size:18px;font-weight:700;">
					Phone:
					</span><br/>555-123-4567</p>
				</div>
				
			</div>
		
      </div>
      <div class="col-md-6" style="padding-left:80px;padding-right:20px">
        <h2>Contact Us</h2>
		<div class="contact_from">

			<form>
				<div class="form-group">
					<!-- <label for="name">Name:</label> -->
					<input type="text" class="form-control" id="name" placeholder="Enter your name" style="width: 100%; height:45px; box-shadow:none">
				</div>
				<div class="form-group">
					<!-- <label for="email">Email:</label> -->
					<input type="email" class="form-control" id="email" placeholder="Enter your email" style="width: 100%;height:45px;box-shadow:none">
				</div>
				<div class="form-group">
					<!-- <label for="message">Message:</label> -->
					<textarea class="form-control" id="message" placeholder="Enter your message" style="width: 100%;height:100px;box-shadow:none"></textarea>
				</div>
				<button type="submit" class="btn btn-primary" style="background-color: #df9023;">Submit</button>
			</form>
		</div>
	</div>
    </div>
  </div>
</section>




	<
	<!--subscribe end-->

	<!-- footer-copyright start -->
	<footer class="footer-20192" >
      <div class="site-section">
        <div class="container">

          <div class="cta d-block d-md-flex align-items-center px-5">
            <div>
              <h2 class="mb-0">Existed to see world with Us?</h2>
              <h3 class="text-dark">Let's get started!</h3>
            </div>
            
          </div>
          <div class="row" >

            <div class="col-sm">
              <a href="#" class="footer-logo"><span style="color: #000;">ZIS</span>Travels</a>
             
            </div>
            
            <div class="col-sm">
              <h3>Site map</h3>
              <ul class="list-unstyled links">
                <li><a href="index.php">Home</a></li>
                <li><a href="#about">About us</a></li>
				<li><a href="#pack">Packages</a></li>
                <li><a href="#package">Contact us</a></li>
				<li><a href="#book">Book Now</a></li>
              </ul>
            </div>
            <div class="col-sm">
              <h3>Further Information</h3>
              <ul class="list-unstyled links">
                <li><a href="#">Terms &amp; Conditions</a></li>
                <li><a href="#">Privacy Policy</a></li>
              </ul>
            </div>
            <div class="col-md-3">
              <h3>Follow us</h3>
              <ul class="list-unstyled social">
                <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
               
              </ul>
            </div>
            
          </div>
        </div>
      </div>
	  <hr width="80%" style="margin-left:150px">
	  <p style="color: #fff; text-align:center">© 2023 zistravels.co.uk</p>
    </footer>
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
	<script>
	
  $(document).ready(function() {
            $('#ticketForm').submit(function(e) {
                e.preventDefault();

                // Show the message popup
                $('#messagePopup').modal('show');
            });
        });
        
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