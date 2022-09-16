@extends('layouts.default')

@section('title', 'Boom Solutions - Wallet')

@section('content')

<div class="pcoded-wrapper">
	<div class="pcoded-content">
		<div class="pcoded-inner-content">
			<div class="main-body">
				
				<div class="page-wrapper">
					<div class="page-body m-t-50">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="cover-profile">
                                    <div class="profile-bg-img">
                                        <img class="profile-bg-img img-fluid" src="{{ asset('src/assets/images/ve.png') }}" alt="bg-img">
                                        <div class="card-block user-info">
                                            <div class="col-md-12">
                                                <div class="media-left">
                                                    <a href="#" class="profile-image">
                                                        <img class="user-img img-radius" src="{{ asset('src/assets/images/avatar-4.jpg') }}" alt="user-img">
                                                    </a>
                                                </div>
                                                <div class="media-body row">
                                                    <div class="col-lg-12">
                                                        <div class="user-title">
                                                            <h2>Luis Campos</h2>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="pull-right cover-btn">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="tab-header card">
                                    <ul class="nav nav-tabs md-tabs tab-timeline" role="tablist" id="mytab">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#personal" role="tab">Informaci&oacute;n</a>
                                            <div class="slide"></div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#cards" role="tab">Tarjetas de Cr&eacute;dito</a>
                                            <div class="slide"></div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#accounts" role="tab">Cuentas de Banco</a>
                                            <div class="slide"></div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="personal" role="tabpanel">
                                        <div class="card">
                                            <div class="card-header"></div>
                                            <div class="card-block">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="general-info">
                                                            <div class="row">
                                                                <div class="col-lg-5">
                                                                    <div class="table-responsive">
                                                                        <div class="card bg-c-yellow text-white" style="text-align: center;">
                                                                            <div class="card-block">
                                                                                <div class="row m-l-0">
                                                                                    <h6 class="m-b-10 text-white" >Plan Contratado</h6>
                                                                                </div>
                                                                                <h5 class="m-b-0">Internet Fibra Hasta 5Mb / 5 Mb</h5>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="card text-center text-white bg-c-green">
                                                                                <div class="card-block">
                                                                                    <h6 class="m-b-0">Total Descarga</h6>
                                                                                    <h4 class="m-t-10 m-b-10"><i class="feather icon-arrow-down m-r-15"></i>60.1 GB</h4>
                                                                                    <p class="m-b-0">Resumen Mensual</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="card text-center text-white bg-c-lite-green">
                                                                                <div class="card-block">
                                                                                    <h6 class="m-b-0">Total Subida</h6>
                                                                                    <h4 class="m-t-10 m-b-10"><i class="feather icon-arrow-up m-r-15"></i>7.8 GB</h4>
                                                                                    <p class="m-b-0">Resumen Mensual</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-7">
                                                                    <div class="row">
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon"><i class="icofont icofont-user"></i></span>
                                                                            <input type="text" class="form-control" placeholder="Nombre Completo" value="{{ $data['name'] }}"> 
                                                                        </div>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon"><i class="icofont icofont-user"></i></span>
                                                                            <input type="text" class="form-control" placeholder="Fecha de Nacimiento" value="{{ $data['birthday'] }}"> 
                                                                        </div>
                                                                        <div class="input-group">
                                                                            <div class="form-radio">
                                                                                <div class="group-add-on">
                                                                                    <div class="radio radiofill radio-inline">
                                                                                        <label>
                                                                                            <input type="radio" name="radio" checked=""><i class="helper"></i> Male
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="radio radiofill radio-inline">
                                                                                        <label>
                                                                                            <input type="radio" name="radio"><i class="helper"></i> Female
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon"><i class="icofont icofont-location-pin"></i></span>
                                                                            <input type="text" class="form-control" placeholder="Direcci&oacute;n Principal" value="{{ $data['address'] }}">
                                                                        </div>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon"><i class="icofont icofont-location-pin"></i></span>
                                                                            <input type="text" class="form-control" placeholder="Latitud" value="{{ $data['latitude'] }}">
                                                                            <span class="input-group-addon"><i class="icofont icofont-location-pin"></i></span>
                                                                            <input type="text" class="form-control" placeholder="Longitud" value="{{ $data['longitude'] }}">
                                                                        </div>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon"><i class="icofont icofont-mobile-phone"></i></span>
                                                                            <input type="number" class="form-control" placeholder="Tel&eacute;fono Fijo" value="{{ $data['phone_principal'] }}">
                                                                        </div>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon"><i class="icofont icofont-mobile-phone"></i></span>
                                                                            <input type="number" class="form-control" placeholder="Tel&eacute;fono Alterno" value="{{ $data['phone_secondary'] }}">
                                                                        </div>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon"><i class="icofont icofont-email"></i></span>
                                                                            <input type="email" class="form-control" placeholder="Email Principal" value="{{ $data['email_principal'] }}">
                                                                        </div>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon"><i class="icofont icofont-email"></i></span>
                                                                            <input type="text" class="form-control" placeholder="Email Secundario" value="{{ $data['email_secondary'] }}">
                                                                        </div>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon"><i class="icofont icofont-social-instagram"></i></span>
                                                                            <input type="text" class="form-control" placeholder="Instagram" value="{{ $data['instagram'] }}">
                                                                            <span class="input-group-addon"><i class="icofont icofont-social-facebook"></i></span>
                                                                            <input type="text" class="form-control" placeholder="Facebook" value="{{ $data['facebook'] }}">
                                                                        </div>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon"><i class="icofont icofont-social-twitter"></i></span>
                                                                            <input type="text" class="form-control" placeholder="Twitter" value="{{ $data['twitter'] }}">
                                                                            <span class="input-group-addon"><i class="icofont icofont-social-youtube"></i></span>
                                                                            <input type="text" class="form-control" placeholder="Youtube" value="{{ $data['youtube'] }}">
                                                                        </div>
                                                                        <h6>Desea Recibir publicidad de nuestras redes sociales ?</h6>
                                                                        <div class="input-group">
                                                                            <div class="form-radio">
                                                                                <div class="group-add-on">
                                                                                    <div class="radio radiofill radio-inline">
                                                                                        <label>
                                                                                            <input type="radio" name="radio1" <?php if ($data['advertising'] == "S") echo "checked"; ?> ><i class="helper"></i> Si
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="radio radiofill radio-inline">
                                                                                        <label>
                                                                                            <input type="radio" name="radio1" <?php if ($data['advertising'] == "N") echo "checked"; ?>><i class="helper"></i> No
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="text-center">
                                                                        <a href="#!" class="btn btn-primary btn-block waves-effect waves-light m-r-20">Actualizar</a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="cards" role="tabpanel">
                                        <div class="card">
                                            <div class="card-header"></div>
                                            <div class="card-block">
                                                <div class="row">
                                                    @foreach($tdc as $tc)
                                                        @if($tc['status'] == 'ACTIVO')
                                                            <div class="col-xs-12 col-md-12 col-lg-4">
                                                                <div class="card payment-card" style="background: honeydew; border-radius: 10px;">
                                                                    <div>
                                                                        @if ($tc['entity'] == 'VISA') <img src="/src/assets/images/e-payment/card/visa.jpg" id="visa" alt="VISA"> @endif
                                                                        @if ($tc['entity'] == 'MASTERCARD') <img src="/src/assets/images/e-payment/card/mastercard.jpg" id="mastercard" alt="MASTERCARD"> @endif
                                                                        @if ($tc['entity'] == 'AMERICAN EXPRESS') <img src="/src/assets/images/e-payment/card/amex.jpg" id="amex" alt="AMERICAN EXPRESS"> @endif
                                                                        @if ($tc['entity'] == 'DINERS') <img src="/src/assets/images/e-payment/card/visa.jpg" id="amex" alt="Diners"> @endif
                                                                        <h6 class="m-t-10" style="font-size: 15px;">**** **** ** {{ $tc['last'] }} - Tipo: <b>INTERNACIONAL</b></h6>
                                                                        <div class="row m-t-10" style="font-size: 10px;">
                                                                            <div class="col-sm-4">
                                                                                <strong class="m-r-5">Expiraci&oacute;n:</strong> <br> {{ $tc['month'] }}/{{ $tc['year'] }}
                                                                            </div>
                                                                            <div class="col-sm-8 text-right">
                                                                                <strong class="m-r-5">Titular:</strong> <br> {{ $tc['name'] }}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @else
                                                        <div class="col-xs-12 col-md-12 col-lg-4">
                                                            <div class="card payment-card" style="border-radius: 10px;">
                                                                <div>
                                                                    @if ($tc['entity'] == 'VISA') <img src="/src/assets/images/e-payment/card/visa.jpg" id="visa" alt="VISA"> @endif
                                                                    @if ($tc['entity'] == 'MASTERCARD') <img src="/src/assets/images/e-payment/card/mastercard.jpg" id="mastercard" alt="MASTERCARD"> @endif
                                                                    @if ($tc['entity'] == 'AMERICAN EXPRESS') <img src="/src/assets/images/e-payment/card/amex.jpg" id="amex" alt="AMERICAN EXPRESS"> @endif
                                                                    @if ($tc['entity'] == 'DINERS') <img src="/src/assets/images/e-payment/card/visa.jpg" id="amex" alt="Diners"> @endif
    
                                                                    <h5>**** **** ** {{ $tdc['last'] }}</h5>
                                                                    <div class="row m-t-10" style="font-size: 10px;">
                                                                    <div class="col-sm-4">
                                                                        <strong class="m-r-5">Expiraci&oacute;n:</strong> <br> {{ $tdc['month'] }}/{{ $tdc['year'] }}
                                                                    </div>
                                                                    <div class="col-sm-8 text-right">
                                                                        <strong class="m-r-5">Titular:</strong> <br> {{ $tdc['name'] }}
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endif
                                                    @endforeach
                                                </div>
                                                    
                                                    
                                                    <div class="col-xs-12 col-md-12 col-sm-12">
                                                        <div class="row">
                                                            <div class="col-xs-12 col-sm-12 col-md-6">
                                                            <div class="card">
                                                                <div class="card-header">
                                                                    <h5>Registro de Tarjeta de Cr&eacute;dito</h5>
                                                                </div>
                                                                <div class="card-block" style="height: 400px;">
                                                                    <form>
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control" id="t_name" name="t_name" placeholder="Nombre del Cliente">
                                                                                </div>
                                                                                <div class="form-group" id="card-number-field">
                                                                                    <input type="number" id="t_card" name="t_card" class="form-control" placeholder="C&oacute;digo de tarjeta de cr&eacute;dito">
                                                                                </div>
                                                                                <div class="form-group CVV">
                                                                                    <input type="number" class="form-control" id="t_cvv" name="t_cvv" placeholder="CVV">
                                                                                </div>
                                                                                <div class="form-group" id="expiration-date">
                                                                                    <label>Fecha de Expiraci&oacute;n</label>
                                                                                    <div class="row">
                                                                                        <div class="col-sm-4">
                                                                                            <select class="form-control m-b-10" id="t_month" name="t_month">
                                                                                                <option value="01">Enero</option>
                                                                                                <option value="02">Febrero</option>
                                                                                                <option value="03">Marzo</option>
                                                                                                <option value="04">Abril</option>
                                                                                                <option value="05">Mayo</option>
                                                                                                <option value="06">Junio</option>
                                                                                                <option value="07">Julio</option>
                                                                                                <option value="08">Agosto</option>
                                                                                                <option value="09">Septiembre</option>
                                                                                                <option value="10">Octubre</option>
                                                                                                <option value="11">Noviembre</option>
                                                                                                <option value="12">Diciembre</option>
                                                                                            </select>
                                                                                        </div>
                                                                                        <div class="col-sm-4">
                                                                                            <select class="form-control m-b-10" id="t_year" name="t_year">
                                                                                                <option value="22"> 2022</option>
                                                                                                <option value="23"> 2023</option>
                                                                                                <option value="24"> 2024</option>
                                                                                                <option value="25"> 2025</option>
                                                                                                <option value="26"> 2026</option>
                                                                                                <option value="27"> 2027</option>
                                                                                                <option value="28"> 2028</option>
                                                                                                <option value="29"> 2029</option>
                                                                                                <option value="30"> 2030</option>
                                                                                                <option value="31"> 2031</option>
                                                                                                <option value="32"> 2032</option>
                                                                                            </select>
                                                                                        </div>
                                                                                        <div class="col-sm-4">
                                                                                            <select class="form-control m-b-10" id="t_entity" name="t_entity">
                                                                                                @foreach($eTDC as $eT)
                                                                                                    <option value="$eT->id"> {{ $eT->name }}</option>
                                                                                                @endforeach
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-12 text-center">
                                                                                    <a href="#!" class="btn btn-primary waves-effect waves-light m-t-20">Registrar</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-6">
                                                            <div class="card">
                                                                <div class="card-header">
                                                                    <h5>Tarjetas de Credito Registradas</h5>
                                                                </div>
                                                                <div class="card-block" style="height: 400px;">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-hover table-borderless" style="margin-bottom: 0px;">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Status</th>
                                                                                    <th>Tipo</th>
                                                                                    <th>Codigo</th>
                                                                                    <th>Expiraci&oacute;n</th>
                                                                                    <th>Acci&oacute;n</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                @foreach($tdc as $tc)
                                                                                    <tr>
                                                                                        @if($tc['status'] == 'ACTIVO')
                                                                                            <td><label class="label label-success">ACTIVO</label></td>   
                                                                                        @else
                                                                                            <td><label class="label label-danger">INACTIVA</label></td>
                                                                                        @endif
                                                                                        <td>{{ $tc['type'] }}</td>
                                                                                        <td>XXXX-{{ $tc['last'] }}</td>
                                                                                        <td>{{ $tc['month'] }}/{{ $tc['year'] }}</td>
                                                                                        <td><a href="#" class="btn btn-info btn-outline-info btn-mini">Ver</a></td>
                                                                                    </tr>
                                                                                @endforeach

                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="accounts" role="tabpanel">
                                        <div class="card">
                                            <div class="card-header"></div>
                                            <div class="card-block">
                                                <div class="row">

                                                    @foreach($ab as $aab)
                                                    <div class="col-xs-12 col-md-12 col-lg-4">
                                                        @if($aab['status'] == 'ACTIVO')
                                                            <div class="card payment-card" style="background: honeydew; border-radius: 10px;">
                                                        @else
                                                            <div class="card payment-card" border-radius: 10px;">
                                                        @endif
                                                            <div>
                                                                <div class="row">
                                                                    <div class="col-sm-4">
                                                                        <i class="icofont icofont-bank-alt" style="font-size: 75px;"></i>
                                                                    </div>
                                                                    <div class="col-sm-8 text-right">
                                                                        <strong class="m-r-5">Banco:</strong> <br> @foreach($bank as $bk)
                                                                            @if ($bk->name == $aab['bank'])
                                                                                {{ $bk->name }}
                                                                            @endif

                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <h5>**** **** **** {{ $aab['last'] }} </h5>
                                                                <div class="row m-t-10">
                                                                    <div class="col-sm-4">
                                                                        <strong class="m-r-5">Tipo:</strong> <br> {{ $aab['type'] }}
                                                                    </div>
                                                                    <div class="col-sm-8 text-right">
                                                                        <strong class="m-r-5">Titular:</strong> <br> {{ $aab['name'] }}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach

                                                    {{-- <div class="col-xs-12 col-md-12 col-lg-4">
                                                        <div class="card payment-card" style="background: honeydew; border-radius: 10px;">
                                                            <div>
                                                                <div class="row">
                                                                    <div class="col-sm-4">
                                                                        <i class="icofont icofont-bank-alt" style="font-size: 75px;"></i>
                                                                    </div>
                                                                    <div class="col-sm-8 text-right">
                                                                        <strong class="m-r-5">Banco:</strong> <br> Banco de Venezuela
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <h5>**** **** **** 7890</h5>
                                                                <div class="row m-t-10">
                                                                    <div class="col-sm-4">
                                                                        <strong class="m-r-5">Tipo:</strong> <br> Corriente
                                                                    </div>
                                                                    <div class="col-sm-8 text-right">
                                                                        <strong class="m-r-5">Titular:</strong> <br> Luis Alberto Campos Carrasco
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-md-12 col-lg-4">
                                                        <div class="card payment-card" style="border-radius: 10px;">
                                                            <div>
                                                                <div class="row">
                                                                    <div class="col-sm-4">
                                                                        <i class="icofont icofont-bank-alt" style="font-size: 75px;"></i>
                                                                    </div>
                                                                    <div class="col-sm-8 text-right">
                                                                        <strong class="m-r-5">Banco:</strong> <br> Banco de Provincial
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <h5>**** **** **** 4560</h5>
                                                                <div class="row m-t-10">
                                                                    <div class="col-sm-4">
                                                                        <strong class="m-r-5">Tipo:</strong> <br> Corriente
                                                                    </div>
                                                                    <div class="col-sm-8 text-right">
                                                                        <strong class="m-r-5">Titular:</strong> <br> Luis Alberto Campos Carrasco
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-md-12 col-lg-4">
                                                        <div class="card payment-card" style="border-radius: 10px;">
                                                            <div>
                                                                <div class="row">
                                                                    <div class="col-sm-4">
                                                                        <i class="icofont icofont-bank-alt" style="font-size: 75px;"></i>
                                                                    </div>
                                                                    <div class="col-sm-8 text-right">
                                                                        <strong class="m-r-5">Banco:</strong> <br> Banco de Banesco
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <h5>**** **** **** 1234</h5>
                                                                <div class="row m-t-10">
                                                                    <div class="col-sm-4">
                                                                        <strong class="m-r-5">Tipo:</strong> <br> Ahorro
                                                                    </div>
                                                                    <div class="col-sm-8 text-right">
                                                                        <strong class="m-r-5">Titular:</strong> <br> Luis Alberto Campos Carrasco
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> --}}

                                                </div>

                                                <div class="col-xs-12 col-md-12 col-sm-12">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-4">
                                                            <div class="card">
                                                                <div class="card-header">
                                                                    <h5>Registro de Cuenta de Banco</h5>
                                                                </div>
                                                                <div class="card-block" style="height: 300px;">
                                                                    <form>
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control" placeholder="Titular de la cuenta">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <input type="number" class="form-control" id="cvv" placeholder="C&oacute;digo de Cuenta">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <select class="form-control m-b-10">
                                                                                        <option value="01">Corriente</option>
                                                                                        <option value="02">Ahorro</option>
                                                                                        <option value="03">Otro</option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <select name="pm_r_banks" id="pm_r_banks" class="form-control">
                                                                                        <option value="0174">Banplus</option>
                                                                                        <option value="0001">Banco Central de Venezuela</option>
                                                                                        <option value="0102">Banco de Venezuela</option>
                                                                                        <option value="0104">Venezolano de Crédito</option>
                                                                                        <option value="0105">Banco Mercantil</option>
                                                                                        <option value="0108">Banco Provincial</option>
                                                                                        <option value="0114">Bancaribe</option>
                                                                                        <option value="0115">Banco Exterior</option>
                                                                                        <option value="0116">Banco Occidental de Descuento</option>
                                                                                        <option value="0128">Banco Caroní</option>
                                                                                        <option value="0134">Banesco</option>
                                                                                        <option value="0137">Banco Sofitasa</option>
                                                                                        <option value="0138">Banco Plaza</option>
                                                                                        <option value="0146">Banco de la Gente Emprendedora</option>
                                                                                        <option value="0151">BFC Banco Fondo Com&uacute;n</option>
                                                                                        <option value="0156">100% Banco</option>
                                                                                        <option value="0157">DelSur Banco Universal</option>
                                                                                        <option value="0163">Banco del Tesoro</option>
                                                                                        <option value="0166">Banco Agrícola de Venezuela</option>
                                                                                        <option value="0168">Bancrecer</option>
                                                                                        <option value="0169">Mi Banco</option>
                                                                                        <option value="0171">Banco Activo</option>
                                                                                        <option value="0172">Bancamica</option>
                                                                                        <option value="0173">Banco Internacional de Desarrollo,</option>
                                                                                        <option value="0175">Banco Bicentenario del Pueblo de la Clase Obrera, Mujer y Comunas</option>
                                                                                        <option value="0176">Novo Banco</option>
                                                                                        <option value="0177">Banco de la Fuerza Armada Nacional Bolivariana</option>
                                                                                        <option value="0190">Citibank</option>
                                                                                        <option value="0191">Banco Nacional de Crédito</option>
                                                                                        <option value="0601">Instituto Municipal de Cr&eacute;dito Popular</option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-sm-12 text-center">
                                                                                    <a href="#!" class="btn btn-primary waves-effect waves-light m-t-20">Registrar</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-8">
                                                            <div class="card">
                                                                <div class="card-header">
                                                                    <h5>Cuentas de Banco Registradas</h5>
                                                                </div>
                                                                <div class="card-block" style="height: 300px;">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-hover table-borderless" style="margin-bottom: 0px;">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Status</th>
                                                                                    <th>Banco</th>
                                                                                    <th>Codigo</th>
                                                                                    <th>Tipo</th>
                                                                                    <th>Acci&oacute;n</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                @foreach($ab as $aab)
                                                                                    <tr>
                                                                                        @if($aab['status'] == 'ACTIVO')
                                                                                            <td><label class="label label-success">ACTIVO</label></td>   
                                                                                        @else
                                                                                            <td><label class="label label-danger">INACTIVA</label></td>
                                                                                        @endif
                                                                                        @foreach($bank as $bk)
                                                                                            @if($bk->name == $aab['bank'] )
                                                                                                <td>{{ $bk->name }}</td>
                                                                                            @endif
                                                                                        @endforeach
                                                                                        <td>{{ $aab['type'] }}</td>
                                                                                        <td>XXXX-{{ $aab['last'] }}</td>
                                                                                        <td><a href="#" class="btn btn-info btn-outline-info btn-mini">Ver</a></td>
                                                                                    </tr>
                                                                                @endforeach
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>

@endsection

@section('js')
<script type="text/javascript" src="{{ asset('src/assets/pages/user-profile.js') }}"></script>    
@endsection