<?php
if(isset($_GET['state']))
{
      $state=$_GET['state'];


      if($state=="Andaman and Nicobar")
      {
      echo '<option value="0">Select any</option><option value="1">Nicobar</option>
            <option value="2">North and Middle Andaman</option>
            <option value="3">South Andaman</option>';  
      }

      else if($state=="Andhra Pradesh")
      {
      echo '<option value="0">Select any</option>
            <option value="1">Ananthpur</option>
            <option value="2">Chittoor</option>
            <option value="3">Cuddapah</option>
            <option value="4">East Godavari</option>
            <option value="5">Guntur</option>
            <option value="6">Krishna</option>
            <option value="7">Kurnool</option>
            <option value="8">Nellore</option>
            <option value="9">Prakasam</option>
            <option value="10">Srikakulam</option>
            <option value="11">Visakhapatnam</option>
            <option value="12">Vizianagaram</option>
            <option value="13">West Godavari</option>
            <option value="14">Vijayawada</option>';
      }

      else if($state=="Arunachal Pradesh")
      {
      echo '<option value="0">Select any</option>
            <option value="1">Anjaw</option>
            <option value="2">Longding</option>
            <option value="3">Changlang</option>
            <option value="4">Dibang Valley</option>
            <option value="5">East Kameng</option>
            <option value="6">East Slang</option>
            <option value="7">Kurung Kurney</option>
            <option value="8">Lohit</option>
            <option value="9">Lower Dibang Valley</option>
            <option value="10">Lower Subansiri</option>
            <option value="11">Papum Pare</option>
            <option value="12">Tawang</option>
            <option value="13">Tirap</option>
            <option value="14">Upper Slang</option>
            <option value="15">Upper Subansiri</option>
            <option value="16">West Kameng</option>
            <option value="17">West Slang</option>';

      }
      else if($state=="Assam")
      {
      echo '<option value="0">Select any</option>
            <option value="1">Baksa</option><option value="2">Dima Hasao</option><option value="3">Kamrup Metro</option><option value="4">Chirang</option><option value="5">Barpeta</option><option value="6">Bongaigaon</option><option value="7">Cachar</option><option value="8">Darrang</option><option value="9">Dhemji</option><option value="10">Dhubri</option><option value="11">Dibrugarh</option><option value="12">Goalpara</option><option value="13">Golaghat</option><option value="14">Hailakandi</option><option value="15">Jorhat</option><option value="16">Kamrup</option><option value="17">Karbi Anglong</option><option value="18">Karimganj</option><option value="19">Kokrajhar</option><option value="20">Lakhimpur</option><option value="21">Nagaon</option><option value="22">Nalbari</option><option value="23">North Cachar Hills</option><option value="24">Sibsagar</option><option value="25">Sonitpur</option><option value="26">Tinsukia</option><option value="27">Guwahati</option>';

      }

      else if($state=="Bihar")
      echo '<option value="0">Select any</option>
            <option value="1">Araria</option>
            <option value="2">Arwal</option>
            <option value="3">Aurangabad</option>
            <option value="4">Banka</option>
            <option value="5">Begusarai</option>
            <option value="6">Bhagalpur</option>
            <option value="7">Bhojpur</option>
            <option value="8">Buxar</option>
            <option value="9">Darbhanga</option>
            <option value="10">East Champaran</option>
            <option value="11">Gaya</option>
            <option value="12">Gopalganj</option>
            <option value="13">Jamui</option>
            <option value="14">Jehanabad</option>
            <option value="15">Kaimur</option>
            <option value="16">Katihar</option>
            <option value="17">Khagaria</option>
            <option value="18">Kishanganj</option>
            <option value="19">Lakhisarai</option>
            <option value="20">Madhepura</option>
            <option value="21">Madhubani</option>
            <option value="22">Monghyr</option>
            <option value="23">Muzzafarpur</option>
            <option value="24">Nalanda</option>
            <option value="25">Nawada</option>
            <option value="26">Patna</option>
            <option value="27">Purnea</option>
            <option value="28">Rohtas</option>
            <option value="29">Saharsa</option>
            <option value="30">Samastipur</option>
            <option value="31">Saran</option>
            <option value="32">Shiekhpur</option>
            <option value="33">Sheohar</option>
            <option value="34">Sitamarhi</option>
            <option value="35">Siwan</option>
            <option value="36">Supaul</option>
            <option value="37">Vaishali</option>
            <option value="38">West Champaran</option>';

      else if($state=="Chandigarh")
      echo '<option value="0">Select any</option>
            <option value="1">Chandigarh</option>';

      else if($state=="Chhattisgarh")
      echo '<option value="0">Select any</option>
            <option value="1">Balod</option>
            <option value="2">Baloda Bazar</option>
            <option value="3">Balrampur</option>
            <option value="4">Bastar</option>
            <option value="5">Bemetara</option>
            <option value="6">Bijapur</option>
            <option value="7">Bilaspur</option>
            <option value="8">Dantewada (South Bastar)</option>
            <option value="9">Dhamtari</option>
            <option value="10">Durg</option>
            <option value="11">Gariyaband</option>
            <option value="12">Janjgir-Champa</option>
            <option value="13">Jashpur</option>
            <option value="14">Kabirdham (Kawardha)</option>
            <option value="15">Kanker (North Bastar)</option>
            <option value="16">Kondagaon</option>
            <option value="17">Korba</option>
            <option value="18">Korea (Koriya)</option>
            <option value="19">Mahasamund</option>
            <option value="20">Mungeli</option>
            <option value="21">Narayanpur</option>
            <option value="22">Raigarh</option>
            <option value="23">Raipur</option>
            <option value="24">Rajnandgaon</option>
            <option value="25">Sukma</option>
            <option value="26">Surajpur</option>
            <option value="27">Surguja</option>';

      else if($state=="Dadar and nagar haveli")
      echo '<option value="0">Select any</option>
            <option value="1">Dadar and Nagar Haveli</option>';

      else if($state=="Daman and diu")
      echo '<option value="0">Select any</option>
            <option value="1">Daman</option>
            <option value="2">Diu</option>';

      else if($state=="Delhi")
      echo '<option value="0">Select any</option>
            <option value="1">Central Delhi</option>
            <option value="2">North Delhi</option>
            <option value="3">South Delhi</option>
            <option value="4">East Delhi</option>
            <option value="5">North East Delhi</option>
            <option value="6">South West Delhi</option>
            <option value="7">New Delhi</option>
            <option value="8">North West Delhi</option>
            <option value="9">West Delhi</option>
            <option value="10">Shahdara</option>
            <option value="11">South Eest Delhi</option>';

      else if($state=="Goa")
      echo '<option value="0">Select any</option>
            <option value="1">North Goa</option>
            <option value="2">South Goa</option>';

      else if($state=="Gujarat")
      echo '<option value="0">Select any</option>
            <option value="1">Kutch</option>
            <option value="2">Ahmedabad</option>
            <option value="3">Anand</option>
            <option value="4">Chhota Udaipur</option>
            <option value="5">Dahod</option>
            <option value="6">Kheda</option>
            <option value="7">Mahisagar</option>
            <option value="8">Panchmahal</option>
            <option value="9">Vadodara</option>
            <option value="10">Aravalli</option>
            <option value="11">Banaskantha</option>
            <option value="12">Gandhinagar</option>
            <option value="13">Mehsana</option>
            <option value="14">Patan</option>
            <option value="15">Sabarkantha</option>
            <option value="16">Amreli</option>
            <option value="17">Bhavnagar</option>
            <option value="18">Botad</option>
            <option value="19">Devbhoomi Dwarka</option>
            <option value="20">Gir Somnath</option>
            <option value="21">Jamnagar</option>
            <option value="22">Junagadh</option>
            <option value="23">Morbi</option>
            <option value="24">Porbandar</option>
            <option value="25">Rajkot</option>
            <option value="26">Surendranagar</option>
            <option value="27">Bharuch</option>
            <option value="28">Dang</option>
            <option value="29">Narmada</option>
            <option value="30">Navsari</option>
            <option value="31">Surat</option>
            <option value="32">Tapi</option>
            <option value="33">Valsad</option>';

      else if($state=="Haryana")
      echo '<option value="0">Select any</option>
            <option value="1">Ambala</option>
            <option value="2">Bhiwani</option>
            <option value="3">Charkhi Dadri</option>
            <option value="4">Faridabad</option>
            <option value="5">Fatehabad</option>
            <option value="6">Gurugramn</option>
            <option value="7">Hisar</option>
            <option value="8">Jhajjar</option>
            <option value="9">Jind</option>
            <option value="10">Kaithal</option>
            <option value="11">Karnal</option>
            <option value="12">Kurukshetra</option>
            <option value="13">Mahendragarh</option>
            <option value="14">Nuh</option>
            <option value="15">Palwal</option>
            <option value="16">Panchkula</option>
            <option value="17">Panipat</option>
            <option value="18">Rewari</option>
            <option value="19">Rohtak</option>
            <option value="20">Sirsa</option>
            <option value="21">Sonipat</option>
            <option value="22">Yamunanagar</option>';

      else if($state=="Himachal Pradesh")
      echo '<option value="0">Select any</option>
            <option value="1">Bilaspur</option>
            <option value="2">Chamba</option>
            <option value="3">Hamirpur</option>
            <option value="4">Kangra</option>
            <option value="5">Kinnaur</option>
            <option value="6">Kullu</option>
            <option value="7">Lahaul</option>
            <option value="8">Mandi</option>
            <option value="9">Shimla</option>
            <option value="10">Sirmaur</option>
            <option value="11">Solan</option>
            <option value="12">Una</option>';

      else if($state=="Jammu and Kashmir")
      echo '<option value="0">Select any</option>
            <option value="1">Anantnag</option>
            <option value="2">Bandipore</option>
            <option value="3">Baramulla</option>
            <option value="4">Budgam</option>
            <option value="5">Doda</option>
            <option value="6">Ganderbal</option>
            <option value="7">Jammu</option>
            <option value="8">Kargil</option>
            <option value="9">Kathua</option>
            <option value="10">Kishtwar</option>
            <option value="11">Kulgam</option>
            <option value="12">Kupwara</option>
            <option value="13">Leh</option>
            <option value="14">Poonch</option>
            <option value="15">Pulwama</option>
            <option value="16">Rajouri</option>
            <option value="17">Ramban</option>
            <option value="18">Reasi</option>
            <option value="19">Samba</option>
            <option value="20">Shopian</option>
            <option value="21">Srinagar</option>
            <option value="22">Udhampur</option>';

      else if($state=="Jharkhand")
      echo '<option value="0">Select any</option>
            <option value="1">Bokaro</option>
            <option value="2">Chatra</option>
            <option value="3">Deoghar</option>
            <option value="4">Dhanbad</option>
            <option value="5">Dumka</option>
            <option value="6">East Singhbhum</option>
            <option value="7">Garhwa</option>
            <option value="8">Giridih</option>
            <option value="9">Godda</option>
            <option value="10">Gumla</option>
            <option value="11">Hazaribag</option>
            <option value="12">Jamtara</option>
            <option value="13">Khunti</option>
            <option value="14">Koderma</option>
            <option value="15">Latehar</option>
            <option value="16">Lohardaga</option>
            <option value="17">Pakur</option>
            <option value="18">Palamu</option>
            <option value="19">Ramgarh</option>
            <option value="20">Ranchi</option>
            <option value="21">Sahibganj</option>
            <option value="22">Seraikela-Kharsawan</option>
            <option value="23">Simdega</option>
            <option value="24">West Singhbhum</option>';

      else if($state=="Karnataka")
      echo '<option value="0">Select any</option>
            <option value="1">Bagalkot</option>
            <option value="2">Ballari (Bellary)</option>
            <option value="3">Belagavi (Belgaum)</option>
            <option value="4">Bengaluru (Bangalore) Rural</option>
            <option value="5">Bengaluru (Bangalore) Urban</option>
            <option value="6">Bidar</option>
            <option value="7">Chamarajanagar</option>
            <option value="8">Chikballapur</option>
            <option value="9">Chikkamagaluru (Chikmagalur)</option>
            <option value="10">Chitradurga</option>
            <option value="11">Dakshina Kannada</option>
            <option value="12">Davangere</option>
            <option value="13">Dharwad</option>
            <option value="14">Gadag</option>
            <option value="15">Hassan</option>
            <option value="16">Haveri</option>
            <option value="17">Kalaburagi (Gulbarga)</option>
            <option value="18">Kodagu</option>
            <option value="19">Kolar</option>
            <option value="20">Koppal</option>
            <option value="21">Mandya</option>
            <option value="22">Mysuru (Mysore)</option>
            <option value="23">Raichur</option>
            <option value="24">Ramanagara</option>
            <option value="25">Shivamogga (Shimoga)</option>
            <option value="26">Tumakuru (Tumkur)</option>
            <option value="27">Udupi</option>
            <option value="28">Uttara Kannada (Karwar)</option>
            <option value="29">Vijayapura (Bijapur)</option>
            <option value="30">Yadgir</option>';

      else if($state=="Kerala")
      echo '<option value="0">Select any</option>
            <option value="1">Alappuzha</option>
            <option value="2">Ernakulam</option>
            <option value="3">Idukki</option>
            <option value="4">Kannur</option>
            <option value="5">Kasaragod</option>
            <option value="6">Kollam</option>
            <option value="7">Kottayam</option>
            <option value="8">Kozhikode</option>
            <option value="9">Malappuram</option>
            <option value="10">Palakkad</option>
            <option value="11">Pathanamthitta</option>
            <option value="12">Thiruvananthapuram</option>
            <option value="13">Thrissur</option>
            <option value="14">Wayanad</option>';

      else if($state=="Lakshadweep")
      echo '<option value="0">Select any</option>
            <option value="1">Lakshadweep</option>';

      else if($state=="Madhya Pradesh")
      echo '<option value="0">Select any</option>
            <option value="1">Agar Malwa</option>
            <option value="2">Alirajpur</option>
            <option value="3">Anuppur</option>
            <option value="4">Ashoknagar</option>
            <option value="5">Balaghat</option>
            <option value="6">Barwani</option>
            <option value="7">Betul</option>
            <option value="8">Bhind</option>
            <option value="9">Bhopal</option>
            <option value="10">Burhanpur</option>
            <option value="11">Chhatarpur</option>
            <option value="12">Chhindwara</option>
            <option value="13">Damoh</option>
            <option value="14">Datia</option>
            <option value="15">Dewas</option>
            <option value="16">Dhar</option>
            <option value="17">Dindori</option>
            <option value="18">East Nimar</option>
            <option value="19">Guna</option>
            <option value="20">Gwalior</option>
            <option value="21">Harda</option>
            <option value="22">Hoshangab</option>
            <option value="23">Indore</option>
            <option value="24">Jabalpur</option>
            <option value="25">Jhabua</option>
            <option value="26">Katni</option>
            <option value="27">Mandla</option>
            <option value="28">Mandsaur</option>
            <option value="29">Morena</option>
            <option value="30">Narsinghpur</option>
            <option value="31">Neemuch</option>
            <option value="32">Panna</option>
            <option value="33">Raisen</option>
            <option value="34">Rajgarh</option>
            <option value="35">Ratlam</option>
            <option value="36">Rewa</option>
            <option value="37">Sagar</option>
            <option value="38">Satna</option>
            <option value="39">Sehore</option>
            <option value="40">Seoni</option>
            <option value="41">Shahdol</option>
            <option value="42">Shajapur</option>
            <option value="43">Sheopur</option>
            <option value="44">Shivpuri</option>
            <option value="45">Sidhi</option>
            <option value="46">Singrauli</option>
            <option value="47">Tikamgarh</option>
            <option value="48">Ujjain</option>
            <option value="49">Umaria</option>
            <option value="50">Vidisha</option>
            <option value="51">West Nimar</option>';

      else if($state=="Maharastra")
      echo '<option value="0">Select any</option>
            <option value="1">Ahmednagar</option>
            <option value="2">Akola</option>
            <option value="3">Amravati</option>
            <option value="4">Aurangabad</option>
            <option value="5">Beed</option>
            <option value="6">Bhandara</option>
            <option value="7">Buldhana</option>
            <option value="8">Chandrapur</option>
            <option value="9">Dhule</option>
            <option value="10">Gadchiroli</option>
            <option value="11">Gondia</option>
            <option value="12">Hingoli</option>
            <option value="13">Jalgaon</option>
            <option value="14">Jalna</option>
            <option value="15">Kolhapur</option>
            <option value="16">Latur</option>
            <option value="17">Mumbai City</option>
            <option value="18">Mumbai Suburban</option>
            <option value="19">Nagpur</option>
            <option value="20">Nanded</option>
            <option value="21">Nandurbar</option>
            <option value="22">Nashik</option>
            <option value="23">Osmanabad</option>
            <option value="24">Palghar</option>
            <option value="25">Parbhani</option>
            <option value="26">Pune</option>
            <option value="27">Raigad</option>
            <option value="28">Ratnagiri</option>
            <option value="29">Sangli</option>
            <option value="30">Satara</option>
            <option value="31">Sindhudurg</option>
            <option value="32">Solapur</option>
            <option value="33">Thane</option>
            <option value="34">Wardha</option>
            <option value="35">Washim</option>
            <option value="36">Yavatmal</option>';

      else if($state=="Manipur")
      echo '<option value="0">Select any</option>
            <option value="1">Bishnupur</option>
            <option value="2">Chandel</option>
            <option value="3">Churachandpur</option>
            <option value="4">Imphal East</option>
            <option value="5">Imphal West</option>
            <option value="6">Jiribam</option>
            <option value="7">Kakching</option>
            <option value="8">Kamjong</option>
            <option value="9">Kangpokpi</option>
            <option value="10">Noney</option>
            <option value="11">Pherzawl</option>
            <option value="12">Senapati</option>
            <option value="13">Tamenglong</option>
            <option value="14">Tengnoupal</option>
            <option value="15">Thoubal</option>
            <option value="16">Ukhrul</option>';

      else if($state=="Meghalaya")
      echo '<option value="0">Select any</option>
            <option value="1">East Garo Hills</option>
            <option value="2">East Jaintia Hills</option>
            <option value="3">East Khasi Hills</option>
            <option value="4">North Garo Hills</option>
            <option value="5">Ri Bhoi</option>
            <option value="6">South Garo Hills</option>
            <option value="7">South West Garo Hills</option>
            <option value="8">South West Khasi Hills</option>
            <option value="9">West Garo Hills</option>
            <option value="10">West Jaintia Hills</option>
            <option value="11">West Khasi Hills</option>';

      else if($state=="Mizoram")
      echo '<option value="0">Select any</option>
            <option value="1">Aizawl</option>
            <option value="2">Champhai</option>
            <option value="3">Kolasib</option>
            <option value="4">Lawngtlai</option>
            <option value="5">Lunglei</option>
            <option value="6">Mamit</option>
            <option value="7">Saiha</option>
            <option value="8">Serchhip</option>';

      else if($state=="Nagaland")
      echo '<option value="0">Select any</option>
            <option value="1">Dimapur</option>
            <option value="2">Kiphire</option>
            <option value="3">Kohima</option>
            <option value="4">Longleng</option>
            <option value="5">Mokokchung</option>
            <option value="6">Mon</option>
            <option value="7">Peren</option>
            <option value="8">Phek</option>
            <option value="9">Tuensang</option>
            <option value="10">Wokha</option>
            <option value="11">Zunheboto</option>
            <option value="12">Noklak</option>';

      else if($state=="Odisha")
      echo '<option value="0">Select any</option>
            <option value="1">Angul</option>
            <option value="2">Balangir</option>
            <option value="3">Balasore</option>
            <option value="4">Bargarh</option>
            <option value="5">Bhadrak</option>
            <option value="6">Boudh</option>
            <option value="7">Cuttack</option>
            <option value="8">Deogarh</option>
            <option value="9">Dhenkanal</option>
            <option value="10">Gajapati</option>
            <option value="11">Ganjam</option>
            <option value="12">Jagatsinghapur</option>
            <option value="13">Jajpur</option>
            <option value="14">Jharsuguda</option>
            <option value="15">Kalahandi</option>
            <option value="16">Kandhamal</option>
            <option value="17">Kendrapara</option>
            <option value="18">Kendujhar (Keonjhar)</option>
            <option value="19">Khordha</option>
            <option value="20">Koraput</option>
            <option value="21">Malkangiri</option>
            <option value="22">Mayurbhanj</option>
            <option value="23">Nabarangpur</option>
            <option value="24">Nayagarh</option>
            <option value="25">Nuapada</option>
            <option value="26">Puri</option>
            <option value="27">Rayagada</option>
            <option value="28">Sambalpur</option>
            <option value="29">Sonepur</option>
            <option value="30">Sundargarh</option>';

      else if($state=="Puducherry")
      echo '<option value="0">Select any</option>
            <option value="1">Yanam</option>
            <option value="2">Karaikal</option>
            <option value="3">Mache</option>
            <option value="4">Puducherry</option>';

      else if($state=="Punjab")
      echo '<option value="0">Select any</option>
            <option value="1">Amritsar</option>
            <option value="2">Barnala</option>
            <option value="3">Bathinda</option>
            <option value="4">Faridkot</option>
            <option value="5">Fatehgarh Sahib</option>
            <option value="6">Fazilka</option>
            <option value="7">Ferozepur</option>
            <option value="8">Gurdaspur</option>
            <option value="9">Hoshiarpur</option>
            <option value="10">Jalandhar</option>
            <option value="11">Kapurthala</option>
            <option value="12">Ludhiana</option>
            <option value="13">Mansa</option>
            <option value="14">Moga</option>
            <option value="15">Muktsar</option>
            <option value="16">Nawanshahr (Shahid Bhagat Singh Nagar)</option>
            <option value="17">Pathankot</option>
            <option value="18">Patiala</option>
            <option value="19">Rupnagar</option>
            <option value="20">Sahibzada Ajit Singh Nagar (Mohali)</option>
            <option value="21">Sangrur</option>
            <option value="22">Tarn Taran</option>';

      else if($state=="Rajasthan")
      echo '<option value="0">Select any</option>
            <option value="1">Ajmer</option>
            <option value="2">Alwar</option>
            <option value="3">Banswara</option>
            <option value="4">Baran</option>
            <option value="5">Barmer</option>
            <option value="6">Bharatpur</option>
            <option value="7">Bhilwara</option>
            <option value="8">Bikaner</option>
            <option value="9">Bundi</option>
            <option value="10">Chittorgarh</option>
            <option value="11">Churu</option>
            <option value="12">Dausa</option>
            <option value="13">Dholpur</option>
            <option value="14">Dungarpur</option>
            <option value="15">Hanumangarh</option>
            <option value="16">Jaipur</option>
            <option value="17">Jaisalmer</option>
            <option value="18">Jalore</option>
            <option value="19">Jhalawar</option>
            <option value="20">Jhunjhunu</option>
            <option value="21">Jodhpur</option>
            <option value="22">Karauli</option>
            <option value="23">Kota</option>
            <option value="24">Nagaur</option>
            <option value="25">Pali</option>
            <option value="26">Pratapgarh</option>
            <option value="27">Rajsamand</option>
            <option value="28">Sawai Madhopur</option>
            <option value="29">Sikar</option>
            <option value="30">Sirohi</option>
            <option value="31">Sri Ganganagar</option>
            <option value="32">Tonk</option>
            <option value="33">Udaipur</option>';

      else if($state=="Sikkim")
      echo '<option value="0">Select any</option>
            <option value="1">East Sikkim</option>
            <option value="2">North Sikkim</option>
            <option value="3">South Sikkim</option>
            <option value="4">West Sikkim</option>';

      else if($state=="Tamil Nadu")
      echo '<option value="0">Select any</option>
            <option value="1">Ariyalur</option>
            <option value="2">Chennai</option>
            <option value="3">Coimbatore</option>
            <option value="4">Cuddalore</option>
            <option value="5">Dharmapuri</option>
            <option value="6">Dindigul</option>
            <option value="7">Erode</option>
            <option value="8">Kanchipuram</option>
            <option value="9">Kanyakumari</option>
            <option value="10">Karur</option>
            <option value="11">Krishnagiri</option>
            <option value="12">Madurai</option>
            <option value="13">Nagapattinam</option>
            <option value="14">Namakkal</option>
            <option value="15">Nilgiris</option>
            <option value="16">Perambalur</option>
            <option value="17">Pudukkottai</option>
            <option value="18">Ramanathapuram</option>
            <option value="19">Salem</option>
            <option value="20">Sivaganga</option>
            <option value="21">Thanjavur</option>
            <option value="22">Theni</option>
            <option value="23">Thoothukudi (Tuticorin)</option>
            <option value="24">Tiruchirappalli</option>
            <option value="25">Tirunelveli</option>
            <option value="26">Tiruppur</option>
            <option value="27">Tiruvallur</option>
            <option value="28">Tiruvannamalai</option>
            <option value="29">Tiruvarur</option>
            <option value="30">Vellore</option>
            <option value="31">Viluppuram</option>
            <option value="32">Virudhunagar</option>';

      else if($state=="Telangana")
      echo '<option value="0">Select any</option>
            <option value="1">Adilabad</option>
            <option value="2">Bhadradri Kothagudem</option>
            <option value="3">Hyderabad</option>
            <option value="4">Jagtial</option>
            <option value="5">Jangaon</option>
            <option value="6">Jayashankar Bhupalpally</option>
            <option value="7">Jogulamba Gadwal</option>
            <option value="8">Kamareddy</option>
            <option value="9">Karimnagar</option>
            <option value="10">Khammam</option>
            <option value="11">Kumuram Bheem</option>
            <option value="12">Mahabubabad</option>
            <option value="13">Mahabubnagar</option>
            <option value="14">Mancherial</option>
            <option value="15">Medak</option>
            <option value="16">Medchal</option>
            <option value="17">Mulugu</option>
            <option value="18">Nagarkurnool</option>
            <option value="19">Nalgonda</option>
            <option value="20">Narayanpet</option>
            <option value="21">Nirmal</option>
            <option value="22">Nizamabad</option>
            <option value="23">Peddapalli</option>
            <option value="24">Rajanna Sircilla</option>
            <option value="25">Rangareddy</option>
            <option value="26">Sangareddy</option>
            <option value="27">Siddipet</option>
            <option value="28">Suryapet</option>
            <option value="29">Vikarabad</option>
            <option value="30">Wanaparthy</option>
            <option value="31">Warangal (Rural)</option>
            <option value="32">Warangal (Urban)</option>
            <option value="33">Yadadri Bhuvanagiri</option>';

      else if($state=="Tripura")
      echo '<option value="0">Select any</option>
            <option value="1">Dhalai</option>
            <option value="2">Gomati</option>
            <option value="3">Khowai</option>
            <option value="4">North Tripura</option>
            <option value="5">Sepahijala</option>
            <option value="6">South Tripura</option>
            <option value="7">Unakoti</option>
            <option value="8">West Tripura</option>';

      else if($state=="Uttar Pradesh")
      echo '<option value="0">Select any</option>
            <option value="1">Agra</option>
            <option value="2">Aligarh</option>
            <option value="3">Allahabad</option>
            <option value="4">Ambedkar Nagar</option>
            <option value="5">Amethi (Chatrapati Sahuji Mahraj Nagar)</option>
            <option value="6">Amroha (J.P. Nagar)</option>
            <option value="7">Auraiya</option>
            <option value="8">Azamgarh</option>
            <option value="9">Baghpat</option>
            <option value="10">Bahraich</option>
            <option value="11">Ballia</option>
            <option value="12">Balrampur</option>
            <option value="13">Banda</option>
            <option value="14">Barabanki</option>
            <option value="15">Bareilly</option>
            <option value="16">Basti</option>
            <option value="17">Bhadohi</option>
            <option value="18">Bijnor</option>
            <option value="19">Budaun</option>
            <option value="20">Bulandshahr</option>
            <option value="21">Chandauli</option>
            <option value="22">Chitrakoot</option>
            <option value="23">Deoria</option>
            <option value="24">Etah</option>
            <option value="25">Etawah</option>
            <option value="26">Faizabad</option>
            <option value="27">Farrukhabad</option>
            <option value="28">Fatehpur</option>
            <option value="29">Firozabad</option>
            <option value="30">Gautam Buddha Nagar</option>
            <option value="31">Ghaziabad</option>
            <option value="32">Ghazipur</option>
            <option value="33">Gonda</option>
            <option value="34">Gorakhpur</option>
            <option value="35">Hamirpur</option>
            <option value="36">Hapur (Panchsheel Nagar)</option>
            <option value="37">Hardoi</option>
            <option value="38">Hathras</option>
            <option value="39">Jalaun</option>
            <option value="40">Jaunpur</option>
            <option value="41">Jhansi</option>
            <option value="42">Kannauj</option>
            <option value="43">Kanpur Dehat</option>
            <option value="44">Kanpur Nagar</option>
            <option value="45">Kanshiram Nagar (Kasganj)</option>
            <option value="46">Kaushambi</option>
            <option value="47">Kushinagar (Padrauna)</option>
            <option value="48">Lakhimpur - Kheri</option>
            <option value="49">Lalitpur</option>
            <option value="50">Lucknow</option>
            <option value="51">Maharajganj</option>
            <option value="52">Mahoba</option>
            <option value="53">Mainpuri</option>
            <option value="54">Mathura</option>
            <option value="55">Mau</option>
            <option value="56">Meerut</option>
            <option value="57">Mirzapur</option>
            <option value="58">Moradabad</option>
            <option value="59">Muzaffarnagar</option>
            <option value="60">Pilibhit</option>
            <option value="61">Pratapgarh</option>
            <option value="62">RaeBareli</option>
            <option value="63">Rampur</option>
            <option value="64">Saharanpur</option>
            <option value="65">Sambhal (Bhim Nagar)</option>
            <option value="66">Sant Kabir Nagar</option>
            <option value="67">Shahjahanpur</option>
            <option value="68">Shamali (Prabuddh Nagar)</option>
            <option value="69">Shravasti</option>
            <option value="70">Siddharth Nagar</option>
            <option value="71">Sitapur</option>
            <option value="72">Sonbhadra</option>
            <option value="73">Sultanpur</option>
            <option value="74">Unnao</option>
            <option value="75">Varanasi</option>';

      else if($state=="Uttarakhand")
      echo '<option value="0">Select any</option>
            <option value="1">Dehradun</option>
            <option value="2">Haridwar</option>
            <option value="3">Chamoli</option>
            <option value="4">Rudraprayag</option>
            <option value="5">Tehri Garhwal</option>
            <option value="6">Uttarkashi</option>
            <option value="7">Pauri Garhwal</option>
            <option value="8">Almora</option>
            <option value="9">Nainital</option>
            <option value="10">Pithoragarh</option>
            <option value="11">U S Nagar</option>
            <option value="12">Bageshwar</option>
            <option value="13">Champawa</option>';

      else if($state=="West Bengal")
      echo '<option value="0">Select any</option>
            <option value="1">Alipurduar</option>
            <option value="2">Bankura</option>
            <option value="3">Birbhum</option>
            <option value="4">Cooch Behar</option>
            <option value="5">Dakshin Dinajpur (South Dinajpur)</option>
            <option value="6">Darjeeling</option>
            <option value="7">Hooghly</option>
            <option value="8">Howrah</option>
            <option value="9">Jalpaiguri</option>
            <option value="10">Jhargram</option>
            <option value="11">Kalimpong</option>
            <option value="12">Kolkata</option>
            <option value="13">Malda</option>
            <option value="14">Murshidabad</option>
            <option value="15">Nadia</option>
            <option value="16">North 24 Parganas</option>
            <option value="17">Paschim Medinipur (West Medinipur)</option>
            <option value="18">Paschim (West) Burdwan (Bardhaman)</option>
            <option value="19">Purba Burdwan (Bardhaman)</option>
            <option value="20">Purba Medinipur (East Medinipur)</option>
            <option value="21">Purulia</option>
            <option value="22">South 24 Parganas</option>
            <option value="23">Uttar Dinajpur (North Dinajpur)</option>';
}
?>