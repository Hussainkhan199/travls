<?php
  require_once "./config/config.php";

  

?>

<html>

<head>
  <!-- <link rel="stylesheet" href="new.css"> -->
  <!-- <link rel="stylesheet" href="./assets/css/owl.carousel.min.css"> -->
  <link rel="stylesheet" href="./assets/css/new.css">
  <link rel="stylesheet" href="./assets/css/bootstrap.min.css">


</head>

<body>

  <div class="site-wrapper-home">
+
    <section>
      <div class="row full-width-search">
        <div class="container clear-padding">
          <div class="row">
            <div class="col-md-12 col-sm-12 search-section ">
              <div role="tabpanel">
                <!-- BEGIN: CATEGORY TAB -->
                <ul class="nav nav-tabs search-top" role="tablist" id="searchTab" style="margin-top:-20px;text-decoration: none; border:none;">
                  <li role="presentation" class="active text-center">
                    <a href="#flight" aria-controls="flight" role="tab" data-toggle="tab" style="content:none;">
                      <i class="fa fa-plane" style="padding-left:20px"></i>
                      <span>FLIGHTS</span>
                      <strong class="visible-xs">
                        <small>FLIGHTS</small>
                      </strong>
                    </a>
                  </li>
                </ul>

                <div class="tab-content">
                  <div role="tabpanel" class="tab-pane active p-b-20" id="flight">

                    <form autocomplete="off" method="post" action="https://www.zistravels.co.uk/onlinesearchresults"> <input type="hidden" name="_token" value="PrUfzxQaFaJWkrhAmgayKZiwsZOOLxWSXaX8U1lU">
                      <div class="row" style="padding-left:20px">
                        <div class="col-md-10 col-sm-12 col-xs-12 no-padding">
                          <div class="row" >
                            <div class="col-md-12 product-search-title">Find Your Perfect Trip </div>
                          </div>
                          <div class="row"  style="padding-left:20px; color: #F79617;">
                            <div class="col-md-12 search-col-padding">
                              <div class="row">
                                <div class="col-md-8 col-sm-7 col-xs-12 no-padding">
                                  <div class="col-md-3 col-sm-3 col-xs-4 no-padding">
                                    <div class="flight_type">
                                      <div class="select-box">
                                        <div class="select-box__current" tabindex="1">
                                          <div class="select-box__value">
                                            <input class="select-box__input" type="radio" id="0" value="Return" name="flight_type" checked="checked" />
                                            <p class="select-box__input-text" style="color:#F79617"> Round Trip</p>
                                          </div>
                                          <div class="select-box__value">
                                            <input class="select-box__input" type="radio" id="1" value="One Way" name="flight_type"  />
                                            <p class="select-box__input-text" > One Way</p>
                                            <i class="select-box__icon fa fa-angle-down"></i>
                                          </div>
                                        </div>
                                        <ul class="select-box__list">
                                          <li>
                                            <label class="select-box__option return-section" for="0">Round Trip</label>
                                          </li>
                                          <li>
                                            <label class="select-box__option oneway-section" for="1">One Way</label>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-4 col-sm-4 col-xs-5 no-padding">
                                    <div class="pax" >
                                      <span  style="color:#F79617">
                                        <i class="fa fa-angle-down" style="color:#fff"></i>&nbsp;Passenger(s) </span>
                                    </div>
                                  </div>
                                  <div class="col-md-5 col-sm-5 col-xs-3 no-padding">
                                    <div class="cabin_class">
                                      <div class="select-box">
                                        <div class="select-box__current" tabindex="1">
                                          <div class="select-box__value">
                                            <input class="select-box__input" type="radio" id="Economy" value="Economy" name="cabin_class" checked />
                                            <p class="select-box__input-text"  style="color:#F79617"> Economy</p>
                                          </div>
                                          <div class="select-box__value">
                                            <input class="select-box__input" type="radio" id="Premium_Economy" value="Premium Economy" name="cabin_class" />
                                            <p class="select-box__input-text"> Premium Class</p>
                                          </div>
                                          <div class="select-box__value">
                                            <input class="select-box__input" type="radio" id="Business_Class" value="Business Class" name="cabin_class" />
                                            <p class="select-box__input-text"> Business Class</p>
                                          </div>
                                          <div class="select-box__value">
                                            <input class="select-box__input" type="radio" id="First_Class" value="First Class" name="cabin_class" />
                                            <p class="select-box__input-text"> First Class</p>
                                          </div>
                                          <i class="select-box__icon fa fa-angle-down"></i>
                                        </div>
                                        <ul class="select-box__list">
                                          <li>
                                            <label class="select-box__option" for="Economy">Economy</label>
                                          </li>
                                          <li>
                                            <label class="select-box__option" for="Premium_Economy">Premium Class</label>
                                          </li>
                                          <li>
                                            <label class="select-box__option" for="Business_Class">Business Class</label>
                                          </li>
                                          <li>
                                            <label class="select-box__option" for="First_Class">First Class</label>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="passengers_details">
                                <div class="inn_pax">
                                  <div class="close_pax">
                                    <i class="fa fa-times"></i>
                                  </div>
                                  <div class="row">
                                    <div class="col-xs-6 search-col-padding">
                                      <label class="text-dark">Adults <br />
                                        <small>(12 or +)</small>
                                      </label>
                                    </div>
                                    <div class="col-xs-6 search-col-padding">
                                      <input id="adult_count" name="padults" value="1" class="form-control quantity-padding">
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-xs-6 search-col-padding">
                                      <label class="text-dark">Children <br />
                                        <small>(2 to 11)</small>
                                      </label>
                                    </div>
                                    <div class="col-xs-6 search-col-padding">
                                      <input type="text" id="child_count" name="pchildren" class="form-control quantity-padding">
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-xs-6 search-col-padding">
                                      <label class="text-dark">Infants <br />
                                        <small>(Below 2)</small>
                                      </label>
                                    </div>
                                    <div class="col-xs-6 search-col-padding">
                                      <input type="text" id="infant_count" name="pinfants" class="form-control quantity-padding">
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-2  visible-lg visible-md">
                          <div class="price-Guaranteed">
                            <img style="float:left; margin-right:10px;" src="https://www.zistravels.co.uk/assets/images/bestprice.png" alt="Best Price" width="80" height="70">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-6 search-col-padding">
                          <label>Flying From</label>
                         
                         
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
                         
                          <div class="input-group">
                            <select id="flight-from" name="flight_from" value="London Heathrow - LHR" class="flight-from form-control" type="text" list="list" autocomplete="on">
                          
                            </select>
                            <span class="input-group-addon">
                              <i class="fa fa-map-marker fa-fw"></i>
                            </span>
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6 search-col-padding">
                          <label>Flying To</label>
                          <div class="input-group">
                            <input id="flight-to" name="flight_to" placeholder="Enter your destination" class="flight-to form-control" type="text">
                            <span class="input-group-addon">
                              <i class="fa fa-map-marker fa-fw"></i>
                            </span>
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6 search-col-padding">
                          <label>Departure Date</label>
                          <div class="input-group">
                            <input name="departure_date" type="text" class="form-control" id="departure_date" placeholder="Enter Departure Date">
                            <span class="input-group-addon">
                              <i class="fa fa-calendar fa-fw"></i>
                            </span>
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6 search-col-padding return-date-selection">
                          <label>Return Date</label>
                          <div class="input-group">
                            <input name="return_date" type="text" class="form-control" id="return_date" placeholder="Enter Returning Date">
                            <span class="input-group-addon">
                              <i class="fa fa-calendar fa-fw"></i>
                            </span>
                          </div>
                        </div>
                        <!--<div class="col-md-3 col-sm-6 col-xs-6 search-col-padding">-->
                        <!--  <label>Name *</label>-->
                        <!--  <div class="input-group">-->
                        <!--    <input name="customer_name" type="text" required class="form-control" placeholder="Enter your name">-->
                        <!--    <span class="input-group-addon">-->
                        <!--      <i class="fa fa-user fa-fw"></i>-->
                        <!--    </span>-->
                        <!--  </div>-->
                        <!--</div>-->
                        <div class="col-md-3 col-sm-6 col-xs-6 search-col-padding">
                          <label>Email *</label>
                          <div class="input-group">
                            <input name="customer_email" type="email" required class="form-control" placeholder="Enter your email">
                            <span class="input-group-addon">
                              <i class="fa fa-envelope fa-fw"></i>
                            </span>
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6 search-col-padding">
                          <label>Phone *</label>
                          <div class="input-group">
                            <input name="customer_phone" type="text" class="form-control" placeholder="Enter your Phone">
                            <span class="input-group-addon">
                              <i class="fa fa-user fa-fw"></i>
                            </span>
                          </div>
                        </div>
                        <div class="col-md-1 col-sm-3 col-xs-12  search-col-padding">
                          <button type="submit" id="searchButton" class="search-button btn transition-effect" style="height:35px !important;">
                            <i class="fa fa-search hidden-sm hidden-xs"></i>
                            <span class="visible-sm visible-xs">&nbsp;Search</span>
                          </button>
                        </div>
                        <!--<div class="col-sm-12 col-md-12 col-lg-4" style="float: right; margin-top: 20px;"> <div class="g-recaptcha" data-sitekey="6LemiI4mAAAAAMG6wPVY6AsRnJdhfhJWqhlORjPo" data-size="normal" data-theme="light" id="recaptcha-element"></div> </div>-->
                      </div>
                    </form>


                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script>
      var values = [{
        "id": 1,
        "city": "Adelaide - ADL"
      }, {
        "id": 2,
        "city": "Agana - GUM"
      }, {
        "id": 3,
        "city": "Brisbane - BNE"
      }, {
        "id": 4,
        "city": "Christchurch - CHC"
      }, {
        "id": 5,
        "city": "Dunedin - DUD"
      }, {
        "id": 6,
        "city": "Georgetown - GEO"
      }, {
        "id": 7,
        "city": "Gold-Coast - OOL"
      }, {
        "id": 8,
        "city": "Hamilton (BDA)"
      }, {
        "id": 9,
        "city": "Kathmandu - KTM"
      }, {
        "id": 10,
        "city": "La Paz - LPB"
      }, {
        "id": 11,
        "city": "Mexico City - AZP"
      }, {
        "id": 12,
        "city": "Nelson - NSN"
      }, {
        "id": 13,
        "city": "Panama-City - PTY"
      }, {
        "id": 14,
        "city": "Papeete - PPT"
      }, {
        "id": 15,
        "city": "Queenstown - ZQN"
      }, {
        "id": 16,
        "city": "Rio de Janeiro - GIG"
      }, {
        "id": 17,
        "city": "Sao Paulo - GRU"
      }, {
        "id": 18,
        "city": "St Georges - GND"
      }, {
        "id": 19,
        "city": "Toronto - YYZ"
      }, {
        "id": 20,
        "city": "Vancouver - YVR"
      }, {
        "id": 21,
        "city": "Abidjan - ABJ"
      }, {
        "id": 22,
        "city": "Abuja - ABV"
      }, {
        "id": 23,
        "city": "ACCRA - ACC"
      }, {
        "id": 24,
        "city": "Addis Ababa - ADD"
      }, {
        "id": 25,
        "city": "Agadir - AGA"
      }, {
        "id": 26,
        "city": "Algiers - ALG"
      }, {
        "id": 27,
        "city": "Antananarivo - TNR"
      }, {
        "id": 28,
        "city": "Antigua - ANU"
      }, {
        "id": 29,
        "city": "Asmara - ASM"
      }, {
        "id": 30,
        "city": "Asuncion - ASU"
      }, {
        "id": 31,
        "city": "Auckland - AKL"
      }, {
        "id": 32,
        "city": "Bahrain - BAH"
      }, {
        "id": 33,
        "city": "Bamako - BKO"
      }, {
        "id": 34,
        "city": "Bandar Seri Begawan"
      }, {
        "id": 35,
        "city": "BANGKOK-BKK"
      }, {
        "id": 36,
        "city": "Banjul - BJL"
      }, {
        "id": 37,
        "city": "Beijing - BJS"
      }, {
        "id": 38,
        "city": "Beira - BEW"
      }, {
        "id": 39,
        "city": "Benghazi - BEN"
      }, {
        "id": 40,
        "city": "Bloemfontein - BFN"
      }, {
        "id": 41,
        "city": "Bogota - BOG"
      }, {
        "id": 42,
        "city": "Boston - BOS"
      }, {
        "id": 43,
        "city": "Brasilia - BSB"
      }, {
        "id": 44,
        "city": "Bridgetown - BGI"
      }, {
        "id": 45,
        "city": "Buenos-Aires - BUE"
      }, {
        "id": 46,
        "city": "Bujumbura - BJM"
      }, {
        "id": 47,
        "city": "Cairns - CNS"
      }, {
        "id": 48,
        "city": "Cali - CLO"
      }, {
        "id": 49,
        "city": "Canberra - CBR"
      }, {
        "id": 50,
        "city": "Cape Town - CPT"
      }, {
        "id": 51,
        "city": "Casablanca - CMN"
      }, {
        "id": 52,
        "city": "Cebu - CEB"
      }, {
        "id": 53,
        "city": "Chittagong - CGP"
      }, {
        "id": 54,
        "city": "Conakry - CKY"
      }, {
        "id": 55,
        "city": "Cordoba - COR"
      }, {
        "id": 56,
        "city": "Dakar - DKR"
      }, {
        "id": 57,
        "city": "Darwin - DRW"
      }, {
        "id": 58,
        "city": "Denpasar - DPS"
      }, {
        "id": 59,
        "city": "Dhaka - DAC"
      }, {
        "id": 60,
        "city": "Djibouti - JIB"
      }, {
        "id": 61,
        "city": "Douala - DLA"
      }, {
        "id": 62,
        "city": "Dubai - DXB"
      }, {
        "id": 63,
        "city": "Durban - DUR"
      }, {
        "id": 64,
        "city": "East London - ELS"
      }, {
        "id": 65,
        "city": "Essaouira - ESU"
      }, {
        "id": 66,
        "city": "Fez - FEZ"
      }, {
        "id": 67,
        "city": "Freetown - FNA"
      }, {
        "id": 68,
        "city": "Gaborone - GBE"
      }, {
        "id": 69,
        "city": "George-Town-KY\u00c2\u00a0"
      }, {
        "id": 70,
        "city": "Goa - GOI"
      }, {
        "id": 71,
        "city": "Guayaquil - GYE"
      }, {
        "id": 72,
        "city": "Hargeisa - HGA"
      }, {
        "id": 73,
        "city": "Ho Chi Minh City - S"
      }, {
        "id": 74,
        "city": "Hong Kong - HKG"
      }, {
        "id": 75,
        "city": "Jeddah - JED"
      }, {
        "id": 76,
        "city": "Johannesburg - JNB"
      }, {
        "id": 77,
        "city": "Kabul - KBL"
      }, {
        "id": 78,
        "city": "Kano - KAN"
      }, {
        "id": 79,
        "city": "Karachi - KHI"
      }, {
        "id": 80,
        "city": "Kigali - KGL"
      }, {
        "id": 81,
        "city": "Kimberley - KIM"
      }, {
        "id": 82,
        "city": "Kingston - KIN"
      }, {
        "id": 83,
        "city": "Kisumu - KIS"
      }, {
        "id": 84,
        "city": "Kuala Lumpur - KUL"
      }, {
        "id": 85,
        "city": "LAGOS - LOS"
      }, {
        "id": 86,
        "city": "Lahore - LHE"
      }, {
        "id": 87,
        "city": "Las Vegas - LAS"
      }, {
        "id": 88,
        "city": "Liberia - LIR"
      }, {
        "id": 89,
        "city": "Libreville - LBV"
      }, {
        "id": 90,
        "city": "Lilongwe - LLW"
      }, {
        "id": 91,
        "city": "Lima - LIM"
      }, {
        "id": 92,
        "city": "Luanda - LAD"
      }, {
        "id": 93,
        "city": "Maiquetia - CCS"
      }, {
        "id": 94,
        "city": "Malabo - SSG"
      }, {
        "id": 95,
        "city": "Malindi - MYD"
      }, {
        "id": 96,
        "city": "Manila - MNL"
      }, {
        "id": 97,
        "city": "Maputo - MPM"
      }, {
        "id": 98,
        "city": "Marrakech - RAK"
      }, {
        "id": 99,
        "city": "Maseru - MSU"
      }, {
        "id": 100,
        "city": "Mombasa - MBA"
      }, {
        "id": 101,
        "city": "Monrovia - ROB"
      }, {
        "id": 102,
        "city": "Montevideo - MVD"
      }, {
        "id": 103,
        "city": "Moroni - YVA"
      }, {
        "id": 104,
        "city": "Mumbai - BOM"
      }, {
        "id": 105,
        "city": "Nadi - NAN"
      }, {
        "id": 106,
        "city": "Nairobi - NBO"
      }, {
        "id": 107,
        "city": "Napier - NPE"
      }, {
        "id": 108,
        "city": "Nassau - NAS"
      }, {
        "id": 109,
        "city": "NDjamena - NDJ"
      }, {
        "id": 110,
        "city": "New York - JFK"
      }, {
        "id": 111,
        "city": "Niamey - NIM"
      }, {
        "id": 112,
        "city": "Nouakchott - NKC"
      }, {
        "id": 113,
        "city": "Noumea - GEA"
      }, {
        "id": 114,
        "city": "Ouarzazate - OZZ"
      }, {
        "id": 115,
        "city": "Oujda - OUD"
      }, {
        "id": 116,
        "city": "Paramaribo - PBM"
      }, {
        "id": 117,
        "city": "Perth - PER"
      }, {
        "id": 118,
        "city": "Philipsburg - SXM"
      }, {
        "id": 119,
        "city": "Phnom Penh - PNH"
      }, {
        "id": 120,
        "city": "Port Harcourt - PHC\r"
      }, {
        "id": 121,
        "city": "Port louis - MRU"
      }, {
        "id": 122,
        "city": "Quebec - YQB"
      }, {
        "id": 123,
        "city": "Quito - UIO"
      }, {
        "id": 124,
        "city": "Wellington - WLG"
      }, {
        "id": 125,
        "city": "Rabat - RBA"
      }, {
        "id": 126,
        "city": "Rarotonga - RAR"
      }, {
        "id": 127,
        "city": "Rodrigues Island - R"
      }, {
        "id": 128,
        "city": "Salvador - SSA"
      }, {
        "id": 129,
        "city": "San Francisco - SFO\r"
      }, {
        "id": 130,
        "city": "San-Salvador - SAL"
      }, {
        "id": 131,
        "city": "Santa Cruz - SRZ"
      }, {
        "id": 132,
        "city": "Santiago - SCL"
      }, {
        "id": 133,
        "city": "Seoul - ICN"
      }, {
        "id": 134,
        "city": "Siem Reap - REP"
      }, {
        "id": 135,
        "city": "Singapore - SIN"
      }, {
        "id": 136,
        "city": "St-Lucia - UVF"
      }, {
        "id": 137,
        "city": "Sydney - SYD"
      }, {
        "id": 138,
        "city": "Taipei - TPE"
      }, {
        "id": 139,
        "city": "Tangier - TNG"
      }, {
        "id": 140,
        "city": "Tokyo - HND"
      }, {
        "id": 141,
        "city": "Tripoli - TIP"
      }, {
        "id": 142,
        "city": "Walvis Bay - WVB"
      }, {
        "id": 143,
        "city": "Washington - DCA"
      }, {
        "id": 144,
        "city": "Windhoek - WDH"
      }, {
        "id": 145,
        "city": "Yaounde - NSI"
      }, {
        "id": 146,
        "city": "Aalborg - AAL"
      }, {
        "id": 147,
        "city": "Aalesund - AES"
      }, {
        "id": 148,
        "city": "Alicante - ALC"
      }, {
        "id": 149,
        "city": "Alta - ALS"
      }, {
        "id": 150,
        "city": "Amsterdam - AMS"
      }, {
        "id": 151,
        "city": "Arad - ARW"
      }, {
        "id": 152,
        "city": "Athens - ATH"
      }, {
        "id": 153,
        "city": "Bacau - BCM"
      }, {
        "id": 154,
        "city": "Baia Mare - BAY"
      }, {
        "id": 155,
        "city": "Baku - BAK"
      }, {
        "id": 156,
        "city": "Barcelona - BCM"
      }, {
        "id": 157,
        "city": "Bergen - BGO"
      }, {
        "id": 158,
        "city": "Bergerac - EGC"
      }, {
        "id": 159,
        "city": "Billund - BLL"
      }, {
        "id": 160,
        "city": "Bodo - BOO"
      }, {
        "id": 161,
        "city": "Bordeaux - BOD"
      }, {
        "id": 162,
        "city": "Bourgas - DOJ"
      }, {
        "id": 163,
        "city": "Bratislava - BTS"
      }, {
        "id": 164,
        "city": "Brno - BRQ"
      }, {
        "id": 165,
        "city": "Brussels - BRU"
      }, {
        "id": 166,
        "city": "Bucharest - BBU"
      }, {
        "id": 167,
        "city": "Budapest - BUD"
      }, {
        "id": 168,
        "city": "Cagliari - CAG"
      }, {
        "id": 169,
        "city": "Chisinau - KIV"
      }, {
        "id": 170,
        "city": "Cologne - CGN"
      }, {
        "id": 171,
        "city": "Copenhagen - CPH"
      }, {
        "id": 172,
        "city": "Dortmund - DTM"
      }, {
        "id": 173,
        "city": "Dublin - DUB"
      }, {
        "id": 174,
        "city": "Dubrovnik - DBV"
      }, {
        "id": 175,
        "city": "Dusseldorf - DUS"
      }, {
        "id": 176,
        "city": "EaSt london-ELS"
      }, {
        "id": 177,
        "city": "Eindhoven - EIN"
      }, {
        "id": 178,
        "city": "Entebbe -Ebb"
      }, {
        "id": 179,
        "city": "Ercan - ECN"
      }, {
        "id": 180,
        "city": "Florence - FLR"
      }, {
        "id": 181,
        "city": "Frankfurt - FRA"
      }, {
        "id": 182,
        "city": "Gdansk - GDN"
      }, {
        "id": 183,
        "city": "Gothenburg - GOT"
      }, {
        "id": 184,
        "city": "Graz - GRZ"
      }, {
        "id": 185,
        "city": "Hamburg - HAM"
      }, {
        "id": 186,
        "city": "Hanover - HAJ"
      }, {
        "id": 187,
        "city": "Harare-Hre"
      }, {
        "id": 188,
        "city": "Haugesund - HAU"
      }, {
        "id": 189,
        "city": "Helsinki - HEL"
      }, {
        "id": 190,
        "city": "Ibiza - IBZ"
      }, {
        "id": 191,
        "city": "Innsbruck - INN"
      }, {
        "id": 192,
        "city": "Kajaani - KAJ"
      }, {
        "id": 193,
        "city": "kano-Kan"
      }, {
        "id": 194,
        "city": "Katowice - KTW"
      }, {
        "id": 195,
        "city": "Kaunas - KUN"
      }, {
        "id": 196,
        "city": "Kefalonia - EFL"
      }, {
        "id": 197,
        "city": "Knock - NOC"
      }, {
        "id": 198,
        "city": "Kos - KGS"
      }, {
        "id": 199,
        "city": "Kosice - KSC"
      }, {
        "id": 200,
        "city": "Krakow - KRK"
      }, {
        "id": 201,
        "city": "Kuopio - KUO"
      }, {
        "id": 202,
        "city": "La Rochelle - LRH"
      }, {
        "id": 203,
        "city": "Larnaca - LCA"
      }, {
        "id": 204,
        "city": "Las Palmas - LPA"
      }, {
        "id": 205,
        "city": "Linz - LNZ"
      }, {
        "id": 206,
        "city": "Lisbon - LIS"
      }, {
        "id": 207,
        "city": "Ljubljana - LJU"
      }, {
        "id": 208,
        "city": "Lusaka -Lun"
      }, {
        "id": 209,
        "city": "Luxembourg - LUX"
      }, {
        "id": 210,
        "city": "Madrid - MAD"
      }, {
        "id": 211,
        "city": "Mikonos - JMK"
      }, {
        "id": 212,
        "city": "Milan - LIN"
      }, {
        "id": 213,
        "city": "Naples - NAP"
      }, {
        "id": 214,
        "city": "Nice - NCE"
      }, {
        "id": 215,
        "city": "Olbia - OLB"
      }, {
        "id": 216,
        "city": "Oslo - OSL"
      }, {
        "id": 217,
        "city": "Ostrava - OSR"
      }, {
        "id": 218,
        "city": "Oulu - OUL"
      }, {
        "id": 219,
        "city": "Palermo - PMO"
      }, {
        "id": 220,
        "city": "Paphos - PFO"
      }, {
        "id": 221,
        "city": "Paris - CDE"
      }, {
        "id": 222,
        "city": "Poznan - POZ"
      }, {
        "id": 223,
        "city": "Prague - PRG"
      }, {
        "id": 224,
        "city": "Pula - PUY"
      }, {
        "id": 225,
        "city": "Rennes - RMS"
      }, {
        "id": 226,
        "city": "Reykjavik- KEF"
      }, {
        "id": 227,
        "city": "Rhodes - RHO"
      }, {
        "id": 228,
        "city": "Riga - RIX"
      }, {
        "id": 229,
        "city": "Rome - FCO"
      }, {
        "id": 230,
        "city": "Rotterdam - RTM"
      }, {
        "id": 231,
        "city": "Rovaniemi - RVN"
      }, {
        "id": 232,
        "city": "Rzeszow - RZE"
      }, {
        "id": 233,
        "city": "Samos - SMI"
      }, {
        "id": 234,
        "city": "Shannon - SNN"
      }, {
        "id": 235,
        "city": "Sibiu - SBZ"
      }, {
        "id": 236,
        "city": "Skopje - SKP"
      }, {
        "id": 237,
        "city": "Sofia - SOF"
      }, {
        "id": 238,
        "city": "Split - SPU"
      }, {
        "id": 239,
        "city": "Stuttgart - STR"
      }, {
        "id": 240,
        "city": "Tallinn - TTL"
      }, {
        "id": 241,
        "city": "Tampere - TMP"
      }, {
        "id": 242,
        "city": "Tbilisi - TBS"
      }, {
        "id": 243,
        "city": "Tenerife - TFN"
      }, {
        "id": 244,
        "city": "Thessaloniki - SKG"
      }, {
        "id": 245,
        "city": "Thira - JTR"
      }, {
        "id": 246,
        "city": "Tirana - TIA"
      }, {
        "id": 247,
        "city": "Toulouse - TLS"
      }, {
        "id": 248,
        "city": "Trondheim - TRD"
      }, {
        "id": 249,
        "city": "Varna - VAR"
      }, {
        "id": 250,
        "city": "Venice - VCE"
      }, {
        "id": 251,
        "city": "Verona - VRN"
      }, {
        "id": 252,
        "city": "Vienna - VIE"
      }, {
        "id": 253,
        "city": "Vilnius - VNO"
      }, {
        "id": 254,
        "city": "Warsaw - WAW"
      }, {
        "id": 255,
        "city": "Wroclaw - WRO"
      }, {
        "id": 256,
        "city": "Yerevan - EVN"
      }, {
        "id": 257,
        "city": "Zadar - ZAD"
      }, {
        "id": 258,
        "city": "Zagreb - ZAG"
      }, {
        "id": 259,
        "city": "Dar es Salaam"
      }, {
        "id": 273,
        "city": "Islamabad - ISB"
      }, {
        "id": 274,
        "city": "Abu Dhabi - AUH"
      }, {
        "id": 275,
        "city": "Amritsar - ATQ"
      }, {
        "id": 276,
        "city": "Cairo - CAI"
      }, {
        "id": 277,
        "city": "Colombo - CMB"
      }, {
        "id": 278,
        "city": "Doha - DOH"
      }, {
        "id": 279,
        "city": "Delhi - DEL"
      }, {
        "id": 280,
        "city": "Guangzhou - CAN"
      }, {
        "id": 281,
        "city": "Hyderabad - HYD"
      }, {
        "id": 282,
        "city": "Istanbol - IST"
      }, {
        "id": 283,
        "city": "Kuwait - KWI"
      }, {
        "id": 284,
        "city": "Zurich - ZRH"
      }, {
        "id": 285,
        "city": "Kinhasa - FIH"
      }, {
        "id": 286,
        "city": "Quetta - UET"
      }, {
        "id": 287,
        "city": "Sialkot - SKT"
      }, {
        "id": 288,
        "city": "Faisalabad - LYP"
      }, {
        "id": 289,
        "city": "Multan - MUX"
      }, {
        "id": 291,
        "city": "Peshawar - PEW"
      }];
      var airports = [{
        "id": 1,
        "city": "London Heathrow",
        "code": "LHR",
        "percentage": 0
      }, {
        "id": 2,
        "city": "London Gatwick",
        "code": "LGW",
        "percentage": -3
      }, {
        "id": 3,
        "city": "Manchester",
        "code": "MAN",
        "percentage": 4
      }, {
        "id": 4,
        "city": "London Stansted",
        "code": "STN",
        "percentage": 5
      }, {
        "id": 5,
        "city": "London Luton",
        "code": "LTN",
        "percentage": 6
      }, {
        "id": 6,
        "city": "Edinburgh",
        "code": "EDI",
        "percentage": 5
      }, {
        "id": 7,
        "city": "Birmingham International",
        "code": "BHX",
        "percentage": 4
      }, {
        "id": 8,
        "city": "Glasgow International",
        "code": "GLA",
        "percentage": 11
      }, {
        "id": 9,
        "city": "Bristol International",
        "code": "BRS",
        "percentage": 12
      }, {
        "id": 10,
        "city": "Newcastle",
        "code": "NCL",
        "percentage": 14
      }, {
        "id": 11,
        "city": "East Midlands",
        "code": "EMA",
        "percentage": 12
      }, {
        "id": 12,
        "city": "Belfast International",
        "code": "BFS",
        "percentage": 16
      }, {
        "id": 13,
        "city": "Liverpool John Lennon",
        "code": "LPL",
        "percentage": 13
      }, {
        "id": 14,
        "city": "London City",
        "code": "LCY",
        "percentage": 16
      }, {
        "id": 15,
        "city": "Leeds Bradford",
        "code": "LBA",
        "percentage": 17
      }, {
        "id": 16,
        "city": "Aberdeen Dyce",
        "code": "ABZ",
        "percentage": 15
      }, {
        "id": 17,
        "city": "George Best Belfast City",
        "code": "BHD",
        "percentage": 15
      }, {
        "id": 18,
        "city": "Southampton",
        "code": "SOU",
        "percentage": 18
      }, {
        "id": 19,
        "city": "Cardiff International",
        "code": "CWL",
        "percentage": 20
      }, {
        "id": 20,
        "city": "Southend",
        "code": "SEN",
        "percentage": 21
      }];

      // Convert the values to an array of strings
      values = Object.values(values).map(function(obj) {
        return obj.city;
      });

      airports = Object.values(airports).map(function(obj) {
        return obj.city;
      });

      $(document).ready(function() {
        $('.flight-from').autocomplete({
          source: values
        });

        $('.flight-to').autocomplete({
          source: values
        });

        $('#destination').autocomplete({
          source: values
        });
      });

      function checkFromTo() {
        var flight_from = $('#flight-from').val();
        var flight_to = $('#flight-to').val();

        // debugger

        if (jQuery.inArray(flight_from, airports) >= 0 || jQuery.inArray(flight_to, airports) >= 0) {

        } else {
          $('#multi-city-form').attr("action", "request-callback");
        }

      }
      window.addEventListener('load', function() {
        var loader = document.getElementById('loader');
        if (loader) {
          loader.style.display = 'none';
        }
      });
    </script>

</body>

</html>