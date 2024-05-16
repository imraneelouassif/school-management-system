@props([
    'name','total','icon'
])
{{-- <div class="col-xl-3 col-lg-6 col-md-6 mb-30"> --}}
    <div class="card card-statistics h-100">
        <div class="card-body">
            <div class="clearfix">
                <div class="float-left">
                    <span class="text-danger">
                        <i class="{{$icon}}" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="float-right text-right">
                    <p class="card-text text-dark">{{$name}}</p>
                    <h4>{{$total}}</h4>
                </div>
            </div>
            <p class="text-muted pt-3 mb-0 mt-2 border-top">
                <i class="fa fa-exclamation-circle mr-1" aria-hidden="true"></i> 81% lower
                growth
            </p>
        </div>
    </div>
{{-- </div> --}}