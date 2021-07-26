
@extends('agent.layout')

@section('title','Student Registration Details')
@push('css')

@endpush
@section('content')

 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            @if ($errors->any())
					    <div class="alert alert-danger">
					        <strong>Whoops!</strong> There were some problems with your input.<br><br>
					        <ul>
					            @foreach ($errors->all() as $error)
					                <li>{{ $error }}</li>
					            @endforeach
					        </ul>
					    </div>
					@endif
    			<form class="form-horizontal" action="{{route('agent.student.update',$student->id)}}" method="POST" enctype="multipart/form-data">
    			@csrf
    	
            <!-- Horizontal Form -->
            <div class="card card-secondary">
              
              	
              	<div class="card-header">
               		 <h3 class="card-title">Personal Information</h3>
              	</div>

              	<div class="card-body">

                  <div class="row">
                  	<div class="col-lg-6">
                  		<input type="hidden" class="form-control" id="user" name="user" value="{{ Auth::user()->id }}">
                  		<div class="form-group row">
                  			<label for="fname" class="col-sm-4 col-form-label">First Name <span style="color: red;">*</span></label>
		                    <div class="col-sm-8">
		                      <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name" value="{{$student->fname}}">
		                    </div>
                  		</div>	
                  		
                  		<div class="form-group row">
                  			<label for="birth" class="col-sm-4 col-form-label">Country of Birth <span style="color: red;">*</span></label>
		                    <div class="col-sm-8">
		               
		                      <select class="form-control" name="birth">
												    <option value="{{$student->birth}}" selected>{{$student->birth}}</option>
												    
												    <option value="AF">Afghanistan</option>
												    <option value="AL">Albania</option>
												    <option value="DZ">Algeria</option>
												    <option value="AS">American Samoa</option>
												    <option value="AD">Andorra</option>
												    <option value="AO">Angola</option>
												    <option value="AI">Anguilla</option>
												    <option value="AQ">Antarctica</option>
												    <option value="AG">Antigua and Barbuda</option>
												    <option value="AR">Argentina</option>
												    <option value="AM">Armenia</option>
												    <option value="AW">Aruba</option>
												    <option value="AU">Australia</option>
												    <option value="AT">Austria</option>
												    <option value="AZ">Azerbaijan</option>
												    <option value="BS">Bahamas</option>
												    <option value="BH">Bahrain</option>
												    <option value="BD">Bangladesh</option>
												    <option value="BB">Barbados</option>
												    <option value="BY">Belarus</option>
												    <option value="BE">Belgium</option>
												    <option value="BZ">Belize</option>
												    <option value="BJ">Benin</option>
												    <option value="BM">Bermuda</option>
												    <option value="BT">Bhutan</option>
												    <option value="BO">Bolivia</option>
												    <option value="BA">Bosnia and Herzegowina</option>
												    <option value="BW">Botswana</option>
												    <option value="BV">Bouvet Island</option>
												    <option value="BR">Brazil</option>
												    <option value="IO">British Indian Ocean Territory</option>
												    <option value="BN">Brunei Darussalam</option>
												    <option value="BG">Bulgaria</option>
												    <option value="BF">Burkina Faso</option>
												    <option value="BI">Burundi</option>
												    <option value="KH">Cambodia</option>
												    <option value="CM">Cameroon</option>
												    <option value="CA">Canada</option>
												    <option value="CV">Cape Verde</option>
												    <option value="KY">Cayman Islands</option>
												    <option value="CF">Central African Republic</option>
												    <option value="TD">Chad</option>
												    <option value="CL">Chile</option>
												    <option value="CN">China</option>
												    <option value="CX">Christmas Island</option>
												    <option value="CC">Cocos (Keeling) Islands</option>
												    <option value="CO">Colombia</option>
												    <option value="KM">Comoros</option>
												    <option value="CG">Congo</option>
												    <option value="CD">Congo, the Democratic Republic of the</option>
												    <option value="CK">Cook Islands</option>
												    <option value="CR">Costa Rica</option>
												    <option value="CI">Cote d'Ivoire</option>
												    <option value="HR">Croatia (Hrvatska)</option>
												    <option value="CU">Cuba</option>
												    <option value="CY">Cyprus</option>
												    <option value="CZ">Czech Republic</option>
												    <option value="DK">Denmark</option>
												    <option value="DJ">Djibouti</option>
												    <option value="DM">Dominica</option>
												    <option value="DO">Dominican Republic</option>
												    <option value="TP">East Timor</option>
												    <option value="EC">Ecuador</option>
												    <option value="EG">Egypt</option>
												    <option value="SV">El Salvador</option>
												    <option value="GQ">Equatorial Guinea</option>
												    <option value="ER">Eritrea</option>
												    <option value="EE">Estonia</option>
												    <option value="ET">Ethiopia</option>
												    <option value="FK">Falkland Islands (Malvinas)</option>
												    <option value="FO">Faroe Islands</option>
												    <option value="FJ">Fiji</option>
												    <option value="FI">Finland</option>
												    <option value="FR">France</option>
												    <option value="FX">France, Metropolitan</option>
												    <option value="GF">French Guiana</option>
												    <option value="PF">French Polynesia</option>
												    <option value="TF">French Southern Territories</option>
												    <option value="GA">Gabon</option>
												    <option value="GM">Gambia</option>
												    <option value="GE">Georgia</option>
												    <option value="DE">Germany</option>
												    <option value="GH">Ghana</option>
												    <option value="GI">Gibraltar</option>
												    <option value="GR">Greece</option>
												    <option value="GL">Greenland</option>
												    <option value="GD">Grenada</option>
												    <option value="GP">Guadeloupe</option>
												    <option value="GU">Guam</option>
												    <option value="GT">Guatemala</option>
												    <option value="GN">Guinea</option>
												    <option value="GW">Guinea-Bissau</option>
												    <option value="GY">Guyana</option>
												    <option value="HT">Haiti</option>
												    <option value="HM">Heard and Mc Donald Islands</option>
												    <option value="VA">Holy See (Vatican City State)</option>
												    <option value="HN">Honduras</option>
												    <option value="HK">Hong Kong</option>
												    <option value="HU">Hungary</option>
												    <option value="IS">Iceland</option>
												    <option value="IN">India</option>
												    <option value="ID">Indonesia</option>
												    <option value="IR">Iran (Islamic Republic of)</option>
												    <option value="IQ">Iraq</option>
												    <option value="IE">Ireland</option>
												    <option value="IL">Israel</option>
												    <option value="IT">Italy</option>
												    <option value="JM">Jamaica</option>
												    <option value="JP">Japan</option>
												    <option value="JO">Jordan</option>
												    <option value="KZ">Kazakhstan</option>
												    <option value="KE">Kenya</option>
												    <option value="KI">Kiribati</option>
												    <option value="KP">Korea, Democratic People's Republic of</option>
												    <option value="KR">Korea, Republic of</option>
												    <option value="KW">Kuwait</option>
												    <option value="KG">Kyrgyzstan</option>
												    <option value="LA">Lao People's Democratic Republic</option>
												    <option value="LV">Latvia</option>
												    <option value="LB">Lebanon</option>
												    <option value="LS">Lesotho</option>
												    <option value="LR">Liberia</option>
												    <option value="LY">Libyan Arab Jamahiriya</option>
												    <option value="LI">Liechtenstein</option>
												    <option value="LT">Lithuania</option>
												    <option value="LU">Luxembourg</option>
												    <option value="MO">Macau</option>
												    <option value="MK">Macedonia, The Former Yugoslav Republic of</option>
												    <option value="MG">Madagascar</option>
												    <option value="MW">Malawi</option>
												    <option value="MY">Malaysia</option>
												    <option value="MV">Maldives</option>
												    <option value="ML">Mali</option>
												    <option value="MT">Malta</option>
												    <option value="MH">Marshall Islands</option>
												    <option value="MQ">Martinique</option>
												    <option value="MR">Mauritania</option>
												    <option value="MU">Mauritius</option>
												    <option value="YT">Mayotte</option>
												    <option value="MX">Mexico</option>
												    <option value="FM">Micronesia, Federated States of</option>
												    <option value="MD">Moldova, Republic of</option>
												    <option value="MC">Monaco</option>
												    <option value="MN">Mongolia</option>
												    <option value="MS">Montserrat</option>
												    <option value="MA">Morocco</option>
												    <option value="MZ">Mozambique</option>
												    <option value="MM">Myanmar</option>
												    <option value="NA">Namibia</option>
												    <option value="NR">Nauru</option>
												    <option value="NP">Nepal</option>
												    <option value="NL">Netherlands</option>
												    <option value="AN">Netherlands Antilles</option>
												    <option value="NC">New Caledonia</option>
												    <option value="NZ">New Zealand</option>
												    <option value="NI">Nicaragua</option>
												    <option value="NE">Niger</option>
												    <option value="NG">Nigeria</option>
												    <option value="NU">Niue</option>
												    <option value="NF">Norfolk Island</option>
												    <option value="MP">Northern Mariana Islands</option>
												    <option value="NO">Norway</option>
												    <option value="OM">Oman</option>
												    <option value="PK">Pakistan</option>
												    <option value="PW">Palau</option>
												    <option value="PA">Panama</option>
												    <option value="PG">Papua New Guinea</option>
												    <option value="PY">Paraguay</option>
												    <option value="PE">Peru</option>
												    <option value="PH">Philippines</option>
												    <option value="PN">Pitcairn</option>
												    <option value="PL">Poland</option>
												    <option value="PT">Portugal</option>
												    <option value="PR">Puerto Rico</option>
												    <option value="QA">Qatar</option>
												    <option value="RE">Reunion</option>
												    <option value="RO">Romania</option>
												    <option value="RU">Russian Federation</option>
												    <option value="RW">Rwanda</option>
												    <option value="KN">Saint Kitts and Nevis</option> 
												    <option value="LC">Saint LUCIA</option>
												    <option value="VC">Saint Vincent and the Grenadines</option>
												    <option value="WS">Samoa</option>
												    <option value="SM">San Marino</option>
												    <option value="ST">Sao Tome and Principe</option> 
												    <option value="SA">Saudi Arabia</option>
												    <option value="SN">Senegal</option>
												    <option value="SC">Seychelles</option>
												    <option value="SL">Sierra Leone</option>
												    <option value="SG">Singapore</option>
												    <option value="SK">Slovakia (Slovak Republic)</option>
												    <option value="SI">Slovenia</option>
												    <option value="SB">Solomon Islands</option>
												    <option value="SO">Somalia</option>
												    <option value="ZA">South Africa</option>
												    <option value="GS">South Georgia and the South Sandwich Islands</option>
												    <option value="ES">Spain</option>
												    <option value="LK">Sri Lanka</option>
												    <option value="SH">St. Helena</option>
												    <option value="PM">St. Pierre and Miquelon</option>
												    <option value="SD">Sudan</option>
												    <option value="SR">Suriname</option>
												    <option value="SJ">Svalbard and Jan Mayen Islands</option>
												    <option value="SZ">Swaziland</option>
												    <option value="SE">Sweden</option>
												    <option value="CH">Switzerland</option>
												    <option value="SY">Syrian Arab Republic</option>
												    <option value="TW">Taiwan, Province of China</option>
												    <option value="TJ">Tajikistan</option>
												    <option value="TZ">Tanzania, United Republic of</option>
												    <option value="TH">Thailand</option>
												    <option value="TG">Togo</option>
												    <option value="TK">Tokelau</option>
												    <option value="TO">Tonga</option>
												    <option value="TT">Trinidad and Tobago</option>
												    <option value="TN">Tunisia</option>
												    <option value="TR">Turkey</option>
												    <option value="TM">Turkmenistan</option>
												    <option value="TC">Turks and Caicos Islands</option>
												    <option value="TV">Tuvalu</option>
												    <option value="UG">Uganda</option>
												    <option value="UA">Ukraine</option>
												    <option value="AE">United Arab Emirates</option>
												    <option value="GB">United Kingdom</option>
												    <option value="US">United States</option>
												    <option value="UM">United States Minor Outlying Islands</option>
												    <option value="UY">Uruguay</option>
												    <option value="UZ">Uzbekistan</option>
												    <option value="VU">Vanuatu</option>
												    <option value="VE">Venezuela</option>
												    <option value="VN">Viet Nam</option>
												    <option value="VG">Virgin Islands (British)</option>
												    <option value="VI">Virgin Islands (U.S.)</option>
												    <option value="WF">Wallis and Futuna Islands</option>
												    <option value="EH">Western Sahara</option>
												    <option value="YE">Yemen</option>
												    <option value="YU">Yugoslavia</option>
												    <option value="ZM">Zambia</option>
												    <option value="ZW">Zimbabwe</option>
												</select>
		                    </div>
                  		</div>
                  		<div class="form-group row">
                  			<label for="lang" class="col-sm-4 col-form-label">Native Language </label>
		                    <div class="col-sm-8">
		                      <input type="text" class="form-control" id="lang" name="lang" placeholder="Tamil" value="{{$student->fname}}">
		                    </div>
                  		</div>
                  		<div class="form-group row">
                  			<label for="citizenship" class="col-sm-4 col-form-label">Country of Citizenship </label>
		                    <div class="col-sm-8">
		                    	<select class="form-control" name="citizenship">
												    <option value="{{$student->citizenship}}" selected>{{$student->citizenship}}</option>
												   
												    <option value="AF">Afghanistan</option>
												    <option value="AL">Albania</option>
												    <option value="DZ">Algeria</option>
												    <option value="AS">American Samoa</option>
												    <option value="AD">Andorra</option>
												    <option value="AO">Angola</option>
												    <option value="AI">Anguilla</option>
												    <option value="AQ">Antarctica</option>
												    <option value="AG">Antigua and Barbuda</option>
												    <option value="AR">Argentina</option>
												    <option value="AM">Armenia</option>
												    <option value="AW">Aruba</option>
												    <option value="AU">Australia</option>
												    <option value="AT">Austria</option>
												    <option value="AZ">Azerbaijan</option>
												    <option value="BS">Bahamas</option>
												    <option value="BH">Bahrain</option>
												    <option value="BD">Bangladesh</option>
												    <option value="BB">Barbados</option>
												    <option value="BY">Belarus</option>
												    <option value="BE">Belgium</option>
												    <option value="BZ">Belize</option>
												    <option value="BJ">Benin</option>
												    <option value="BM">Bermuda</option>
												    <option value="BT">Bhutan</option>
												    <option value="BO">Bolivia</option>
												    <option value="BA">Bosnia and Herzegowina</option>
												    <option value="BW">Botswana</option>
												    <option value="BV">Bouvet Island</option>
												    <option value="BR">Brazil</option>
												    <option value="IO">British Indian Ocean Territory</option>
												    <option value="BN">Brunei Darussalam</option>
												    <option value="BG">Bulgaria</option>
												    <option value="BF">Burkina Faso</option>
												    <option value="BI">Burundi</option>
												    <option value="KH">Cambodia</option>
												    <option value="CM">Cameroon</option>
												    <option value="CA">Canada</option>
												    <option value="CV">Cape Verde</option>
												    <option value="KY">Cayman Islands</option>
												    <option value="CF">Central African Republic</option>
												    <option value="TD">Chad</option>
												    <option value="CL">Chile</option>
												    <option value="CN">China</option>
												    <option value="CX">Christmas Island</option>
												    <option value="CC">Cocos (Keeling) Islands</option>
												    <option value="CO">Colombia</option>
												    <option value="KM">Comoros</option>
												    <option value="CG">Congo</option>
												    <option value="CD">Congo, the Democratic Republic of the</option>
												    <option value="CK">Cook Islands</option>
												    <option value="CR">Costa Rica</option>
												    <option value="CI">Cote d'Ivoire</option>
												    <option value="HR">Croatia (Hrvatska)</option>
												    <option value="CU">Cuba</option>
												    <option value="CY">Cyprus</option>
												    <option value="CZ">Czech Republic</option>
												    <option value="DK">Denmark</option>
												    <option value="DJ">Djibouti</option>
												    <option value="DM">Dominica</option>
												    <option value="DO">Dominican Republic</option>
												    <option value="TP">East Timor</option>
												    <option value="EC">Ecuador</option>
												    <option value="EG">Egypt</option>
												    <option value="SV">El Salvador</option>
												    <option value="GQ">Equatorial Guinea</option>
												    <option value="ER">Eritrea</option>
												    <option value="EE">Estonia</option>
												    <option value="ET">Ethiopia</option>
												    <option value="FK">Falkland Islands (Malvinas)</option>
												    <option value="FO">Faroe Islands</option>
												    <option value="FJ">Fiji</option>
												    <option value="FI">Finland</option>
												    <option value="FR">France</option>
												    <option value="FX">France, Metropolitan</option>
												    <option value="GF">French Guiana</option>
												    <option value="PF">French Polynesia</option>
												    <option value="TF">French Southern Territories</option>
												    <option value="GA">Gabon</option>
												    <option value="GM">Gambia</option>
												    <option value="GE">Georgia</option>
												    <option value="DE">Germany</option>
												    <option value="GH">Ghana</option>
												    <option value="GI">Gibraltar</option>
												    <option value="GR">Greece</option>
												    <option value="GL">Greenland</option>
												    <option value="GD">Grenada</option>
												    <option value="GP">Guadeloupe</option>
												    <option value="GU">Guam</option>
												    <option value="GT">Guatemala</option>
												    <option value="GN">Guinea</option>
												    <option value="GW">Guinea-Bissau</option>
												    <option value="GY">Guyana</option>
												    <option value="HT">Haiti</option>
												    <option value="HM">Heard and Mc Donald Islands</option>
												    <option value="VA">Holy See (Vatican City State)</option>
												    <option value="HN">Honduras</option>
												    <option value="HK">Hong Kong</option>
												    <option value="HU">Hungary</option>
												    <option value="IS">Iceland</option>
												    <option value="IN">India</option>
												    <option value="ID">Indonesia</option>
												    <option value="IR">Iran (Islamic Republic of)</option>
												    <option value="IQ">Iraq</option>
												    <option value="IE">Ireland</option>
												    <option value="IL">Israel</option>
												    <option value="IT">Italy</option>
												    <option value="JM">Jamaica</option>
												    <option value="JP">Japan</option>
												    <option value="JO">Jordan</option>
												    <option value="KZ">Kazakhstan</option>
												    <option value="KE">Kenya</option>
												    <option value="KI">Kiribati</option>
												    <option value="KP">Korea, Democratic People's Republic of</option>
												    <option value="KR">Korea, Republic of</option>
												    <option value="KW">Kuwait</option>
												    <option value="KG">Kyrgyzstan</option>
												    <option value="LA">Lao People's Democratic Republic</option>
												    <option value="LV">Latvia</option>
												    <option value="LB">Lebanon</option>
												    <option value="LS">Lesotho</option>
												    <option value="LR">Liberia</option>
												    <option value="LY">Libyan Arab Jamahiriya</option>
												    <option value="LI">Liechtenstein</option>
												    <option value="LT">Lithuania</option>
												    <option value="LU">Luxembourg</option>
												    <option value="MO">Macau</option>
												    <option value="MK">Macedonia, The Former Yugoslav Republic of</option>
												    <option value="MG">Madagascar</option>
												    <option value="MW">Malawi</option>
												    <option value="MY">Malaysia</option>
												    <option value="MV">Maldives</option>
												    <option value="ML">Mali</option>
												    <option value="MT">Malta</option>
												    <option value="MH">Marshall Islands</option>
												    <option value="MQ">Martinique</option>
												    <option value="MR">Mauritania</option>
												    <option value="MU">Mauritius</option>
												    <option value="YT">Mayotte</option>
												    <option value="MX">Mexico</option>
												    <option value="FM">Micronesia, Federated States of</option>
												    <option value="MD">Moldova, Republic of</option>
												    <option value="MC">Monaco</option>
												    <option value="MN">Mongolia</option>
												    <option value="MS">Montserrat</option>
												    <option value="MA">Morocco</option>
												    <option value="MZ">Mozambique</option>
												    <option value="MM">Myanmar</option>
												    <option value="NA">Namibia</option>
												    <option value="NR">Nauru</option>
												    <option value="NP">Nepal</option>
												    <option value="NL">Netherlands</option>
												    <option value="AN">Netherlands Antilles</option>
												    <option value="NC">New Caledonia</option>
												    <option value="NZ">New Zealand</option>
												    <option value="NI">Nicaragua</option>
												    <option value="NE">Niger</option>
												    <option value="NG">Nigeria</option>
												    <option value="NU">Niue</option>
												    <option value="NF">Norfolk Island</option>
												    <option value="MP">Northern Mariana Islands</option>
												    <option value="NO">Norway</option>
												    <option value="OM">Oman</option>
												    <option value="PK">Pakistan</option>
												    <option value="PW">Palau</option>
												    <option value="PA">Panama</option>
												    <option value="PG">Papua New Guinea</option>
												    <option value="PY">Paraguay</option>
												    <option value="PE">Peru</option>
												    <option value="PH">Philippines</option>
												    <option value="PN">Pitcairn</option>
												    <option value="PL">Poland</option>
												    <option value="PT">Portugal</option>
												    <option value="PR">Puerto Rico</option>
												    <option value="QA">Qatar</option>
												    <option value="RE">Reunion</option>
												    <option value="RO">Romania</option>
												    <option value="RU">Russian Federation</option>
												    <option value="RW">Rwanda</option>
												    <option value="KN">Saint Kitts and Nevis</option> 
												    <option value="LC">Saint LUCIA</option>
												    <option value="VC">Saint Vincent and the Grenadines</option>
												    <option value="WS">Samoa</option>
												    <option value="SM">San Marino</option>
												    <option value="ST">Sao Tome and Principe</option> 
												    <option value="SA">Saudi Arabia</option>
												    <option value="SN">Senegal</option>
												    <option value="SC">Seychelles</option>
												    <option value="SL">Sierra Leone</option>
												    <option value="SG">Singapore</option>
												    <option value="SK">Slovakia (Slovak Republic)</option>
												    <option value="SI">Slovenia</option>
												    <option value="SB">Solomon Islands</option>
												    <option value="SO">Somalia</option>
												    <option value="ZA">South Africa</option>
												    <option value="GS">South Georgia and the South Sandwich Islands</option>
												    <option value="ES">Spain</option>
												    <option value="LK">Sri Lanka</option>
												    <option value="SH">St. Helena</option>
												    <option value="PM">St. Pierre and Miquelon</option>
												    <option value="SD">Sudan</option>
												    <option value="SR">Suriname</option>
												    <option value="SJ">Svalbard and Jan Mayen Islands</option>
												    <option value="SZ">Swaziland</option>
												    <option value="SE">Sweden</option>
												    <option value="CH">Switzerland</option>
												    <option value="SY">Syrian Arab Republic</option>
												    <option value="TW">Taiwan, Province of China</option>
												    <option value="TJ">Tajikistan</option>
												    <option value="TZ">Tanzania, United Republic of</option>
												    <option value="TH">Thailand</option>
												    <option value="TG">Togo</option>
												    <option value="TK">Tokelau</option>
												    <option value="TO">Tonga</option>
												    <option value="TT">Trinidad and Tobago</option>
												    <option value="TN">Tunisia</option>
												    <option value="TR">Turkey</option>
												    <option value="TM">Turkmenistan</option>
												    <option value="TC">Turks and Caicos Islands</option>
												    <option value="TV">Tuvalu</option>
												    <option value="UG">Uganda</option>
												    <option value="UA">Ukraine</option>
												    <option value="AE">United Arab Emirates</option>
												    <option value="GB">United Kingdom</option>
												    <option value="US">United States</option>
												    <option value="UM">United States Minor Outlying Islands</option>
												    <option value="UY">Uruguay</option>
												    <option value="UZ">Uzbekistan</option>
												    <option value="VU">Vanuatu</option>
												    <option value="VE">Venezuela</option>
												    <option value="VN">Viet Nam</option>
												    <option value="VG">Virgin Islands (British)</option>
												    <option value="VI">Virgin Islands (U.S.)</option>
												    <option value="WF">Wallis and Futuna Islands</option>
												    <option value="EH">Western Sahara</option>
												    <option value="YE">Yemen</option>
												    <option value="YU">Yugoslavia</option>
												    <option value="ZM">Zambia</option>
												    <option value="ZW">Zimbabwe</option>
												</select>
		                      
		                    </div>
                  		</div>
                  		<div class="form-group row">
                  			<label for="namechange" class="col-sm-4 col-form-label">Have you ever changed your name? </label>
		                    <div class="col-sm-8">
		                    	
		                      <div class="form-check form-check-inline">
													  <input class="form-check-input" type="radio" name="namechange" id="inlineRadio1" value="yes" {{ ($student->namechange=="yes")? "checked" : "" }}>
													  <label class="form-check-label" for="inlineRadio1" checked>Yes</label>
													</div>
												
													<div class="form-check form-check-inline">
													  <input class="form-check-input" type="radio" name="namechange" id="inlineRadio2" value="no" {{ ($student->namechange=="no")? "checked" : "" }}>
													  <label class="form-check-label" for="inlineRadio2" checked>No</label>
													</div>
												
                  			</div>
                  		
                  		</div>
                  </div>


                  	<div class="col-lg-6">
                  		<div class="form-group row">
                  			<label for="lname" class="col-sm-3 col-form-label">last Name</label>
		                    <div class="col-sm-9">
		                      <input type="text" class="form-control" id="lname" name="lname" placeholder="last Name" value="{{$student->lname}}">
		                    </div>
                  		</div>	
                  			
                  		<div class="form-group row">
                  			<label for="passport" class="col-sm-3 col-form-label">Passport Number </label>
		                    <div class="col-sm-9">
		                      <input type="text" class="form-control" id="passport" name="passportnumber" placeholder="Passport Number" required="true" value="{{$student->passportnumber}}">
		                    </div>
                  		</div>
                  		<div class="form-group row">
                  			<label for="dob" class="col-sm-3 col-form-label">Date of Birth </label>
		                    <div class="col-sm-9">
		                      <input type="date" class="form-control" id="dob" name="dob" placeholder="dob" required="true" value="{{$student->dob}}">
		                    </div>
                  		</div>

                  		<div class="form-group row">
                  			<label for="gender" class="col-sm-3 col-form-label">Gender</label>
		                    <div class="col-sm-9">
		                      <div class="form-group">
			                        <div class="form-check form-check-inline">
															  <input class="form-check-input" type="radio" name="gender" id="male" value="male" {{ ($student->gender=="male")? "checked" : "" }}>
															  <label class="form-check-label" for="male" >Male</label>
															</div>
															<div class="form-check form-check-inline">
															  <input class="form-check-input" type="radio" name="gender" id="female" value="female" {{ ($student->gender=="female")? "checked" : "" }}>
															  <label class="form-check-label" for="female">Female</label>
															</div>
                      		</div>
		                    </div>
                  		</div>
                  		<div class="form-group row">
                  			<label for="marital" class="col-sm-3 col-form-label">Marital Status</label>
		                    <div class="col-sm-9">
		                      <div class="form-group">
			                        <div class="form-check form-check-inline">
			                          <input class="form-check-input" type="radio" name="marital" value="Single" {{ ($student->marital=="Single")? "checked" : "" }} >
			                          <label class="form-check-label" >Single</label>
			                        </div>
			                        <div class="form-check form-check-inline">
			                          <input class="form-check-input" type="radio" name="marital"  value="married" id="married" {{ ($student->marital=="married")? "checked" : "" }} >
			                          <label class="form-check-label" for="married">married</label>
			                        </div>
			                        <div class="form-check form-check-inline">
			                          <input class="form-check-input" type="radio" name="marital" id="widowed"  value="widowed" {{ ($student->marital=="widowed")? "checked" : "" }}>
			                          <label class="form-check-label" for="widowed">widowed</label>
			                        </div>
			                        <div class="form-check form-check-inline">
			                          <input class="form-check-input" type="radio" name="marital" id="divorced"  value="divorced" {{ ($student->marital=="divorced")? "checked" : "" }}>
			                          <label class="form-check-label" for="divorced" >divorced</label>
			                        </div>
			                        <div class="form-check form-check-inline">
			                          <input class="form-check-input" type="radio" name="marital" id="separated"  value="separated" {{ ($student->marital=="separated")? "checked" : "" }}>
			                          <label class="form-check-label" for="separated">separated</label>
			                        </div>
                        
                      			</div>
		                    </div>
                  		</div>
                  		<div class="form-group row">
                  			<label for="skype" class="col-sm-3 col-form-label">Skype ID</label>
		                    <div class="col-sm-9">
		                      <input type="text" class="form-control" id="skype" name="skype" placeholder="skypename" value="{{$student->skype}}">
		                    </div>
                  		</div>

                  	</div>
                    
                  </div>
              	</div>
              	<div class="card-header">
               		 <h3 class="card-title">Address Information</h3>
              	</div>
              	<div class="card-body">

                  <div class="row">
                  	<div class="col-lg-6">
                  		<div class="form-group row">
                  			<label for="address" class="col-sm-4 col-form-label">Address <span style="color: red;">*</span></label>
		                    <div class="col-sm-8">
		                      <input type="text" class="form-control" id="address" name="address" placeholder="Address" value="{{$student->address}}">
		                    </div>
                  		</div>	
                  </div>


                  	<div class="col-lg-6">
                  			
                  			
                  		<div class="form-group row">
                  			<label for="city" class="col-sm-3 col-form-label">City/Town </label>
		                    <div class="col-sm-9">
		                      <input type="text" class="form-control" id="city" name="city" placeholder="City/Town" required="true" value="{{$student->city}}">
		                    </div>
                  		</div>
                  		
                  	</div>
                    
                    <div class="col-lg-6">
                    	<div class="form-group row">
                  			<label for="country" class="col-sm-2 col-form-label">Country </label>
		                    <div class="col-sm-10">
													<select class="form-control" name="country">
												    <option value="{{$student->country}}" selected>{{$student->country}}</option>
												   
												    <option value="AF">Afghanistan</option>
												    <option value="AL">Albania</option>
												    <option value="DZ">Algeria</option>
												    <option value="AS">American Samoa</option>
												    <option value="AD">Andorra</option>
												    <option value="AO">Angola</option>
												    <option value="AI">Anguilla</option>
												    <option value="AQ">Antarctica</option>
												    <option value="AG">Antigua and Barbuda</option>
												    <option value="AR">Argentina</option>
												    <option value="AM">Armenia</option>
												    <option value="AW">Aruba</option>
												    <option value="AU">Australia</option>
												    <option value="AT">Austria</option>
												    <option value="AZ">Azerbaijan</option>
												    <option value="BS">Bahamas</option>
												    <option value="BH">Bahrain</option>
												    <option value="BD">Bangladesh</option>
												    <option value="BB">Barbados</option>
												    <option value="BY">Belarus</option>
												    <option value="BE">Belgium</option>
												    <option value="BZ">Belize</option>
												    <option value="BJ">Benin</option>
												    <option value="BM">Bermuda</option>
												    <option value="BT">Bhutan</option>
												    <option value="BO">Bolivia</option>
												    <option value="BA">Bosnia and Herzegowina</option>
												    <option value="BW">Botswana</option>
												    <option value="BV">Bouvet Island</option>
												    <option value="BR">Brazil</option>
												    <option value="IO">British Indian Ocean Territory</option>
												    <option value="BN">Brunei Darussalam</option>
												    <option value="BG">Bulgaria</option>
												    <option value="BF">Burkina Faso</option>
												    <option value="BI">Burundi</option>
												    <option value="KH">Cambodia</option>
												    <option value="CM">Cameroon</option>
												    <option value="CA">Canada</option>
												    <option value="CV">Cape Verde</option>
												    <option value="KY">Cayman Islands</option>
												    <option value="CF">Central African Republic</option>
												    <option value="TD">Chad</option>
												    <option value="CL">Chile</option>
												    <option value="CN">China</option>
												    <option value="CX">Christmas Island</option>
												    <option value="CC">Cocos (Keeling) Islands</option>
												    <option value="CO">Colombia</option>
												    <option value="KM">Comoros</option>
												    <option value="CG">Congo</option>
												    <option value="CD">Congo, the Democratic Republic of the</option>
												    <option value="CK">Cook Islands</option>
												    <option value="CR">Costa Rica</option>
												    <option value="CI">Cote d'Ivoire</option>
												    <option value="HR">Croatia (Hrvatska)</option>
												    <option value="CU">Cuba</option>
												    <option value="CY">Cyprus</option>
												    <option value="CZ">Czech Republic</option>
												    <option value="DK">Denmark</option>
												    <option value="DJ">Djibouti</option>
												    <option value="DM">Dominica</option>
												    <option value="DO">Dominican Republic</option>
												    <option value="TP">East Timor</option>
												    <option value="EC">Ecuador</option>
												    <option value="EG">Egypt</option>
												    <option value="SV">El Salvador</option>
												    <option value="GQ">Equatorial Guinea</option>
												    <option value="ER">Eritrea</option>
												    <option value="EE">Estonia</option>
												    <option value="ET">Ethiopia</option>
												    <option value="FK">Falkland Islands (Malvinas)</option>
												    <option value="FO">Faroe Islands</option>
												    <option value="FJ">Fiji</option>
												    <option value="FI">Finland</option>
												    <option value="FR">France</option>
												    <option value="FX">France, Metropolitan</option>
												    <option value="GF">French Guiana</option>
												    <option value="PF">French Polynesia</option>
												    <option value="TF">French Southern Territories</option>
												    <option value="GA">Gabon</option>
												    <option value="GM">Gambia</option>
												    <option value="GE">Georgia</option>
												    <option value="DE">Germany</option>
												    <option value="GH">Ghana</option>
												    <option value="GI">Gibraltar</option>
												    <option value="GR">Greece</option>
												    <option value="GL">Greenland</option>
												    <option value="GD">Grenada</option>
												    <option value="GP">Guadeloupe</option>
												    <option value="GU">Guam</option>
												    <option value="GT">Guatemala</option>
												    <option value="GN">Guinea</option>
												    <option value="GW">Guinea-Bissau</option>
												    <option value="GY">Guyana</option>
												    <option value="HT">Haiti</option>
												    <option value="HM">Heard and Mc Donald Islands</option>
												    <option value="VA">Holy See (Vatican City State)</option>
												    <option value="HN">Honduras</option>
												    <option value="HK">Hong Kong</option>
												    <option value="HU">Hungary</option>
												    <option value="IS">Iceland</option>
												    <option value="IN">India</option>
												    <option value="ID">Indonesia</option>
												    <option value="IR">Iran (Islamic Republic of)</option>
												    <option value="IQ">Iraq</option>
												    <option value="IE">Ireland</option>
												    <option value="IL">Israel</option>
												    <option value="IT">Italy</option>
												    <option value="JM">Jamaica</option>
												    <option value="JP">Japan</option>
												    <option value="JO">Jordan</option>
												    <option value="KZ">Kazakhstan</option>
												    <option value="KE">Kenya</option>
												    <option value="KI">Kiribati</option>
												    <option value="KP">Korea, Democratic People's Republic of</option>
												    <option value="KR">Korea, Republic of</option>
												    <option value="KW">Kuwait</option>
												    <option value="KG">Kyrgyzstan</option>
												    <option value="LA">Lao People's Democratic Republic</option>
												    <option value="LV">Latvia</option>
												    <option value="LB">Lebanon</option>
												    <option value="LS">Lesotho</option>
												    <option value="LR">Liberia</option>
												    <option value="LY">Libyan Arab Jamahiriya</option>
												    <option value="LI">Liechtenstein</option>
												    <option value="LT">Lithuania</option>
												    <option value="LU">Luxembourg</option>
												    <option value="MO">Macau</option>
												    <option value="MK">Macedonia, The Former Yugoslav Republic of</option>
												    <option value="MG">Madagascar</option>
												    <option value="MW">Malawi</option>
												    <option value="MY">Malaysia</option>
												    <option value="MV">Maldives</option>
												    <option value="ML">Mali</option>
												    <option value="MT">Malta</option>
												    <option value="MH">Marshall Islands</option>
												    <option value="MQ">Martinique</option>
												    <option value="MR">Mauritania</option>
												    <option value="MU">Mauritius</option>
												    <option value="YT">Mayotte</option>
												    <option value="MX">Mexico</option>
												    <option value="FM">Micronesia, Federated States of</option>
												    <option value="MD">Moldova, Republic of</option>
												    <option value="MC">Monaco</option>
												    <option value="MN">Mongolia</option>
												    <option value="MS">Montserrat</option>
												    <option value="MA">Morocco</option>
												    <option value="MZ">Mozambique</option>
												    <option value="MM">Myanmar</option>
												    <option value="NA">Namibia</option>
												    <option value="NR">Nauru</option>
												    <option value="NP">Nepal</option>
												    <option value="NL">Netherlands</option>
												    <option value="AN">Netherlands Antilles</option>
												    <option value="NC">New Caledonia</option>
												    <option value="NZ">New Zealand</option>
												    <option value="NI">Nicaragua</option>
												    <option value="NE">Niger</option>
												    <option value="NG">Nigeria</option>
												    <option value="NU">Niue</option>
												    <option value="NF">Norfolk Island</option>
												    <option value="MP">Northern Mariana Islands</option>
												    <option value="NO">Norway</option>
												    <option value="OM">Oman</option>
												    <option value="PK">Pakistan</option>
												    <option value="PW">Palau</option>
												    <option value="PA">Panama</option>
												    <option value="PG">Papua New Guinea</option>
												    <option value="PY">Paraguay</option>
												    <option value="PE">Peru</option>
												    <option value="PH">Philippines</option>
												    <option value="PN">Pitcairn</option>
												    <option value="PL">Poland</option>
												    <option value="PT">Portugal</option>
												    <option value="PR">Puerto Rico</option>
												    <option value="QA">Qatar</option>
												    <option value="RE">Reunion</option>
												    <option value="RO">Romania</option>
												    <option value="RU">Russian Federation</option>
												    <option value="RW">Rwanda</option>
												    <option value="KN">Saint Kitts and Nevis</option> 
												    <option value="LC">Saint LUCIA</option>
												    <option value="VC">Saint Vincent and the Grenadines</option>
												    <option value="WS">Samoa</option>
												    <option value="SM">San Marino</option>
												    <option value="ST">Sao Tome and Principe</option> 
												    <option value="SA">Saudi Arabia</option>
												    <option value="SN">Senegal</option>
												    <option value="SC">Seychelles</option>
												    <option value="SL">Sierra Leone</option>
												    <option value="SG">Singapore</option>
												    <option value="SK">Slovakia (Slovak Republic)</option>
												    <option value="SI">Slovenia</option>
												    <option value="SB">Solomon Islands</option>
												    <option value="SO">Somalia</option>
												    <option value="ZA">South Africa</option>
												    <option value="GS">South Georgia and the South Sandwich Islands</option>
												    <option value="ES">Spain</option>
												    <option value="LK">Sri Lanka</option>
												    <option value="SH">St. Helena</option>
												    <option value="PM">St. Pierre and Miquelon</option>
												    <option value="SD">Sudan</option>
												    <option value="SR">Suriname</option>
												    <option value="SJ">Svalbard and Jan Mayen Islands</option>
												    <option value="SZ">Swaziland</option>
												    <option value="SE">Sweden</option>
												    <option value="CH">Switzerland</option>
												    <option value="SY">Syrian Arab Republic</option>
												    <option value="TW">Taiwan, Province of China</option>
												    <option value="TJ">Tajikistan</option>
												    <option value="TZ">Tanzania, United Republic of</option>
												    <option value="TH">Thailand</option>
												    <option value="TG">Togo</option>
												    <option value="TK">Tokelau</option>
												    <option value="TO">Tonga</option>
												    <option value="TT">Trinidad and Tobago</option>
												    <option value="TN">Tunisia</option>
												    <option value="TR">Turkey</option>
												    <option value="TM">Turkmenistan</option>
												    <option value="TC">Turks and Caicos Islands</option>
												    <option value="TV">Tuvalu</option>
												    <option value="UG">Uganda</option>
												    <option value="UA">Ukraine</option>
												    <option value="AE">United Arab Emirates</option>
												    <option value="GB">United Kingdom</option>
												    <option value="US">United States</option>
												    <option value="UM">United States Minor Outlying Islands</option>
												    <option value="UY">Uruguay</option>
												    <option value="UZ">Uzbekistan</option>
												    <option value="VU">Vanuatu</option>
												    <option value="VE">Venezuela</option>
												    <option value="VN">Viet Nam</option>
												    <option value="VG">Virgin Islands (British)</option>
												    <option value="VI">Virgin Islands (U.S.)</option>
												    <option value="WF">Wallis and Futuna Islands</option>
												    <option value="EH">Western Sahara</option>
												    <option value="YE">Yemen</option>
												    <option value="YU">Yugoslavia</option>
												    <option value="ZM">Zambia</option>
												    <option value="ZW">Zimbabwe</option>
												</select>

		                    </div>
                  		</div>
                    </div>
                    <div class="col-lg-3">
                    	<div class="form-group row">
                  			<label for="city" class="col-sm-3 col-form-label">State </label>
		                    <div class="col-sm-9">
		                      <input type="text" class="form-control" id="state" name="state" placeholder="state" value="{{$student->state}}">
		                    </div>
                  		</div>
                    </div>
                    <div class="col-lg-3">
                    	<div class="form-group row">
                  			<label for="post" class="col-sm-4 col-form-label">Post/Zip Code </label>
		                    <div class="col-sm-8">
		                      <input type="text" class="form-control" id="post" name="post" placeholder="Post/Zip Code" value="{{$student->post}}">
		                    </div>
                  		</div>
                    </div>
                    <div class="col-lg-6">
                    	<div class="form-group row">
                  			<label for="mobile" class="col-sm-4 col-form-label">Mobile Number <span style="color: red;">*</span></label>
		                    <div class="col-sm-8">
		                      <input type="text" class="form-control" id="mobile" name="mobile" placeholder="+4473*******" required="true" value="{{$student->mobile}}">
		                    </div>
                  		</div>
                    </div>
                    <div class="col-lg-6">
                    	<div class="form-group row">
                  			<label for="email" class="col-sm-3 col-form-label">Email <span style="color: red;">*</span></label>
		                    <div class="col-sm-9">
		                      <input type="email" class="form-control" id="email" name="email" value="{{$student->email}}" required="true">
		                    </div>
                  		</div>
                    </div>
                  </div>
              	</div>
              	<!-- Address-->
              	<div class="card-header">
               		 <h3 class="card-title">Educations</h3>
              	</div>
              	<div class="card-body">
              		<div class="row">
                  	<div class="col-lg-12 mb-5">
                  		<div class="form-group row">
                  			<label class="col-sm-5 col-form-label" for="englishlevel">ENGLISH PROFICIENCY LEVEL ( NOT HAVE A VALID SCORE)</label>
                  			<div class="col-sm-7">
				                  <select id="englishlevel" class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true" name="englishlevel">
					                    <option value="{{$student->englishlevel}}">{{$student->englishlevel}}</option>
					                    
				                   </select>
				                </div>

                			</div>
                			<div class="form-group row" id="englishscore">
                  			
                  				<div class="col-sm-3">
				                	  <input type="text" class="form-control" id="score" name="score" value="{{$student->score}}">
				                </div>
				                
                  				<div class="col-sm-3">
				                	  <input type="text" class="form-control" id="written" name="written" value="{{$student->written}}">
				                </div>
				                <div class="col-sm-3">
				                 	 <input type="text" class="form-control" id="reading" name="reading" value="{{$student->reading}}">
				                </div>
				                <div class="col-sm-3">
				                	  <input type="text" class="form-control" id="spoken" name="spoken" value="{{$student->spoken}}">
				                </div>
                			</div>

							<div class="form-group row" id="IELTS_score">
                  			
                  				<div class="col-sm-3">
				                	  <input type="text" class="form-control" id="score" name="score" value="{{$student->score}}">
				                	</div>

				                
				                
                  				<div class="col-sm-3">
				                	  <input type="text" class="form-control" id="written" name="written" value="{{$student->written}}">
				                </div>
				                <div class="col-sm-3">
				                 	 <input type="text" class="form-control" id="reading" name="reading" value="{{$student->reading}}">
				                </div>
				                <div class="col-sm-2">
				                	  <input type="text" class="form-control" id="spoken" name="spoken" value="{{$student->spoken}}">
				                </div>
				                <div class="col-sm-2">
				                	  <input type="text" class="form-control" id="listen" name="listening" value="{{$student->listening}}">
				                </div>
                			</div>
                  	</div>
                  	<div class="col-lg-4">
                  		<div class="form-group row">
                  			<label for="countryedu" class="col-sm-3 col-form-label"> Country of Education</label>
		                    <div class="col-sm-9">
		                      <select class="form-control" name="countryedu">
												    <option value="{{$student->countryedu}}" selected>{{$student->countryedu}}</option>
												    
												    <option value="AF">Afghanistan</option>
												    <option value="AL">Albania</option>
												    <option value="DZ">Algeria</option>
												    <option value="AS">American Samoa</option>
												    <option value="AD">Andorra</option>
												    <option value="AO">Angola</option>
												    <option value="AI">Anguilla</option>
												    <option value="AQ">Antarctica</option>
												    <option value="AG">Antigua and Barbuda</option>
												    <option value="AR">Argentina</option>
												    <option value="AM">Armenia</option>
												    <option value="AW">Aruba</option>
												    <option value="AU">Australia</option>
												    <option value="AT">Austria</option>
												    <option value="AZ">Azerbaijan</option>
												    <option value="BS">Bahamas</option>
												    <option value="BH">Bahrain</option>
												    <option value="BD">Bangladesh</option>
												    <option value="BB">Barbados</option>
												    <option value="BY">Belarus</option>
												    <option value="BE">Belgium</option>
												    <option value="BZ">Belize</option>
												    <option value="BJ">Benin</option>
												    <option value="BM">Bermuda</option>
												    <option value="BT">Bhutan</option>
												    <option value="BO">Bolivia</option>
												    <option value="BA">Bosnia and Herzegowina</option>
												    <option value="BW">Botswana</option>
												    <option value="BV">Bouvet Island</option>
												    <option value="BR">Brazil</option>
												    <option value="IO">British Indian Ocean Territory</option>
												    <option value="BN">Brunei Darussalam</option>
												    <option value="BG">Bulgaria</option>
												    <option value="BF">Burkina Faso</option>
												    <option value="BI">Burundi</option>
												    <option value="KH">Cambodia</option>
												    <option value="CM">Cameroon</option>
												    <option value="CA">Canada</option>
												    <option value="CV">Cape Verde</option>
												    <option value="KY">Cayman Islands</option>
												    <option value="CF">Central African Republic</option>
												    <option value="TD">Chad</option>
												    <option value="CL">Chile</option>
												    <option value="CN">China</option>
												    <option value="CX">Christmas Island</option>
												    <option value="CC">Cocos (Keeling) Islands</option>
												    <option value="CO">Colombia</option>
												    <option value="KM">Comoros</option>
												    <option value="CG">Congo</option>
												    <option value="CD">Congo, the Democratic Republic of the</option>
												    <option value="CK">Cook Islands</option>
												    <option value="CR">Costa Rica</option>
												    <option value="CI">Cote d'Ivoire</option>
												    <option value="HR">Croatia (Hrvatska)</option>
												    <option value="CU">Cuba</option>
												    <option value="CY">Cyprus</option>
												    <option value="CZ">Czech Republic</option>
												    <option value="DK">Denmark</option>
												    <option value="DJ">Djibouti</option>
												    <option value="DM">Dominica</option>
												    <option value="DO">Dominican Republic</option>
												    <option value="TP">East Timor</option>
												    <option value="EC">Ecuador</option>
												    <option value="EG">Egypt</option>
												    <option value="SV">El Salvador</option>
												    <option value="GQ">Equatorial Guinea</option>
												    <option value="ER">Eritrea</option>
												    <option value="EE">Estonia</option>
												    <option value="ET">Ethiopia</option>
												    <option value="FK">Falkland Islands (Malvinas)</option>
												    <option value="FO">Faroe Islands</option>
												    <option value="FJ">Fiji</option>
												    <option value="FI">Finland</option>
												    <option value="FR">France</option>
												    <option value="FX">France, Metropolitan</option>
												    <option value="GF">French Guiana</option>
												    <option value="PF">French Polynesia</option>
												    <option value="TF">French Southern Territories</option>
												    <option value="GA">Gabon</option>
												    <option value="GM">Gambia</option>
												    <option value="GE">Georgia</option>
												    <option value="DE">Germany</option>
												    <option value="GH">Ghana</option>
												    <option value="GI">Gibraltar</option>
												    <option value="GR">Greece</option>
												    <option value="GL">Greenland</option>
												    <option value="GD">Grenada</option>
												    <option value="GP">Guadeloupe</option>
												    <option value="GU">Guam</option>
												    <option value="GT">Guatemala</option>
												    <option value="GN">Guinea</option>
												    <option value="GW">Guinea-Bissau</option>
												    <option value="GY">Guyana</option>
												    <option value="HT">Haiti</option>
												    <option value="HM">Heard and Mc Donald Islands</option>
												    <option value="VA">Holy See (Vatican City State)</option>
												    <option value="HN">Honduras</option>
												    <option value="HK">Hong Kong</option>
												    <option value="HU">Hungary</option>
												    <option value="IS">Iceland</option>
												    <option value="IN">India</option>
												    <option value="ID">Indonesia</option>
												    <option value="IR">Iran (Islamic Republic of)</option>
												    <option value="IQ">Iraq</option>
												    <option value="IE">Ireland</option>
												    <option value="IL">Israel</option>
												    <option value="IT">Italy</option>
												    <option value="JM">Jamaica</option>
												    <option value="JP">Japan</option>
												    <option value="JO">Jordan</option>
												    <option value="KZ">Kazakhstan</option>
												    <option value="KE">Kenya</option>
												    <option value="KI">Kiribati</option>
												    <option value="KP">Korea, Democratic People's Republic of</option>
												    <option value="KR">Korea, Republic of</option>
												    <option value="KW">Kuwait</option>
												    <option value="KG">Kyrgyzstan</option>
												    <option value="LA">Lao People's Democratic Republic</option>
												    <option value="LV">Latvia</option>
												    <option value="LB">Lebanon</option>
												    <option value="LS">Lesotho</option>
												    <option value="LR">Liberia</option>
												    <option value="LY">Libyan Arab Jamahiriya</option>
												    <option value="LI">Liechtenstein</option>
												    <option value="LT">Lithuania</option>
												    <option value="LU">Luxembourg</option>
												    <option value="MO">Macau</option>
												    <option value="MK">Macedonia, The Former Yugoslav Republic of</option>
												    <option value="MG">Madagascar</option>
												    <option value="MW">Malawi</option>
												    <option value="MY">Malaysia</option>
												    <option value="MV">Maldives</option>
												    <option value="ML">Mali</option>
												    <option value="MT">Malta</option>
												    <option value="MH">Marshall Islands</option>
												    <option value="MQ">Martinique</option>
												    <option value="MR">Mauritania</option>
												    <option value="MU">Mauritius</option>
												    <option value="YT">Mayotte</option>
												    <option value="MX">Mexico</option>
												    <option value="FM">Micronesia, Federated States of</option>
												    <option value="MD">Moldova, Republic of</option>
												    <option value="MC">Monaco</option>
												    <option value="MN">Mongolia</option>
												    <option value="MS">Montserrat</option>
												    <option value="MA">Morocco</option>
												    <option value="MZ">Mozambique</option>
												    <option value="MM">Myanmar</option>
												    <option value="NA">Namibia</option>
												    <option value="NR">Nauru</option>
												    <option value="NP">Nepal</option>
												    <option value="NL">Netherlands</option>
												    <option value="AN">Netherlands Antilles</option>
												    <option value="NC">New Caledonia</option>
												    <option value="NZ">New Zealand</option>
												    <option value="NI">Nicaragua</option>
												    <option value="NE">Niger</option>
												    <option value="NG">Nigeria</option>
												    <option value="NU">Niue</option>
												    <option value="NF">Norfolk Island</option>
												    <option value="MP">Northern Mariana Islands</option>
												    <option value="NO">Norway</option>
												    <option value="OM">Oman</option>
												    <option value="PK">Pakistan</option>
												    <option value="PW">Palau</option>
												    <option value="PA">Panama</option>
												    <option value="PG">Papua New Guinea</option>
												    <option value="PY">Paraguay</option>
												    <option value="PE">Peru</option>
												    <option value="PH">Philippines</option>
												    <option value="PN">Pitcairn</option>
												    <option value="PL">Poland</option>
												    <option value="PT">Portugal</option>
												    <option value="PR">Puerto Rico</option>
												    <option value="QA">Qatar</option>
												    <option value="RE">Reunion</option>
												    <option value="RO">Romania</option>
												    <option value="RU">Russian Federation</option>
												    <option value="RW">Rwanda</option>
												    <option value="KN">Saint Kitts and Nevis</option> 
												    <option value="LC">Saint LUCIA</option>
												    <option value="VC">Saint Vincent and the Grenadines</option>
												    <option value="WS">Samoa</option>
												    <option value="SM">San Marino</option>
												    <option value="ST">Sao Tome and Principe</option> 
												    <option value="SA">Saudi Arabia</option>
												    <option value="SN">Senegal</option>
												    <option value="SC">Seychelles</option>
												    <option value="SL">Sierra Leone</option>
												    <option value="SG">Singapore</option>
												    <option value="SK">Slovakia (Slovak Republic)</option>
												    <option value="SI">Slovenia</option>
												    <option value="SB">Solomon Islands</option>
												    <option value="SO">Somalia</option>
												    <option value="ZA">South Africa</option>
												    <option value="GS">South Georgia and the South Sandwich Islands</option>
												    <option value="ES">Spain</option>
												    <option value="LK">Sri Lanka</option>
												    <option value="SH">St. Helena</option>
												    <option value="PM">St. Pierre and Miquelon</option>
												    <option value="SD">Sudan</option>
												    <option value="SR">Suriname</option>
												    <option value="SJ">Svalbard and Jan Mayen Islands</option>
												    <option value="SZ">Swaziland</option>
												    <option value="SE">Sweden</option>
												    <option value="CH">Switzerland</option>
												    <option value="SY">Syrian Arab Republic</option>
												    <option value="TW">Taiwan, Province of China</option>
												    <option value="TJ">Tajikistan</option>
												    <option value="TZ">Tanzania, United Republic of</option>
												    <option value="TH">Thailand</option>
												    <option value="TG">Togo</option>
												    <option value="TK">Tokelau</option>
												    <option value="TO">Tonga</option>
												    <option value="TT">Trinidad and Tobago</option>
												    <option value="TN">Tunisia</option>
												    <option value="TR">Turkey</option>
												    <option value="TM">Turkmenistan</option>
												    <option value="TC">Turks and Caicos Islands</option>
												    <option value="TV">Tuvalu</option>
												    <option value="UG">Uganda</option>
												    <option value="UA">Ukraine</option>
												    <option value="AE">United Arab Emirates</option>
												    <option value="GB">United Kingdom</option>
												    <option value="US">United States</option>
												    <option value="UM">United States Minor Outlying Islands</option>
												    <option value="UY">Uruguay</option>
												    <option value="UZ">Uzbekistan</option>
												    <option value="VU">Vanuatu</option>
												    <option value="VE">Venezuela</option>
												    <option value="VN">Viet Nam</option>
												    <option value="VG">Virgin Islands (British)</option>
												    <option value="VI">Virgin Islands (U.S.)</option>
												    <option value="WF">Wallis and Futuna Islands</option>
												    <option value="EH">Western Sahara</option>
												    <option value="YE">Yemen</option>
												    <option value="YU">Yugoslavia</option>
												    <option value="ZM">Zambia</option>
												    <option value="ZW">Zimbabwe</option>
												</select>
		                    </div>
                  		</div>

                  		<div class="form-group row">
                  			<label for="gradeoutof" class="col-sm-3 col-form-label">Grade Scale (out of)</label>
		                    <div class="col-sm-9">
		                      <input type="text" class="form-control" id="gradeoutof" name="gradeoutof" value="{{$student->gradeoutof}}">
		                    </div>
                  		</div>
                  	</div>
                  	<div class="col-lg-4">
                  		<div class="form-group row">
                  			<label for="heightleveledu" class="col-sm-3 col-form-label">Highest Level of Education</label>
		                    <div class="col-sm-9">
		                      <input type="text" class="form-control" id="heightleveledu" name="heightleveledu" value="{{$student->heightleveledu}}">
		                    </div>
                  		</div>
                  		
                  	</div>
                  	<div class="col-lg-4">
                  		<div class="form-group row">
                  			<label for="gradingscheme" class="col-sm-3 col-form-label">Grading scheme</label>
		                    <div class="col-sm-9">
		                      <input type="text" class="form-control" id="gradingscheme" name="gradingscheme" value="{{$student->gradingscheme}}">
		                    </div>
                  		</div>
                  		<div class="form-group row">
                  			
		                    
		                    <label for="recentschool" class="col-sm-10 col-form-label">Graduated from most recent school </label>
		                    <div class="col-sm-2 mt-2">
		                      <input type="checkbox" id="recentschool" name="recentschool" {{ ($student->recentschool=="1")? "checked" : "" }}>
		                    </div>
                  		</div>



                  	</div>
                  	<div class="col-lg-6">
                  		<div class="form-group row">
                  			<label for="sscinst" class="col-sm-3 col-form-label">SSC institute Name</label>
		                    <div class="col-sm-9">
		                      <input type="text" class="form-control" id="sscinst" name="sscinst" value="{{$student->sscinst}}">
		                    </div>
                  		</div>
                  		<div class="form-group row">
                  			<label for="sscyear" class="col-sm-3 col-form-label">SSC Passing Year</label>
		                    <div class="col-sm-9">
		                      <input type="number" class="form-control" maxlength="4" id="sscyear" name="sscyear" value="{{$student->sscyear}}">
		                    </div>
                  		</div>
                  		<div class="form-group row">
                  			<label for="sscgroup" class="col-sm-3 col-form-label">SSC Group/Major</label>
		                    <div class="col-sm-9">
		                      <input type="text" class="form-control" id="sscgroup" name="sscgroup" value="{{$student->sscgroup}}">
		                    </div>
                  		</div>
                  		<div class="form-group row">
                  			<label for="sscresult" class="col-sm-3 col-form-label">SSC Result</label>
		                    <div class="col-sm-9">
		                      <input type="text" class="form-control" id="sscresult" name="sscresult" value="{{$student->sscresult}}">
		                    </div>
                  		</div>
                  	</div>
                  	<div class="col-lg-6">
                  		<div class="form-group row">
                  			<label for="hscinst" class="col-sm-3 col-form-label">HSC institute Name</label>
		                    <div class="col-sm-9">
		                      <input type="text" class="form-control" id="hscinst" name="hscinst" value="{{$student->hscinst}}">
		                    </div>
                  		</div>
                  		<div class="form-group row">
                  			<label for="hscyear" class="col-sm-3 col-form-label">SSC Passing Year</label>
		                    <div class="col-sm-9">
		                      <input type="number" class="form-control" maxlength="4" id="hscyear" name="hscyear" value="{{$student->hscyear}}">
		                    </div>
                  		</div>
                  		<div class="form-group row">
                  			<label for="hscgroup" class="col-sm-3 col-form-label">SSC Group/Major</label>
		                    <div class="col-sm-9">
		                      <input type="text" class="form-control" id="hscgroup" name="hscgroup" value="{{$student->hscgroup}}">
		                    </div>
                  		</div>
                  		<div class="form-group row">
                  			<label for="hscresult" class="col-sm-3 col-form-label">SSC Result</label>
		                    <div class="col-sm-9">
		                      <input type="text" class="form-control" id="hscresult" name="hscresult" value="{{$student->hscresult}}">
		                    </div>
                  		</div>
                  	</div>
                  	
                  	<div class="col-lg-12">
                  		<div class="form-group text-center">
                  			
		                    
		                     
		                    <div id="addNewedu" class="btn btn-info">Add row +</div>
                  		</div>
                  	</div>
                  	<div class="row" id="addNewedulevel">
		                  	<div class="col-lg-6">
		                  		<div class="form-group row">
		                  			<label for="edulevel" class="col-sm-3 col-form-label"> Education Level</label>
				                    <div class="col-sm-9">
				                      <input type="text" class="form-control" id="edulevel" name="edulevel" value="{{$student->edulevel}}">
				                    </div>
		                  		</div>
		                  		<div class="form-group row">
		                  			<label for="countryins" class="col-sm-3 col-form-label">Country of instuituting</label>
				                    <div class="col-sm-9">
				                      <select class="form-control" name="countryins">
												    <option value="{{$student->countryins}}" selected="">{{$student->countryins}}</option>
												   
												    <option value="AF">Afghanistan</option>
												    <option value="AL">Albania</option>
												    <option value="DZ">Algeria</option>
												    <option value="AS">American Samoa</option>
												    <option value="AD">Andorra</option>
												    <option value="AO">Angola</option>
												    <option value="AI">Anguilla</option>
												    <option value="AQ">Antarctica</option>
												    <option value="AG">Antigua and Barbuda</option>
												    <option value="AR">Argentina</option>
												    <option value="AM">Armenia</option>
												    <option value="AW">Aruba</option>
												    <option value="AU">Australia</option>
												    <option value="AT">Austria</option>
												    <option value="AZ">Azerbaijan</option>
												    <option value="BS">Bahamas</option>
												    <option value="BH">Bahrain</option>
												    <option value="BD">Bangladesh</option>
												    <option value="BB">Barbados</option>
												    <option value="BY">Belarus</option>
												    <option value="BE">Belgium</option>
												    <option value="BZ">Belize</option>
												    <option value="BJ">Benin</option>
												    <option value="BM">Bermuda</option>
												    <option value="BT">Bhutan</option>
												    <option value="BO">Bolivia</option>
												    <option value="BA">Bosnia and Herzegowina</option>
												    <option value="BW">Botswana</option>
												    <option value="BV">Bouvet Island</option>
												    <option value="BR">Brazil</option>
												    <option value="IO">British Indian Ocean Territory</option>
												    <option value="BN">Brunei Darussalam</option>
												    <option value="BG">Bulgaria</option>
												    <option value="BF">Burkina Faso</option>
												    <option value="BI">Burundi</option>
												    <option value="KH">Cambodia</option>
												    <option value="CM">Cameroon</option>
												    <option value="CA">Canada</option>
												    <option value="CV">Cape Verde</option>
												    <option value="KY">Cayman Islands</option>
												    <option value="CF">Central African Republic</option>
												    <option value="TD">Chad</option>
												    <option value="CL">Chile</option>
												    <option value="CN">China</option>
												    <option value="CX">Christmas Island</option>
												    <option value="CC">Cocos (Keeling) Islands</option>
												    <option value="CO">Colombia</option>
												    <option value="KM">Comoros</option>
												    <option value="CG">Congo</option>
												    <option value="CD">Congo, the Democratic Republic of the</option>
												    <option value="CK">Cook Islands</option>
												    <option value="CR">Costa Rica</option>
												    <option value="CI">Cote d'Ivoire</option>
												    <option value="HR">Croatia (Hrvatska)</option>
												    <option value="CU">Cuba</option>
												    <option value="CY">Cyprus</option>
												    <option value="CZ">Czech Republic</option>
												    <option value="DK">Denmark</option>
												    <option value="DJ">Djibouti</option>
												    <option value="DM">Dominica</option>
												    <option value="DO">Dominican Republic</option>
												    <option value="TP">East Timor</option>
												    <option value="EC">Ecuador</option>
												    <option value="EG">Egypt</option>
												    <option value="SV">El Salvador</option>
												    <option value="GQ">Equatorial Guinea</option>
												    <option value="ER">Eritrea</option>
												    <option value="EE">Estonia</option>
												    <option value="ET">Ethiopia</option>
												    <option value="FK">Falkland Islands (Malvinas)</option>
												    <option value="FO">Faroe Islands</option>
												    <option value="FJ">Fiji</option>
												    <option value="FI">Finland</option>
												    <option value="FR">France</option>
												    <option value="FX">France, Metropolitan</option>
												    <option value="GF">French Guiana</option>
												    <option value="PF">French Polynesia</option>
												    <option value="TF">French Southern Territories</option>
												    <option value="GA">Gabon</option>
												    <option value="GM">Gambia</option>
												    <option value="GE">Georgia</option>
												    <option value="DE">Germany</option>
												    <option value="GH">Ghana</option>
												    <option value="GI">Gibraltar</option>
												    <option value="GR">Greece</option>
												    <option value="GL">Greenland</option>
												    <option value="GD">Grenada</option>
												    <option value="GP">Guadeloupe</option>
												    <option value="GU">Guam</option>
												    <option value="GT">Guatemala</option>
												    <option value="GN">Guinea</option>
												    <option value="GW">Guinea-Bissau</option>
												    <option value="GY">Guyana</option>
												    <option value="HT">Haiti</option>
												    <option value="HM">Heard and Mc Donald Islands</option>
												    <option value="VA">Holy See (Vatican City State)</option>
												    <option value="HN">Honduras</option>
												    <option value="HK">Hong Kong</option>
												    <option value="HU">Hungary</option>
												    <option value="IS">Iceland</option>
												    <option value="IN">India</option>
												    <option value="ID">Indonesia</option>
												    <option value="IR">Iran (Islamic Republic of)</option>
												    <option value="IQ">Iraq</option>
												    <option value="IE">Ireland</option>
												    <option value="IL">Israel</option>
												    <option value="IT">Italy</option>
												    <option value="JM">Jamaica</option>
												    <option value="JP">Japan</option>
												    <option value="JO">Jordan</option>
												    <option value="KZ">Kazakhstan</option>
												    <option value="KE">Kenya</option>
												    <option value="KI">Kiribati</option>
												    <option value="KP">Korea, Democratic People's Republic of</option>
												    <option value="KR">Korea, Republic of</option>
												    <option value="KW">Kuwait</option>
												    <option value="KG">Kyrgyzstan</option>
												    <option value="LA">Lao People's Democratic Republic</option>
												    <option value="LV">Latvia</option>
												    <option value="LB">Lebanon</option>
												    <option value="LS">Lesotho</option>
												    <option value="LR">Liberia</option>
												    <option value="LY">Libyan Arab Jamahiriya</option>
												    <option value="LI">Liechtenstein</option>
												    <option value="LT">Lithuania</option>
												    <option value="LU">Luxembourg</option>
												    <option value="MO">Macau</option>
												    <option value="MK">Macedonia, The Former Yugoslav Republic of</option>
												    <option value="MG">Madagascar</option>
												    <option value="MW">Malawi</option>
												    <option value="MY">Malaysia</option>
												    <option value="MV">Maldives</option>
												    <option value="ML">Mali</option>
												    <option value="MT">Malta</option>
												    <option value="MH">Marshall Islands</option>
												    <option value="MQ">Martinique</option>
												    <option value="MR">Mauritania</option>
												    <option value="MU">Mauritius</option>
												    <option value="YT">Mayotte</option>
												    <option value="MX">Mexico</option>
												    <option value="FM">Micronesia, Federated States of</option>
												    <option value="MD">Moldova, Republic of</option>
												    <option value="MC">Monaco</option>
												    <option value="MN">Mongolia</option>
												    <option value="MS">Montserrat</option>
												    <option value="MA">Morocco</option>
												    <option value="MZ">Mozambique</option>
												    <option value="MM">Myanmar</option>
												    <option value="NA">Namibia</option>
												    <option value="NR">Nauru</option>
												    <option value="NP">Nepal</option>
												    <option value="NL">Netherlands</option>
												    <option value="AN">Netherlands Antilles</option>
												    <option value="NC">New Caledonia</option>
												    <option value="NZ">New Zealand</option>
												    <option value="NI">Nicaragua</option>
												    <option value="NE">Niger</option>
												    <option value="NG">Nigeria</option>
												    <option value="NU">Niue</option>
												    <option value="NF">Norfolk Island</option>
												    <option value="MP">Northern Mariana Islands</option>
												    <option value="NO">Norway</option>
												    <option value="OM">Oman</option>
												    <option value="PK">Pakistan</option>
												    <option value="PW">Palau</option>
												    <option value="PA">Panama</option>
												    <option value="PG">Papua New Guinea</option>
												    <option value="PY">Paraguay</option>
												    <option value="PE">Peru</option>
												    <option value="PH">Philippines</option>
												    <option value="PN">Pitcairn</option>
												    <option value="PL">Poland</option>
												    <option value="PT">Portugal</option>
												    <option value="PR">Puerto Rico</option>
												    <option value="QA">Qatar</option>
												    <option value="RE">Reunion</option>
												    <option value="RO">Romania</option>
												    <option value="RU">Russian Federation</option>
												    <option value="RW">Rwanda</option>
												    <option value="KN">Saint Kitts and Nevis</option> 
												    <option value="LC">Saint LUCIA</option>
												    <option value="VC">Saint Vincent and the Grenadines</option>
												    <option value="WS">Samoa</option>
												    <option value="SM">San Marino</option>
												    <option value="ST">Sao Tome and Principe</option> 
												    <option value="SA">Saudi Arabia</option>
												    <option value="SN">Senegal</option>
												    <option value="SC">Seychelles</option>
												    <option value="SL">Sierra Leone</option>
												    <option value="SG">Singapore</option>
												    <option value="SK">Slovakia (Slovak Republic)</option>
												    <option value="SI">Slovenia</option>
												    <option value="SB">Solomon Islands</option>
												    <option value="SO">Somalia</option>
												    <option value="ZA">South Africa</option>
												    <option value="GS">South Georgia and the South Sandwich Islands</option>
												    <option value="ES">Spain</option>
												    <option value="LK">Sri Lanka</option>
												    <option value="SH">St. Helena</option>
												    <option value="PM">St. Pierre and Miquelon</option>
												    <option value="SD">Sudan</option>
												    <option value="SR">Suriname</option>
												    <option value="SJ">Svalbard and Jan Mayen Islands</option>
												    <option value="SZ">Swaziland</option>
												    <option value="SE">Sweden</option>
												    <option value="CH">Switzerland</option>
												    <option value="SY">Syrian Arab Republic</option>
												    <option value="TW">Taiwan, Province of China</option>
												    <option value="TJ">Tajikistan</option>
												    <option value="TZ">Tanzania, United Republic of</option>
												    <option value="TH">Thailand</option>
												    <option value="TG">Togo</option>
												    <option value="TK">Tokelau</option>
												    <option value="TO">Tonga</option>
												    <option value="TT">Trinidad and Tobago</option>
												    <option value="TN">Tunisia</option>
												    <option value="TR">Turkey</option>
												    <option value="TM">Turkmenistan</option>
												    <option value="TC">Turks and Caicos Islands</option>
												    <option value="TV">Tuvalu</option>
												    <option value="UG">Uganda</option>
												    <option value="UA">Ukraine</option>
												    <option value="AE">United Arab Emirates</option>
												    <option value="GB">United Kingdom</option>
												    <option value="US">United States</option>
												    <option value="UM">United States Minor Outlying Islands</option>
												    <option value="UY">Uruguay</option>
												    <option value="UZ">Uzbekistan</option>
												    <option value="VU">Vanuatu</option>
												    <option value="VE">Venezuela</option>
												    <option value="VN">Viet Nam</option>
												    <option value="VG">Virgin Islands (British)</option>
												    <option value="VI">Virgin Islands (U.S.)</option>
												    <option value="WF">Wallis and Futuna Islands</option>
												    <option value="EH">Western Sahara</option>
												    <option value="YE">Yemen</option>
												    <option value="YU">Yugoslavia</option>
												    <option value="ZM">Zambia</option>
												    <option value="ZW">Zimbabwe</option>
												</select>
				                    </div>
		                  		</div>
		                  		<div class="form-group row">
		                  			<label for="institute" class="col-sm-3 col-form-label">Name of Institution</label>
				                    <div class="col-sm-9">
				                      <input type="text" class="form-control" id="institute" name="institute" value="{{$student->institute}}">
				                    </div>
		                  		</div>
		                  		<div class="form-group row">
		                  			<label for="primarylanguage" class="col-sm-3 col-form-label">Primary language of Institution</label>
				                    <div class="col-sm-9">
				                      <input type="text" class="form-control" id="primarylanguage" name="primarylanguage" value="{{$student->primarylanguage}}">
				                    </div>
		                  		</div>
		                  		<div class="form-group row">
		                  			<label for="attendedfrom" class="col-sm-3 col-form-label">Attended Institution from</label>
				                    <div class="col-sm-9">
				                      <input type="date" class="form-control" id="attendedfrom" name="attendedfrom" value="{{$student->attendedfrom}}">
				                    </div>
		                  		</div>

		                  		<div class="form-group row">
		                  			<label for="attendedto" class="col-sm-3 col-form-label">Attended Institution To </label>
				                    <div class="col-sm-9">
				                      <input type="date" class="form-control" id="attendedto" name="attendedto" value="{{$student->attendedto}}">
				                    </div>
		                  		</div>

		                  	</div>


		                  	<div class="col-lg-6">
		                  		<div class="form-group row">
		                  			<label for="degreeaward" class="col-sm-3 col-form-label">Degree Awarded</label>
				                    <div class="col-sm-9">
				                      <input type="text" class="form-control" id="degreeaward" name="degreeaward" value="{{$student->degreeaward}}">
				                    </div>
		                  		</div>
		                  		<div class="form-group row">
		                  			<label for="degreeawardon" class="col-sm-3 col-form-label">Degree Awarded on</label>
				                    <div class="col-sm-9">
				                      <input type="date" class="form-control" id="degreeawardon" name="degreeawardon" value="{{$student->degreeawardon}}">
				                    </div>
		                  		</div>
		                  		<div class="form-group row">
		                  			<label for="instituteaddress" class="col-sm-3 col-form-label">Institute Address , State / City</label>
				                    <div class="col-sm-9">
				                      <input type="text" class="form-control" id="instituteaddress" name="instituteaddress" value="{{$student->instituteaddress}}">
				                    </div>
		                  		</div>
		                  		<div class="form-group row">
		                  			<label for="inscountry" class="col-sm-3 col-form-label">Education Country</label>
				                    <div class="col-sm-9">
				                      <select class="form-control" name="inscountry">
														    <option value="{{$student->inscountry}}" selected>{{$student->inscountry}}</option>
														   
														    <option value="AF">Afghanistan</option>
														    <option value="AL">Albania</option>
														    <option value="DZ">Algeria</option>
														    <option value="AS">American Samoa</option>
														    <option value="AD">Andorra</option>
														    <option value="AO">Angola</option>
														    <option value="AI">Anguilla</option>
														    <option value="AQ">Antarctica</option>
														    <option value="AG">Antigua and Barbuda</option>
														    <option value="AR">Argentina</option>
														    <option value="AM">Armenia</option>
														    <option value="AW">Aruba</option>
														    <option value="AU">Australia</option>
														    <option value="AT">Austria</option>
														    <option value="AZ">Azerbaijan</option>
														    <option value="BS">Bahamas</option>
														    <option value="BH">Bahrain</option>
														    <option value="BD">Bangladesh</option>
														    <option value="BB">Barbados</option>
														    <option value="BY">Belarus</option>
														    <option value="BE">Belgium</option>
														    <option value="BZ">Belize</option>
														    <option value="BJ">Benin</option>
														    <option value="BM">Bermuda</option>
														    <option value="BT">Bhutan</option>
														    <option value="BO">Bolivia</option>
														    <option value="BA">Bosnia and Herzegowina</option>
														    <option value="BW">Botswana</option>
														    <option value="BV">Bouvet Island</option>
														    <option value="BR">Brazil</option>
														    <option value="IO">British Indian Ocean Territory</option>
														    <option value="BN">Brunei Darussalam</option>
														    <option value="BG">Bulgaria</option>
														    <option value="BF">Burkina Faso</option>
														    <option value="BI">Burundi</option>
														    <option value="KH">Cambodia</option>
														    <option value="CM">Cameroon</option>
														    <option value="CA">Canada</option>
														    <option value="CV">Cape Verde</option>
														    <option value="KY">Cayman Islands</option>
														    <option value="CF">Central African Republic</option>
														    <option value="TD">Chad</option>
														    <option value="CL">Chile</option>
														    <option value="CN">China</option>
														    <option value="CX">Christmas Island</option>
														    <option value="CC">Cocos (Keeling) Islands</option>
														    <option value="CO">Colombia</option>
														    <option value="KM">Comoros</option>
														    <option value="CG">Congo</option>
														    <option value="CD">Congo, the Democratic Republic of the</option>
														    <option value="CK">Cook Islands</option>
														    <option value="CR">Costa Rica</option>
														    <option value="CI">Cote d'Ivoire</option>
														    <option value="HR">Croatia (Hrvatska)</option>
														    <option value="CU">Cuba</option>
														    <option value="CY">Cyprus</option>
														    <option value="CZ">Czech Republic</option>
														    <option value="DK">Denmark</option>
														    <option value="DJ">Djibouti</option>
														    <option value="DM">Dominica</option>
														    <option value="DO">Dominican Republic</option>
														    <option value="TP">East Timor</option>
														    <option value="EC">Ecuador</option>
														    <option value="EG">Egypt</option>
														    <option value="SV">El Salvador</option>
														    <option value="GQ">Equatorial Guinea</option>
														    <option value="ER">Eritrea</option>
														    <option value="EE">Estonia</option>
														    <option value="ET">Ethiopia</option>
														    <option value="FK">Falkland Islands (Malvinas)</option>
														    <option value="FO">Faroe Islands</option>
														    <option value="FJ">Fiji</option>
														    <option value="FI">Finland</option>
														    <option value="FR">France</option>
														    <option value="FX">France, Metropolitan</option>
														    <option value="GF">French Guiana</option>
														    <option value="PF">French Polynesia</option>
														    <option value="TF">French Southern Territories</option>
														    <option value="GA">Gabon</option>
														    <option value="GM">Gambia</option>
														    <option value="GE">Georgia</option>
														    <option value="DE">Germany</option>
														    <option value="GH">Ghana</option>
														    <option value="GI">Gibraltar</option>
														    <option value="GR">Greece</option>
														    <option value="GL">Greenland</option>
														    <option value="GD">Grenada</option>
														    <option value="GP">Guadeloupe</option>
														    <option value="GU">Guam</option>
														    <option value="GT">Guatemala</option>
														    <option value="GN">Guinea</option>
														    <option value="GW">Guinea-Bissau</option>
														    <option value="GY">Guyana</option>
														    <option value="HT">Haiti</option>
														    <option value="HM">Heard and Mc Donald Islands</option>
														    <option value="VA">Holy See (Vatican City State)</option>
														    <option value="HN">Honduras</option>
														    <option value="HK">Hong Kong</option>
														    <option value="HU">Hungary</option>
														    <option value="IS">Iceland</option>
														    <option value="IN">India</option>
														    <option value="ID">Indonesia</option>
														    <option value="IR">Iran (Islamic Republic of)</option>
														    <option value="IQ">Iraq</option>
														    <option value="IE">Ireland</option>
														    <option value="IL">Israel</option>
														    <option value="IT">Italy</option>
														    <option value="JM">Jamaica</option>
														    <option value="JP">Japan</option>
														    <option value="JO">Jordan</option>
														    <option value="KZ">Kazakhstan</option>
														    <option value="KE">Kenya</option>
														    <option value="KI">Kiribati</option>
														    <option value="KP">Korea, Democratic People's Republic of</option>
														    <option value="KR">Korea, Republic of</option>
														    <option value="KW">Kuwait</option>
														    <option value="KG">Kyrgyzstan</option>
														    <option value="LA">Lao People's Democratic Republic</option>
														    <option value="LV">Latvia</option>
														    <option value="LB">Lebanon</option>
														    <option value="LS">Lesotho</option>
														    <option value="LR">Liberia</option>
														    <option value="LY">Libyan Arab Jamahiriya</option>
														    <option value="LI">Liechtenstein</option>
														    <option value="LT">Lithuania</option>
														    <option value="LU">Luxembourg</option>
														    <option value="MO">Macau</option>
														    <option value="MK">Macedonia, The Former Yugoslav Republic of</option>
														    <option value="MG">Madagascar</option>
														    <option value="MW">Malawi</option>
														    <option value="MY">Malaysia</option>
														    <option value="MV">Maldives</option>
														    <option value="ML">Mali</option>
														    <option value="MT">Malta</option>
														    <option value="MH">Marshall Islands</option>
														    <option value="MQ">Martinique</option>
														    <option value="MR">Mauritania</option>
														    <option value="MU">Mauritius</option>
														    <option value="YT">Mayotte</option>
														    <option value="MX">Mexico</option>
														    <option value="FM">Micronesia, Federated States of</option>
														    <option value="MD">Moldova, Republic of</option>
														    <option value="MC">Monaco</option>
														    <option value="MN">Mongolia</option>
														    <option value="MS">Montserrat</option>
														    <option value="MA">Morocco</option>
														    <option value="MZ">Mozambique</option>
														    <option value="MM">Myanmar</option>
														    <option value="NA">Namibia</option>
														    <option value="NR">Nauru</option>
														    <option value="NP">Nepal</option>
														    <option value="NL">Netherlands</option>
														    <option value="AN">Netherlands Antilles</option>
														    <option value="NC">New Caledonia</option>
														    <option value="NZ">New Zealand</option>
														    <option value="NI">Nicaragua</option>
														    <option value="NE">Niger</option>
														    <option value="NG">Nigeria</option>
														    <option value="NU">Niue</option>
														    <option value="NF">Norfolk Island</option>
														    <option value="MP">Northern Mariana Islands</option>
														    <option value="NO">Norway</option>
														    <option value="OM">Oman</option>
														    <option value="PK">Pakistan</option>
														    <option value="PW">Palau</option>
														    <option value="PA">Panama</option>
														    <option value="PG">Papua New Guinea</option>
														    <option value="PY">Paraguay</option>
														    <option value="PE">Peru</option>
														    <option value="PH">Philippines</option>
														    <option value="PN">Pitcairn</option>
														    <option value="PL">Poland</option>
														    <option value="PT">Portugal</option>
														    <option value="PR">Puerto Rico</option>
														    <option value="QA">Qatar</option>
														    <option value="RE">Reunion</option>
														    <option value="RO">Romania</option>
														    <option value="RU">Russian Federation</option>
														    <option value="RW">Rwanda</option>
														    <option value="KN">Saint Kitts and Nevis</option> 
														    <option value="LC">Saint LUCIA</option>
														    <option value="VC">Saint Vincent and the Grenadines</option>
														    <option value="WS">Samoa</option>
														    <option value="SM">San Marino</option>
														    <option value="ST">Sao Tome and Principe</option> 
														    <option value="SA">Saudi Arabia</option>
														    <option value="SN">Senegal</option>
														    <option value="SC">Seychelles</option>
														    <option value="SL">Sierra Leone</option>
														    <option value="SG">Singapore</option>
														    <option value="SK">Slovakia (Slovak Republic)</option>
														    <option value="SI">Slovenia</option>
														    <option value="SB">Solomon Islands</option>
														    <option value="SO">Somalia</option>
														    <option value="ZA">South Africa</option>
														    <option value="GS">South Georgia and the South Sandwich Islands</option>
														    <option value="ES">Spain</option>
														    <option value="LK">Sri Lanka</option>
														    <option value="SH">St. Helena</option>
														    <option value="PM">St. Pierre and Miquelon</option>
														    <option value="SD">Sudan</option>
														    <option value="SR">Suriname</option>
														    <option value="SJ">Svalbard and Jan Mayen Islands</option>
														    <option value="SZ">Swaziland</option>
														    <option value="SE">Sweden</option>
														    <option value="CH">Switzerland</option>
														    <option value="SY">Syrian Arab Republic</option>
														    <option value="TW">Taiwan, Province of China</option>
														    <option value="TJ">Tajikistan</option>
														    <option value="TZ">Tanzania, United Republic of</option>
														    <option value="TH">Thailand</option>
														    <option value="TG">Togo</option>
														    <option value="TK">Tokelau</option>
														    <option value="TO">Tonga</option>
														    <option value="TT">Trinidad and Tobago</option>
														    <option value="TN">Tunisia</option>
														    <option value="TR">Turkey</option>
														    <option value="TM">Turkmenistan</option>
														    <option value="TC">Turks and Caicos Islands</option>
														    <option value="TV">Tuvalu</option>
														    <option value="UG">Uganda</option>
														    <option value="UA">Ukraine</option>
														    <option value="AE">United Arab Emirates</option>
														    <option value="GB">United Kingdom</option>
														    <option value="US">United States</option>
														    <option value="UM">United States Minor Outlying Islands</option>
														    <option value="UY">Uruguay</option>
														    <option value="UZ">Uzbekistan</option>
														    <option value="VU">Vanuatu</option>
														    <option value="VE">Venezuela</option>
														    <option value="VN">Viet Nam</option>
														    <option value="VG">Virgin Islands (British)</option>
														    <option value="VI">Virgin Islands (U.S.)</option>
														    <option value="WF">Wallis and Futuna Islands</option>
														    <option value="EH">Western Sahara</option>
														    <option value="YE">Yemen</option>
														    <option value="YU">Yugoslavia</option>
														    <option value="ZM">Zambia</option>
														    <option value="ZW">Zimbabwe</option>
														</select>
				                      
				                    </div>
		                  		</div>
		                  		<div class="form-group row">
		                  			<label for="instzip" class="col-sm-3 col-form-label">Zip Code</label>
				                    <div class="col-sm-9">
				                      <input type="text" class="form-control" id="instzip" name="instzip" value="{{$student->instzip}}">
				                    </div>
		                  		</div>
		                  		<div class="form-group row">
		                  			<label for="insttown" class="col-sm-3 col-form-label">City/Town</label>
				                    <div class="col-sm-9">
				                      <input type="text" class="form-control" id="insttown" name="insttown" value="{{$student->insttown}}">
				                    </div>
		                  		</div>

		                  	</div>
                  	</div>
                  </div>
              	</div>
                <!-- /.card-body -->

                <div class="card-header">
               		 <h3 class="card-title">Documents</h3>
              	</div>
              	<div class="card-body">
              		<div class="row">
                  	<div class="col-lg-12">
                  		<div class="form-group row">
                  			<label for="refused" class="col-sm-7 col-form-label">Have you refused a visa from Canada, United Kingdom, New Zelend or Australia </label>
		                    <div class="col-sm-5">
		                      <div class="form-check form-check-inline">
			                      <input class="form-check-input" type="radio" name="refused"  value="yes" {{ ($student->refused=="yes")? "checked" : "" }}>
			                      <label class="form-check-label">Yes</label>
			                    </div>
			                    <div class="form-check form-check-inline">
			                      <input class="form-check-input" type="radio" name="refused" checked="" value="No" {{ ($student->refused=="No")? "checked" : "" }}>
			                      <label class="form-check-label">No</label>
			                    </div>
		                    </div>
                  		</div>
                  		<hr>
                  	</div>

                  	<div class="col-lg-6">
                  		<div class="form-group row">
                  			<label for="passport" class="col-sm-3 col-form-label">Passport</label>
		                    <div class="col-sm-9">
		                      <input type="file" class="form-control" id="passport" name="passport" >
		                    </div>
		                    <img src="/image/{{ $student->passport }}" width="100px" class="img-thumbnail">
                  		</div>
                  		<div class="form-group row">
                  			<label for="cv" class="col-sm-3 col-form-label">CV</label>
		                    <div class="col-sm-9">
		                      <input type="file" class="form-control" id="cv" name="cv" >
		                    </div>
		                    <img src="/image/{{ $student->cv }}" width="100px" class="img-thumbnail">
                  		</div>
                  		<div class="form-group row">
                  			<label for="ref1" class="col-sm-3 col-form-label">Referance 1 (Accadamic/)</label>
		                    <div class="col-sm-9">
		                      <input type="file" class="form-control" id="ref1" name="ref1" >
		                    </div>
		                    <img src="/image/{{ $student->ref1 }}" width="100px" class="img-thumbnail">
                  		</div>
                  		<div class="form-group row">
                  			<label for="ref2" class="col-sm-3 col-form-label">Referance 1 (Accadamic/)</label>
		                    <div class="col-sm-9">
		                      <input type="file" class="form-control" id="ref2" name="ref2">
		                    </div>
		                     <img src="/image/{{ $student->ref2 }}" width="100px" class="img-thumbnail">
                  		</div>
	                  	
                  		<div class="form-group row">
	                  			<label for="sign" class="col-sm-3 col-form-label">SIGNATURES</label>
			                    <div class="col-sm-9">
			                      <input type="file" class="form-control" id="sign" name="sign" >
			                    </div>
			                    <img src="/image/{{ $student->sign }}" width="100px" class="img-thumbnail">
	                  	</div>

	                  	<div class="form-group row">
	                  			<label for="otherscer" class="col-sm-3 col-form-label">Others Certificate</label> 
			                    <div class="col-sm-9">
			                      <input type="file" class="form-control" id="otherscer" name="otherscer" >
			                    </div>
			                     <img src="/image/{{ $student->otherscer }}" width="100px" class="img-thumbnail">
	                  	</div>
                  	</div>


                  	<div class="col-lg-6">
                  		<div class="form-group row">
	                  			<label for="photos" class="col-sm-3 col-form-label">Photos</label>
			                    <div class="col-sm-9">
			                      <input type="file" class="form-control" id="photos" name="photos" >
			                    </div>
			                     <img src="/image/{{ $student->photos }}" width="100px" class="img-thumbnail">
	                  	</div>

                  			<div class="form-group row">
                  			<label for="ssccer" class="col-sm-3 col-form-label">SSC certificate</label>
		                    <div class="col-sm-9">
		                      <input type="file" class="form-control" id="ssccer" name="ssccer">
		                    </div>
		                    <img src="/image/{{ $student->ssccer }}" width="100px" class="img-thumbnail">
                  		</div>
                  		<div class="form-group row">
                  			<label for="ssctrans" class="col-sm-3 col-form-label">SSC transcript</label>
		                    <div class="col-sm-9">
		                      <input type="file" class="form-control" id="ssctrans" name="ssctrans" >
		                    </div>
		                     <img src="/image/{{ $student->ssctrans }}" width="100px" class="img-thumbnail">
                  		</div>
                  		<div class="form-group row">
                  			<label for="hsccer" class="col-sm-3 col-form-label">HSC Certificate</label>
		                    <div class="col-sm-9">
		                      <input type="file" class="form-control" id="hsccer" name="hsccer" >
		                    </div>
		                    <img src="/image/{{ $student->hsccer }}" width="100px" class="img-thumbnail">
                  		</div>
                  		<div class="form-group row">
                  			<label for="hsctrns" class="col-sm-3 col-form-label">HSC transcript</label>
		                    <div class="col-sm-9">
		                      <input type="file" class="form-control" id="hsctrns" name="hsctrns" >
		                    </div>
		                    <img src="/image/{{ $student->hsctrns }}" width="100px" class="img-thumbnail">
                  		</div>
                  		<div class="form-group row">
	                  			<label for="sop" class="col-sm-3 col-form-label">SOP for UCLAN</label>
			                    <div class="col-sm-9">
			                      <input type="file" class="form-control" id="sop" name="sop" >
			                    </div>
			                    <img src="/image/{{ $student->sop }}" width="100px" class="img-thumbnail">
	                  	</div>

	                  	<div class="form-group row">
	                  			<label for="otherstrns" class="col-sm-3 col-form-label">Others Transcript</label>
			                    <div class="col-sm-9">
			                      <input type="file" class="form-control" id="otherstrns" name="otherstrns" >
			                    </div>
			                     <img src="/image/{{ $student->otherstrns }}" width="100px" class="img-thumbnail">
	                  	</div>
	                  	
                  	</div>
                  </div>
              	</div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Update</button>
                  
                </div>
                <!-- /.card-footer -->
             
            </div>
            <!-- /.card -->
             </form>
          </div>
          <!--/.col (left) -->
          
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
@endsection
@push('js')
  <script>
	document.getElementById("addNewedulevel").style.display = "none";
	document.getElementById("addNewedu").onclick = function() {
  
		document.getElementById("addNewedulevel").style.display = "-webkit-flex";

	}


  </script>

<script type="text/javascript">
$(function() {
	document.getElementById("englishscore").style.display = "none";
	document.getElementById("IELTS_score").style.display = "none";

    $("#englishlevel").change(function() {
        if($("#Tofel").is(":selected")) {
            $("#englishscore").css({"display":"-webkit-flex"});
        }
        else {
            $("#englishscore").css({"display":"none"});
        }
        if($("#IELTS").is(":selected")) {
            $("#englishscore").css({"display":"-webkit-flex"});
        }
        else {
            $("#IELTS_score").css({"display":"none"});
        }
    });
});
</script>
@endpush
