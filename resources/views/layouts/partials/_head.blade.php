<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{config('app.name')}}</title>

{{-- csrf token --}}
 <meta name="csrf-token" content="{{csrf_token()}}">

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome Icons -->
<link rel="stylesheet" href="{{asset('admin/plugins/fontawesome-free/css/all.min.css')}}">
<!-- Theme style -->
<link rel="stylesheet" href="{{asset('admin/dist/css/adminlte.min.css')}}">
<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">

{{-- for datatables --}}
  <link rel="stylesheet" href="{{asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
 

   {{-- jquery Select2 option  start --}}
   <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet"/>
   <style>
    .select2-container--default .select2-selection--single{
      background-color:#fff;
      border: 1px solid #aaa;
      border-radius:4px;
      height:38px!important;
    }
  </style>

  {{-- <link rel="stylesheet" type="text/css" href="{{ asset('DashboardStyle/todayDashboardStyle.css') }}" > --}}
  {{-- sweet alert --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
  
@stack('css')