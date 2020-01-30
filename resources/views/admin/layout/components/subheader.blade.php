<!-- begin:: Subheader -->
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main">
            <h3 class="kt-subheader__title">
                {{$title['title-subheader']}}</h3>
            <span class="kt-subheader__separator kt-hidden"></span>
            <div class="kt-subheader__breadcrumbs">
                <a href="{{$title['url-title-subheader']}}" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>

                @if (!is_null($breadcrumbs))
                    @foreach ($breadcrumbs as $item)
                        @if ($loop->last)
                            <span class="kt-subheader__breadcrumbs-separator"></span>
                            <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">{{$item['page']}}</span> 
                        @else
                            <span class="kt-subheader__breadcrumbs-separator"></span>
                            <a href="{{$item['url']}}" class="kt-subheader__breadcrumbs-link">
                                {{$item['page']}}
                            </a>
                        @endif
                    @endforeach                  
                @endif
                
                {{-- <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="" class="kt-subheader__breadcrumbs-link">
                    General </a>
                <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="" class="kt-subheader__breadcrumbs-link">
                    Empty Page </a> --}}

                {{-- <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">Active link</span>  --}}
            </div>
        </div>
    </div>
</div>
<!-- end:: Subheader -->