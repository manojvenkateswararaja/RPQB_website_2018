
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<link rel="stylesheet" href="https://opensource.keycdn.com/fontawesome/4.7.0/font-awesome.min.css" />

<style>
.nav-tabs { border-bottom: 2px solid #DDD; }
    .nav-tabs > li.active > a, .nav-tabs > li.active > a:focus, .nav-tabs > li.active > a:hover { border-width: 0; }
    .nav-tabs > li > a { border: none; color: #ffffff;background: #5a4080; }
        .nav-tabs > li.active > a, .nav-tabs > li > a:hover { border: none;  color: #5a4080; background: #fff; }
        .nav-tabs > li > a::after { content: ""; background: #5a4080; height: 2px; position: absolute; width: 100%; left: 0px; bottom: -1px; transition: all 250ms ease 0s; transform: scale(0); }
    .nav-tabs > li.active > a::after, .nav-tabs > li:hover > a::after { transform: scale(1); }
.tab-nav > li > a::after { background: #5a4080 none repeat scroll 0% 0%; color: #fff; }
.tab-pane { padding: 15px 0; }
.tab-content{padding:20px}
.nav-tabs > li  {width:20%; text-align:center;}
.card {background: #FFF none repeat scroll 0% 0%; box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.3); margin-bottom: 30px; }
body{ background: #EDECEC; padding:50px}

@media all and (max-width:724px){
.nav-tabs > li > a > span {display:none;}	
.nav-tabs > li > a {padding: 5px 5px;}
}

</style>
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-md-12"> 
      <!-- Nav tabs -->
      <div class="card" id="nav-links">
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-home"></i>  <span>Home</span></a></li>
          <li role="presentation"><a href="#!profile" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-user"></i>  <span>Profile</span></a></li>
          <li role="presentation"><a href="#!messages" aria-controls="messages" role="tab" data-toggle="tab"><i class="fa fa-envelope-o"></i>  <span>Messages</span></a></li>
          <li role="presentation"><a href="#!settings" aria-controls="settings" role="tab" data-toggle="tab"><i class="fa fa-cog"></i>  <span>Settings</span></a></li>
          <li role="presentation"><a href="#!extra" aria-controls="extra" role="tab" data-toggle="tab"><i class="fa fa-plus-square-o"></i>  <span>extra</span></a></li>
        </ul>
        </div>
        <!-- Tab panes -->
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane active" id="home">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
          <div role="tabpanel" class="tab-pane" id=" profile">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</div>
          <div role="tabpanel" class="tab-pane" id="colors messages">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It hr including versions of Lorem Ipsum.</div>
          <div role="tabpanel" class="tab-pane" id="colors settings">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passage..</div>
          <div role="tabpanel" class="tab-pane" id="colors extra">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passage..</div>
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript">

$(function() {
  $('#nav-links').change(function(){
    $('.colors').hide();
    
    $('#' + $(this).val()).show();
  });
});

</script>​

</body>
</html>