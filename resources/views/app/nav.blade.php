<div class="flex-shrink-0 p-3 sticky-top" style="width: 280px;">
    <a href="/" class="p-2 mb-3 link-body-emphasis text-decoration-none bg-warning bg-opacity-50" style="border: black solid 3px">
        <span class="fs-5 fw-semibold">@lang('app.appName')</span><i class="bi-house-check ps-1 h5"></i>
    </a>
    <ul class="list-unstyled ps-0 py-4">
        <li class="mb-1">
            <a href="/" class="h6 text-decoration-none d-inline-flex align-items-center ps-3">
                Home
            </a>
        </li>
        @foreach($categorySubs as $categorySub)
            <li class="mb-1 ps-1">
                <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
                        data-bs-toggle="collapse" data-bs-target="#dashboard-collapse{{$categorySub['category']->id}}"
                        aria-expanded="false">
                    <div class="h6">
                        {{$categorySub['category']->getname()}}
                    </div>
                </button>
                <div class="collapse" id="dashboard-collapse{{$categorySub['category']->id}}" style="">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        @foreach($categorySub['subs'] as $subcategory)
                            <li>
                                <a href="{{route('index', $subcategory->id)}}" class="link-body-emphasis d-inline-flex text-decoration-none rounded h6">
                                    {{$subcategory->getName()}}
                                </a>
                                <small class="text-warning h6">
                                    ({{$subcategory->products_count}})
                                </small>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </li>
        @endforeach
        <li class="mb-1 ps-1">
            <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
                    data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                <div class="h6 text-primary">
                    @lang('app.language')
                </div>
            </button>
            <div class="collapse" id="dashboard-collapse" style="">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li>
                        <a href="{{ route('locale', 'en') }}"
                           class="link-body-emphasis d-inline-flex text-decoration-none rounded h6">Türkmen</a>
                    </li>
                    <li>
                        <a href="{{ route('locale', 'ru') }}"
                           class="link-body-emphasis d-inline-flex text-decoration-none rounded h6">Русский</a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</div>