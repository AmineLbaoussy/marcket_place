     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
        <h4 class="page-title">{{$page_title}}</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Office</li>
            
            @if($page_title != '')
            <li class="breadcrumb-item">{{$page_management}}</li>
            <li class="breadcrumb-item active" aria-current="page">{{$page_title}}</li>
            @else
            <li class="breadcrumb-item active" aria-current="page">{{$page_management}}</li>
            @endif
         </ol>
     </div>

     </div>