<div class="ms-content-wrapper">
    <div class="row">

        <x-backend.page.breadcrumb title="Add Category" otherlink="{{ route('admin.category.index') }}" linkname="Category" />


        <div class="col-xl-12 col-md-12">
            <ul class="nav nav-tabs d-flex tabs-round has-gap nav-justified mb-4" role="tablist">
                <li role="presentation"><a href="#tab16" aria-controls="tab16" class="active" role="tab" data-toggle="tab">Overview</a></li>
                <li role="presentation"><a href="#tab17" aria-controls="tab17" role="tab" data-toggle="tab">Profile </a></li>
                <li role="presentation"><a href="#tab18" aria-controls="tab18" role="tab" data-toggle="tab">Settings </a></li>
                <li role="presentation"><a href="#tab18" aria-controls="tab18" role="tab" data-toggle="tab">Settings </a></li>
            </ul>

            <div class="ms-panel ms-panel-fh">


                <div class="ms-panel-header">
                    <h6>{{ $product->name }}</h6>

                </div>
                <div class="ms-panel-body product">
                    <div class="d-flex justify-content-center align-items-center flex-column">
                        <h3 class="text-center">{!! $product->heading !!}</h3>

                        <h5 class="text-center mt-4">{!! $product->tag_line_1 !!} </h5>
                        <div class="video mt-5">
                            <iframe src="{{ $product->video }}" frameborder="0" width="1040" height="585"></iframe>
                        </div>
                        <h5 class="text-center mt-4">{!! $product->tag_line_2 !!} </h5>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>