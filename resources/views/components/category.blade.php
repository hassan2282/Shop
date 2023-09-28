@foreach($categories as $category)
    <div class="shadow-bottom p-4 shadow-showcase text-center card card-block card-stretch card-height">
        <div class="card-header d-flex justify-content-between">
            <div class="header-title">
                <h4 class="card-title">{{$category->name}}</h4>
            </div>
            <div class="header-action">
                <i type="button" data-toggle="collapse" data-target="#tabletree-{{$category->id}}" aria-expanded="false" aria-controls="alert-1" class="collapsed">
                    <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                    </svg>
                </i>
            </div>
        </div>
        <div class="card-body">
            <div class="collapse" id="tabletree-{{$category->id}}" style="">
                <div class="card">


                    <x-category :categories="$category->children"/>


                </div>
            </div>
        </div>
    </div>
@endforeach
